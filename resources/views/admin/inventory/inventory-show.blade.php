@extends('admin.layout')
@section('title', 'Inventory Management System')

@section('content')
    <script>
        $(function() {
            $('#myTable').DataTable({
                order: false
            });
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
                <h1>Inventory Log</h1>
            </div>

        </div>

        <div class="order">
            <div class="mb-3">

                <br>

                <table id='myTable' class='display' style='width:100%'>
                    <thead>
                        <!-- <th>page</th> -->
                        <th>ID</th>
                        <th>Details</th>
                        <th class="text-center">In</th>
                        <th class="text-center">Out</th>
                        <th>Date</th>
                    </thead>
                    <tbody>
                        @foreach ($inventory_log as $log)
                            <tr>
                                <td>{{ $log->inventorylog_id }}</td>
                                <td>{{ $log->details }}</td>
                                <td class="text-center">{{ $log->inventory_in }}</td>
                                <td class="text-center">{{ $log->inventory_out }}</td>
                                <td>{{ date_format($log->created_at,"m-d-Y h:i a") }}</td>
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
                if (confirm('Are you sure you want to remove this Category and all of its contents?')) {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: "{{ route('ingredients-delete') }}",
                        data: {
                            "cat_id": id,
                        },
                        type: "post",
                        success: function(data) {
                            if (data == true) {
                                alert("Category deleted successfully..!!");
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

