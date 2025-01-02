@extends('layouts.frontend-header')
@section('content')
  <section class="derivatives-wrap-one custody">
    <div class="container">
      <div class="row">
        <div class="col-md-8 col-md-offset-2">
          <div class="derivatives-wrap-one-content">
            <div class="section-heading mb-40">
              <div class="sub-heading">{{ $fetch_custody_basic_details->title }}</div>
            </div>
            <p>
              {{ $fetch_custody_basic_details->description_one }}
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
                @foreach ($list_custody_services as $list_custody_services_ind)
                  <li>
                    <span><img src="{{asset('public/admin/assets/images/custody/services/'.$list_custody_services_ind->img_src)}}"></span> 
                    
                    <b>{{ $list_custody_services_ind->title }}</b>
                    
                    {{ $list_custody_services_ind->description }}
                  </li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- /Services Section -->
  <div id="section0" class="section derivatives-wrap pms-b-info">
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
          <div class="info-c">
            <p>
              {{ $fetch_custody_basic_details->description_two }}
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection