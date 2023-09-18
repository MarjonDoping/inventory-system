@extends('admin.layout')
@section('title', 'Content Management System')

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
                <h1>Messages</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Message page</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Message</a>
                    </li>
                </ul>
            </div>

        </div>





        <div class="mb-3">
            <table id='myTable' class='display' style='width:100%'>
                <thead>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Subject</th>
                    <th>Message</th>
                    <th>Create Date</th>

                </thead>
                <tbody>

                    @foreach ($contacts as $contact)
                        <tr>
                            <td>{{ $contact->name }}</td>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->subject }}</td>
                            <td>{{ $contact->message }}</td>
                            <td>{{ $contact->created_at }}</td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
    </main>
@endsection

@push('footer-script')
@endpush
