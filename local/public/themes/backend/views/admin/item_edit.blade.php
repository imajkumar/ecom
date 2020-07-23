<!-- begin #content -->

<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="javascript:;">Dashboar</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Settings</a></li>
        <li class="breadcrumb-item active">Item Master</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    <h1 class="page-header">ITEM <small>MASTER</small></h1>
    @if(Session::has('message-type'))
    
        <div class="alert alert-{{ Session::get('message-type') }}"> 
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        {{ Session::get('message') }}
        </div>
    @endif
    <div id="errorModelMsg" class="alert alert-block" style="display:none"></div>
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
                    <h4 class="panel-title">ITEM SETTING</h4>
                    <div class="panel-heading-btn">
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>

                    </div>
                </div>
                <div class="panel-body">
                    <div class="col-xl-12" style="background-color: #e4e7e8;">
                        <!-- begin nav-tabs -->
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a href="#default-tab-1" data-toggle="tab" class="nav-link active">
                                    <span class="d-sm-none">Tab 1</span>
                                    <span class="d-sm-block d-none">ITEM LIST</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#addItem" data-toggle="tab" class="nav-link">
                                    <span class="d-sm-none">Tab 2</span>
                                    <span class="d-sm-block d-none">ADD ITEM</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#purchasetab" data-toggle="tab" class="nav-link">
                                    <span class="d-sm-none">Tab 3</span>
                                    <span class="d-sm-block d-none">PURCHASE</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#salestab" data-toggle="tab" class="nav-link">
                                    <span class="d-sm-none">Tab 3</span>
                                    <span class="d-sm-block d-none">SALES</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#gallerytab" data-toggle="tab" class="nav-link">
                                    <span class="d-sm-none">Tab 3</span>
                                    <span class="d-sm-block d-none">GALLERY</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- end nav-tabs -->
                    <!-- begin tab-content -->
                    <div class="panel panel-inverse" data-sortable-id="form-stuff-12">
                       
                    
                    <!-- begin panel-heading -->
                    {{-- <div class="panel-heading">
                            <h4 class="panel-title">Add item </h4>
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
        
                            </div>
                        </div> --}}
                    <div class="tab-content">

                        <!-- begin tab-pane -->
                        <div class="tab-pane fade active show" id="default-tab-1">

                            {{-- <table id="grid1"></table> --}}
                            <table id="data-table-default" class="table table-striped table-bordered table-td-valign-middle">
                                <thead>
                                    <tr>
                                        <th width="1%"></th>

                                        {{-- <th class="text-nowrap">Image</th> --}}
                                        <th class="text-nowrap">Item name</th>
                                        <th class="text-nowrap">Group name</th>
                                        <th class="text-nowrap">Open quantity</th>
                                        <th class="text-nowrap">Min quantity</th>


                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="odd gradeX">
                                        <td width="1%" class="f-s-600 text-inverse">1</td>
                                        <td>{{$item->item_name}}</td>
                                        <td>{{$item->g_name}}</td>
                                        <td>{{$item->open_qty}}</td>
                                        <td>{{$item->min_qty}}</td>
                                        
                                    </tr> 

                                </tbody>
                            </table>


                        </div>
                        <!-- end tab-pane -->
                        <!-- begin tab-pane -->
                        <div class="tab-pane fade  show" id="addItem">
                            <!-- begin row -->
                            <div class="row">
                                <!-- begin col-12 -->
                                <div class="col-12">
                                    <!-- begin panel -->


                                    <!-- end panel-heading -->
                                    <!-- begin panel-body -->


                                    <div class="panel-body">
                                        <?php
                                        $dataObjArr = getUnderGroup();

                                        ?>

                                    <form class="form-horizontal" id="editItemMaster" action="{{route('updateItem', $item->item_id)}}" data-parsley-validate="true" name="demo-form" novalidate="">
                                            @csrf
                                            @method('POST')
                                            <div class="row">
                                                <div class="col-md-4 col-sm-8">

                                                    <div class="form-group row m-b-15">
                                                        <label class="col-md-12 col-sm-4 col-form-label" for="name">Name * :</label>
                                                        <div class="col-md-12 col-sm-8">
                                                        <input class="form-control" type="text" id="name" name="item_name" value="{{$item->item_name}}" placeholder="Required" data-parsley-required="true">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row m-b-15">
                                                        <label class="col-md-12 col-sm-4 col-form-label" for="code">Code :</label>
                                                        <div class="col-md-12 col-sm-8">
                                                            <input type="text" class="form-control" value="" id="code" name="code" placeholder="code" />
                                                        </div>
                                                    </div>

                                                    {{-- <h2>Stock Details</h2> --}}
                                                    <div class="form-group row m-b-15">
                                                        <label class="col-md-12 col-sm-4 col-form-label" for="openingqty">Openinig Qty:</label>
                                                        <div class="col-md-12 col-sm-8">
                                                            <input class="form-control" type="text" id="openingqty" name="open_qty" value="{{$item->open_qty}}" placeholder="Opening qty">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row m-b-15">
                                                        <label class="col-md-12 col-sm-4 col-form-label" for="minimumqty">Minimum Qty:</label>
                                                        <div class="col-md-12 col-sm-8">
                                                            <input class="form-control" type="text" id="minimumqty" name="min_qty" value="{{$item->min_qty}}" placeholder="Minimum Qty">
        
                                                        </div>
                                                    </div>
                                           

                                                </div>
                                                <div class="col-md-4 col-sm-8">
                                                    <div class="form-group row m-b-15">
                                                        <label class="col-md-12 col-sm-4 col-form-label" for="description">Description * :</label>
                                                        <div class="col-md-12 col-sm-8">
                                                            <input class="form-control" type="text" id="description" name="description" placeholder="Description" data-parsley-required="true">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row m-b-15">
                                                        <label class="col-md-12 col-sm-4 col-form-label" for="message">HSN :</label>
                                                        <div class="col-md-12 col-sm-8">
                                                            <input class="form-control" type="text" id="hsn" name="hsn" placeholder="HSN">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row m-b-15">
                                                        <label class="col-md-12 col-sm-4 col-form-label" for="openingqty">Stock Unit:</label>
                                                        <div class="col-md-12 col-sm-8">
                                                            <select class="form-control" id="openingqty" name="openingqty" placeholder="Opening qty">
                                                                <option>select</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    

                                                </div>
                                                <div class="col-md-4 col-sm-8">
                                                    <div class="form-group row m-b-15">
                                                        <label class="col-md-12 col-sm-4 col-form-label" for="group">Group :</label>
                                                        <div class="col-md-12 col-sm-8">
                                                            <select class="form-control" id="group" name="group_id" value="{{$item->g_name}}" data-parsley-required="true" placeholder="Group">
                                                                @foreach($dataObjArr as $groupData)
                                                                <option value="{{$groupData->g_id}}" {{($groupData->g_id==$item->g_id)? 'selected':''}}>{{$groupData->g_name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row m-b-15">
                                                        <label class="col-md-12 col-sm-4 col-form-label" for="status">Status :</label>
                                                        <div class="col-md-12 col-sm-8">
                                                            <select class="form-control" id="status" name="status" placeholder="Status">
                                                                <option value="1">Active</option>
                                                                <option value="0">Deactive</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row m-b-15">
                                                        <label class="col-md-12 col-sm-4 col-form-label" for="openingvalue">Openinig value:</label>
                                                        <div class="col-md-12 col-sm-8">
                                                            <input class="form-control" type="text" id="openingvalue" name="openingvalue" placeholder="Opening value">
        
                                                        </div>
                                                    </div>
                                                    


                                                </div>
                                            </div>
                                       </div>
                                    <!-- end panel-body -->


                                    <!-- end panel -->
                                </div>
                                <!-- end col-6 -->
                            </div>
                            <!-- end row -->

                        </div>
                        <!-- end tab-pane -->
                        <!-- begin tab-pane -->
                        <div class="tab-pane fade  show" id="purchasetab">
                            {{-- <div class="row"> --}}
                                
                                   
                                {{-- </div> --}}
                                <!-- begin col-12 -->
                                <div class="col-12">
                                    <!-- begin panel-body -->
                                    <div class="panel-body">
                                        <div class="row">
                                        <div class="col-md-4 col-sm-8">
                                            <div class="form-group row m-b-15">
                                                <label class="col-md-12 col-sm-4 col-form-label" for="rate">Rate * :</label>
                                                <div class="col-md-12 col-sm-8">
                                                    <input class="form-control" type="text" id="rate" name="rate" placeholder="Rate" data-parsley-required="true">
                                                </div>
                                            </div>
                                            
                                            <div class="form-group row m-b-15">
                                                <label class="col-md-12 col-sm-4 col-form-label" for="taxregister">Column In Tax Register :</label>
                                                <div class="col-md-12 col-sm-8">
                                                    <select class="form-control" id="taxregister" name="taxregister">
                                                        <option></option>
                                                    </select>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="col-md-4 col-sm-8">
                                            
                                            <div class="form-group row m-b-15">
                                                <label class="col-md-12 col-sm-4 col-form-label" for="unit">Unit * :</label>
                                                <div class="col-md-12 col-sm-8">
                                                    <input class="form-control" type="text" id="unit" name="unit" placeholder="Unit" data-parsley-required="true">
                                                </div>
                                            </div>
                                            <div class="form-group row m-b-15">
                                                <label class="col-md-12 col-sm-4 col-form-label" for="punit_sunit">Purchase unit - Sale unit :</label>
                                                <div class="col-md-12 col-sm-8">
                                                    <input class="form-control" type="text" id="punit_sunit" name="punit_sunit" placeholder="1.00">
                                                </div>
                                            </div>
    
                                        </div>
                                        <div class="col-md-4 col-sm-8">
                                            
                                            <div class="form-group row m-b-15">
                                                <label class="col-md-12 col-sm-4 col-form-label" for="account">Account :</label>
                                                <div class="col-md-12 col-sm-8">
                                                    <input class="form-control" type="text" id="account" name="account" placeholder="Account">
                                                </div>
                                            </div>
                                            
    
    
                                        </div>
                                    </div>


                                </div>
                                    <!-- end panel-body -->
                            </div>
                                <!-- end col-12 -->
                        </div>
                        
                        <!-- begin tab-pane -->
                        <div class="tab-pane fade  show" id="salestab">
                            <div class="row">
                                <!-- begin col-12 -->
                                <div class="col-12">
                                    <!-- begin panel-body -->
                                    <div class="panel-body">

                                        <div class="row">
                                            <div class="col-md-4 col-sm-8">
                                                <div class="form-group row m-b-15">
                                                    <label class="col-md-12 col-sm-4 col-form-label" for="rate">Rate * :</label>
                                                    <div class="col-md-12 col-sm-8">
                                                        <input class="form-control" type="text" id="rate" name="rate" placeholder="Rate" data-parsley-required="true">
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group row m-b-15">
                                                    <label class="col-md-12 col-sm-4 col-form-label" for="taxregister">Column In Tax Register :</label>
                                                    <div class="col-md-12 col-sm-8">
                                                        <select class="form-control" id="taxregister" name="taxregister">
                                                            <option></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="col-md-4 col-sm-8">
                                                
                                                <div class="form-group row m-b-15">
                                                    <label class="col-md-12 col-sm-4 col-form-label" for="unit">Unit * :</label>
                                                    <div class="col-md-12 col-sm-8">
                                                        <input class="form-control" type="text" id="unit" name="unit" placeholder="Unit" data-parsley-required="true">
                                                    </div>
                                                </div>
                                                <div class="form-group row m-b-15">
                                                    <label class="col-md-12 col-sm-4 col-form-label" for="punit_sunit">Purchase unit - Sale unit :</label>
                                                    <div class="col-md-12 col-sm-8">
                                                        <input class="form-control" type="text" id="punit_sunit" name="punit_sunit" placeholder="1.00">
                                                    </div>
                                                </div>
        
                                            </div>
                                            <div class="col-md-4 col-sm-8">
                                                
                                                <div class="form-group row m-b-15">
                                                    <label class="col-md-12 col-sm-4 col-form-label" for="account">Account :</label>
                                                    <div class="col-md-12 col-sm-8">
                                                        <input class="form-control" type="text" id="account" name="account" placeholder="Account">
                                                    </div>
                                                </div>
                                                
        
        
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end panel-body -->
                                </div>
                            </div>
                            
                            <!-- end col-12 -->
                        </div>

                        <!-- end tab-pane -->
                        <!-- begin tab-pane -->
                        <div class="tab-pane fade  show" id="gallerytab">
                            <div class="row">
                                <!-- begin col-12 -->
                                <div class="col-12">
                                    <!-- begin panel-body -->
                                    <div class="panel-body">

                                        <!-- begin page-header -->
                                        <h1 class="page-header">IMAGES <small></small></h1>

                                        <!-- end page-header -->
                                        <!-- begin #options -->
                                        <div id="options" class="m-b-10">
                                        <a class="btn btn-primary pull-right" href="{{route('addGalleryImage', $item->item_id)}}">Add image</a></td>

                                            <span class="gallery-option-set" id="filter" data-option-key="filter">
                                                {{-- <a href="#show-all" class="btn btn-default btn-xs active" data-option-value="*">Show All</a> --}}
                                                 <a href="#gallery-group-1" class="btn btn-default btn-xs" data-option-value=".gallery-group-1">Show All</a>
                                                {{-- <a href="#gallery-group-2" class="btn btn-default btn-xs" data-option-value=".gallery-group-2">Gallery Group 2</a>
                                                <a href="#gallery-group-3" class="btn btn-default btn-xs" data-option-value=".gallery-group-3">Gallery Group 3</a>
                                                <a href="#gallery-group-4" class="btn btn-default btn-xs" data-option-value=".gallery-group-4">Gallery Group 4</a> --}} 
                                            </span>

                                        </div>
                                        
                                        <!-- end #options -->
                                        <!-- begin #gallery -->
                                        <div id="gallery" class="gallery">
                                            <!-- begin image -->
                                            @foreach($itemImages as $galleryImage)
                                            <div class="image gallery-group-1">
                                                <div class="image-inner">
                                                    <a href="{{BASE_URL.ITEM_IMG_PATH.'/'.$galleryImage->img_name}}" data-lightbox="gallery-group-1">
                                                        <div class="img" style="background-image: url({{BASE_URL.ITEM_IMG_PATH.'/'.$galleryImage->img_name}})"></div>
                                                    </a>
                                                    <p class="image-caption">
                                                        #1382 - 3D Arch
                                                    </p>
                                                </div>
                                                <div class="image-info">
                                                <h5 class="title">{{$galleryImage->item_name}}</h5>
                                                    {{-- <div class="pull-right">
                                                        <small>by</small> <a href="javascript:;">Sean Ngu</a>
                                                    </div>
                                                    <div class="rating">
                                                        <span class="star active"></span>
                                                        <span class="star active"></span>
                                                        <span class="star active"></span>
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                    </div> 
                                                    <div class="desc">
                                                        Nunc velit urna, aliquam at interdum sit amet, lacinia sit amet ligula. Quisque et erat eros. Aenean auctor metus in tortor placerat, non luctus justo blandit.
                                                    </div> --}}
                                                <a class="btn btn-danger deleteItemImgBtn" value="{{$item->item_id.'_'.$galleryImage->id}}" href="javascript:;">Delete</a>
                                                    <div class="pull-right">
                                                    <input type="checkbox" {{($galleryImage->default == 1)? 'checked':''}} class="defaultImg" name="default" value="{{$item->item_id.'_'.$galleryImage->id}}"/>
                                                        <span class="">Primary</span>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                            <!-- end image -->
                                            <!-- begin image -->
                                            {{-- <div class="image gallery-group-1">
                                                <div class="image-inner">
                                                    <a href="{{asset('assets/img/gallery/gallery-2.jpg')}}" data-lightbox="gallery-group-1">
                                                        <div class="img" style="background-image: url({{asset('assets/img/gallery/gallery-2.jpg')}})"></div>
                                                    </a>
                                                    <p class="image-caption">
                                                        #2343 - Madness Arch
                                                    </p>
                                                </div>
                                                <div class="image-info">
                                                    <h5 class="title">Fusce aliquet ac quam at tincidunt</h5>
                                                    <div class="pull-right">
                                                        <small>by</small> <a href="javascript:;">Camryn Wong</a>
                                                    </div>
                                                    <div class="rating">
                                                        <span class="star active"></span>
                                                        <span class="star active"></span>
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                    </div>
                                                    <div class="desc">
                                                        Fusce eu rutrum nisi, ut pretium mi. Sed mollis nisi sed auctor molestie. Vestibulum dictum pharetra leo sed euismod.
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end image -->
                                            <!-- begin image -->
                                            <div class="image gallery-group-1">
                                                <div class="image-inner">
                                                    <a href="{{asset('assets/img/gallery/gallery-3.jpg')}}" data-lightbox="gallery-group-1">
                                                        <div class="img" style="background-image: url({{asset('assets/img/gallery/gallery-3.jpg')}})"></div>
                                                    </a>
                                                    <p class="image-caption">
                                                        #3452 - Scottwills Arch
                                                    </p>
                                                </div>
                                                <div class="image-info">
                                                    <h5 class="title">Etiam lobortis egestas nisl</h5>
                                                    <div class="pull-right">
                                                        <small>by</small> <a href="javascript:;">Lelouch Wong</a>
                                                    </div>
                                                    <div class="rating">
                                                        <span class="star active"></span>
                                                        <span class="star active"></span>
                                                        <span class="star active"></span>
                                                        <span class="star active"></span>
                                                        <span class="star active"></span>
                                                    </div>
                                                    <div class="desc">
                                                        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Vivamus eget ultricies arcu.
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end image -->
                                            <!-- begin image -->
                                            <div class="image gallery-group-2">
                                                <div class="image-inner">
                                                    <a href="{{asset('assets/img/gallery/gallery-4.jpg')}}" data-lightbox="gallery-group-2">
                                                        <div class="img" style="background-image: url({{asset('assets/img/gallery/gallery-4.jpg')}})"></div>
                                                    </a>
                                                    <p class="image-caption">
                                                        #4123 - Scottwills Pinecone
                                                    </p>
                                                </div>
                                                <div class="image-info">
                                                    <h5 class="title">Donec mi quis volutpat ornare</h5>
                                                    <div class="pull-right">
                                                        <small>by</small> <a href="javascript:;">Richard Leong</a>
                                                    </div>
                                                    <div class="rating">
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                    </div>
                                                    <div class="desc">
                                                        Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut et augue luctus libero dignissim sodales, sapien consequat lacinia fringilla.
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end image -->
                                            <!-- begin image -->
                                            <div class="image gallery-group-2">
                                                <div class="image-inner">
                                                    <a href="{{asset('assets/img/gallery/gallery-5.jpg')}}" data-lightbox="gallery-group-2">
                                                        <div class="img" style="background-image: url({{asset('assets/img/gallery/gallery-5.jpg')}})"></div>
                                                    </a>
                                                    <p class="image-caption">
                                                        #9200 Kariminal Rider
                                                    </p>
                                                </div>
                                                <div class="image-info">
                                                    <h5 class="title">Donec pretium volutpat ornare</h5>
                                                    <div class="pull-right">
                                                        <small>by</small> <a href="javascript:;">Derrick Wong</a>
                                                    </div>
                                                    <div class="rating">
                                                        <span class="star active"></span>
                                                        <span class="star active"></span>
                                                        <span class="star active"></span>
                                                        <span class="star active"></span>
                                                        <span class="star"></span>
                                                    </div>
                                                    <div class="desc">
                                                        Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut et augue luctus libero, feugiat sapien consequat lacinia fringilla.
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end image -->
                                            <!-- begin image -->
                                            <div class="image gallery-group-3">
                                                <div class="image-inner">
                                                    <a href="{{asset('assets/img/gallery/gallery-6.jpg')}}" data-lightbox="gallery-group-3">
                                                        <div class="img" style="background-image: url({{asset('assets/img/gallery/gallery-6.jpg')}})"></div>
                                                    </a>
                                                    <p class="image-caption">
                                                        #1832 Scottwills Autumn
                                                    </p>
                                                </div>
                                                <div class="image-info">
                                                    <h5 class="title">Mi quis volutpat ornare sodales</h5>
                                                    <div class="pull-right">
                                                        <small>by</small> <a href="javascript:;">Apple Tong</a>
                                                    </div>
                                                    <div class="rating">
                                                        <span class="star active"></span>
                                                        <span class="star active"></span>
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                    </div>
                                                    <div class="desc">
                                                        Ut et augue luctus libero dignissim sodales. Fusce feugiat sapien consequat lacinia fringilla. Vivamus eget ultricies arcu.
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end image -->
                                            <!-- begin image -->
                                            <div class="image gallery-group-3">
                                                <div class="image-inner">
                                                    <a href="{{asset('assets/img/gallery/gallery-7.jpg')}}" data-lightbox="gallery-group-3">
                                                        <div class="img" style="background-image: url({{asset('assets/img/gallery/gallery-7.jpg')}})"></div>
                                                    </a>
                                                    <p class="image-caption">
                                                        #0229 Scottwills Autumn 2
                                                    </p>
                                                </div>
                                                <div class="image-info">
                                                    <h5 class="title">Vestibulum ante ipsum primis</h5>
                                                    <div class="pull-right">
                                                        <small>by</small> <a href="javascript:;">Thomas Wong</a>
                                                    </div>
                                                    <div class="rating">
                                                        <span class="star active"></span>
                                                        <span class="star active"></span>
                                                        <span class="star active"></span>
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                    </div>
                                                    <div class="desc">
                                                        Interdum et malesuada fames ac ante ipsum primis in faucibus. Ut et augue luctus libero dignissim sodales, sapien consequat lacinia fringilla.
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end image -->
                                            <!-- begin image -->
                                            <div class="image gallery-group-4">
                                                <div class="image-inner">
                                                    <a href="{{asset('assets/img/gallery/gallery-8.jpg')}}" data-lightbox="gallery-group-4">
                                                        <div class="img" style="background-image: url({{asset('assets/img/gallery/gallery-8.jpg')}})"></div>
                                                    </a>
                                                    <p class="image-caption">
                                                        #5721 Scottwills Snow
                                                    </p>
                                                </div>
                                                <div class="image-info">
                                                    <h5 class="title">Nunc eget hendrerit nisi sodales</h5>
                                                    <div class="pull-right">
                                                        <small>by</small> <a href="javascript:;">Andy Wong</a>
                                                    </div>
                                                    <div class="rating">
                                                        <span class="star active"></span>
                                                        <span class="star active"></span>
                                                        <span class="star active"></span>
                                                        <span class="star active"></span>
                                                        <span class="star active"></span>
                                                    </div>
                                                    <div class="desc">
                                                        Ut et augue nisi sodales luctus libero dignissim sodales. Fusce feugiat nisi sodales sapien consequat lacinia fringilla.
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end image -->
                                            <!-- begin image -->
                                            <div class="image gallery-group-4">
                                                <div class="image-inner">
                                                    <a href="{{asset('assets/img/gallery/gallery-9.jpg')}}" data-lightbox="gallery-group-4">
                                                        <div class="img" style="background-image: url({{asset('assets/img/gallery/gallery-9.jpg')}})"></div>
                                                    </a>
                                                    <p class="image-caption">
                                                        #9921 Scottwills Riverbank
                                                    </p>
                                                </div>
                                                <div class="image-info">
                                                    <h5 class="title">Nunc eget hendrerit nisi dignissim</h5>
                                                    <div class="pull-right">
                                                        <small>by</small> <a href="javascript:;">William Tan</a>
                                                    </div>
                                                    <div class="rating">
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                    </div>
                                                    <div class="desc">
                                                        Ut et augue luctus libero dignissim sodales. Fusce feugiat sapien consequat libero dignissim lacinia fringilla.
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end image -->
                                            <!-- begin image -->
                                            <div class="image gallery-group-4">
                                                <div class="image-inner">
                                                    <a href="{{asset('assets/img/gallery/gallery-10.jpg')}}" data-lightbox="gallery-group-4">
                                                        <div class="img" style="background-image: url({{asset('assets/img/gallery/gallery-10.jpg')}}" alt="" />
                                                    </a>
                                                    <p class="image-caption">
                                                        #6436 Scottwills Buss
                                                    </p>
                                                </div>
                                                <div class="image-info">
                                                    <h5 class="title">Sed mollis nisi sed auctor</h5>
                                                    <div class="pull-right">
                                                        <small>by</small> <a href="javascript:;">David King</a>
                                                    </div>
                                                    <div class="rating">
                                                        <span class="star active"></span>
                                                        <span class="star active"></span>
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                        <span class="star"></span>
                                                    </div>
                                                    <div class="desc">
                                                        Vestibulum dictum pharetra leo sed euismod. Lorem ipsum dolor sit amet, consectetur adipiscing feugiat sapien elit.
                                                    </div>
                                                </div>
                                            </div> --}}
                                            <!-- end image -->
                                        </div>
                                        <!-- end #gallery -->
                                       
                                    </div>
                                    
                                    
                                    <!-- end panel-body -->
                                </div>
                                
                            </div>

                            <!-- end col-12 -->
                            
                        </div>
                        
                    </div>
                    <!-- end tab-pane -->

                    

                </div>
                <!-- end col-8 -->

                
            </div>
           
            
        </div>
        <fieldset>
            <button type="submit" id="updateItemBtn" class="btn btn-sm btn-primary m-r-5">SAVE </button>
            <button type="reset" class="btn btn-sm btn-default">Cancel</button>
        </fieldset>
        </form>
    </div>

</div>

<!-- end row -->
{{-- </div> --}}
<!-- end #content -->