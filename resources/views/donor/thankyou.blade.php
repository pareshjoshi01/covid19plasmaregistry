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
              <h6>Thank you for your help in fighting COVID 19 and helping those in need. Your information will never be shared with anyone including donor seekers. If  someone near your location is seeking for Plasma Donor, we will notify you via text message their hospital contact information and contact number so that you can contact them directly.</h6>

              <h6>We will soon added an edit information option, where you can edit/delete your information if you so choose to. Meanwhile, you can contact pareshjoshi01@gmail.com if you need to edit/delete any information.</h6>
            </div>
          </div>

        </div>

      </div>
    </section>

@endsection
