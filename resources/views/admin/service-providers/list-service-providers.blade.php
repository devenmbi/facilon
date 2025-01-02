@extends('layouts.admin-header')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-xl-12 d-flex">
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <div class="custom-align">
                                <h5 class="mb-1">List Service Providers</h5>
                                <button class="btn btn-xs btn-primary ml-auto" onclick="window.location.href = '{{route('admin.view_add_service_provider')}}'">Add</button>
                            </div>
                            <div class="table-responsive mt-4">
                                <table class="table align-middle mb-0 table-hover" id="Transaction-History">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>Image</th>
                                            <th>Title</th>
                                            <th>Date</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $sr_no = 1;    
                                        @endphp
                                        
                                        @if(count($list_service_providers) > 0)
                                            @foreach ($list_service_providers as $list_service_providers_ind)
                                                <tr>
                                                    <td>{{ $sr_no++ }}</td>
                                                    <td><img src="{{asset('public/admin/assets/images/service-providers/'.$list_service_providers_ind->img_src)}}" style="width: 100px; height:100px;"></td>
                                                    <td>{{ $list_service_providers_ind->title }}</td>
                                                    <td>{{ date('d M Y', strtotime($list_service_providers_ind->created_at)) }}</td>
                                                    <td>
                                                        <a href="{{route('admin.view_service_provider_details')}}/{{$list_service_providers_ind->id}}" class="btn btn-xs btn-warning" title="Edit"><i class="bx bx-pencil" aria-hidden="true"></i></a>

                                                        <a href="javascript:void(0)" class="btn btn-xs btn-danger" title="Delete" onclick="confirm_delete({{$list_service_providers_ind->id}})"><i class="bx bx-trash" aria-hidden="true"></i></a>

                                                        <script>
                                                            function confirm_delete(id) 
                                                            {
                                                                var confirmation = confirm("Are you sure you want to delete this service provider?");
                                                                
                                                                if(confirmation)
                                                                {
                                                                    window.location.href = "{{route('admin.delete_service_provider')}}/"+id;
                                                                }
                                                            }
                                                        </script>

                                                        @if($list_service_providers_ind->status == 1)
                                                            <a href="{{route('admin.deactivate_service_provider')}}/{{$list_service_providers_ind->id}}" class="btn btn-xs btn-danger" title="Deactivate Service Provider"><i class="bx bx-dislike" aria-hidden="true"></i></a>
                                                        @else
                                                            <a href="{{route('admin.activate_service_provider')}}/{{$list_service_providers_ind->id}}" class="btn btn-xs btn-success" title="Activate Service Provider"><i class="bx bx-like" aria-hidden="true"></i></a>
                                                        @endif
                                                    </td>
                                                </tr>  
                                            @endforeach
                                        @else
                                            <tr>
                                                <td colspan="5" class="text-danger text-center">List Is Empty!</td>
                                            </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .custom-align 
        {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .custom-align h5 
        {
            margin: 0;
        }

        .custom-align button 
        {
            margin-left: auto;
        }
    </style>
@endsection
				
