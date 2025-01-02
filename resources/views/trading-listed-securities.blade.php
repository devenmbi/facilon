@extends('layouts.frontend-header')
@section('content')
    <section class="derivatives-wrap-one trading-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="derivatives-wrap-one-content">
                        <div class="section-heading mb-40">
                            <div class="sub-heading">{{ $fetch_trading_listed_securities_basic_details->title }}</div>
                        </div>
                        <p>
                            {{ $fetch_trading_listed_securities_basic_details->description_one }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section -->
    <section id="services" class="services trading-sec-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="derivatives-content">
                        <div class="derivatives-box ">
                            <ul>
                                @foreach($list_trading_listed_securities_services as $list_trading_listed_securities_services_ind)
                                    <li>
                                        <span><img src="{{asset('public/admin/assets/images/trading-listed-securities/services/'.$list_trading_listed_securities_services_ind->img_src)}}"></span> 
                                        
                                        <b>{{ $list_trading_listed_securities_services_ind->title }}</b>
                                        
                                        {{ $list_trading_listed_securities_services_ind->description }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="section0" class="section derivatives-wrap pms-b-info">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="info-c">
                        <p>
                            {{ $fetch_trading_listed_securities_basic_details->description_two }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection