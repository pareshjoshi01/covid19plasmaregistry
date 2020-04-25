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
          <h2>Register Donor</h2>
          <ol>
            <li><a href="{{ route('welcome') }}">Home</a></li>
            <li>Register Donor</li>
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

            <form id="register_donor" action="{{ route('donor_save') }}" method="post" class="php-email-form">
              @csrf

              <input type="hidden" name="country_code" class="country_code" value="" />

              <div class="form-group">
                <label for="name" class="col-form-label">Name</label>
                <input type="text" id="name" name="name" class="form-control" id="name" value="{{ old('name') }}" placeholder=""  />
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

              <!--
              <div class="form-group">
                <label for="location" class="col-form-label">Location</label>
                <input type="text" name="location" class="form-control" id="location" value="{{ old('location') }}" placeholder="" required/>
                @error('location')
                <div class="validate" style="display: block;">{{ $message }}</div>
                @enderror
              </div>
              -->

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
                <input type="number" id="zipcode" name="zipcode" class="form-control" id="zipcode" value="{{ old('zipcode') }}" placeholder="" required />
                @error('zipcode')
                <div class="validate" style="display: block;">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-group">
                <label for="email" class="col-form-label">Email (optional)</label>
                <input type="email" name="email" class="form-control" value="{{ old('email') }}" id="email" placeholder="" />
                @error('email')
                <div class="validate" style="display: block;">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-group">
                <label for="positive_test_date" class="col-form-label">Date Of Covid Positive Test</label>
                <input type="text" name="positive_test_date" class="form-control date-picker" value="{{ old('positive_test_date') }}" id="positive_test_date" placeholder="YYYY-MM-DD" data-date-format="yyyy-mm-dd" autocomplete="off" required/>
                @error('positive_test_date')
                <div class="validate" style="display: block;">{{ $message }}</div>
                @enderror
              </div>

              <div class="form-group">
                <label for="positive_test_date" class="col-form-label">Have Documentation to Show Positive COVID test?</label>
                <div>
                    <lable><input type="radio" name="document" value="1" checked /> Yes </label>
                    <lable><input type="radio" name="document" value="0" /> No </label>
                </div>
              </div>
              <div class="form-group">
                <label for="fully_recovered" class="col-form-label">Are you fully recovered?</label>
                <div>
                  <lable><input type="radio" name="fully_recovered" value="1"  /> Yes </label>
                    <lable><input type="radio" name="fully_recovered" value="0" /> No </label>
                </div>
              </div>
              <div class="form-group">
                <label for="recovery_date" class="col-form-label">Date Of COVID Recovery</label>
                <input type="text" name="recovery_date" class="form-control date-picker" value="{{ old('recovery_date') }}" id="recovery_date" placeholder="YYYY-MM-DD" data-date-format="yyyy-mm-dd" autocomplete="off" required/>
                @error('recovery_date')
                <div class="validate" style="display: block;">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-group">
                <label for="blood_group" class="col-form-label">Blood group type</label>
                <select name="blood_group" id="blood_group" class="form-control" required>
                  	<option value="Select">-----Select-----</option>
                  	<option value="A+" @if(old('blood_group') == "A+") selected @endif >A+</option>
                  	<option value="A-" @if(old('blood_group') == "A-") selected @endif>A-</option>
                  	<option value="A1+" @if(old('blood_group') == "A1+") selected @endif>A1+</option>
                  	<option value="A1-" @if(old('blood_group') == "A1-") selected @endif>A1-</option>
                  	<option value="A1B+" @if(old('blood_group') == "A1B+") selected @endif>A1B+</option>
                  	<option value="A1B-" @if(old('blood_group') == "A1B-") selected @endif>A1B-</option>
                  	<option value="A2+" @if(old('blood_group') == "A2+") selected @endif>A2+</option>
                  	<option value="A2-" @if(old('blood_group') == "A2-") selected @endif>A2-</option>
                  	<option value="A2B+" @if(old('blood_group') == "A2B+") selected @endif>A2B+</option>
                  	<option value="A2B-" @if(old('blood_group') == "A2B-") selected @endif>A2B-</option>
                  	<option value="AB+" @if(old('blood_group') == "AB+") selected @endif>AB+</option>
                  	<option value="AB-" @if(old('blood_group') == "AB-") selected @endif>AB-</option>
                  	<option value="B+" @if(old('blood_group') == "B+") selected @endif>B+</option>
                  	<option value="B-" @if(old('blood_group') == "B-") selected @endif>B-</option>
                  	<option value="O+" @if(old('blood_group') == "O+") selected @endif>O+</option>
                  	<option value="O-" @if(old('blood_group') == "O-") selected @endif>O-</option>
                  </select>
                  @error('blood_group')
                  <div class="validate" style="display: block;">{{ $message }}</div>
                  @enderror
              </div>

              <div class="form-group">
                <label for="blood_group" class="col-form-label"> <input type="checkbox" name="accept_condition" value="1" required @if(old('accept_condition') == "1") checked @endif /> OK to be contacted by Plasma Seeker</label>
              </div>

              <div class="form-group">
                <div class="g-recaptcha" data-sitekey="{{env('GOOGLE_RECAPTCHA_KEY')}}"></div>
                @error('g-recaptcha-response')
                <div class="validate" style="display: block;">{{ $message }}</div>
                @enderror
              </div>

              <div class="text-left">
                <button type="submit">Register</button>
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

  $("#register_donor").submit(function(){
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
