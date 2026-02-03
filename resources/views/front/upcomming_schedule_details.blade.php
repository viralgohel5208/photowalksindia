@extends('layouts.front_app')

@section('title', $schedule_details->title)
@section('meta_keywords', $schedule_details->meta_tag)
@section('meta_description', $schedule_details->meta_description)

@section('content')
<style type="text/css">
    @media only screen and (max-width: 767px) {
        .p-banner-content h3 {
            font-size: 50px;
        }
        .p-banner-content{
            padding-top: 5px;
        }
        /*.p-top-banner-location:after{
            bottom: -10px;
        }*/
        .p-top-banner-location:after{
            height: 85px;
        }
    }
    .black-bg:has(.rowsplit.split ){
        padding-block:0;
    }

    .rowsplit.split {
        --bg:#1f2326;         /* page dark background */
        --panel-bg: #1f2427;  /* inner panel slightly different */
        --blue1: #1e90ff;
        --blue2: #0e73ff;
        --muted: #fff;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
        gap: 0;
      color:var(--muted);
      p{
        color:var(--muted);
      }

  /* container for inner panels so center vertical content */
  .panel {
    background: transparent;
    padding: 40px;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  /* left block specifics */
  .left-inner {
    text-align: center;
    max-width: 520px;
    margin: 0 auto;
  }

  .register-btn {
    display: inline-block;
    background: linear-gradient(180deg, var(--blue1), var(--blue2));
    color: #fff;
    font-weight: 800;
    font-size: 38px;
    padding: 24px 50px;
    border-radius: 14px;
    box-shadow: 0 8px 18px rgba(0, 0, 0, 0.35);
    border: none;
    letter-spacing: 0.4px;
    line-height: 1;
  }

  /* small descriptive texts under button */
  .left-desc {
    margin-top: 32px;
    color: #fff;
    font-size: 18px;
    line-height: 1.6;
  }

  .left-desc .lead {
    margin-bottom: 22px;
  }

  /* right block specifics */
  .right-card {
    max-width: 540px;
    padding-left: 50px;
    padding-right: 30px;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: #eee;
  }

  .right-card h3 {
    color: #fff;
    font-size: 22px;
    font-weight: 700;
    margin-bottom: 18px;
  }

  .right-card p {
    color: #d9dbe0;
    font-size: 16px;
    line-height: 1.7;
    margin-bottom: 18px;
  }

  /* vertical center divider */
  .divider {
    width: 2px;
    background: #f4f4f4;
    height: 100%;
    min-height: 100vh;
    border-radius: 2px;
  }

  @media (max-width: 991.98px) {
    flex-direction: column;
    padding: 30px 18px;
    .panel {
      height: auto;
      padding: 24px 0;
      min-height: 0;
    }
  
    .divider {
        height: 2px;
        width: 100%;
        min-height: 0;
    }
  
    .right-card {
      padding-left: 0;
      padding-right: 0;
      margin-top: 30px;
    }
  
    .register-btn {
      font-size: 36px;
      padding: 24px 48px;
    }
  }

}
</style>

<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.min.css'>

    <section class="p-top-banner-location" style="background: url({{ asset('uploads/schedule/' . $schedule_details->detail_banner) }});background-size: cover;background-position: center;"></section>

    {{-- style="background: url({{ asset('uploads/schedule/' . $schedule_details->detail_banner) }})" --}}





    <section class="p-padding-40-0 p-banner-content text-center">

        <div class="container">

            <h3 class="p-00c7e9">{{ $schedule_details->title }}</h3>

            <p>{{ $schedule_details->detail_section_one_desc_one }}</p>

            <p>{{ $schedule_details->detail_section_one_desc_two }}</p>

        </div>

    </section>



    <section class="p-left-right-se">

        <div class="container-fluid p-md-0">

            <div class="row align-items-center p-tablet-r">

                <div class="col-md-5 text-start">

                    @if ($schedule_details->detail_section_two_banner != '')

                        <img src="{{ asset('uploads/schedule/' . $schedule_details->detail_section_two_banner) }}">

                    @else

                        <img src="{{ asset('assets/front/images/image00002.png') }}">

                    @endif

                </div>

                <div class="col-md-7">

                    <div class="p-left-right-title-content p-padding-r-50">

                        <p>{{ $schedule_details->detail_section_two_desc_one }}</p>

                        <p>{{ $schedule_details->detail_section_two_desc_two }}</p>

                    </div>

                </div>

            </div>

        </div>

    </section>



    <section>

        <div class="container-fluid">

            <p>{{ $schedule_details->detail_section_three_desc_one }}</p>

            <p>{{ $schedule_details->detail_section_three_desc_two }}</p>

        </div>

    </section>



    <section>

        @if ($schedule_details->detail_section_four_banner != '')

            <img class="w-100" src="{{ asset('uploads/schedule/' . $schedule_details->detail_section_four_banner) }}">

        @else

            <img class="w-100" src="{{ asset('assets/front/images/sctp0062-shalu-dhobi-ghat-and-dharavi00083.png') }}">

        @endif

    </section>



    <section>

        <div class="container-fluid">

            <div class="row gx-5">

                <div class="col-md-6">

                    <p>{{ $schedule_details->detail_section_four_desc_one }}</p>

                </div>

                <div class="col-md-6">

                    <p>{{ $schedule_details->detail_section_four_desc_two }}</p>

                </div>

            </div>

        </div>

    </section>



    <section>

        @if ($schedule_details->detail_section_five_banner != '')

            <img class="w-100" src="{{ asset('uploads/schedule/' . $schedule_details->detail_section_five_banner) }}">

        @else

            <img class="w-100" src="{{ asset('assets/front/images/dhobi-client.png') }}">

        @endif

    </section>

    <section class="p-padding-40-0 p-socails-se">

        @if($schedule_details->date_time >= date('Y-m-d'))
        <div class="container text-center">
            <p><b>Date / Day</b> : {{ date('dS F Y, l', strtotime($schedule_details->date_time)) }}</p>
            <p><b>Time</b> : {{ date('g.i A', strtotime($schedule_details->date_time)) }}</p>
            <p class="mb-0"><b>Meeting Point</b> : {{ $schedule_details->metting_point }}</p>
        </div>
        @endif

        <div class="p-padding-t-50 container text-center">

            <p class="p-00c7e9">Our Workshops are free of cost </p>

            <ul>

                <li><a target="_blank"

                        href="{{ $schedule_details->detail_face_book_url != '' ? $schedule_details->detail_face_book_url : '#' }}"><img

                            src="{{ asset('assets/front/images/facebook-dhobi.png') }}"></a></li>

                <li><a target="_blank"

                        href="{{ $schedule_details->detail_twitter_url != '' ? $schedule_details->detail_twitter_url : '#' }}"><img

                            src="{{ asset('assets/front/images/twiter-dhobi.png') }}"></a></li>

                <li><a target="_blank"

                        href="{{ $schedule_details->detail_google_plus_url != '' ? $schedule_details->detail_google_plus_url : '#' }}"><img

                            src="{{ asset('assets/front/images/google-plus-dhobi.png') }}"></a></li>

                <li><a target="_blank"

                        href="{{ $schedule_details->detail_whatsapp_url != '' ? $schedule_details->detail_whatsapp_url : '#' }}"><img

                            src="{{ asset('assets/front/images/whatup-dhobi.png') }}"></a></li>

                <li><a target="_blank"

                        href="{{ $schedule_details->detail_plus_url != '' ? $schedule_details->detail_plus_url : '#' }}"><img

                            src="{{ asset('assets/front/images/plus-dhobi.png') }}"></a></li>

            </ul>

        </div>

    </section>



    @if(!empty($schedule_details->meeting_view_point))

        <section>

            <div class="mapouter" style="height: auto;">

                {!! $schedule_details->meeting_view_point !!}

            </div>

            <div class="clearfix"></div>

        </section>

    @endif



    <section class="black-bg">

        <div class="container-fluid">


    <div class="rowsplit row split">
      <!-- LEFT -->
      <div class="col-lg-6 panel">
        <div class="left-inner">
        @if(!empty($schedule_details->register_link))
            <a href="{!! $schedule_details->register_link !!}" class="register-btn" target="_blank">Register</a>
        @else
            <a href="#" class="register-btn">Register</a>
        @endif

          <div class="left-desc">
            <p class="lead">Photowalk is open to everyone and one can click from any device.</p>

            <p>We also provide free Fujifilm Mirrorless Cameras during the photowalk that can be shared with the group, just bring your SD Card and retrieve the photos once the photowalk is over.</p>
          </div>
        </div>
      </div>

      <!-- DIVIDER -->
      <div class="col d-lg-flex align-items-center px-0">
        <div class="divider"></div>
      </div>

      <!-- RIGHT -->
      <div class="col-lg-5 panel">
        <div class="right-card">
          <h3>Who can attend</h3>

          <p>Photowalk is open to all above the Age of 18 Years</p>

          <p>Participant can click photos from any camera or mobile phones</p>

          <p>If you do not have a camera we will provide you with a mirrorless camera that will be shared with other participants during the photowalk. Please carry a SD Card to so you can take your clicked photos back. We would require a photo ID with address proof to be submitted at the time of the photowalk.</p>

          <p>Please note that photo walks are done on foot, so expect lots of walking.</p>
        </div>
      </div>
    </div>
  

        </div>

    </section>



    <section class="faq-se">

        <div class="container-fluid">

            <h3>FAQ’s</h3>

            @if ($faqs->isNotEmpty())

                @foreach ($faqs as $faq)

                    <p class="mb-0"><b>{{ $faq->question }}</b></p>

                    <p>{{ $faq->answer }}</p>

                @endforeach

            @endif

        </div>

    </section>


    @if (!empty($fromtAdBanner['schedule_details_ad_banner']) && $fromtAdBanner['schedule_details_ad_banner'] != '')

    @if(!empty($fromtAdBanner['schedule_details_ad_banner_link']) && $fromtAdBanner['schedule_details_ad_banner_link'] != '')

    <a target="_blank" href="{{ $fromtAdBanner['schedule_details_ad_banner_link'] }}">

    @else

    <a href="#">

    @endif

        <img class="w-100" src="{{ asset($fromtAdBanner['schedule_details_ad_banner']) }}">
        
    </a>

    @endif

@endsection

@section('page-script')

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.10.1/dist/sweetalert2.all.min.js"></script>

    <script type="text/javascript">

        $(document).ready(function() {

            $("#register_form").validate({

                ignore: [],

                errorElement: 'span',

                errorPlacement: function(error, element) {

                    if (element.attr("type") == "checkbox") {

                        $(element).parents('.form-group').append(error)

                    } else {

                        error.insertAfter(element);

                    }

                },

                rules: {

                    full_name: {

                        required: true

                    },

                    mobile: {

                        required: true

                    },

                    email: {

                        email: true,

                        required: true

                    },
                    office_email_id: {

                    email: true,
                    
                    required: true
                    
                    },

                    city: {

                        required: true

                    },

                    company_name: {

                        required: true

                    },

                    is_confirm: {

                        required: true

                    },

                    'g-recaptcha-response': {

                        required: true

                    }

                },

                messages: {

                    full_name: {

                        required: "Please enter your full name."

                    },

                    mobile: {

                        required: "Please enter your mobile numbwe.",

                    },

                    email: {

                        required: "Please enter your email-ID.",

                    },

                    city: {

                        required: "Please enter your city.",

                    },

                    company_name: {

                        required: "Please enter company name.",

                    },

                    is_confirm: {

                        required: "Please comfirm.",

                    },

                    'g-recaptcha-response': {

                        required: "Are you a robot?",

                    },

                },

                submitHandler: function(form) {

                    $('.register-btn').prop('disabled', true).html(

                        'Register <i class="fa fa-spinner fa-spin"></i>');

                    $.ajax({

                        type: "POST",

                        url: "{{ route('front.schedule.register.post') }}",

                        data: $(form).serialize(),

                        dataType: 'json',

                    }).done(function(data) {

                        $('.register-btn').prop('disabled', false).html('Register');

                        if (data.status == false) {
                            if(data.type == 'selectedCity'){

                                $('#register_form')[0].reset();
                                var cityModal = new bootstrap.Modal(document.getElementById('thankyoumodalCity'), {})
                                cityModal.show();

                            }else{
                                $('.error-label').text(data.message);
                                setTimeout(() => {
                                    $('.error-label').text('');
                                }, 4000);
                            }

                        } else {

                            $('.success-label').text(data.message);
                            $('#register_form')[0].reset();
                            setTimeout(() => {
                                $('.success-label').text('');
                            }, 4000);

                            var quoteModal = new bootstrap.Modal(document.getElementById('thankyouModal'), {})
                            quoteModal.show();
                            //Swal.fire("Thank You !", "Thank you for Registering!", "success");

                        }

                    }).fail(function(jqXHR, status, exception) {

                        if (jqXHR.status === 0) {

                            error = 'Not connected.\nPlease verify your network connection.';

                        } else if (jqXHR.status == 404) {

                            error = 'The requested page not found. [404]';

                        } else if (jqXHR.status == 500) {

                            error = 'Internal Server Error [500].';

                        } else if (exception === 'parsererror') {

                            error = 'Requested JSON parse failed.';

                        } else if (exception === 'timeout') {

                            error = 'Time out error.';

                        } else if (exception === 'abort') {

                            error = 'Ajax request aborted.';

                        } else {

                            error = 'Uncaught Error.\n' + jqXHR.responseText;

                        }

                        $('.register-btn').prop('disabled', false).html('Register');

                        $('.error-label').text(data.message);

                        setTimeout(() => {

                            $('.error-label').text('');

                        }, 4000);

                    });

                }

            });

        });

    </script>
 
    <!-- Modal -->
    <div class="thankyoumodal modal fade" id="thankyouModal" tabindex="-1" aria-labelledby="thankyouModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="mb-5"><img src="{{ asset('assets/front/images/Logo.png') }}" alt="logo"></div>
                    <h3 class="mb-5">Your Registration is confirmed !!!</h3>
                    <h5 class="mb-4">Be a part of the community</h5>
                    <a href="https://www.instagram.com/photowalksindia/?hl=en" target="_blank"><img src="{{ asset('assets/front/images/instagram_btn.png') }}" alt="" /></a>
                </div>
                
            </div>
        </div>
    </div>    


    <div class="thankyoumodalCity modal fade" id="thankyoumodalCity" tabindex="-1" aria-labelledby="thankyouModalCityLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    <div class="mb-5"><img src="{{ asset('assets/front/images/Logo.png') }}" alt="logo"></div>
                    <h2 class="mb-2">Oops!!!</h2>
                    <h3 class="mb-3" style="font-size: 20px;">Registration Limit Exceeded</h3>
                    <h3 class="mb-5" style="font-size: 20px;">Try for the next upcoming photowalk</h3>
                    <h5 class="mb-4">Be a part of the community</h5>
                    <a href="https://www.instagram.com/photowalksindia/?hl=en" target="_blank"><img src="{{ asset('assets/front/images/instagram_btn.png') }}" alt="" /></a>
                </div>
                
            </div>
        </div>
    </div> 



@endsection

