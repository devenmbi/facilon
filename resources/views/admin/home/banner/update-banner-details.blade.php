@extends('layouts.admin-header')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-xl-12 d-flex">
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <div>
                                <h5 class="mb-1">Banner Details</h5>
                            </div>
                            <div class="card-content mt-4">
                                <form action="{{route('admin.update_banner_details')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Title <span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{ $fetch_banner_details->title }}">

                                                    @if ($errors->has('title'))
                                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Sub-Title One <span class="text-danger"> *</span></label>
                                                    <textarea class="form-control" name="sub_title_one">{{ $fetch_banner_details->sub_title_one }}</textarea>

                                                    @if ($errors->has('sub_title_one'))
                                                        <span class="text-danger">{{ $errors->first('sub_title_one') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Sub-Title Two <span class="text-danger"> *</span></label>
                                                    <textarea class="form-control" name="sub_title_two">{{ $fetch_banner_details->sub_title_two }}</textarea>

                                                    @if ($errors->has('sub_title_two'))
                                                        <span class="text-danger">{{ $errors->first('sub_title_two') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Background Image <span class="text-danger"> *</span></label> <a href="{{asset('public/admin/assets/images/banner/'.$fetch_banner_details->img_src)}}" class="btn btn-sm btn-primary mb-2" target="_blank">View Image</a>

                                                    <input type="file" class="form-control" name="img_src" accept="image/*">
                                                    <input type="hidden" name="old_img_src" value="{{ $fetch_banner_details->img_src }}">

                                                    @if ($errors->has('img_src'))
                                                        <span class="text-danger">{{ $errors->first('img_src') }}</span>
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
