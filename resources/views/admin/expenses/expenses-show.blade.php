@extends('admin.layout')
@section('title', 'Sales Report')

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
                <h1>Expenses Page</h1>
            </div>

        </div>

        <div class="order">
            <div class="mb-3">
                <div class="text-right">
                    <a href="#" class="btn btn-primary text-right"><i class="fa fa-plus"
                            aria-hidden="true"></i> Add New</a>
                </div>
                <br>

                <table id='myTable' class='display' style='width:100%'>
                    <thead>
                        <!-- <th>page</th> -->
                        <th>ID</th>
                        <th>Details</th>
                        <th>Amount</th>
                        <th>Date</th>
                    </thead>
                    <tbody>
                        @foreach ($expenses as $expense)
                            <tr>
                                <td>{{ $expense->expenses_id }}</td>
                                <td>{{ $expense->details }}</td>
                                <td>₱ {{ sprintf('%.2f', $expense->amount) }}</td>
                                <td>{{ $expense->created_at }}</td>

                                {{-- <td>
                                    <a href="{{ route('ingredients-edit') }}/{{ $ingredient->ingredient_id }}"
                                        class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                    <a class="btn btn-danger btn-xs deletepost" id="{{ $ingredient->ingredient_id }}"><i
                                            class="fa fa-trash"></i></a>
                                </td> --}}
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

