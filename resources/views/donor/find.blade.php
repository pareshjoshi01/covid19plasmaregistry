@extends('layouts.app')
@section('content')
<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Find Donor</h2>
          <ol>
            <li><a href="{{ route('welcome') }}">Home</a></li>
            <li>Find Donor</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="contact" class="contact">
      <div class="container">

        <div class="col-lg-7 col-md-12" data-aos="fade-up" data-aos-delay="300">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">

            <div class="form-group">
              <label for="phone" class="col-form-label">Phone (required)</label>
              <input type="text" name="phone" class="form-control" id="phone" placeholder="" required />
            </div>

            <div class="form-group">
              <label for="email" class="col-form-label">Email (required)</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="" />
            </div>

            <div class="form-group">
              <label for="hospital_name" class="col-form-label">Hospital Name</label>
              <input type="text" name="hospital_name" class="form-control" id="hospital_name" placeholder="" required />
            </div>

            <div class="form-group">
              <label for="hospital_address" class="col-form-label">Complete Hospital Address</label>
              <input type="text" name="hospital_address" class="form-control" id="hospital_address" placeholder="" required/>
            </div>

            <div class="form-group">
              <label for="positive_test_date" class="col-form-label">Have Documentation from the hospital regarding plasma transfusion ?</label>
              <div>
                  <lable><input type="radio" name="document" value="1" checked /> Yes </label>
                  <lable><input type="radio" name="document" value="0" /> No </label>
              </div>
            </div>

            <div class="form-group">
              <label for="patient_blood_group" class="col-form-label">Patient’s Blood group type</label>
              <select name="patient_blood_group" id="patient_blood_group" class="form-control" required>
                  <option value="Select">-----Select-----</option>
                  <option value="A+">A+</option>
                  <option value="A-">A-</option>
                  <option value="A1+">A1+</option>
                  <option value="A1-">A1-</option>
                  <option value="A1B+">A1B+</option>
                  <option value="A1B-">A1B-</option>
                  <option value="A2+">A2+</option>
                  <option value="A2-">A2-</option>
                  <option value="A2B+">A2B+</option>
                  <option value="A2B-">A2B-</option>
                  <option value="AB+">AB+</option>
                  <option value="AB-">AB-</option>
                  <option value="B+">B+</option>
                  <option value="B-">B-</option>
                  <option value="O+">O+</option>
                  <option value="O-">O-</option>
                </select>
            </div>

            <div class="form-group">
              <label for="blood_group" class="col-form-label"> <input type="checkbox" name="" required /> OK share your contact information with potential Plasma Donor</label>
            </div>

            <div class="text-center">
              <button type="submit">Submit</button>
            </div>
          </form>
        </div>

      </div>
    </section>

@endsection
