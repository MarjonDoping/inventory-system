@extends('layouts')
@section('title', 'Contact Us')

@section('content')
    <style>
        .error {
            color: red;
            font-weight: 400;
            display: block;
            padding: 6px 0;
            font-size: 14px;
        }
    </style>
    <section class="heading-page header-text" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6> If you have queries, Contact us Here.</h6>
                    <h2>Contact Us</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="contact-us" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 align-self-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="contact" action="" method="post" action="{{ route('contact.store') }}">
                                @csrf
                                <div class="col-lg-12">
                                    <h2>Let's get in touch</h2>
                                </div>

                                <div class="col-lg-12">
                                    <fieldset>

                                        <input type="text" placeholder="* Enter Your Name"
                                            class="form-control {{ $errors->has('name') ? 'error' : '' }}" name="name"
                                            id="name">
                                        <!-- Error -->
                                        @if ($errors->has('name'))
                                            <div class="error">
                                                {{ $errors->first('name') }}
                                            </div>
                                        @endif
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input type="email" placeholder="* Enter Your Email"
                                            class="form-control {{ $errors->has('email') ? 'error' : '' }}" name="email"
                                            id="email">
                                        @if ($errors->has('email'))
                                            <div class="error">
                                                {{ $errors->first('email') }}
                                            </div>
                                        @endif
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <input type="text" placeholder="* Subject or Questions"
                                            class="form-control {{ $errors->has('subject') ? 'error' : '' }}" name="subject"
                                            id="subject">
                                        @if ($errors->has('subject'))
                                            <div class="error">
                                                {{ $errors->first('subject') }}
                                            </div>
                                        @endif
                                    </fieldset>
                                </div>
                                <div class="col-lg-12">
                                    <fieldset>
                                        <textarea placeholder="* Message" class="form-control {{ $errors->has('message') ? 'error' : '' }}" name="message"
                                            id="message" rows="4"></textarea>
                                        @if ($errors->has('message'))
                                            <div class="error">
                                                {{ $errors->first('message') }}
                                            </div>
                                        @endif
                                    </fieldset>
                                </div>
                                <button type="submit" name="send" value="Submit" class=" btn-primary"> Send Message <i
                                        class="fa fa-paper-plane-o" aria-hidden="true"></i></button>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="right-info">
                        <ul>
                            <li>
                                <h6> <i class="fa fa-phone" aria-hidden="true"></i> Phone Number</h6>
                                <span>
                                    @if ($contact)
                                        @foreach ($contact as $value)
                                            @if ($value->section_title == 'pnum')
                                                {{ $value->data }}
                                            @endif
                                        @endforeach
                                    @endif
                                </span>
                            </li>
                            <li>
                                <h6><i class="fa fa-envelope-o" aria-hidden="true"></i> Email Address</h6>
                                <span>
                                    @if ($contact)
                                        @foreach ($contact as $value)
                                            @if ($value->section_title == 'email')
                                                {{ $value->data }}
                                            @endif
                                        @endforeach
                                    @endif
                                </span>
                            </li>
                            <li>
                                <h6> <i class="fa fa-map-marker" aria-hidden="true"></i> Street Address</h6>
                                <p><span>
                                        @if ($contact)
                                            @foreach ($contact as $value)
                                                @if ($value->section_title == 'address')
                                                    {{ $value->data }}
                                                @endif
                                            @endforeach
                                        @endif
                                    </span></p>
                            </li>

                            <li>
                                <h6>Facebook |</h6> <a
                                    href="@if ($contact) @foreach ($contact as $value)
                          @if ($value->section_title == 'facebook')
                              {{ $value->data }} @endif
                      @endforeach
                      @endif"
                                    target="_blank"><i class="fa fa-facebook text-primary"></i></a>
                            </li>
                            <li>
                                <h6> Website</h6><a
                                    href="@if ($contact) @foreach ($contact as $value)
                          @if ($value->section_title == 'website')
                              {{ $value->data }} @endif
                      @endforeach
                      @endif"
                                    target="_blank"><i class="fa fa-globe text-info"></i></a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
