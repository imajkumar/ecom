<?php
if(!empty($customer->profile_pic) )
		{
			
			$profil_pic = asset('/'.ITEM_IMG_PATH.'/'.$customer->profile_pic);
		}else{
			
			$profil_pic = BACKEND.'img/user/user-4.jpg';
		}
?>
<div id="content" class="content content-full-width">
    <!-- begin profile -->
    <div class="profile">
        <div class="profile-header">
            <!-- BEGIN profile-header-cover -->
            <div class="profile-header-cover"></div>
            <!-- END profile-header-cover -->
            <!-- BEGIN profile-header-content -->
            <div class="profile-header-content">
                <!-- BEGIN profile-header-img -->
                <div class="profile-header-img">
                <img src="{{$profil_pic}}" alt="">
                </div>
                <!-- END profile-header-img -->
                <!-- BEGIN profile-header-info -->
                <div class="profile-header-info">
                    <h4 class="mt-0 mb-1">{{ucfirst($customer->f_name)}} {{$customer->l_name}}</h4>
                    <p class="mb-2">UXUI + Frontend Developer</p>
                    <a href="#" class="btn btn-xs btn-yellow">Edit Profile</a>
                </div>
                <!-- END profile-header-info -->
            </div>
            <!-- END profile-header-content -->
            <!-- BEGIN profile-header-tab -->
            <ul class="profile-header-tab nav nav-tabs">
                {{-- <li class="nav-item"><a href="#profile-post" class="nav-link" data-toggle="tab">POSTS</a></li> --}}
                <li class="nav-item"><a href="#profile-about" class="nav-link active" data-toggle="tab">ABOUT</a></li>
                <li class="nav-item"><a href="#profile-photos" class="nav-link" data-toggle="tab">Documents</a></li>
                {{-- <li class="nav-item"><a href="#profile-videos" class="nav-link" data-toggle="tab">VIDEOS</a></li>
                <li class="nav-item"><a href="#profile-friends" class="nav-link active" data-toggle="tab">FRIENDS</a></li> --}}
            </ul>
            <!-- END profile-header-tab -->
        </div>
    </div>
    <!-- end profile -->
    <!-- begin profile-content -->
    <div class="profile-content">
        <!-- begin tab-content -->
        <div class="tab-content p-0">
            <!-- begin #profile-post tab -->
            {{-- <div class="tab-pane fade" id="profile-post">
                <!-- begin timeline -->
                <ul class="timeline">
                    <li>
                        <!-- begin timeline-time -->
                        <div class="timeline-time">
                            <span class="date">today</span>
                            <span class="time">04:20</span>
                        </div>
                        <!-- end timeline-time -->
                        <!-- begin timeline-icon -->
                        <div class="timeline-icon">
                            <a href="javascript:;">&nbsp;</a>
                        </div>
                        <!-- end timeline-icon -->
                        <!-- begin timeline-body -->
                        <div class="timeline-body">
                            <div class="timeline-header">
                                <span class="userimage"><img src="../assets/img/user/user-12.jpg" alt=""></span>
                                <span class="username"><a href="javascript:;">Sean Ngu</a> <small></small></span>
                                <span class="pull-right text-muted">18 Views</span>
                            </div>
                            <div class="timeline-content">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc faucibus turpis quis tincidunt luctus.
                                    Nam sagittis dui in nunc consequat, in imperdiet nunc sagittis.
                                </p>
                            </div>
                            <div class="timeline-likes">
                                <div class="stats">
                                    <span class="fa-stack fa-fw stats-icon">
                                    <i class="fa fa-circle fa-stack-2x text-danger"></i>
                                    <i class="fa fa-heart fa-stack-1x fa-inverse t-plus-1"></i>
                                    </span>
                                    <span class="fa-stack fa-fw stats-icon">
                                    <i class="fa fa-circle fa-stack-2x text-primary"></i>
                                    <i class="fa fa-thumbs-up fa-stack-1x fa-inverse"></i>
                                    </span>
                                    <span class="stats-total">4.3k</span>
                                </div>
                                <div class="stats-right">
                                    <span class="stats-text">259 Shares</span>
                                    <span class="stats-text">21 Comments</span>
                                </div>
                            </div>
                            <div class="timeline-footer">
                                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a> 
                                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
                            </div>
                            <div class="timeline-comment-box">
                                <div class="user"><img src="../assets/img/user/user-12.jpg"></div>
                                <div class="input">
                                    <form action="">
                                        <div class="input-group">
                                            <input type="text" class="form-control rounded-corner" placeholder="Write a comment...">
                                            <span class="input-group-btn p-l-10">
                                            <button class="btn btn-primary f-s-12 rounded-corner" type="button">Comment</button>
                                            </span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- end timeline-body -->
                    </li>
                    <li>
                        <!-- begin timeline-time -->
                        <div class="timeline-time">
                            <span class="date">yesterday</span>
                            <span class="time">20:17</span>
                        </div>
                        <!-- end timeline-time -->
                        <!-- begin timeline-icon -->
                        <div class="timeline-icon">
                            <a href="javascript:;">&nbsp;</a>
                        </div>
                        <!-- end timeline-icon -->
                        <!-- begin timeline-body -->
                        <div class="timeline-body">
                            <div class="timeline-header">
                                <span class="userimage"><img src="../assets/img/user/user-12.jpg" alt=""></span>
                                <span class="username">Sean Ngu</span>
                                <span class="pull-right text-muted">82 Views</span>
                            </div>
                            <div class="timeline-content">
                                <p>Location: United States</p>
                                <div id="google-map" class="height-sm m-b-10" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"><div tabindex="0" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: pan-x pan-y;"><div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 996; transform: matrix(1, 0, 0, 1, -191, -57);"><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 996; transform: matrix(1, 0, 0, 1, -191, -57);"><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i4!2i3!3i6!4i256!2m3!1e0!2sm!3i524245408!2m3!1e2!6m1!3e5!3m17!2sen-GB!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=41332" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i4!2i2!3i6!4i256!2m3!1e0!2sm!3i524245408!2m3!1e2!6m1!3e5!3m17!2sen-GB!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=120036" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i4!2i2!3i5!4i256!2m3!1e0!2sm!3i524245408!2m3!1e2!6m1!3e5!3m17!2sen-GB!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=84342" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i4!2i3!3i5!4i256!2m3!1e0!2sm!3i524245408!2m3!1e2!6m1!3e5!3m17!2sen-GB!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=5638" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i4!2i4!3i5!4i256!2m3!1e0!2sm!3i524245408!2m3!1e2!6m1!3e5!3m17!2sen-GB!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=58005" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i4!2i4!3i6!4i256!2m3!1e0!2sm!3i524245408!2m3!1e2!6m1!3e5!3m17!2sen-GB!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcC5zOi02MHxwLmw6LTYw!4e0&amp;token=93699" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;"><p class="gm-style-pbt"></p></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;"><div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div></div><iframe aria-hidden="true" frameborder="0" tabindex="-1" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" rel="noopener" href="https://maps.google.com/maps?ll=37.09024,-95.712891&amp;z=4&amp;t=m&amp;hl=en-GB&amp;gl=US&amp;mapclient=apiv3" title="Open this area in Google Maps (opens a new window)" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google4.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-sizing: border-box; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 300px; height: 180px; position: absolute; left: 149px; top: 60px;"><div style="padding: 0px 0px 10px; font-size: 16px; box-sizing: border-box;">Map Data</div><div style="font-size: 13px;">Map data ©2020 Google, INEGI</div><button draggable="false" title="Close" aria-label="Close" type="button" class="gm-ui-hover-effect" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: absolute; cursor: pointer; user-select: none; top: 0px; right: 0px; width: 37px; height: 37px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%206.41L17.59%205%2012%2010.59%206.41%205%205%206.41%2010.59%2012%205%2017.59%206.41%2019%2012%2013.41%2017.59%2019%2019%2017.59%2013.41%2012z%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="pointer-events: none; display: block; width: 13px; height: 13px; margin: 12px;"></button></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 71px; bottom: 0px; width: 150px;"><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="text-decoration: none; cursor: pointer; display: none;">Map Data</a><span>Map data ©2020 Google, INEGI</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Map data ©2020 Google, INEGI</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/en-GB_US/help/terms_maps.html" target="_blank" rel="noopener" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Terms of Use</a></div></div><button draggable="false" title="Toggle fullscreen view" aria-label="Toggle fullscreen view" type="button" class="gm-control-active gm-fullscreen-control" style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; display: none; top: 0px; right: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%20018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; display: none; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_blank" rel="noopener" title="Report errors in the road map or imagery to Google" href="https://www.google.com/maps/@37.09024,-95.712891,4z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Report a map error</a></div></div></div></div><div style="background-color: white; font-weight: 500; font-family: Roboto, sans-serif; padding: 15px 25px; box-sizing: border-box; top: 5px; border: 1px solid rgba(0, 0, 0, 0.12); border-radius: 5px; left: 50%; max-width: 375px; position: absolute; transform: translateX(-50%); width: calc(100% - 10px); z-index: 1;"><div><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google_gray.svg" draggable="false" style="padding: 0px; margin: 0px; border: 0px; height: 17px; vertical-align: middle; width: 52px; user-select: none;"></div><div style="line-height: 20px; margin: 15px 0px;"><span style="color: rgba(0, 0, 0, 0.87); font-size: 14px;">This page can't load Google Maps correctly.</span></div><table style="width: 100%;"><tr><td style="line-height: 16px; vertical-align: middle;"><a href="https://developers.google.com/maps/documentation/javascript/error-messages?utm_source=maps_js&amp;utm_medium=degraded&amp;utm_campaign=keyless#api-key-and-billing-errors" target="_blank" rel="noopener" style="color: rgba(0, 0, 0, 0.54); font-size: 12px;">Do you own this website?</a></td><td style="text-align: right;"><button class="dismissButton">OK</button></td></tr></table></div></div>
                            </div>
                            <div class="timeline-footer">
                                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a> 
                                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
                            </div>
                        </div>
                        <!-- end timeline-body -->
                    </li>
                    <li>
                        <!-- begin timeline-time -->
                        <div class="timeline-time">
                            <span class="date">24 February 2014</span>
                            <span class="time">08:17</span>
                        </div>
                        <!-- end timeline-time -->
                        <!-- begin timeline-icon -->
                        <div class="timeline-icon">
                            <a href="javascript:;">&nbsp;</a>
                        </div>
                        <!-- end timeline-icon -->
                        <!-- begin timeline-body -->
                        <div class="timeline-body">
                            <div class="timeline-header">
                                <span class="userimage"><img src="../assets/img/user/user-12.jpg" alt=""></span>
                                <span class="username">Sean Ngu</span>
                                <span class="pull-right text-muted">1,282 Views</span>
                            </div>
                            <div class="timeline-content">
                                <p class="lead">
                                    <i class="fa fa-quote-left fa-fw pull-left"></i>
                                    Quisque sed varius nisl. Nulla facilisi. Phasellus consequat sapien sit amet nibh molestie placerat. Donec nulla quam, ullamcorper ut velit vitae, lobortis condimentum magna. Suspendisse mollis in sem vel mollis.
                                    <i class="fa fa-quote-right fa-fw pull-right"></i>
                                </p>
                            </div>
                            <div class="timeline-footer">
                                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a> 
                                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
                            </div>
                        </div>
                        <!-- end timeline-body -->
                    </li>
                    <li>
                        <!-- begin timeline-time -->
                        <div class="timeline-time">
                            <span class="date">10 January 2014</span>
                            <span class="time">20:43</span>
                        </div>
                        <!-- end timeline-time -->
                        <!-- begin timeline-icon -->
                        <div class="timeline-icon">
                            <a href="javascript:;">&nbsp;</a>
                        </div>
                        <!-- end timeline-icon -->
                        <!-- begin timeline-body -->
                        <div class="timeline-body">
                            <div class="timeline-header">
                                <span class="userimage"><img src="../assets/img/user/user-12.jpg" alt=""></span>
                                <span class="username">Sean Ngu</span>
                                <span class="pull-right text-muted">1,021,282 Views</span>
                            </div>
                            <div class="timeline-content">
                                <h4 class="template-title">
                                    <i class="fa fa-map-marker-alt text-danger fa-fw"></i>
                                    795 Folsom Ave, Suite 600 San Francisco, CA 94107
                                </h4>
                                <p>In hac habitasse platea dictumst. Pellentesque bibendum id sem nec faucibus. Maecenas molestie, augue vel accumsan rutrum, massa mi rutrum odio, id luctus mauris nibh ut leo.</p>
                                <p class="m-t-20">
                                    <img src="../assets/img/gallery/gallery-5.jpg" alt="">
                                </p>
                            </div>
                            <div class="timeline-footer">
                                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-thumbs-up fa-fw fa-lg m-r-3"></i> Like</a>
                                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-comments fa-fw fa-lg m-r-3"></i> Comment</a> 
                                <a href="javascript:;" class="m-r-15 text-inverse-lighter"><i class="fa fa-share fa-fw fa-lg m-r-3"></i> Share</a>
                            </div>
                        </div>
                        <!-- end timeline-body -->
                    </li>
                    <li>
                        <!-- begin timeline-icon -->
                        <div class="timeline-icon">
                            <a href="javascript:;">&nbsp;</a>
                        </div>
                        <!-- end timeline-icon -->
                        <!-- begin timeline-body -->
                        <div class="timeline-body">
                            Loading...
                        </div>
                        <!-- begin timeline-body -->
                    </li>
                </ul>
                <!-- end timeline -->
            </div> --}}
            <!-- end #profile-post tab -->
            <!-- begin #profile-about tab -->
            <div class="tab-pane fade active show" id="profile-about">
                <!-- begin table -->
                <div class="table-responsive form-inline">
                    <table class="table table-profile">
                        <thead>
                            <tr>
                                <th></th>
                                <th>
                                    <h4>{{ucfirst($customer->f_name)}} <small>{{$customer->l_name}}</small></h4>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
{{--                             
                            <tr class="divider">
                                <td colspan="2"></td>
                            </tr>
                            <tr class="highlight">
                                <td class="field">About Me</td>
                                <td><a href="javascript:;">Add Description</a></td>
                            </tr> --}}
                            <tr class="divider">
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td class="field">City</td>
                                <td>Los Angeles</td>
                            </tr>
                            <tr>
                                <td class="field valign-middle">Country/Region</td>
                                <td class="with-form-control">
                                    <select class="form-control form-control-sm" name="region">
                                        <option value="US" selected="">United State</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AS">American Samoa</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AO">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AQ">Antarctica</option>
                                        <option value="AG">Antigua and Barbuda</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="field">City</td>
                                <td>Los Angeles</td>
                            </tr>
                            <tr>
                                <td class="field">State</td>
                                <td><a href="javascript:;">Add State</a></td>
                            </tr>
                            <tr>
                                <td class="field">Website</td>
                                <td><a href="javascript:;">Add Webpage</a></td>
                            </tr>
                            <tr>
                                <td class="field valign-middle">Gender</td>
                                <td class="with-form-control">
                                    <select class="form-control form-control-sm" name="gender">
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="field valign-middle">Birthdate</td>
                                <td class="with-form-control">
                                    <select class="form-control form-control-sm" name="day">
                                        <option value="04" selected="">04</option>
                                    </select>
                                    -
                                    <select class="form-control form-control-sm" name="month">
                                        <option value="11" selected="">11</option>
                                    </select>
                                    -
                                    <select class="form-control form-control-sm" name="year">
                                        <option value="1989" selected="">1989</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td class="field valign-middle">Language</td>
                                <td class="with-form-control">
                                    <select class="form-control form-control-sm" name="language">
                                        <option value="" selected="">English</option>
                                    </select>
                                </td>
                            </tr>
                            <tr class="divider">
                                <td colspan="2"></td>
                            </tr>
                            <tr class="highlight">
                                <td class="field">&nbsp;</td>
                                <td class="p-t-10 p-b-10">
                                    <button type="submit" class="btn btn-primary width-150">Update</button>
                                    <button type="submit" class="btn btn-white btn-white-without-border width-150 m-l-5">Cancel</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- end table -->
            </div>
            <!-- end #profile-about tab -->
            <!-- begin #profile-photos tab -->
            <div class="tab-pane fade" id="profile-photos" data-init="true">
                <h4 class="m-t-0 m-b-20">Documents </h4>
                <!-- begin superbox -->
                {{-- <div class="superbox superbox-active" data-offset="50">
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-1.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-1-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-2.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-2-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-3.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-3-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-4.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-4-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-5.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-5-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-6.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-6-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-7.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-7-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-8.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-8-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-9.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-9-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-10.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-10-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-11.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-11-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-12.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-12-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-13.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-13-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-14.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-14-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-15.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-15-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-16.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-16-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-17.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-17-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-18.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-18-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-19.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-19-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-20.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-20-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-21.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-21-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-22.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-22-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-23.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-23-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-24.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-24-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-25.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-25-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-26.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-26-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-27.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-27-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-28.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-28-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-29.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-29-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-30.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-30-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-31.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-31-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-32.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-32-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-33.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-33-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-34.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-34-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-35.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-35-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-36.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-36-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-37.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-37-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-38.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-38-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-39.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-39-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-40.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-40-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-41.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-41-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-42.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-42-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-43.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-43-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-44.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-44-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-45.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-45-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-46.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-46-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-47.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-47-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-48.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-48-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-49.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-49-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-50.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-50-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-51.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-51-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-52.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-52-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-53.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-53-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-54.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-54-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-55.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-55-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-56.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-56-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-57.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-57-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-58.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-58-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-59.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-59-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-60.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-60-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-61.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-61-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-62.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-62-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-63.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-63-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-64.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-64-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-65.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-65-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-66.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-66-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-67.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-67-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-68.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-68-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-69.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-69-thumb.jpg);"></span>
                        </a>
                    </div>
                    <div class="superbox-list superbox-2 superbox-last">
                        <a href="javascript:;" class="superbox-img">
                        <img data-img="../assets/img/gallery/gallery-70.jpg">
                        <span style="background: url(../assets/img/gallery/gallery-70-thumb.jpg);"></span>
                        </a>
                    </div>
                <div class="superbox-float"></div></div> --}}
                <!-- end superbox -->
            </div>
            <!-- end #profile-photos tab -->
            <!-- begin #profile-videos tab -->
            {{-- <div class="tab-pane fade" id="profile-videos">
                <h4 class="m-t-0 m-b-20">Videos (16)</h4>
                <!-- begin row -->
                <div class="row row-space-2">
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-4 m-b-2">
                        <a href="https://www.youtube.com/watch?v=RQ5ljyGg-ig" data-lity="">
                        <img src="https://img.youtube.com/vi/RQ5ljyGg-ig/mqdefault.jpg" class="width-full">
                        </a>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-4 m-b-2">
                        <a href="https://www.youtube.com/watch?v=5lWkZ-JaEOc" data-lity="">
                        <img src="https://img.youtube.com/vi/5lWkZ-JaEOc/mqdefault.jpg" class="width-full">
                        </a>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-4 m-b-2">
                        <a href="https://www.youtube.com/watch?v=9ZfN87gSjvI" data-lity="">
                        <img src="https://img.youtube.com/vi/9ZfN87gSjvI/mqdefault.jpg" class="width-full">
                        </a>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-4 m-b-2">
                        <a href="https://www.youtube.com/watch?v=w2H07DRv2_M" data-lity="">
                        <img src="https://img.youtube.com/vi/w2H07DRv2_M/mqdefault.jpg" class="width-full">
                        </a>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-4 m-b-2">
                        <a href="https://www.youtube.com/watch?v=PntG8KEVjR8" data-lity="">
                        <img src="https://img.youtube.com/vi/PntG8KEVjR8/mqdefault.jpg" class="width-full">
                        </a>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-4 m-b-2">
                        <a href="https://www.youtube.com/watch?v=q8kxKvSQ7MI" data-lity="">
                        <img src="https://img.youtube.com/vi/q8kxKvSQ7MI/mqdefault.jpg" class="width-full">
                        </a>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-4 m-b-2">
                        <a href="https://www.youtube.com/watch?v=cutu3Bw4ep4" data-lity="">
                        <img src="https://img.youtube.com/vi/cutu3Bw4ep4/mqdefault.jpg" class="width-full">
                        </a>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-4 m-b-2">
                        <a href="https://www.youtube.com/watch?v=gCspUXGrraM" data-lity="">
                        <img src="https://img.youtube.com/vi/gCspUXGrraM/mqdefault.jpg" class="width-full">
                        </a>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-4 m-b-2">
                        <a href="https://www.youtube.com/watch?v=COtpTM1MpAA" data-lity="">
                        <img src="https://img.youtube.com/vi/COtpTM1MpAA/mqdefault.jpg" class="width-full">
                        </a>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-4 m-b-2">
                        <a href="https://www.youtube.com/watch?v=8NVkGHVOazc" data-lity="">
                        <img src="https://img.youtube.com/vi/8NVkGHVOazc/mqdefault.jpg" class="width-full">
                        </a>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-4 m-b-2">
                        <a href="https://www.youtube.com/watch?v=QgQ7MWLsw1w" data-lity="">
                        <img src="https://img.youtube.com/vi/QgQ7MWLsw1w/mqdefault.jpg" class="width-full">
                        </a>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-4 m-b-2">
                        <a href="https://www.youtube.com/watch?v=Dmw0ucCv8aQ" data-lity="">
                        <img src="https://img.youtube.com/vi/Dmw0ucCv8aQ/mqdefault.jpg" class="width-full">
                        </a>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-4 m-b-2">
                        <a href="https://www.youtube.com/watch?v=r1d7ST2TG2U" data-lity="">
                        <img src="https://img.youtube.com/vi/r1d7ST2TG2U/mqdefault.jpg" class="width-full">
                        </a>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-4 m-b-2">
                        <a href="https://www.youtube.com/watch?v=WUR-XWBcHvs" data-lity="">
                        <img src="https://img.youtube.com/vi/WUR-XWBcHvs/mqdefault.jpg" class="width-full">
                        </a>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-4 m-b-2">
                        <a href="https://www.youtube.com/watch?v=A7sQ8RWj0Cw" data-lity="">
                        <img src="https://img.youtube.com/vi/A7sQ8RWj0Cw/mqdefault.jpg" class="width-full">
                        </a>
                    </div>
                    <!-- end col-3 -->
                    <!-- begin col-3 -->
                    <div class="col-md-3 col-sm-4 m-b-2">
                        <a href="https://www.youtube.com/watch?v=IMN2VfiXls4" data-lity="">
                        <img src="https://img.youtube.com/vi/IMN2VfiXls4/mqdefault.jpg" class="width-full">
                        </a>
                    </div>
                    <!-- end col-3 -->
                </div>
                <!-- end row -->
            </div> --}}
            <!-- end #profile-videos tab -->
            <!-- begin #profile-friends tab -->
            {{-- <div class="tab-pane fade active show" id="profile-friends">
                <h4 class="m-t-0 m-b-20">Friend List (14)</h4>
                <!-- begin row -->
                <div class="row row-space-6">
                    <!-- begin col-6 -->
                    <div class="col-xl-4 col-lg-6 m-b-5 p-b-1">
                        <div class="p-10 bg-white rounded">
                            <div class="media media-xs overflow-visible align-items-center">
                                <a class="media-left" href="javascript:;">
                                <img src="../assets/img/user/user-1.jpg" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                    <b class="text-inverse">James Pittman</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group btn-group-sm dropdown">
                                        <a href="javascript:;" class="btn btn-default">Friends</a>
                                        <a href="#" data-toggle="dropdown" class="btn btn-default dropdown-toggle"><b class="caret"></b></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:;" class="dropdown-item">Action 1</a>
                                            <a href="javascript:;" class="dropdown-item">Action 2</a>
                                            <a href="javascript:;" class="dropdown-item">Action 3</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:;" class="dropdown-item">Action 4</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-xl-4 col-lg-6 m-b-5 p-b-1">
                        <div class="p-10 bg-white rounded">
                            <div class="media media-xs overflow-visible align-items-center">
                                <a class="media-left" href="javascript:;">
                                <img src="../assets/img/user/user-2.jpg" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                    <b class="text-inverse">Mitchell Ashcroft</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group btn-group-sm dropdown">
                                        <a href="javascript:;" class="btn btn-default">Friends</a>
                                        <a href="#" data-toggle="dropdown" class="btn btn-default dropdown-toggle"><b class="caret"></b></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:;" class="dropdown-item">Action 1</a>
                                            <a href="javascript:;" class="dropdown-item">Action 2</a>
                                            <a href="javascript:;" class="dropdown-item">Action 3</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:;" class="dropdown-item">Action 4</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-xl-4 col-lg-6 m-b-5 p-b-1">
                        <div class="p-10 bg-white rounded">
                            <div class="media media-xs overflow-visible align-items-center">
                                <a class="media-left" href="javascript:;">
                                <img src="../assets/img/user/user-3.jpg" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                    <b class="text-inverse">Ella Cabena</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group btn-group-sm dropdown">
                                        <a href="javascript:;" class="btn btn-default">Friends</a>
                                        <a href="#" data-toggle="dropdown" class="btn btn-default dropdown-toggle"><b class="caret"></b></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:;" class="dropdown-item">Action 1</a>
                                            <a href="javascript:;" class="dropdown-item">Action 2</a>
                                            <a href="javascript:;" class="dropdown-item">Action 3</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:;" class="dropdown-item">Action 4</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-xl-4 col-lg-6 m-b-5 p-b-1">
                        <div class="p-10 bg-white rounded">
                            <div class="media media-xs overflow-visible align-items-center">
                                <a class="media-left" href="javascript:;">
                                <img src="../assets/img/user/user-4.jpg" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                    <b class="text-inverse">Declan Dyson</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group btn-group-sm dropdown">
                                        <a href="javascript:;" class="btn btn-default">Friends</a>
                                        <a href="#" data-toggle="dropdown" class="btn btn-default dropdown-toggle"><b class="caret"></b></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:;" class="dropdown-item">Action 1</a>
                                            <a href="javascript:;" class="dropdown-item">Action 2</a>
                                            <a href="javascript:;" class="dropdown-item">Action 3</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:;" class="dropdown-item">Action 4</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-xl-4 col-lg-6 m-b-5 p-b-1">
                        <div class="p-10 bg-white rounded">
                            <div class="media media-xs overflow-visible align-items-center">
                                <a class="media-left" href="javascript:;">
                                <img src="../assets/img/user/user-5.jpg" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                    <b class="text-inverse">George Seyler</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group btn-group-sm dropdown">
                                        <a href="javascript:;" class="btn btn-default">Friends</a>
                                        <a href="#" data-toggle="dropdown" class="btn btn-default dropdown-toggle"><b class="caret"></b></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:;" class="dropdown-item">Action 1</a>
                                            <a href="javascript:;" class="dropdown-item">Action 2</a>
                                            <a href="javascript:;" class="dropdown-item">Action 3</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:;" class="dropdown-item">Action 4</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-xl-4 col-lg-6 m-b-5 p-b-1">
                        <div class="p-10 bg-white rounded">
                            <div class="media media-xs overflow-visible align-items-center">
                                <a class="media-left" href="javascript:;">
                                <img src="../assets/img/user/user-6.jpg" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                    <b class="text-inverse">Patrick Musgrove</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group btn-group-sm dropdown">
                                        <a href="javascript:;" class="btn btn-default">Friends</a>
                                        <a href="#" data-toggle="dropdown" class="btn btn-default dropdown-toggle"><b class="caret"></b></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:;" class="dropdown-item">Action 1</a>
                                            <a href="javascript:;" class="dropdown-item">Action 2</a>
                                            <a href="javascript:;" class="dropdown-item">Action 3</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:;" class="dropdown-item">Action 4</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-xl-4 col-lg-6 m-b-5 p-b-1">
                        <div class="p-10 bg-white rounded">
                            <div class="media media-xs overflow-visible align-items-center">
                                <a class="media-left" href="javascript:;">
                                <img src="../assets/img/user/user-7.jpg" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                    <b class="text-inverse">Taj Connal</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group btn-group-sm dropdown">
                                        <a href="javascript:;" class="btn btn-default">Friends</a>
                                        <a href="#" data-toggle="dropdown" class="btn btn-default dropdown-toggle"><b class="caret"></b></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:;" class="dropdown-item">Action 1</a>
                                            <a href="javascript:;" class="dropdown-item">Action 2</a>
                                            <a href="javascript:;" class="dropdown-item">Action 3</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:;" class="dropdown-item">Action 4</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-xl-4 col-lg-6 m-b-5 p-b-1">
                        <div class="p-10 bg-white rounded">
                            <div class="media media-xs overflow-visible align-items-center">
                                <a class="media-left" href="javascript:;">
                                <img src="../assets/img/user/user-8.jpg" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                    <b class="text-inverse">Laura Pollock</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group btn-group-sm dropdown">
                                        <a href="javascript:;" class="btn btn-default">Friends</a>
                                        <a href="#" data-toggle="dropdown" class="btn btn-default dropdown-toggle"><b class="caret"></b></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:;" class="dropdown-item">Action 1</a>
                                            <a href="javascript:;" class="dropdown-item">Action 2</a>
                                            <a href="javascript:;" class="dropdown-item">Action 3</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:;" class="dropdown-item">Action 4</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-xl-4 col-lg-6 m-b-5 p-b-1">
                        <div class="p-10 bg-white rounded">
                            <div class="media media-xs overflow-visible align-items-center">
                                <a class="media-left" href="javascript:;">
                                <img src="../assets/img/user/user-9.jpg" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                    <b class="text-inverse">Dakota Mannix</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group btn-group-sm dropdown">
                                        <a href="javascript:;" class="btn btn-default">Friends</a>
                                        <a href="#" data-toggle="dropdown" class="btn btn-default dropdown-toggle"><b class="caret"></b></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:;" class="dropdown-item">Action 1</a>
                                            <a href="javascript:;" class="dropdown-item">Action 2</a>
                                            <a href="javascript:;" class="dropdown-item">Action 3</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:;" class="dropdown-item">Action 4</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-xl-4 col-lg-6 m-b-5 p-b-1">
                        <div class="p-10 bg-white rounded">
                            <div class="media media-xs overflow-visible align-items-center">
                                <a class="media-left" href="javascript:;">
                                <img src="../assets/img/user/user-10.jpg" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                    <b class="text-inverse">Timothy Woolley</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group btn-group-sm dropdown">
                                        <a href="javascript:;" class="btn btn-default">Friends</a>
                                        <a href="#" data-toggle="dropdown" class="btn btn-default dropdown-toggle"><b class="caret"></b></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:;" class="dropdown-item">Action 1</a>
                                            <a href="javascript:;" class="dropdown-item">Action 2</a>
                                            <a href="javascript:;" class="dropdown-item">Action 3</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:;" class="dropdown-item">Action 4</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-xl-4 col-lg-6 m-b-5 p-b-1">
                        <div class="p-10 bg-white rounded">
                            <div class="media media-xs overflow-visible align-items-center">
                                <a class="media-left" href="javascript:;">
                                <img src="../assets/img/user/user-11.jpg" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                    <b class="text-inverse">Benjamin Congreve</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group btn-group-sm dropdown">
                                        <a href="javascript:;" class="btn btn-default">Friends</a>
                                        <a href="#" data-toggle="dropdown" class="btn btn-default dropdown-toggle"><b class="caret"></b></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:;" class="dropdown-item">Action 1</a>
                                            <a href="javascript:;" class="dropdown-item">Action 2</a>
                                            <a href="javascript:;" class="dropdown-item">Action 3</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:;" class="dropdown-item">Action 4</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-xl-4 col-lg-6 m-b-5 p-b-1">
                        <div class="p-10 bg-white rounded">
                            <div class="media media-xs overflow-visible align-items-center">
                                <a class="media-left" href="javascript:;">
                                <img src="../assets/img/user/user-12.jpg" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                    <b class="text-inverse">Mariam Maddock</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group btn-group-sm dropdown">
                                        <a href="javascript:;" class="btn btn-default">Friends</a>
                                        <a href="#" data-toggle="dropdown" class="btn btn-default dropdown-toggle"><b class="caret"></b></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:;" class="dropdown-item">Action 1</a>
                                            <a href="javascript:;" class="dropdown-item">Action 2</a>
                                            <a href="javascript:;" class="dropdown-item">Action 3</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:;" class="dropdown-item">Action 4</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-xl-4 col-lg-6 m-b-5 p-b-1">
                        <div class="p-10 bg-white rounded">
                            <div class="media media-xs overflow-visible align-items-center">
                                <a class="media-left" href="javascript:;">
                                <img src="../assets/img/user/user-13.jpg" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                    <b class="text-inverse">Blake Gerrald</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group btn-group-sm dropdown">
                                        <a href="javascript:;" class="btn btn-default">Friends</a>
                                        <a href="#" data-toggle="dropdown" class="btn btn-default dropdown-toggle"><b class="caret"></b></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:;" class="dropdown-item">Action 1</a>
                                            <a href="javascript:;" class="dropdown-item">Action 2</a>
                                            <a href="javascript:;" class="dropdown-item">Action 3</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:;" class="dropdown-item">Action 4</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-6 -->
                    <!-- begin col-6 -->
                    <div class="col-xl-4 col-lg-6 m-b-5 p-b-1">
                        <div class="p-10 bg-white rounded">
                            <div class="media media-xs overflow-visible align-items-center">
                                <a class="media-left" href="javascript:;">
                                <img src="../assets/img/user/user-14.jpg" alt="" class="media-object img-circle">
                                </a>
                                <div class="media-body valign-middle">
                                    <b class="text-inverse">Gabrielle Bunton</b>
                                </div>
                                <div class="media-body valign-middle text-right overflow-visible">
                                    <div class="btn-group btn-group-sm dropdown">
                                        <a href="javascript:;" class="btn btn-default">Friends</a>
                                        <a href="#" data-toggle="dropdown" class="btn btn-default dropdown-toggle"><b class="caret"></b></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a href="javascript:;" class="dropdown-item">Action 1</a>
                                            <a href="javascript:;" class="dropdown-item">Action 2</a>
                                            <a href="javascript:;" class="dropdown-item">Action 3</a>
                                            <div class="dropdown-divider"></div>
                                            <a href="javascript:;" class="dropdown-item">Action 4</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end col-6 -->
                </div>
                <!-- end row -->
            </div> --}}
            <!-- end #profile-friends tab -->
        </div>
        <!-- end tab-content -->
    </div>
    <!-- end profile-content -->
</div>
