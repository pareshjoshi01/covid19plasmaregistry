@extends('layouts.app')

@section('csscontent')
<style>
#hero h1{
  font-size: 32px !important;
}
#hero h2{
  font-size: 20px !important;
  margin-bottom: 10px !important;
}
</style>
@endsection

@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="d-flex align-items-center hero_about">

    <div class="container">
      <div class="row">
        <div class="col-lg-12 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">About Us</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">
            <p>
            Covid Plasma Registry is run and managed by volunteers who want to assist in fight agianst COVID-19 pandemic. The initiative was started after observing lot of effort by plasma seekers to find a potential donors
            by posting on facebook/whatsapp and other social media. This is an effort to make the process efficient by creating a registry of recovered COVID individuals who are willing to donate their plasma to assist critically ill COVID
            patients.
            </p>
          </h2>
        </div>
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h2 data-aos="fade-up" data-aos-delay="400">
          We are looking for help in following area:
          <ul>
            <li>App Developers/UX Experts  to improve the app. App is open source and code is available here:  <a href="https://github.com/pareshjoshi01/covid19plasmaregistry">Github</a>
            </li>
            <li>Translators to translate the app in various other languages</li>
            <li>Internet Security experts to audit for secuity/privacy/HIPPA compliance</li>
            <li>Doctors to provide guidnace on copy/data collection</li>
            <li>Anyone who wants to help screen plasma seekers request to make sure its legitimate. This is to make sure we only contact Plasma Donors for genuine request. This process will be automated later but we will need
            some help initially in this area.</li>
            <li> <a href="{{ route('volunteer_contact') }}"> Contact us to help in this initiative </a></li>
          </h2>
          </ul>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="{{ asset('website/assets/img/about-us.png') }}" class="img-fluid animated" alt="">
        </div>

      </div>
    </div>

</section><!-- End Hero -->

<main id="main">

  <section id="contact" class="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 col-md-12" data-aos="fade-up" data-aos-delay="300">

        </div>
       <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
         <div>
         List of individuals/Organizations helping with this project:
         <ul>
           <li><a href="https://www.linkedin.com/in/pareshjoshi01" target="_blank">Paresh Joshi</a></li>
           <li><a href="https://kiddoware.com" target="_blank">Kiddoware</a></li>
           <li> Yuriy Shalaykin</li>
           <li> Neil Joshi</li>
           <li><a href="https://in.linkedin.com/in/ramesh-bhil-9a7b738b" target="_blank">Ramesh Bhil</a></li>
         </ul>
       </div>
       </div>
      </div>
    </div>
  </section>
</main>
@endsection
