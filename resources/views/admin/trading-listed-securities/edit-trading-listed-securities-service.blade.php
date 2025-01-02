@extends('layouts.admin-header')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-xl-12 d-flex">
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <div>
                                <h5 class="mb-1">Edit Trading In Listed Securities Service</h5>
                            </div>
                            <div class="card-content mt-4">
                                <form action="{{route('admin.edit_trading_listed_securities_service')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                    <input type="hidden" name="service_id" value="{{ $fetch_trading_listed_securities_service_details->id }}">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Title <span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{ $fetch_trading_listed_securities_service_details->title }}">

                                                    @if ($errors->has('title'))
                                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Description <span class="text-danger"> *</span></label>
                                                    <textarea class="form-control" name="description">{{ $fetch_trading_listed_securities_service_details->description }}</textarea>

                                                    @if ($errors->has('description'))
                                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Image <span class="text-danger"> *</span> <a href="{{asset('public/admin/assets/images/trading-listed-securities/services/'.$fetch_trading_listed_securities_service_details->img_src)}}" class="btn btn-sm btn-primary mb-2" target="_blank">View Image</a></label>
                                                    <input type="file" class="form-control" name="img_src" accept="image/*">
                                                    <input type="hidden" name="old_img_src" value="{{ $fetch_trading_listed_securities_service_details->img_src }}">

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
