@extends('layouts.admin-header')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-xl-12 d-flex">
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <div>
                                <h5 class="mb-1">Edit Type Of Derivatives</h5>
                            </div>
                            <div class="card-content mt-4">
                                <form action="{{route('admin.edit_type_of_derivative')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                    <input type="hidden" name="derivative_id" value="{{ $fetch_derivatives_trading_service_details->id }}">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Title <span class="text-danger"> *</span></label>
                                                    <input type="text" class="form-control" name="title" placeholder="Enter Title" value="{{ $fetch_derivatives_trading_service_details->title }}">

                                                    @if ($errors->has('title'))
                                                        <span class="text-danger">{{ $errors->first('title') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="form-group row mt-3">
                                                <div class="col-md-12">
                                                    <label>Description <span class="text-danger"> *</span></label>
                                                    <textarea class="form-control" name="description">{{ $fetch_derivatives_trading_service_details->description }}</textarea>

                                                    @if ($errors->has('description'))
                                                        <span class="text-danger">{{ $errors->first('description') }}</span>
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
