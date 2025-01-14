@extends('layouts.frontend-header')
@section('content')
    <div id="fullpage">
        <div id="section0" class="section slider-area fp-auto-height-responsive">
        	<div id="hero" class="hero" style="background-image:url({{asset('admin/assets/images/banner/'.$fetch_banner_details->img_src)}});">
        		<div class="container">
        			<div class="row">
        				<div class="col-md-5">
        					<div class="layer-1-1 wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
        						<h2 class="title1">
        						    <span>{{ $fetch_banner_details->title }}</span><br><br/>
        						    {{ $fetch_banner_details->sub_title_one }}
        						</h2>
        					</div>
        					<blockquote class="wow slideInUp" data-wow-duration="4s" data-wow-delay=".4s">
        						<!--<p><span>Welcome to Facilon</span> Marketplace to appoint Service Providers in India</p>-->
        						<p>{{ $fetch_banner_details->sub_title_two }}</p>
        					</blockquote>
        				</div>
        			</div>
        		</div>
        	</div>
        </div>
        <div id="section1" class="section fp-auto-height-responsive purpose our-purpose">
        	<div class="container">
        		<div class="section-heading mb-40">
        			<div class="sub-heading">Begin your journey with Facilon</div>
        		</div>
        		<div class="row">
        		    @php $sr_no = 1; @endphp

        		    @foreach($list_key_points AS $list_key_points_ind)
            		    <div class="col-md-4 col-sm-12">
            				<div class="cat-box wow fadeInUp">
            					<a href="{{ $list_key_points_ind->url }}" class="bg-tutu">
            						<div class="icon-box"><img src="{{asset('admin/assets/images/key-points/'.$list_key_points_ind->img_src)}}" alt="icon"></div>
            						<strong class="title">{{ $list_key_points_ind->title }}</strong>
            						<span class="value">{{ $sr_no }}</span>
            					</a>
            				</div>
            			</div>

            			 @php $sr_no++; @endphp
            		@endforeach
        		</div>
        	</div>
        </div>
@endsection
