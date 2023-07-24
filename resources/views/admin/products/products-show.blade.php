@extends('admin.layout')
@section('content')
    <script>
        $(function() {
            $('#myTable').DataTable();
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
                <h1>Products Page</h1>
            </div>

        </div>

        <div class="order">
            <div class="mb-3">
                <div class="text-right">
                    <a href="{{ route('products-add') }}" class="btn btn-primary text-right"><i class="fa fa-plus"
                            aria-hidden="true"></i> Add New</a>
                </div>
                <br>

                <table id='myTable' class='display' style='width:100%'>
                    <thead>
                        <!-- <th>page</th> -->
                        <th>Product Name</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Stock</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $product->prod_name }}</td>
                                <td>{{ $product->cat_name }}</td>
                                <td>{{ $product->prod_price }}</td>
                                <td><img src="uploads/{{ $product->prod_image }}" style="height: 50px;width: 50px;">
                                </td>
                                <td>{{ $product->stock }}</td>
                                <td>
                                    <a href="{{ route('products-edit') }}/{{ $product->prod_id }}"
                                        class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                    <a class="btn btn-danger btn-xs deletepost" id="{{ $product->prod_id }}"><i
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
                if (confirm('Are you sure you want to remove this Product and all of its contents?')) {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: '{{ route('products-delete') }}',
                        data: {
                            "prod_id": id,
                        },
                        type: "post",
                        success: function(data) {
                            if (data == true) {
                                alert("Product deleted successfully..!!");
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
