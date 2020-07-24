<!-- begin #content -->

<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="javascript:;">Dashboar</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Settings</a></li>
        <li class="breadcrumb-item active">Items</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    
    <h1 class="page-header">ITEM <small>LIST</small></h1>

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
                    <h4 class="panel-title">ITEMS</h4>
                    <div class="panel-heading-btn">
                        <a class="btn btn-primary pull-right" href="{{route('itemMasterLayout')}}" style="background-color:#0f0f0f;border: none;">Add New</a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>

                    </div>
                </div>
                <div class="panel-body">
                    
                    <div class="tab-content">

                        <!-- begin tab-pane -->
                        

                            {{-- <table id="grid1"></table> --}}
                            <table id="data-table-default" class="table table-striped table-bordered table-td-valign-middle">
                                <thead>
                                    <tr>
                                        <th width="1%"></th>

                                        <th class="text-nowrap">Image</th>
                                        <th class="text-nowrap">Item name</th>
                                        <th class="text-nowrap">Group name</th>
                                        <th class="text-nowrap">Open quantity</th>
                                        <th class="text-nowrap">Min quantity</th>
                                        <th class="text-nowrap">Action</th>


                                    </tr>
                                </thead>
                                <tbody id="itemDataAppend">
                                    <?php $i = 1;
                                    foreach ($dataObjArr as $itemData) { ?>
                                        <tr class="odd gradeX">
                                            <td width="1%" class="f-s-600 text-inverse">{{$i++}}</td>

                                            <td>@if($itemData->img_name && $itemData->default==1)
                                            <img src="{{BASE_URL.ITEM_IMG_PATH.'/'.$itemData->img_name}}" width="50px" height="50px"/>
                                            @else
                                            <img src="{{BACKEND.'img/product/default.jpg'}}" width="50px" height="50px"/>
                                            @endif
                                            <a href="{{route('addGalleryImage', $itemData->item_id)}}">Add image</a></td>
                                            <td>{{$itemData->item_name}}</td>
                                            <td>{{$itemData->g_name}}</td>
                                            <td>{{$itemData->open_qty}}</td>
                                            <td>{{$itemData->min_qty}}</td>
                                            <td><a class="btn btn-primary" href="{{route('itemEditLayout',$itemData->item_id)}}">Edit</a></td>
                                        </tr>
                                    <?php } ?>

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
