@extends('layouts.front_app')

@section('title', $galleryPageContent->page_title)
@section('meta_keywords', $galleryPageContent->meta_tag)
@section('meta_description', $galleryPageContent->meta_description)

@section('content')
<section>
    <div class="container-fluid">
         <div class="gallery">
            <div class="grid-container">
                @forelse ($gallery as $key => $img)
                    <div>
                    <a class="fancybox" rel="group" href="{{ asset('uploads/gallery/'.$img->image) }}" data-popup="lightbox">
                    
                        <img class='grid-item grid-item-{{ $key+1 }}' src="{{ asset('uploads/gallery/'.$img->image) }}" alt=''>
                    </a>
                    </div>
                @empty
                    <div class="text-center">
                        <h4>No Data Found.</h4>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
</section>
@endsection
