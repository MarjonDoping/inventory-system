@extends('admin.layout')
@section('title', 'Inventory Management System')

@section('content')


    <main>
        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if (session()->has('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        <div class="head-title">
            <div class="left">
                <h1>Sales Page</h1>
            </div>
            <div class="right">
                <button class="btn btn-primary" id="yearBtnOpen">Year</button>
                <button class="btn btn-primary" id="monthBtnOpen">Month</button>
                <button class="btn btn-primary" id="dayBtnOpen">Day</button>
            </div>
        </div>

        <div class="order">
            <div class="mb-3">
                <br>

                <table id='myTable' class='display' style='width:100%'>
                    <thead>
                        <!-- <th>page</th> -->
                        <th>ID</th>
                        <th>Customer Name</th>
                        <th>Total Price</th>
                        <th>Date</th>
                    </thead>
                    <tbody id="tbodyid">
                    </tbody>
                </table>

            </div>
    </main>


    <!--Year Modal -->
    <div class="modal fade" id="yearModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        style="margin-left: 120px">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Please Select a Year</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="">Year</label>
                    <input type="text" class="form-control" name='year' maxlength="4" minlength="4" id="year">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="yearBtnSelect">Select</button>
                </div>
            </div>
        </div>
    </div>

    <!--Month Modal -->
    <div class="modal fade" id="monthModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        style="margin-left: 120px">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Please Select a Year/Month</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="">Month</label>
                    <input type="month" class="form-control" name="month" id="month">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="monthBtnSelect">Select</button>
                </div>
            </div>
        </div>
    </div>

    <!--Day Modal -->
    <div class="modal fade" id="dayModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true"
        style="margin-left: 120px">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Please Select a Year/Month/Day</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <label for="">Day</label>
                    <input type="date" class="form-control" name='day' id='day'>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary" id="dayBtnSelect">Select</button>
                </div>
            </div>
        </div>
    </div>


    <script>
        const table = $('#myTable').DataTable();
        const yearModal = $('#yearModal');
        const monthModal = $('#monthModal');
        const dayModal = $('#dayModal');



        $(document).ready(function() {

            $('#yearBtnOpen').on('click', function(ev) {
                yearModal.modal('show');
            });

            $('#monthBtnOpen').on('click', function(ev) {
                monthModal.modal('show');
            });

            $('#dayBtnOpen').on('click', function(ev) {
                dayModal.modal('show');
            });

            $('#yearBtnSelect').on('click', function(ev) {
                ev.preventDefault();
                let year = $('#year').val();

                if (year != '')
                    setTable(year);

                $('#year').val('');


                yearModal.modal('hide');
            });

            $('#monthBtnSelect').on('click', function(ev) {
                ev.preventDefault();
                let m = $('#month').val();
                var dt = new Date(m);
                
                var year = dt.getFullYear();
                
                var month = dt.getMonth()+1;
                

                if (m != '')
                    setTable(year, month);
                monthModal.modal('hide');
            });

            $('#dayBtnSelect').on('click', function(ev) {
                ev.preventDefault();
                let d = $('#day').val();
                
                var dt = new Date(d);
                
                var year = dt.getFullYear();
                
                var month = dt.getMonth()+1;
                
                var day = dt.getDate();

                
                if (d != '')
                setTable(year, month, day);

                
                dayModal.modal('hide');

            });

            setTable();




        });

        function setTable(year = "0", month = "0", day = "0") {
            table.clear();
            table.draw();

            var url = "{{ route('sales-get', ['year' => ':year', 'month' => ':month', 'day' => ':day']) }}";
            url = url.replace(':year', year);
            url = url.replace(':month', month);
            url = url.replace(':day', day);

            $.ajax({
                type: "GET",
                url: url,
                data: "data",
                success: function(data) {

                    if (data.transactions.length === 0 || typeof data.transactions ===
                        "undefined" || typeof data.transactions === null) {
                        table.clear();
                    } else {

                        $.map(data.transactions, function(record) {
                            if (record.customer_name === null) {
                                record.customer_name = "N/A"
                            }
                            const tr = $(
                                "<tr>" +
                                "<td>" + record.transaction_id + "</td>" +
                                "<td>" + record.customer_name + "</td>" +
                                "<td>" + record.totalprice + "</td>" +
                                "<td>" + record.date + "</td>" +
                                "</tr>"
                            );
                            table.row.add(tr[0]).draw();
                        });
                    }
                }
            });
        }
    </script>

@endsection

@push('footer-script')
@endpush
