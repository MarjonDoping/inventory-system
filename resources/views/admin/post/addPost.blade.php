@extends('admin.layout')
@section('title', 'Content Management System')
@section('content')
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Edit Post</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Post</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Edit</a>
                    </li>
                </ul>
            </div>

        </div>




        <div class="order">
            <div class="mb-3">

                <div class="row">
                    {!! Form::open(['route' => ['post-store', $post->id], 'enctype' => 'multipart/form-data']) !!}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif

                    <div class="mb-3">
                        <label class="form-label">Page:</label>
                        {{ form::select('page_title', ['home' => 'New Post'], $post->page_title, ['class' => 'form-control']) }}
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Create New Article </label>
                        {{ form::text('section_title', $post->section_title, ['class' => 'form-control', 'placeholder' => ' To Create new Article type "new']) }}
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Post Title: </label>
                        {{ form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title']) }}
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Upload Image: </label>
                        @if ($post->image)
                            <img src="{{ url('uploads') }}/{{ $post->image }}" style="height: 100px;width: 100px;">
                        @endif
                        {{ Form::hidden('old_image', $post->image) }}
                        {!! Form::file('image', ['class' => 'form-control', 'id' => 'file']) !!}
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Post Description: </label>
                        {{ form::textarea('description', $post->description, ['class' => 'form-control']) }}
                    </div>
                    {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
                </div>
            </div>
            {!! Form::close() !!}


    </main>
@endsection

@push('footer-script')
@endpush
