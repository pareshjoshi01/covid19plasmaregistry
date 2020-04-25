@extends('layouts.app')

@section('csscontent')
<style>
#hero h1{
  font-size: 28px;
}
#hero h2{
  font-size: 16px !important;
  margin-bottom: 10px !important;
}
.whatisplasma{
  padding-top: 0px !important;
}
</style>
@endsection

@section('content')
<!-- ======= Hero Section ======= -->

<section id="hero" class="d-flex align-items-center">

    <div class="container">


        <div class="row">
        <div class="col-lg-12 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center connectingMain">
          <h1 data-aos="fade-up">Connecting COVID Plasma Donors to people in need!</h1>
        </div>
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center whatIsMain">
          <h1 data-aos="fade-up">What is COVID Plasma Donor Registry?</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">
            <p>COVID Plasma Donor Registry connects COVID recovered individuals who are willing to donate their plasma to help patients who are critically ill with COVID. This is designed to bring these two parties find each other in a secure and anonymous way without compromising privacy of donors.</p>
            <p>This registery is designed to serve two purpose:</p>
            <p>1. A safe, secure platform for DONORS to register their information without providing their name/specific location for privacy purpose.</p>
            <p>2. A quick way for hospitals/family members seeking Plasma of COVID recovered individuals to find willing donors near their location.</p>
          </h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="{{ url('donor/register') }}" class="btn-get-started scrollto">Donor Registration</a>
            <a href="{{ url('donor/find') }}" class="btn-get-started scrollto">Find Donors</a>
          </div>
        </div>
        <div class="col-lg-5 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="{{ asset('website/assets/img/hero-img.png') }}" class="img-fluid animated" alt="">
        </div>

      </div>
    </div>

</section><!-- End Hero -->

<main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>Why is this being done?</h2>
            <p>People who recover from COVID-19 do so, at least in part, because their blood contains substances called antibodies, which are capable of fighting the virus that causes the illness. It turns out that for some other diseases caused by viruses, giving people the liquid portion of blood (plasma), obtained from those who have recovered from the virus, leads to more rapid improvement of the disease. Patients with COVID-19 may improve faster if they receive plasma from those who have recovered from COVID-19, because it may have the ability to fight the virus that causes COVID-19.

                Initial data available from studies using COVID-19 convalescent plasma for the treatment of individuals with severe or life-threatening disease indicate that a single dose of 200 mL showed benefit for some patients, leading to improvement.

                COVID-19 convalescent plasma has not yet been demonstrated to provide clinical benefit in patients affected by this disease. It's not known if this treatment will or will not help those with COVID-19 or if it will have any harmful effects, but this is one of the only treatments that we have at present.</p>
        </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <section id="services" class="services whatisplasma">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>What Is Plasma?</h2>
          <p>Plasma is the often forgotten component of blood. White blood cells, red blood cells, and platelets are essential to body function, but plasma also plays a crucial, and mostly unrecognized, job, carrying these blood components throughout the body as the fluid in which they travel.</p>
        </div>
        </div>
      </div>
    </section>

</main><!-- End #main -->
@endsection
