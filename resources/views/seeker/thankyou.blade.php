@extends('layouts.app')

@section('csscontent')
<style>
.invalid-feedback
{
  display: block !important;
}
</style>
@endsection

@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>You have successfully registered</h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="contact" class="contact">
      <div class="container">

        <div class="col-lg-12 col-md-12" data-aos="fade-up" data-aos-delay="300">

            <div class="mb-3">
              <h6>We will soon notify potential donors near your location with your hospital and contact information you have provided. Interested donors will contact the hospital directly to validate the request is genuine.</h6>

              <h6>If you need to edit/delete any provided information please email us at pareshjoshi01@gmail.com </h6>
            </div>
          </div>

        </div>

      </div>
    </section>

@endsection
