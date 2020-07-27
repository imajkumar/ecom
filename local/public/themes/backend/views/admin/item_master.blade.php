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
                                <a href="#addItem" data-toggle="tab" class="nav-link active">
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
                                    <span class="d-sm-block d-none">IMAGE</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <!-- end nav-tabs -->
                    <!-- begin tab-content -->
                    {{-- <div class="panel panel-inverse" data-sortable-id="form-stuff-12"> --}}
                    <div id="errorMsg" class="alert alert-block" style="display:none"></div>
                    <!-- begin panel-heading -->
                    {{-- <div class="panel-heading">
                            <h4 class="panel-title">Add item </h4>
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
        
                            </div>
                        </div> --}}
                    <div class="tab-content">

                        <!-- begin tab-pane -->
                        
                        <!-- end tab-pane -->
                        <!-- begin tab-pane -->
                        <div class="tab-pane fade active show" id="addItem">
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

                                        <form class="form-horizontal" id="saveItemMaster" data-parsley-validate="true" name="demo-form" novalidate="">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-4 col-sm-8">

                                                    <div class="form-group row m-b-15">
                                                        <label class="col-md-12 col-sm-4 col-form-label" for="name">Name * :</label>
                                                        <div class="col-md-12 col-sm-8">
                                                            <input class="form-control" type="text" id="name" name="item_name" placeholder="Required" data-parsley-required="true">
                                                        </div>
                                                    </div>
                                                    <div class="form-group row m-b-15">
                                                        <label class="col-md-12 col-sm-4 col-form-label" for="salePrice">Sale price :</label>
                                                        <div class="col-md-12 col-sm-8">
                                                            <input type="text" class="form-control" id="salePrice" name="sale_price" placeholder="Sale price" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row m-b-15">
                                                        <label class="col-md-12 col-sm-4 col-form-label" for="regularPrice">Reguler price :</label>
                                                        <div class="col-md-12 col-sm-8">
                                                            <input type="text" class="form-control" id="regularPrice" name="regular_price" placeholder="Regular price" />
                                                        </div>
                                                    </div>
                                                    <div class="form-group row m-b-15">
                                                        <label class="col-md-12 col-sm-4 col-form-label" for="code">Code :</label>
                                                        <div class="col-md-12 col-sm-8">
                                                            <input type="text" class="form-control" id="code" name="code" placeholder="code" />
                                                        </div>
                                                    </div>

                                                    {{-- <h2>Stock Details</h2> --}}
                                                    <div class="form-group row m-b-15">
                                                        <label class="col-md-12 col-sm-4 col-form-label" for="openingqty">Openinig Qty:</label>
                                                        <div class="col-md-12 col-sm-8">
                                                            <input class="form-control" type="text" id="openingqty" name="open_qty" placeholder="Opening qty">
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
                                                        <label class="col-md-12 col-sm-4 col-form-label" for="stockUnit">Stock Unit:</label>
                                                        <div class="col-md-12 col-sm-8">
                                                            <select class="form-control" id="stockUnit" name="stock_unit">
                                                                <option value="">select</option>
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                                <option value="3">3</option>
                                                                <option value="4">4</option>
                                                                <option value="5">5</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row m-b-15">
                                                        <label class="col-md-12 col-sm-4 col-form-label" for="minimumqty">Minimum Qty:</label>
                                                        <div class="col-md-12 col-sm-8">
                                                            <input class="form-control" type="text" id="minimumqty" name="min_qty" placeholder="Minimum Qty">
        
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-md-4 col-sm-8">
                                                    <div class="form-group row m-b-15">
                                                        <label class="col-md-12 col-sm-4 col-form-label" for="group">Group :</label>
                                                        <div class="col-md-12 col-sm-8">
                                                            <select class="form-control" id="group" name="group_id" data-parsley-required="true" placeholder="Group">
                                                                @foreach($dataObjArr as $groupData)
                                                                <option value="{{$groupData->g_id}}">{{$groupData->g_name}}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group row m-b-15">
                                                        <label class="col-md-12 col-sm-4 col-form-label" for="brand">Brand :</label>
                                                        <div class="col-md-12 col-sm-8">
                                                            <select class="form-control" id="brand" name="brand_id" data-parsley-required="true" placeholder="Brand">
                                                                @foreach($brands as $brand)
                                                                <option value="{{$brand->id}}">{{$brand->name}}</option>
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
                            <div class="row">
                                
                                   
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
                            {{-- <fieldset>
                                <button type="button" id="submitItemBtn" class="btn btn-sm btn-primary m-r-5 ">SAVE </button>
                                <button type="reset" class="btn btn-sm btn-default">Cancel</button>
                            </fieldset> --}}
                            <!-- end col-12 -->
                        </div>

                        <!-- end tab-pane -->
                        <!-- begin tab-pane -->
                        <div class="tab-pane fade  show" id="gallerytab">
                            <div class="row">
                                <!-- begin col-12 -->
                                <div class="col-12">
                                    <!-- begin panel-body -->
                                    

                                    
                                    <!-- end panel-body -->
                                    <form id="fileupload" action="{{route('uploadGalleryImage')}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="item_id" id="itemId"/>
                                        <!-- begin panel -->
                                        <div class="panel panel-inverse">
                                            
                                            <div class="panel-body">			
                                               
                                                <div class="row fileupload-buttonbar">
                                                    <div class="col-xl-7">
                                                        <span class="btn btn-primary fileinput-button m-r-3">
                                                            <i class="fa fa-fw fa-plus"></i>
                                                            <span>Add files...</span>
                                                            <input type="file" name="files[]" multiple>
                                                        </span>
                                                        <button type="submit" class="btn btn-primary start m-r-3">
                                                            <i class="fa fa-fw fa-upload"></i>
                                                            <span>Start upload</span>
                                                        </button>
                                                        <button type="reset" class="btn btn-default cancel m-r-3">
                                                            <i class="fa fa-fw fa-ban"></i>
                                                            <span>Cancel upload</span>
                                                        </button>
                                                        <button type="button" class="btn btn-default delete m-r-3">
                                                            <i class="fa fa-fw fa-trash"></i>
                                                            <span>Delete</span>
                                                        </button>
                                                        <!-- The global file processing state -->
                                                        <span class="fileupload-process"></span>
                                                    </div>
                                                    <!-- The global progress state -->
                                                    <div class="col-xl-5 fileupload-progress fade d-none d-xl-block">
                                                        <!-- The global progress bar -->
                                                        <div class="progress progress-striped active m-b-0">
                                                            <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                                                        </div>
                                                        <!-- The extended global progress state -->
                                                        <div class="progress-extended">&nbsp;</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- end panel-body -->
                                            <!-- begin table -->
                                            <div class="table-responsive">
                                                <table class="table table-striped table-condensed text-nowrap mb-0">
                                                    <thead>
                                                        <tr>
                                                            <th width="10%">PREVIEW</th>
                                                            <th>FILE INFO</th>
                                                            <th>UPLOAD PROGRESS</th>
                                                            <th width="1%"></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="files">
                                                        <tr data-id="empty">
                                                            <td colspan="4" class="text-center text-muted p-t-30 p-b-30">
                                                                <div class="m-b-10"><i class="fa fa-file fa-3x"></i></div>
                                                                <div>No file selected</div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <!-- end table -->
                                        </div>
                                        <!-- end panel -->
                                    </form>
                                    <!-- end form-file-upload -->
                                </div>
                                
                            </div>

                            <!-- end col-12 -->
                            
                        </div>
                        
                    </div>
                    <!-- end tab-pane -->

                    

                </div>
                <!-- end col-8 -->

                
            </div>
            <fieldset>
                <button type="button" id="submitItemBtn" class="btn btn-sm btn-primary m-r-5 ">SAVE </button>
                <button type="reset" class="btn btn-sm btn-default">Cancel</button>
            </fieldset>
            </form>

        </div>
    </div>

</div>

<!-- end row -->
{{-- </div> --}}
<!-- end #content -->