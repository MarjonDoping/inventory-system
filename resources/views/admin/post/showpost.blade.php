@extends('admin.layout')
@section('content')
    <script>
        $(function() {
            $('#myTable').DataTable();
            // $(".alert").alert();
        });
    </script>
    
    <main>
        

        <div class="head-title">
            <div class="left">
                <h1>Post Page</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">About Post</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">post</a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="order">
            @if (session()->has('message'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('message') }}.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            
            <div class="mb-3">
                <div class="text-right">
                    <a href="{{ route('post-add') }}" class="btn btn-primary text-right"><i class="fa fa-plus"
                            aria-hidden="true"></i> Add New</a>
                </div>
                <br>

                <table id='myTable' class='display' style='width:100%'>
                    <thead>
                        <!-- <th>page</th> -->
                        <th>Post Title</th>
                        <th>Image</th>
                        <th>Action</th>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <!-- <td>{{ $post->page_title }}</td> -->
                                <td>{{ $post->title }}</td>
                                <td><img src="uploads/{{ $post->image }}" style="height: 50px;width: 50px;">
                                </td>
                                <td>
                                    <a href="{{ route('post-edit') }}/{{ $post->id }}" class="btn btn-primary btn-xs"><i
                                            class="fa fa-pencil"></i></a>
                                    <a class="btn btn-danger btn-xs deletepost" image="{{ $post->image }}"
                                        post-id="{{ $post->id }}"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <p>{{ $posts->links() }}</p>

            </div>
    </main>
    <script>
        $(document).ready(function() {
            $(document).on("click", ".deletepost", function() {
                var id = $(this).attr('post-id');
                var image = $(this).attr('image');
                if (confirm('Are you sure you want to remove this Post and all of its contents?')) {
                    $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: '{{ route('post-delete') }}',
                        data: {
                            "id": id,
                            "image": image
                        },
                        type: "post",
                        success: function(data) {
                            if (data == true) {
                                alert("Post deleted successfully..!!");
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
