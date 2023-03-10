@extends('layouts.app')
    
@section('content')
<main id="main">
    @section('breadcrumbs')
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <ol>
          <li><a href="{{ URL::to('/contact') }}">{{ Breadcrumbs::render('contact') }}</a></li>
        </ol>
      </div>
    </section><!-- End Breadcrumbs -->
    @endsection
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">
        <header class="section-header">
          <h2>Contact</h2>
          <p>Contact Us</p>
        </header>

        <div class="row gy-4">
          @include('partials.messages')
          <div class="col-lg-6">
            <div class="row gy-4">
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-geo-alt"></i>
                  <h3>Address</h3>
                  <p>Moi Avenue Street,<br>Bungoma County, Kenya</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-telephone"></i>
                  <h3>Call Us</h3>
                  <p>+254 724351952<br>+254 759116765</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@magnificcoding.com<br>contact@magnificcoding.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box">
                  <i class="bi bi-clock"></i>
                  <h3>Open Hours</h3>
                  <p>Monday - Friday<br>9:00AM - 05:00PM</p>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <form action="{{ route('contact.store') }}" method="post">
              @csrf
              <div class="row gy-4">

                <div class="col-md-6">
                  <input type="text" name="name" class="form-control" placeholder="Your Name">
                  @error('name')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <div class="col-md-6 ">
                  <input type="email" class="form-control" name="email" placeholder="Your Email">
                  @error('email')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <div class="col-md-12">
                  <input type="text" class="form-control" name="subject" placeholder="Subject">
                  @error('subject')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <div class="col-md-12">
                  <textarea class="form-control" name="message" rows="6" placeholder="Message"></textarea>
                  @error('message')
                    <span class="text-danger">{{ $message }}</span>
                  @enderror
                </div>

                <div class="col-md-12 text-center">
                  <button type="submit" class="btn btn-primary">Send Message</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->
</main><!-- End #main -->
@endsection