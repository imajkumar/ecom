<!-- begin #content -->

<div id="content" class="content">
    <!-- begin breadcrumb -->
    <ol class="breadcrumb float-xl-right">
        <li class="breadcrumb-item"><a href="javascript:;">Dashboar</a></li>
        {{-- <li class="breadcrumb-item"><a href="javascript:;">Settings</a></li> --}}
        <li class="breadcrumb-item active">Categories</li>
    </ol>
    <!-- end breadcrumb -->
    <!-- begin page-header -->
    
    <h1 class="page-header">Category <small>LIST</small></h1>

    <!-- end page-header -->

    <!-- begin row -->
    
    <div class="row">
        
        <div class="col-xl-12">
            
            <div class="panel panel-inverse" data-sortable-id="tree-view-1">
                <div class="panel-heading">
                    <h4 class="panel-title">CATEGORIES</h4>
                    <div class="panel-heading-btn">
                        <a class="btn btn-primary pull-right" href="{{route('addCategoryLayout')}}" style="background-color:#0f0f0f;border: none;"><i class="fas fa-lg fa-fw m-r-10 fa-plus-circle"></i>Add</a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-redo"></i></a>
                        <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>

                    </div>
                </div>
                <div class="panel-body">
                    
                    <div class="tab-content">

                        <!-- begin tab-pane -->
                        {{-- <div id="Grid"></div> --}}
                        
                        
                        
                            {{-- <table id="data-table-default" class="table table-striped table-bordered table-td-valign-middle">
                                <thead>
                                    <tr>
                                        <th width="1%">Id</th>

                                        <th class="text-nowrap">Name</th>
                                        <th class="text-nowrap">Email</th>
                                        <th class="text-nowrap">Gender</th>
                                        <th class="text-nowrap">Phone</th>
                                        <th class="text-nowrap">Date of birth</th>
                                        <th class="text-nowrap">Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($dataObjArr as $customer)
                                    <tr>
                                        <td>{{$customer->id}}</td>
                                        <td>{{ucfirst($customer->f_name.' '.$customer->l_name)}}</td>
                                        <td>{{$customer->email}}</td>
                                        <td>{{$customer->gender}}</td>
                                        <td>{{$customer->phone}}</td>
                                        <td>{{$customer->dob}}</td>
                                        <td>
                                        <a href="{{route('editCustomerLayout', $customer->id)}}" class="btn btn-primary"><i class="far fa-lg fa-fw m-r-10 fa-edit"></i>Edit</a>
                                        <a href="{{route('addressListLayout', $customer->id)}}" class="btn btn-primary"><i class="fas fa-lg fa-fw m-r-10 fa-address-book"></i>Address</a>

                                           
                                            <form method="post" action="{{route('deleteCustomer')}}" class="pull-right" id="deleteCustomer">
                                                @csrf()
                                               <input type="hidden" name="customer_id" value="{{$customer->id}}"/>
                                               <input class="btn btn-danger con" type="submit" value="Delete"/>
                                           </form>
                                        </td>
                                       
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table> --}}

                    </div>
                <!-- end col-8 -->

                
            </div>


        </div>
    </div>

</div>

