@extends('layouts.admin-header')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-xl-12 d-flex">
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <div>
                                <h5 class="mb-1">Portfolio Investment Scheme Basic Details</h5>
                            </div>
                            <div class="card-content mt-4">
                                <form action="{{route('admin.update_portfolio_investment_scheme_basic_details')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Title <span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{ $fetch_portfolio_investment_scheme_basic_details->title }}">

                                                    @if ($errors->has('title'))
                                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Description One <span class="text-danger"> *</span></label>
                                                    <textarea class="form-control" name="description_one">{{ $fetch_portfolio_investment_scheme_basic_details->description_one }}</textarea>

                                                    @if ($errors->has('description_one'))
                                                        <span class="text-danger">{{ $errors->first('description_one') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Description Two <span class="text-danger"> *</span></label>
                                                    <textarea class="form-control" name="description_two">{{ $fetch_portfolio_investment_scheme_basic_details->description_two }}</textarea>

                                                    @if ($errors->has('description_two'))
                                                        <span class="text-danger">{{ $errors->first('description_two') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Background Image <span class="text-danger"> *</span></label> <a href="{{asset('public/admin/assets/images/portfolio-investment-scheme/'.$fetch_portfolio_investment_scheme_basic_details->bg_img_src)}}" class="btn btn-sm btn-primary mb-2" target="_blank">View Image</a>

                                                    <input type="file" class="form-control" name="bg_img_src" accept="image/*">
                                                    <input type="hidden" name="old_bg_img_src" value="{{ $fetch_portfolio_investment_scheme_basic_details->bg_img_src }}">

                                                    @if ($errors->has('bg_img_src'))
                                                        <span class="text-danger">{{ $errors->first('bg_img_src') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <button type="submit" name="submit" class="btn btn-primary btn-sm waves-effect waves-light">Submit</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>	
@endsection
