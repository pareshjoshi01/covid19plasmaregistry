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
          <h2>Account Verification</h2>
        </div>

      </div>
    </section><!-- End Breadcrumbs -->

    <section id="contact" class="contact">
      <div class="container">

        <div class="col-lg-6 col-md-12 offset-lg-3" data-aos="fade-up" data-aos-delay="300">
          <form action="{{ route('donor_otp_verify', $donor_details->id) }}" method="post" role="form" class="php-email-form">
            @csrf

            <div class="mb-3">
              <div class="sent-message" style="display:block;">Please enter the One-Time password to verify your account</div>
              <h6 style="margin-top:10px; text-align:center;">A One-Time password has been sent to {{ $donor_details->country_code.$donor_details->phone }}</h6>
            </div>

            <div class="form-group col-lg-6 offset-lg-3">
              <label for="otp_code" class="col-form-label">OTP</label>
              <input type="text" name="otp_code" class="form-control" id="otp_code" placeholder="------"
              oninput="this.value = this.value.replace(/[^0-9.]/g, ''); this.value = this.value.replace(/(\..*)\./g, '$1');" required maxlength="6" />

              @error('otp_code')
                  <span class="invalid-feedback" role="alert" >
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

              @if (session('error'))
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ session('error') }}</strong>
                  </span>
              @endif

            </div>

            <div class="text-center">
              <button type="submit">Verify</button>
            </div>
          </form>
        </div>

      </div>
    </section>

@endsection

@section('jscontent')
<script type="text/javascript">
$('.resendotp').click(function(){
  var id = '{{ $donor_details->id }}';
  var _token = '{{ csrf_token() }}';

  $.ajax({
      method: 'POST', // Type of response and matches what we said in the route
      url: '{{ route("donor_save", $donor_details->id) }}', // This is the url we gave in the route
      data: {_token: _token ,id : id}, // a JSON object to send back
      success: function(response){ // What to do if we succeed
          if(response == 'Success'){
              $('.optsec').text('OTP got successfully');
          }else {
              $('.optsec').text('Error in sending OTP');
          }
      },
      // error: function(jqXHR, textStatus, errorThrown) { // What to do if we fail
      //     console.log(JSON.stringify(jqXHR));
      //     console.log("AJAX error: " + textStatus + ' : ' + errorThrown);
      // }
  });
  return false;
});
</script>
@endsection
