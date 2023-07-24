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
                <h1>System Developers Page</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">About System Developers</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">System Developers</a>
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
                <div class=" justify-content-end">

                    <a href="{{ route('faculty-add') }}" class="btn btn-primary"> <i class="fa fa-plus"
                            aria-hidden="true"></i> Add New</a>
                </div>
                <br>
                <table id='myTable' class='display' style='width:100%'>

                    <thead>
                        <!-- <th>page</th> -->
                        <!-- <th>Section Title</th> -->
                        <th>Name of Developer</th>
                        <th>Position</th>
                        <th>Image</th>
                        <th>Action</th>
                    </thead>
                    <tbody>

                        @foreach ($faculties as $faculty)
                            <tr>
                                <!-- <td>{{ $faculty->page_title }}</td> -->
                                <!-- <td>{{ $faculty->section_title }}</td> -->
                                <td>{{ $faculty->title }}</td>
                                <td>{{ $faculty->description }}</td>
                                <td><img src="uploads/{{ $faculty->image }}" style="height: 50px;width: 50px;">
                                </td>
                                <td>
                                    <a href="{{ route('faculty-edit') }}/{{ $faculty->id }}"
                                        class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                                    <a class="btn btn-danger btn-xs deletepost" image="{{ $faculty->image }}"
                                        post-id="{{ $faculty->id }}"><i class="fa fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
                <!-- <p>{{ $faculties->links() }} -->

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
                        url: '{{ route('faculty-delete') }}',
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
