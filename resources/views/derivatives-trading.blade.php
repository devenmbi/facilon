@extends('layouts.frontend-header')
@section('content')
    <section class="derivatives-wrap-one">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="derivatives-wrap-one-content">
                        <div class="section-heading mb-40">
                            <div class="sub-heading">{{ $fetch_derivatives_trading_basic_details->title }}</div>
                        </div>
                        <p>
                            {{ $fetch_derivatives_trading_basic_details->description_one }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div id="section0" class="section derivatives-wrap trading-sec-1">
        <div class="container">
            <!--  <div class="section-heading mb-40">
                <div class="sub-heading">Derivatives Trading</div>
                </div>
                <div class="row">
                <div class="col-md-12">
                <div class="">
                    <p>"Trading in Derivatives" offered by brokers in India refers to the service provided by brokerage firms that allows investors to trade derivative instruments on Indian stock exchanges. Derivatives are financial contracts whose value is derived from the value of an underlying asset, such as stocks, bonds, commodities, currencies, or market indices. Here's a detailed overview of what this service typically entails:</p>
                </div>
                </div>
                </div> -->
            <div class="row">
                <div class="col-md-12">
                    <div class="derivatives-content">
                        <div class="derivatives-box">
                            <!--  <ul>
                                <li>
                                <span><img src="images/icon/derivative.png"></span> <b>Types of Derivatives:</b> Brokers in India offer trading facilities for various types of derivatives, including:
                                </li>
                                </ul> -->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="derivatives-title">
                                        <h3>Types of Derivatives</h3>
                                        <p>Brokers in India offer trading facilities for various types of derivatives, including:</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                @php
                                    $sr_no = 1;
                                @endphp
                                @foreach($list_types_of_derivatives as $list_types_of_derivatives_ind)
                                    <div class="col-md-4">
                                        <div class="features-item">
                                            <div class="features-icon">
                                                {{ $sr_no }}
                                            </div>
                                            <div class="features-info">
                                                <h4 class="title">{{ $list_types_of_derivatives_ind->title }}</h4>
                                                <p>{{ $list_types_of_derivatives_ind->description }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    @php
                                        $sr_no++;
                                    @endphp
                                @endforeach
                            </div>
                            <ul>
                                @foreach($list_derivatives_trading_services as $list_derivatives_trading_services_ind)
                                    <li>
                                        <span><img src="{{asset('public/admin/assets/images/derivatives-trading/services/'.$list_derivatives_trading_services_ind->img_src)}}"></span> 
                                        
                                        <b>{{ $list_derivatives_trading_services_ind->title }}</b>
                                        
                                        {{ $list_derivatives_trading_services_ind->description }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row pms-b-info">
                <div class="col-md-12">
                    <div class="info-c">
                        {{-- <p>Before engaging in derivative trading with a broker in India, investors should thoroughly understand the risks associated with derivatives and familiarize themselves with derivative trading strategies. It's essential to choose a reputable broker with a robust trading platform, competitive pricing, reliable customer support, and a strong regulatory track record.</p>
                        <p>Additionally, investors should carefully read the risk disclosure documents provided by brokers and consider seeking advice from financial professionals if needed.</p> --}}

                        {{ $fetch_derivatives_trading_basic_details->description_two }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection