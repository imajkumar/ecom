<!-- begin #sidebar -->
<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				{{-- <ul class="nav">
					<li class="nav-profile">
						<a href="javascript:;" data-toggle="nav-profile">
							<div class="cover with-shadow"></div>
							<div class="image">
								<img src="../assets/img/user/user-13.jpg" alt="" />
							</div>
							<div class="info">
								<b class="caret pull-right"></b>{{Auth::user()->name}}
								<small></small>
							</div>
						</a>
					</li>
					<li>
						<ul class="nav nav-profile">
							<li><a href="javascript:;"><i class="fa fa-cog"></i> Settings</a></li>
							
						</ul>
					</li>
				</ul> --}}
				<!-- end sidebar user -->
				<!-- begin sidebar nav -->
				<ul class="nav">
					<!-- <li class="has-sub active">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="ion-ios-pulse"></i>
							<span>Dashboard</span>
						</a>
						<ul class="sub-menu">
							<li class="active"><a href="index.html">Dashboard</a></li>
							
						</ul>
					</li> -->
					 {{-- <li class="">
						<a href="{{route('customerListLayout')}}">
							
							<i class="icon-user"></i>
							<span>Customer </span>
						</a>
						
					</li> --}}
					
					<?php 
					$customer = session()->get('customer'); 
					if($customer){
					?>
					<li class="active">
						<a href="">
							
							<i class="icon-user"></i>
							<span>Profile </span>
						</a>
						{{-- <ul class="sub-menu">
							
							<li><a href="javascript:;"> Profile</a></li>
							
							
						</ul> --}}
					</li>

						{{-- <li class="has-sub">
							<a href="javascript:;">
								<b class="caret"></b>
								<i class="icon-graph"></i>
								<span>SALES </span>
							</a>
							<ul class="sub-menu">
								
								<li><a href="javascript:;"> Orders</a></li>
								
								
							</ul>
						</li> --}}
					<?php }else{?>

						<li class="active">
							<a href="javascript:;">
								{{-- <b class="caret"></b> --}}
								<i class="ion-ios-cog"></i>
								<span>DASHBOARD </span>
							</a>
							{{-- <ul class="sub-menu">
								
								<li><a href="javascript:;"> Orders</a></li>
								{{-- <li><a href="javascript:;"> Shipments</a></li>
								<li><a href="javascript:;"> Invoices</a></li>
								<li><a href="javascript:;"> Refunds</a></li> --}}
								{{-- <li><a href="{{route('itemListLayout')}}">Item Master</a></li>
								<li><a href="{{route('brandListLayout')}}">Brands</a></li>
								 
							</ul> --}}
						</li>
					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="icon-graph"></i>
							<span>SALES </span>
						</a>
						<ul class="sub-menu">
							
							<li><a href="javascript:;"> Orders</a></li>
							<li><a href="javascript:;"> Shipments</a></li>
							<li><a href="javascript:;"> Invoices</a></li>
							<li><a href="javascript:;"> Refunds</a></li>
							{{-- <li><a href="{{route('itemListLayout')}}">Item Master</a></li>
							<li><a href="{{route('brandListLayout')}}">Brands</a></li>
							 --}}
						</ul>
					</li>
                    <li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="icon-basket"></i>
							{{-- <span>PRODUCTS <span class="label label-theme">NEW</span></span> --}}
							<span>PRODUCTS</span>
						</a>
						<ul class="sub-menu">
							
							<li><a href="{{route('masterSettingsLayout')}}">Master Setup</a></li>
							<li><a href="{{route('itemListLayout')}}">Item Master</a></li>
							
							<li><a href="{{route('brandListLayout')}}">Brands</a></li>
							
						</ul>
					</li>
                    {{-- <li class="">
						<a href="{{route('customerListLayout')}}">
							
							<i class="icon-user"></i>
							<span>Customer </span>
						</a>
						
					</li> --}}
					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="icon-user"></i>
							<span>CUSTOMERS </span>
						</a>
						<ul class="sub-menu">
							
							<li><a href="{{route('customerListLayout')}}">Customers</a></li>
							{{-- <li><a href="{{route('itemListLayout')}}">Item Master</a></li> --}}
							
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fa fa-cogs"></i>
							<span>CMS </span>
						</a>
						<ul class="sub-menu">
							
							<li><a href="{{route('bannerListLayout')}}">Banners</a></li>
							{{-- <li><a href="{{route('itemListLayout')}}">Item Master</a></li> --}}
							
						</ul>
					</li>
					<li class="has-sub">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="fa fa-cogs"></i>
							<span>SETTINGS </span>
						</a>
						<ul class="sub-menu">
							<li><a href="{{route('attributesLayout')}}">Attributes</a></li>
							{{-- <li><a href="{{route('attributeFamiliesLayout')}}">Attribute Families</a></li> --}}
						</ul>
					</li>
				<?php }?>
					<!-- begin sidebar minify button -->
					<li><a href="javascript:;" class="sidebar-minify-btn" data-click="sidebar-minify"><i class="ion-ios-arrow-back"></i> <span>Collapse</span></a></li>
					<!-- end sidebar minify button -->
				</ul>
				<!-- end sidebar nav -->
			</div>
			<!-- end sidebar scrollbar -->
		</div>
		<div class="sidebar-bg"></div>
		<!-- end #sidebar -->