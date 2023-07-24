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
                    {!! Form::open(['route' => ['site-store', $site->id], 'enctype' => 'multipart/form-data']) !!}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif

                    <div class="mb-3">
                        <label class="form-label">Page:</label>
                        {{ form::select('page_title', ['site' => 'SITE Organization'], $site->page_title, ['class' => 'form-control']) }}
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Add Member: </label>
                        {{ form::text('section_title', $site->section_title, ['class' => 'form-control', 'placeholder' => 'To add member type "new"']) }}
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Name Of Member: </label>
                        {{ form::text('title', $site->title, ['class' => 'form-control', 'placeholder' => 'Title']) }}
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Upload Image: </label>
                        @if ($site->image)
                            <img src="{{ url('uploads') }}/{{ $site->image }}" style="height: 100px;width: 100px;">
                        @endif
                        {{ Form::hidden('old_image', $site->image) }}
                        {!! Form::file('image', ['class' => 'form-control', 'id' => 'file']) !!}
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Position: </label>
                        {{ form::textarea('description', $site->description, ['class' => 'form-control']) }}
                    </div>
                    {{ Form::submit('Save', ['class' => 'btn btn-primary']) }}
                </div>
            </div>
            {!! Form::close() !!}


    </main>

@endsection

@push('footer-script')
@endpush
