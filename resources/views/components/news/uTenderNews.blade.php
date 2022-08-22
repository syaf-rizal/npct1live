@extends('components.containers.appLanding')
@section('pageTitle', $title)
@section('content')
<section class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Tender</h1>
                <h6><a href="{{ url('/') }}">Home</a>  <i class="fas fa-angle-right"></i> News</h6>
            </div>
        </div>
    </div>
</section>
<section class="blog-grid" id="single-blog">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-12">
                @if(count($objTender)> 0)
                    @foreach($objTender as $tender)
                        <div class="single-blog">
                            <div style="background-image: url({{ Storage::url("images/760x480/" . $tender->thumb_file) }});background-size: cover; height: 420px; margin-bottom: 40px; display: block;">
                            </div>
                            <h2><a href="{{ url($tender->slug)}}">{{ $tender->title }}</a></h2>
                            <p class="meta"><span class="date"><i class="far fa-calendar-alt"></i> {{ $tender->posted_at }}</span></p>
                            <p>{{ $tender->short_description }}</p>
                        </div>
                    @endforeach
                    <nav aria-label="Page navigation example"> {{ $objTender->links() }}</nav>
                @else
                <div class="single-blog">
                    <h2><a href="{{ url('/') }}">No Tender Active</a></h2>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection