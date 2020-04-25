@extends('layouts.app')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Contact Us</h2>
          <ol>
            <li><a href="{{ route('welcome') }}">Home</a></li>
            <li>Contact Us</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="contact" class="contact contactus">
      <div class="container">

          <div class="row">
            <div class="col-lg-7 col-md-12 contactusDesc" data-aos="fade-up" data-aos-delay="300">
              <h3>We are looking for help in following area:</h3>
              <ul>
                  <li>App Developers/UX Experts  to improve the app. App is open source and code is available here:  <a href="https://github.com/pareshjoshi01/covid19plasmaregistry">Github</a>
                  </li>
                  <li>Translators to translate the app in various other languages</li>
                  <li>Internet Security experts to audit for secuity/privacy/HIPPA compliance</li>
                  <li>Doctors to provide guidnace on copy/data collection</li>
                  <li>Anyone who wants to help screen plasma seekers request to make sure its legitimate. This is to make sure we only contact Plasma Donors for genuine request. This process will be automated later but we will need
                      some help initially in this area.</li>
              </ul>
            </div>
         <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">

            <form action="{{ route('volunteer_contact_save') }}" method="post" role="form" class="php-email-form">
            @csrf

              <div class="form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" value="{{ old('name') }}" required/>
                @error('name')
                <div class="validate" style="display: block;">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-group">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" value="{{ old('email') }}" required />
                @error('email')
                <div class="validate" style="display: block;">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" value="{{ old('subject') }}" placeholder="Subject" required />
                @error('subject')
                <div class="validate" style="display: block;">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-group">
                <textarea class="form-control" name="msg" rows="5" placeholder="Message" required>{{ old('msg') }}</textarea>
                @error('msg')
                <div class="validate" style="display: block;">{{ $message }}</div>
                @enderror
              </div>

              @if(Session::has('flash_message_error'))
        			 <div class="alert alert-danger alert-block">
        					 <button type="button" class="close" data-dismiss="alert">×</button>
        							 <strong>{!! session('flash_message_error') !!}</strong>
        			 </div>
        			 @endif

              @if(Session::has('flash_message_success'))
              <div class="mb-3">
                <div class="sent-message" style="display:block;">{!! session('flash_message_success') !!}</div>
              </div>
              @endif

              <div class="text-center"><button type="submit">Send Message</button></div>

            </form>
          </div>
        </div>

      </div>
    </section>

@endsection
