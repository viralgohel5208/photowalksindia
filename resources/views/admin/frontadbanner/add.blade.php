@extends('layouts.app')
@if(isset($page_title) && $page_title!='')
    @section('title', $page_title.' | '.config('app.name'))
@else
    @section('title', config('app.name'))
@endif
@section('page-style')
    <link rel="stylesheet" href="{{ asset('assets/dropify/dist/css/dropify.min.css') }}">
@endsection
@section('breadcrumb')
	@include('layouts.includes.breadcrumb')
@endsection
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('admin.frontadbanner.store') }}" name="addfrm" id="addfrm" method="POST" class="outer-repeater" enctype="multipart/form-data">
                    @csrf
                    <h3>Front Ad Banner</h3>
                    <hr />
                    <div class="row">
                        <div class="mb-3 col-6">
                            <label class="form-label" for="schedule_details_ad_banner">Schedule Details Ad Banner</label>
                                <input type="file" class="dropify" id="schedule_details_ad_banner" name="schedule_details_ad_banner" data-default-file="{{ !empty($settingData['schedule_details_ad_banner']) ? asset($settingData['schedule_details_ad_banner']) : config('frontAdbanner.schedule_details_ad_banner') }}"  data-allowed-file-extensions="png svg gif jpg jpeg" data-show-errors="true" />
                                @error('schedule_details_ad_banner')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                        </div>
                        <div class="mb-3 col-6">
                            <label class="form-label" for="contact_us_ad_banner">Contact Us Ad Banner</label>
                                <input type="file" class="dropify" id="contact_us_ad_banner" name="contact_us_ad_banner" data-default-file="{{ !empty($settingData['contact_us_ad_banner']) ? asset($settingData['contact_us_ad_banner']) : config('frontAdbanner.contact_us_ad_banner') }}"  data-allowed-file-extensions="png svg gif jpg jpeg" data-show-errors="true" />
                                @error('contact_us_ad_banner')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                        </div>
                    
                        <div class="mb-3 col-3">
                            <label class="form-label" for="schedule_details_ad_banner_link">Schedule Details Ad Banner Url:</label>
                            <input type="text" class="form-control text-uppercase"  name="schedule_details_ad_banner_link" id="schedule_details_ad_banner_link" value="{{ old( 'schedule_details_ad_banner_link',!empty($settingData['schedule_details_ad_banner_link']) ? $settingData['schedule_details_ad_banner_link'] : config('companySetting.schedule_details_ad_banner_link')) }}" maxlength="150">
                            @error('schedule_details_ad_banner_link')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                        <div class="mb-3 col-3">
                            <label class="form-label" for="contact_us_ad_banner_link">Contact Us Ad Banner Url:</label>
                            <input type="text" class="form-control text-uppercase"  name="contact_us_ad_banner_link" id="contact_us_ad_banner_link" value="{{ old( 'contact_us_ad_banner_link',!empty($settingData['contact_us_ad_banner_link']) ? $settingData['contact_us_ad_banner_link'] : config('companySetting.contact_us_ad_banner_link')) }}" maxlength="150">
                            @error('contact_us_ad_banner_link')
                                <span class="invalid-feedback" role="alert">
                                    {{ $message }}
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex flex-wrap gap-2 fr-button">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                            Save
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('page-script')
    <script src="{{ asset('assets/dropify/dist/js/dropify.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jquery.repeater/jquery.repeater.min.js') }}"></script>
    <script src="{{ asset('assets/js/pages/task-create.init.js') }}"></script>
    <script type="text/javascript"> 
        $('.edit-remove-attend').on('click', function (e) {
            $(this).parents('.attend-edit-section').remove();
        });
        $(document).ready(function() {
            $('.dropify').dropify();
            setTimeout(function(){ $(".invalid-feedback").hide(); }, 7000);
        });
    </script>
@endsection
