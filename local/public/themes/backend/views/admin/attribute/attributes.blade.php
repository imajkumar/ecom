<!-- begin #content -->

<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="javascript:;">Dashboar</a></li>
        <li class="breadcrumb-item"><a href="javascript:;">Settings</a></li>
        <li class="breadcrumb-item active">Attributes</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    
    <h1 class="page-header">ATTRIBUTE <small>LIST</small></h1>

    <!-- end page-header -->

    <!-- begin row -->
    
    <div class="row">
        
        <div class="col-xl-12">
            
            <div class="panel panel-inverse" data-sortable-id="tree-view-1">
                <div class="panel-heading">
                    <h4 class="panel-title">ATTRIBUTE</h4>
                    <div class="panel-heading-btn">
                        <a class="btn btn-primary pull-right" href="{{route('addAttributeLayout')}}" style="background-color:#0f0f0f;border: none;">Add Attribute</a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>

                    </div>
                </div>
                <div class="panel-body">
                    
                    <div class="tab-content">

                        <!-- begin tab-pane -->
                        {{-- <div id="Grid"></div> --}}
                        

                            
                            <table id="data-table-default" class="table table-striped table-bordered table-td-valign-middle">
                                <thead>
                                    <tr>
                                        <th width="1%">Id</th>

                                        <th class="text-nowrap">Code</th>
                                        <th class="text-nowrap">Name</th>
                                        <th class="text-nowrap">Type</th>
                                        <th class="text-nowrap">Required</th>
                                        <th class="text-nowrap">Unique</th>
                                        <th class="text-nowrap">Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($attributes as $attribute)
                                    <tr>
                                        <td>{{$attribute->id}}</td>
                                       
                                        <td>{{$attribute->attribute_code}}</td>
                                        <td>{{$attribute->admin_name_lable}}</td>
                                        <td>{{$attribute->type}}</td>
                                        <td>{{($attribute->is_required == 1)? 'True':'False'}}</td>
                                        <td>{{($attribute->is_unique == 1)? 'True':'False'}}</td>
                                        <td>
                                        <a href="{{route('editAttributeLayout', $attribute->id)}}" class="btn btn-primary">Edit</a>
                                            <form method="post" action="{{route('deleteCustomer')}}" class="pull-right" id="deleteCustomer">
                                                @csrf()
                                               <input type="hidden" name="customer_id" value="{{$attribute->id}}"/>
                                               <input class="btn btn-danger con" type="submit" value="Delete"/>
                                           </form>
                                        </td>
                                       
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

