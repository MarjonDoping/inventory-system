@extends('admin.layout')
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
                <h1>Categories Page</h1>
            </div>

        </div>

        <div class="order">
            <div class="mb-3">
                <div class="text-right">
                    <a href="{{ route('category-add') }}" class="btn btn-primary text-right"><i class="fa fa-plus"
                            aria-hidden="true"></i> Add New</a>
                </div>
                <br>

                <table id='myTable' class='display' style='width:100%'>
                    <thead>
                        <!-- <th>page</th> -->
                        <th>Category Name</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->cat_name }}</td>

                                <td>
                                    <a href="{{ route('category-edit') }}/{{ $category->cat_id }}"
                                        class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                    <a class="btn btn-danger btn-xs deletepost" id="{{ $category->cat_id }}"><i
                                            class="fa fa-trash"></i></a>
                                </td>
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
                        url: '{{ route('category-delete') }}',
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

