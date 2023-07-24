@extends('admin.layout')
@section('content')
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Add Content</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Post</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Add</a>
                    </li>
                </ul>
            </div>

        </div>




        <div class="order">
            <div class="mb-3">

                <div class="row">
                    {!! Form::open(['route' => ['faculty-store', $faculty->id], 'enctype' => 'multipart/form-data']) !!}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif

                    <div class="mb-3">
                        <label class="form-label">Page:</label>
                        {{ form::select('page_title', ['faculty' => 'Faculty'], $faculty->page_title, ['class' => 'form-control']) }}
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Add Developer: </label>
                        {{ form::text('section_title', $faculty->section_title, ['class' => 'form-control', 'placeholder' => 'To create developer type "new"']) }}
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Name of Developer: </label>
                        {{ form::text('title', $faculty->title, ['class' => 'form-control', 'placeholder' => 'Title']) }}
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Upload Image: </label>
                        @if ($faculty->image)
                            <img src="{{ url('uploads') }}/{{ $faculty->image }}" style="height: 100px;width: 100px;">
                        @endif
                        {{ Form::hidden('old_image', $faculty->image) }}
                        {!! Form::file('image', ['class' => 'form-control', 'id' => 'file']) !!}
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Position: </label>
                        {{ form::textarea('description', $faculty->description, ['class' => 'form-control']) }}
                    </div>
                    {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
                </div>
            </div>
            {!! Form::close() !!}


    </main>
@endsection

@push('footer-script')
@endpush
