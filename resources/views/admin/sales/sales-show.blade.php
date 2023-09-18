@extends('admin.layout')
@section('title', 'Inventory Management System')

@section('content')
    <script>
        $(function() {
            $('#myTable').DataTable();
            $(".alert").alert();
        });
    </script>

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
                <select class="form-select" name="op" id="op">
                    <option value="0">Daily</option>
                    <option value="1">Weekly</option>
                    <option value="2">Monthly</option>
                    <option value="3">Annually</option>
                </select>
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
                    <tbody>
                        @foreach ($transactions as $transaction)
                            <tr>
                                <td>{{ $transaction->transaction_id }}</td>
                                <td>{{ $transaction->customer_name }}</td>
                                <td>{{ $transaction->totalprice }}</td>
                                <td>{{ $transaction->date }}</td>

                               
                            </tr>
                        @endforeach

                    </tbody>
                </table>

            </div>
    </main>

    <script>
        $(document).ready(function() {
            $(document).on("click", ".deletepost", function() {
                var id = $(this).attr('id');
                if (confirm('Are you sure you want to remove this Ingredient and all of its contents?')) {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: "{{ route('ingredients-delete') }}",
                        data: {
                            "ingredient_id": id,
                        },
                        type: "post",
                        success: function(data) {
                            if (data == true) {
                                alert("Ingredient deleted successfully..!!");
                            } else {
                                alert(data);
                            }
                            window.location.reload();
                        }
                    });
                }
            });
    
        });
    </script>
    
@endsection

@push('footer-script')
@endpush

