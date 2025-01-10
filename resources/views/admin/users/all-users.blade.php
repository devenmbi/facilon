@extends('layouts.admin-header')

@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <div class="row">
                <div class="col-xl-12 d-flex">
                    <div class="card radius-10 w-100">
                        <div class="card-body">
                            <div class="custom-align">
                                <h5 class="mb-1">All Users</h5>
                                <button class="btn btn-xs btn-primary ml-auto" onclick="window.location.href = '{{route('admin.add_new_user_show')}}'">Add New</button>
                            </div>
                            <div class="table-responsive mt-4">
                                <table class="table align-middle mb-0 table-hover" id="Transaction-History">
                                    <thead class="table-light">
                                        <tr>
                                            <th>Sr. No.</th>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $sr_no = 1;    
                                        @endphp
                                        
                                        @if(count($fetch_all_users) > 0)
                                            @foreach ($fetch_all_users as $all_users)
                                                <tr>
                                                    <td>{{ $sr_no++ }}</td>
                                                    <td>{{$all_users->unique_id}}</td>
                                                    <td>{{$all_users->full_name}}</td>
                                                    <td>{{$all_users->provider_id}}</td>
                                                    <td>
                                                        <a href="" class="btn btn-xs btn-primary" title="Edit"><i class="bx bx-pencil" aria-hidden="true"></i></a>

                                                        <a href="javascript:void(0)" class="btn btn-xs btn-danger" title="Delete" onclick="confirm_delete({{$all_users->id}})"><i class="bx bx-trash" aria-hidden="true"></i></a>

                                                        <script>
                                                            function confirm_delete(id) 
                                                            {
                                                                var confirmation = confirm("Are you sure you want to delete this service provider?");
                                                                
                                                                if(confirmation)
                                                                {
                                                                    window.location.href = "{{route('admin.delete_user_from_list')}}/"+id;
                                                                }
                                                            }
                                                        </script>

                                                        @if($all_users->status == 2)
                                                            <a href="{{route('admin.users_list_activate')}}/{{$all_users->id}}" class="btn btn-xs btn-warning" title="Deactivate Service Provider"><i class="bx bx-dislike" aria-hidden="true"></i></a>
                                                        @else
                                                            <a href="{{route('admin.users_list_deactivate')}}/{{$all_users->id}}" class="btn btn-xs btn-success" title="Activate Service Provider"><i class="bx bx-like" aria-hidden="true"></i></a>
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
				
