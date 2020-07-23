<!-- begin #sidebar -->
<div id="sidebar" class="sidebar">
			<!-- begin sidebar scrollbar -->
			<div data-scrollbar="true" data-height="100%">
				<!-- begin sidebar user -->
				<ul class="nav">
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
				</ul>
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
                    <li class="has-sub active">
						<a href="javascript:;">
							<b class="caret"></b>
							<i class="ion-ios-cog"></i>
							<span>Settings <span class="label label-theme">NEW</span></span>
						</a>
						<ul class="sub-menu">
							
							<li><a href="{{route('masterSettingsLayout')}}">Master Setup</a></li>
							<li><a href="{{route('itemMasterLayout')}}">Item Master</a></li>
							
						</ul>
					</li>
                    <li class="">
						<a href="{{route('customerListLayout')}}">
							
							<i class="icon-user"></i>
							<span>Customer </span>
						</a>
						
					</li>
				
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