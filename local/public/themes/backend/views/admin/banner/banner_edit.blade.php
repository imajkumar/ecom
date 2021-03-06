<!-- begin #content -->

<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="javascript:;">Dashboard</a></li>
        {{-- <li class="breadcrumb-item"><a href="javascript:;">Settings</a></li> --}}
        <li class="breadcrumb-item active">Edit Banner</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header"> EDIT<small>BANNER</small></h1>
    
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
        
        <!-- end col-4 -->
        <!-- begin col-8 -->
        <div class="col-xl-12">
            <div class="panel panel-inverse" data-sortable-id="tree-view-1">
                <div class="panel-heading">
                    <h4 class="panel-title">EDIT BANNER</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>

                    </div>
                </div>
                <div class="panel-body">
                   
                    <!-- end nav-tabs -->
                    <!-- begin tab-content -->
                    {{-- <div class="panel panel-inverse" data-sortable-id="form-stuff-12"> --}}
                    <div id="errorMsg" class="alert alert-block" style="display:none"></div>
                    <!-- begin panel-heading -->
                    
                    <div class="tab-content">

                    <form class="form-horizontal" id="updateBanner" method="post" action="{{route('updateBanner', $banner->id)}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-3 col-sm-8">

                                    <div class="form-group row m-b-15">
                                        <img id="output" src="{{($banner->banner)? BASE_URL.ITEM_IMG_PATH.'/'.$banner->banner : BACKEND.'img/product/default.jpg'}}" width="100%" height="25%"/>
                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-8">

                                    <div class="form-group row m-b-15">
                                        <label class="col-md-12 col-sm-4 col-form-label" for="banner">Banner* :</label>
                                        
                                        <div class="col-md-12 col-sm-8">
                                            <input type="file" class="form-control" accept="image/*" onchange="loadFile(event)" id="banner" accept="image/*" name="banner" placeholder="Required" data-parsley-required="true">
                                            <input type="hidden" name="old_banner" value="{{$banner->banner}}">
                                            
                                        </div>
                                        
                                        
                                    </div>
                                    
                                </div>
                                
                                <div class="col-md-3 col-sm-8">
                                    <div class="form-group row m-b-15">
                                        <label class="col-md-12 col-sm-4 col-form-label" for="size">Size :</label>
                                        <div class="col-md-12 col-sm-8">
                                            <select class="form-control @error('size') is-invalid @enderror" type="text" id="size" name="size" placeholder="Size">
                                                <option value="">Select Banner Size</option>

                                                @foreach($bannerSizes as $bannerSize)

                                                    <option value="{{$bannerSize->id}}" {{($banner->size == $bannerSize->id)? 'selected':''}}>{{$bannerSize->banner_size}}</option>
                                                @endforeach

                                            </select>
                                            
                                        </div>
                                    </div>

                                </div>

                                <div class="col-md-3 col-sm-8">
                                    <div class="form-group row m-b-15">
                                        <label class="col-md-12 col-sm-4 col-form-label">&nbsp;</label>
                                        <div class="col-md-12 col-sm-8">
                                            <fieldset>
                                                <button type="submit" id="updateBannerBtn" class="btn btn-sm btn-primary m-r-5 ">SAVE CHANGES</button>
                                                <button type="reset" class="btn btn-sm btn-default">CANCEL</button>
                                            </fieldset>
                                        </div>
                                    </div>
                                    
                                    
                                </div>


                        
                                
                            </form>

                       
                        
                    </div>
                    <!-- end tab-pane -->

                    

                </div>
                <!-- end col-8 -->
               
                
            </div>
            

        </div>
    </div>

</div>

<!-- end row -->
{{-- </div> --}}
<!-- end #content -->
<script>
    var loadFile = function(event) {
        var reader = new FileReader();
        reader.onload = function(){
        var output = document.getElementById('output');
        output.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    };
    </script>