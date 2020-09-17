<?php 
$customer = session()->get('customer');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title> Dashboard</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<meta name="BASE_URL" content="{{ url('/') }}" />
	
	{{-- <meta name="UUID" content="{{ ($customer)? $customer->id:Auth::user()->id}}" /> --}}
	<meta name="UUID" content="{{ Auth::user()->id }}" />
	
	<meta name="csrf-token" content="{{ csrf_token() }}">

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="{{ BACKEND.'css/apple/app.min.css'}}" rel="stylesheet" />
	<link href="{{ BACKEND.'plugins/ionicons/css/ionicons.min.css'}}" rel="stylesheet" />
	<!-- ================== END BASE CSS STYLE ================== -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/themes/redmond/jquery-ui.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/free-jqgrid/4.15.5/css/ui.jqgrid.min.css">
	

	<!-- ================== BEGIN PAGE LEVEL STYLE ================== -->
	<link href="{{ BACKEND.'plugins/jvectormap-next/jquery-jvectormap.css'}}" rel="stylesheet" />
	<link href="{{ BACKEND.'plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.css'}}" rel="stylesheet" />
	<link href="{{ BACKEND.'plugins/gritter/css/jquery.gritter.css'}}" rel="stylesheet" />
	<link href="{{ BACKEND.'plugins/select2/dist/css/select2.min.css'}}" rel="stylesheet" />

	<link href="{{ BACKEND.'plugins/jstree/dist/themes/default/style.min.css'}}" rel="stylesheet" />

	<!-- ================== END PAGE LEVEL STYLE ================== -->

	<!-- ================== BEGIN PAGE gallery upload CSS STYLE ================== -->
	<link href="{{asset('assets/plugins/blueimp-gallery/css/blueimp-gallery.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/blueimp-file-upload/css/jquery.fileupload.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/blueimp-file-upload/css/jquery.fileupload-ui.css')}}" rel="stylesheet" />

	<!-- ================== END PAGE gallery upload CSS STYLE ================== -->

	<link href="{{asset('assets/plugins/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
    
    <!-- ================== BEGIN PAGE GALLERY ================== -->
	<link href="{{asset('assets/plugins/lightbox2/dist/css/lightbox.css')}}" rel="stylesheet" />
	<link href="{{ BACKEND.'plugins/simple-line-icons/css/simple-line-icons.css'}}" rel="stylesheet" />
	<!-- ================== END PAGE GALLERY ================== -->
	<link href="{{BACKEND.'plugins/smartwizard/dist/css/smart_wizard.cs'}}s" rel="stylesheet" />

	<link rel="stylesheet" href="http://cdn.syncfusion.com/13.2.0.29/js/web/flat-azure/ej.web.all.min.css" />
	<style>
		.required-star{
			color: red;
		}
		.form-layout{
			margin-left: 10px;
			margin-right: 10px;
		}
	</style>
	
    <style>
        .modal {
            display:    none;
            position:   fixed;
            z-index:    1000;
            top:        0;
            left:       0;
            height:     100%;
            width:      100%;
            background: rgba( 255, 255, 255, .8 ) 
                        url("{{ BACKEND.'img/coming-soon/ajax-loader1.gif'}}") 
                        50% 50% 
                        no-repeat;
        }

        body.loading .modal {
            overflow: hidden;   
        }

        body.loading .modal {
            display: block;
        }
    </style>

</head>

