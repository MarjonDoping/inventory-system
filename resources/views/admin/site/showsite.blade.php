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
                <h1>Clesto's Bakeshop Page</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">About Cleto's Bakeshop</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">contact</a>
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
                <div class="navbar-right">
                    <a href="{{ route('site-add') }}" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i>
                        Add New</a>
                </div>
                <br>
                <table id='myTable' class='display' style='width:100%'>
                    <thead>
                        <!-- <th>page</th> -->
                        <th>Name of Team</th>
                        <th>Position</th>
                        <th>Image</th>
                        <th>Action</th>
                    </thead>
                    <tbody>

                        @foreach ($sites as $site)
                            <tr>
                                <!-- <td>{{ $site->page_title }}</td> -->
                                <td>{{ $site->title }}</td>
                                <td>{{ $site->description }}</td>
                                <td><img src="uploads/{{ $site->image }}" style="height: 50px;width: 50px;">
                                </td>
                                <td>
                                    <a href="{{ route('site-edit') }}/{{ $site->id }}" class="btn btn-primary btn-xs"><i
                                            class="fa fa-pencil"></i></a>
                                    <a class="btn btn-danger btn-xs deletepost" image="{{ $site->image }}"
                                        post-id="{{ $site->id }}"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <!-- <p>{{ $sites->links() }} -->

                </p>
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
                        url: '{{ route('site-delete') }}',
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




