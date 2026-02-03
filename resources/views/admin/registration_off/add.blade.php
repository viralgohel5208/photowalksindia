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
	            	<form action="{{ route('admin.registration_off.store') }}" name="addfrm" id="addfrm" method="POST" class="outer-repeater">
	            	    @csrf
                        <div class="row">
                            <div class="mb-3 col-4">

                                <label class="form-label" for="title">Event List</label>
                                <select class="form-control" name="event_id" id="event_id">
                                    <option value="">Please select event</option>
                                    @foreach ($events as $key => $event)
                                        @if(isset($schedule_off) && !empty($schedule_off))
                                            @if(in_array($event->id, $schedule_off))
                                                <option value="{{ $event->id }}" disabled="disabled">{{ $event->title }}</option>
                                            @else
                                                <option value="{{ $event->id }}" >{{ $event->title }}</option>
                                            @endif
                                        @else
                                            <option value="{{ $event->id }}" >{{ $event->title }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @error('event_id')
                                    <span class="invalid-feedback" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                        </div>

	                    <div class="d-flex flex-wrap gap-2 fr-button">
	                        <button type="submit" class="btn btn-primary waves-effect waves-light">Save</button>
	                        <a href="{{ route('admin.registration_off.list') }}" class="btn btn-secondary waves-effect">Cancel</a>
	                    </div>
	                </form>
	            </div>
	        </div>
	    </div>
	</div>

@endsection

@section('page-script')
<script src="{{ asset('assets/js/pages/task-create.init.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
        setTimeout(function(){ $(".invalid-feedback").hide(); }, 7000);
        $("#addfrm").validate({
            ignore: [],
            errorElement: 'span',
            errorPlacement: function (error, element) {
                if(element.hasClass('dropify')){
                    error.insertAfter(element.closest('div'));
                } else if(element.hasClass('select2-hidden-accessible')) {
                    error.insertAfter(element.next('span'));
                } else if (element.attr("type") == "radio") {
                    $(element).parents('.radio-list').append(error)
                } else if (element.attr("type") == "file") {
                    $(element).parents('.dropify-wrapper').append(error)
                } else {
                    error.insertAfter(element);
                }
            },
            rules: {
                event_id:{
                    required:true
                }
            },
            messages:{
                event_id:{
                    required:"The event field is required."
                }
            },
            submitHandler: function(e) {
                e.submit()
            }
        });
    });
</script>
@endsection

