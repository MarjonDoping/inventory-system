@extends('layouts')
@section('title', 'About')

@section('content')
<section class="heading-page header-text" id="top">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h6>This is the About Page</h6>
        <h2>About Us</h2>
      </div>
    </div>
  </div>
</section>

<!-- ***** Main Banner Area End ***** -->


<section class="upcoming-meetings" id="meetings">
  <div class="container">

  <div class="col-lg-11">
  
        <div class="accordions is-first-expanded">
       
          <article class="accordion">
         
              <div class="accordion-head">
                  <span><h3>About the Cleto's Bakeshop </h3></span>
                  <span class="icon">
                      <i class="icon fa fa-chevron-right"></i>
                  </span>
              </div>
              <div class="accordion-body">
                  <div class="content">
                      <br>
                      <p>@if($our_company) 
                      @foreach($our_company as $value)
                          @if($value->section_title=='about_it')
                              {{$value->data}}
                          @endif
                      @endforeach
                      @endif </p>
                      <br>
                  </div>
              </div>
          </article>
          <article class="accordion">
              <div class="accordion-head">
                  <span>About our Products</span>
                  <span class="icon">
                      <i class="icon fa fa-chevron-right"></i>
                  </span>
              </div>
              <div class="accordion-body">
                  <div class="content">
                      <br>
                      <p>@if($our_company) 
                      @foreach($our_company as $value)
                          @if($value->section_title=='about_site')
                              {{$value->data}}
                          @endif
                      @endforeach
                      @endif </p>
                      <br>
                  </div>
              </div>
          </article>
          <article class="accordion">
              <div class="accordion-head">
                  <span>Mission</span>
                  <span class="icon">
                      <i class="icon fa fa-chevron-right"></i>
                  </span>
              </div>
              <div class="accordion-body">
                  <div class="content">
                      <br>
                  <p> @if($our_company) 
                      @foreach($our_company as $value)
                          @if($value->section_title=='mission')
                              {{$value->data}}
                          @endif
                      @endforeach
                      @endif</p>
                      <br>
                  </div>
              </div>
          </article>
          <article class="accordion last-accordion">
              <div class="accordion-head">
                  <span>Vision</span>
                  <span class="icon">
                      <i class="icon fa fa-chevron-right"></i>
                  </span>
              </div>
              <div class="accordion-body">
                  <div class="content">
                      <br>
                      <p>@if($our_company) 
                      @foreach($our_company as $value)
                          @if($value->section_title=='vision')
                              {{$value->data}}
                          @endif
                      @endforeach
                      @endif</p>
                      <br>
                  </div>
              </div>
          </article>
       
        
      </div>
      </div>

  </div>
  
</section>
@endsection

