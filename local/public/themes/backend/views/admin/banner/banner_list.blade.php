<!-- begin #content -->

<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="javascript:;">Dashboar</a></li>
        {{-- <li class="breadcrumb-item"><a href="javascript:;">Settings</a></li> --}}
        <li class="breadcrumb-item active">Banners</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    
    <h1 class="page-header">BANNER <small>LIST</small></h1>
    @if(Session::has('message-type'))
    
        <div class="alert alert-{{ Session::get('message-type') }}"> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        {{ Session::get('message') }}
        </div>
    @endif

    <!-- end page-header -->

    <!-- begin row -->
    
    <div class="row">
        <!-- begin col-4 -->
        {{-- <div class="col-xl-4">
            <!-- begin panel -->
            <div class="panel panel-inverse" data-sortable-id="tree-view-1">
                <div class="panel-heading">
                    <h4 class="panel-title">Group Tree</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>

                    </div>
                </div>
                <div class="panel-body">
                    
                   
                </div>
            </div>
            <!-- end panel -->
        </div> --}}
        <!-- end col-4 -->
        <!-- begin col-8 -->
        
        <div class="col-xl-12">
            
            <div class="panel panel-inverse" data-sortable-id="tree-view-1">
                <div class="panel-heading">
                    <h4 class="panel-title">BANNERS</h4>
                    <div class="panel-heading-btn">
                        <a class="btn btn-primary pull-right" href="{{route('addBannerLayout')}}" style="background-color:#0f0f0f;border: none;">Add New</a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>

                    </div>
                </div>
                <div class="panel-body">
                    
                    <div class="tab-content">

                        <!-- begin tab-pane -->
                        {{-- <div id="Grid"></div> --}}
                        

                            {{-- <table id="grid1"></table> --}}
                            <table id="data-table-default" class="table table-striped table-bordered table-td-valign-middle">
                                <thead>
                                    <tr>
                                        <th width="1%"></th>
                                        <th class="text-nowrap">Banner</th>
                                        <th class="text-nowrap">Size</th>
                                        <th class="text-nowrap">Created Date</th>
                                        <th class="text-nowrap">Action</th>
                                        {{-- <th class="text-nowrap">Created By</th> --}}


                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $i=1;
                                    @endphp
                                    @foreach($bannerLists as $bannerList)
                                    <tr>
                                        <td>{{$i++}}</td>
                                        <td> <img id="output" src="{{($bannerList->banner)? BASE_URL.ITEM_IMG_PATH.'/'.$bannerList->banner : BACKEND.'img/product/default.jpg'}}"
                                            width="60px" height="40px"/></td>
                                        <td>{{$bannerList->banner_size}}</td>
                                        <td>{{date('d-m-y', strtotime($bannerList->created_at))}}</td>
                                        <td><a href="{{route('editBannerLayout', $bannerList->id)}}" class="btn btn-primary">Edit</a>
                                        
                                            
                                            <a href="{{route('deleteBanner', $bannerList->id)}}" class="btn btn-danger">Delete</a></td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>


                        

                </div>
                <!-- end col-8 -->

                
            </div>


        </div>
    </div>

</div>

<!-- end row -->
{{-- </div> --}}
<!-- end #content -->
