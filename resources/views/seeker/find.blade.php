@extends('layouts.app')

@section('csscontent')
<link href="{{ asset('css/datepicker3.css') }}" rel="stylesheet" type="text/css"/>
<link href="{{ asset('css/intlTelInput.css') }}" rel="stylesheet">
<style>
  .intl-tel-input{
    width: 100%;
  }
</style>
@endsection

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

          @if(session('flash_message_error'))
          <p style="color:#c72020;">{{ session('flash_message_error') }}</p>
          @endif

          <form id="register_seeker" action="{{ route('seeker_save') }}" method="post" class="php-email-form">
            @csrf

            <input type="hidden" name="country_code" class="country_code" value="" />

            <div class="form-group">
              <label for="name" class="col-form-label">Name</label>
              <input type="text" id="name" name="name" class="form-control" id="name" value="{{ old('name') }}" placeholder=""  required />
              @error('name')
              <div class="validate" style="display: block;">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="phone" class="col-form-label">Phone</label>
              <input type="text" id="mobile_number" name="phone" class="form-control" id="phone" value="{{ old('phone') }}" placeholder=""  />
              @error('phone')
              <div class="validate" style="display: block;">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="email" class="col-form-label">Email (required)</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="" value="{{ old('email') }}" required />
              @error('email')
              <div class="validate" style="display: block;">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="hospital_name" class="col-form-label">Hospital Name</label>
              <input type="text" name="hospital_name" class="form-control" id="hospital_name" placeholder="" value="{{ old('hospital_name') }}" required />
              @error('hospital_name')
              <div class="validate" style="display: block;">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="hospital_contact_person" class="col-form-label">Hospital Contact Person</label>
              <input type="text" name="hospital_contact_person" class="form-control" id="hospital_contact_person" placeholder="" value="{{ old('hospital_contact_person') }}" />
              @error('hospital_contact_person')
              <div class="validate" style="display: block;">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="hospital_contact_number" class="col-form-label">Hospital Contact Number</label>
              <input type="text" name="hospital_contact_number" class="form-control" id="hospital_contact_number" placeholder="" value="{{ old('hospital_contact_number') }}" />
              @error('hospital_contact_number')
              <div class="validate" style="display: block;">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="hospital_address" class="col-form-label">Complete Hospital Address</label>
              <input type="text" name="hospital_address" class="form-control" id="hospital_address" placeholder="" value="{{ old('hospital_address') }}" required/>
              @error('hospital_address')
              <div class="validate" style="display: block;">{{ $message }}</div>
              @enderror
            </div>

            <div class="form-group">
              <label for="country" class="col-form-label">Country</label>
                <select name="country" id="country" class="form-control" required>
                  <option value="India">India</option>
                </select>
                @error('country')
                <div class="validate" style="display: block;">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
              <label for="zipcode" class="col-form-label">Zipcode</label>
              <input type="text" id="zipcode" name="zipcode" class="form-control" id="zipcode" value="{{ old('zipcode') }}" placeholder="" required />
              @error('zipcode')
              <div class="validate" style="display: block;">{{ $message }}</div>
              @enderror
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
                @error('patient_blood_group')
                <div class="validate" style="display: block;">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
              <label for="blood_group" class="col-form-label"> <input type="checkbox" name="" required /> OK share your contact information with potential Plasma Donor</label>
            </div>

            <div class="form-group">
              <div class="g-recaptcha" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}"></div>
            </div>

            <div class="text-left">
              <button type="submit">Submit</button>
            </div>
          </form>
        </div>

      </div>
    </section>

@endsection

@section('jscontent')
<script src='https://www.google.com/recaptcha/api.js'></script>
<script src="{{ asset('js/bootstrap-datepicker.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/intlTelInput.js') }}"></script>
<script>
$(document).ready(function(){

  $("#mobile_number").intlTelInput({
       separateDialCode:true,
       preferredCountries:["in"],
       initialCountry: "in",
       geoIpLookup: function(success, failure) {
        $.get("https://ipinfo.io", function() {}, "jsonp").always(function(resp) {
          var countryCode = (resp && resp.country) ? resp.country : "";
          success(countryCode);
        });
      },
      utilsScript: "{{ asset('js/utils.js') }}"
  });

  $("#register_seeker").submit(function(){
    var country_code = $(".selected-dial-code").text();
    $(".country_code").val(country_code);
    return true;
  });

  $('.date-picker').datepicker({
      orientation: "left",
      autoclose: true
  });

});
</script>
@endsection