<body>
	<div class="modal"><!-- Place at bottom of page --></div>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show">
		<span class="spinner"></span>
	</div>
	<!-- end #page-loader -->

	@partial('header')

	@partial('leftside')
	@content()
	
	@partial('footer')


	
	
    {{-- start model add item image--}}
    <div class="modal fade" id="addItemImageByModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Add Image</h4>
              <button type="button" onclick="javascript:window.location.reload()" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              
            </div>
            <div class="modal-body">
              <form id="formAttribute" method="post">
                  @csrf
                  
              </form>
            </div>
            <div class="modal-footer">
                <button type="button" id="saveAttribute" class="btn btn-primary">Submit</button>
                <button type="button" class="btn btn-default" onclick="javascript:window.location.reload()" data-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
	  {{-- end model add item image --}}
	  
	<!-- begin scroll to top btn -->
	<a href="javascript:;" class="btn btn-icon btn-circle btn-primary btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
	<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<script
	src="https://code.jquery.com/jquery-3.5.1.min.js"
	integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
	crossorigin="anonymous"></script>
	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ BACKEND.'js/app.min.js'}}"></script>
	
	<script src="{{ BACKEND.'js/theme/apple.min.js'}}"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->

	
	<script src="{{asset('assets/plugins/blueimp-file-upload/js/vendor/jquery.ui.widget.js')}}"></script>
	<script src="{{asset('assets/plugins/blueimp-tmpl/js/tmpl.js')}}"></script>
	<script src="{{asset('assets/plugins/blueimp-load-image/js/load-image.all.min.js')}}"></script>
	<script src="{{asset('assets/plugins/blueimp-canvas-to-blob/js/canvas-to-blob.js')}}"></script>
	<script src="{{asset('assets/plugins/blueimp-gallery/js/jquery.blueimp-gallery.min.js')}}"></script>
	<script src="{{asset('assets/plugins/blueimp-file-upload/js/jquery.iframe-transport.js')}}"></script>
	<script src="{{asset('assets/plugins/blueimp-file-upload/js/jquery.fileupload.js')}}"></script>
	<script src="{{asset('assets/plugins/blueimp-file-upload/js/jquery.fileupload-process.js')}}"></script>
	<script src="{{asset('assets/plugins/blueimp-file-upload/js/jquery.fileupload-image.js')}}"></script>
	<script src="{{asset('assets/plugins/blueimp-file-upload/js/jquery.fileupload-audio.js')}}"></script>
	<script src="{{asset('assets/plugins/blueimp-file-upload/js/jquery.fileupload-video.js')}}"></script>
	<script src="{{asset('assets/plugins/blueimp-file-upload/js/jquery.fileupload-validate.js')}}"></script>
	<script src="{{asset('assets/plugins/blueimp-file-upload/js/jquery.fileupload-ui.js')}}"></script>
	
	<!--[if (gte IE 8)&(lt IE 10)]>
		<script src="assets/plugins/jquery-file-upload/js/cors/jquery.xdr-transport.js')}}"></script>
	<![endif]-->
	<script src="{{asset('assets/js/demo/form-multiple-upload.demo.js')}}"></script>
    <!-- ================== END PAGE LEVEL JS ================== -->
    {{-- end gallery --}}


	<script type="text/javascript">
		BASE_URL = $('meta[name="BASE_URL"]').attr('content');
		UID = $('meta[name="UUID"]').attr('content');
		_TOKEN = $('meta[name="csrf-token"]').attr('content');
	</script>

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="{{ BACKEND.'plugins/gritter/js/jquery.gritter.js'}}"></script>
	<script src="{{ BACKEND.'plugins/flot/jquery.flot.js'}}"></script>
	<script src="{{ BACKEND.'plugins/flot/jquery.flot.time.js'}}"></script>
	<script src="{{ BACKEND.'plugins/flot/jquery.flot.resize.js'}}"></script>
	<script src="{{ BACKEND.'plugins/flot/jquery.flot.pie.js'}}"></script>
	<script src="{{ BACKEND.'plugins/jquery-sparkline/jquery.sparkline.min.js'}}"></script>
	<script src="{{ BACKEND.'plugins/jvectormap-next/jquery-jvectormap.min.js'}}"></script>
	<script src="{{ BACKEND.'plugins/jvectormap-next/jquery-jvectormap-world-mill.js'}}"></script>
	<script src="{{ BACKEND.'plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.js'}}"></script>
	

	<script src="{{ BACKEND.'plugins/select2/dist/js/select2.min.js'}}" type="20287b22df4b1cca4ee4aa5c-text/javascript"></script>
	
	

	

	<script src="{{asset('assets/plugins/datatables.net/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{asset('assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
	<script src="{{asset('assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>
	
	{{-- <script src="../assets/plugins/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="../assets/plugins/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
	<script src="../assets/plugins/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	<script src="../assets/plugins/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script> --}}
	<script src="{{ BACKEND.'js/demo/table-manage-default.demo.js'}}"></script>


    <!-- ================== BEGIN PAGE GALLERY JS ================== -->
	<script src="{{asset('assets/plugins/isotope-layout/dist/isotope.pkgd.min.js')}}"></script>
	<script src="{{asset('assets/plugins/lightbox2/dist/js/lightbox.min.js')}}"></script>
	<script src="{{asset('assets/js/demo/gallery.demo.js')}}"></script>
	<!-- ================== END PAGE GALLERY JS ================== -->
	<script src="{{BACKEND.'plugins/smartwizard/dist/js/jquery.smartWizard.js'}}"></script>
	<script src="{{BACKEND.'js/demo/form-wizards.demo.js'}}"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/free-jqgrid/4.15.5/jquery.jqgrid.min.js"></script>
	
	<script src="{{ BACKEND.'js/jquery.validate.js'}}"></script>

	<script src="{{ BACKEND.'js/appjs/ui-tree.demo.js'}}"></script>
	<script src="{{ BACKEND.'js/appjs/form-plugins.demo.js'}}" type="20287b22df4b1cca4ee4aa5c-text/javascript"></script>

	<script src="{{ BACKEND.'js/appjs/dashboard.js'}}"></script>
	<script src="{{ BACKEND.'js/ecom-backend.js'}}"></script>
	<script src="{{ BACKEND.'plugins/parsleyjs/dist/parsley.min.js'}}"></script>
	<script src="{{ BACKEND.'plugins/highlight.js/highlight.min.js'}}"></script>
	<script src="{{ BACKEND.'plugins/ckeditor/ckeditor.js'}}"></script>
	
	<script src="{{ BACKEND.'js/demo/render.highlight.js'}}"></script>
	<script src="../assets/js/demo/ui-modal-notification.demo.js" type="a67d5a0b424a7806d2c2de44-text/javascript"></script>
	
	<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet"/>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
	
	<!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/3.5.4/select2.min.css" rel="stylesheet" />
	<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/3.5.4/select2.min.js"></script>
<script src="https://rawgit.com/wasikuss/select2-multi-checkboxes/select2-3.5.x/select2.multi-checkboxes.js"></script> -->
<script src="{{ BACKEND.'js/appjs/ecom.js'}}"></script>

<script src="{{ BACKEND.'js/demo/profile.demo.js'}}"></script>




	<script type="text/javascript">
	$(document).ready(function() {
		toastr.options.timeOut = 5000; // 1.5s
		toastr.info('Page Loaded!');
		
	});
	</script>


	<!-- ================== END PAGE LEVEL JS ================== -->
	
    <script src="{{ BACKEND.'plugins/countdown/jquery.plugin.min.js'}}"></script>
	<script src="{{ BACKEND.'plugins/countdown/jquery.countdown.min.js'}}"></script>
	<script src="{{ BACKEND.'js/demo/coming-soon.demo.js'}}"></script>
</body>

</html>