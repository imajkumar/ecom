<?php /*<!DOCTYPE html>
<html lang="en">

    <head>
        {!! meta_init() !!}
        <meta name="keywords" content="@get('keywords')">
        <meta name="description" content="@get('description')">
        <meta name="author" content="@get('author')">
    
        <title>@get('title')</title>

        @styles()
        
    </head>

    <body>
        @partial('header')

        @content()

        @partial('footer')

        @scripts()
    </body>

</html>
*/
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<title>Color Admin | Dashboard</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<meta name="BASE_URL" content="{{ url('/') }}" />
	<meta name="UUID" content="{{Auth::user()->id}}" />
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
	<link href="{{ BACKEND.'plugins/jstree/dist/themes/default/style.min.css'}}" rel="stylesheet" />

	<!-- ================== END PAGE LEVEL STYLE ================== -->
</head>

<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade show">
		<span class="spinner"></span>
	</div>
	<!-- end #page-loader -->

	@partial('header')

	@partial('leftside')
	@content()
	@partial('footer')

	<!-- begin scroll to top btn -->
	<a href="javascript:;" class="btn btn-icon btn-circle btn-primary btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
	<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="{{ BACKEND.'js/app.min.js'}}"></script>
	<script src="{{ BACKEND.'js/theme/apple.min.js'}}"></script>
	<!-- ================== END BASE JS ================== -->
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
	<script src="{{ BACKEND.'plugins/jstree/dist/jstree.min.js'}}"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/free-jqgrid/4.15.5/jquery.jqgrid.min.js"></script>
	<script>
    //<![CDATA[
    $(function () {
        "use strict";
        $("#grid1").jqGrid({
            colModel: [
                { name: "name", label: "Client", width: 53 },
                { name: "invdate", label: "Date", width: 75, align: "center", sorttype: "date",
                    formatter: "date", formatoptions: { newformat: "d-M-Y" } },
                { name: "amount", label: "Amount", width: 65, template: "number" },
                { name: "tax", label: "Tax", width: 41, template: "number" },
                { name: "total", label: "Total", width: 51, template: "number" },
                { name: "closed", label: "Closed", width: 59, template: "booleanCheckbox", firstsortorder: "desc" },
                { name: "ship_via", label: "Shipped via", width: 87, align: "center", formatter: "select",
                    formatoptions: { value: "FE:FedEx;TN:TNT;DH:DHL", defaultValue: "DH" } }
            ],
            data: [
                { id: "10",  invdate: "2015-10-01", name: "test",   amount: "" },
                { id: "20",  invdate: "2015-09-01", name: "test2",  amount: "300", tax: "20", closed: false, ship_via: "FE", total: "320" },
                { id: "30",  invdate: "2015-09-01", name: "test3",  amount: "400", tax: "30", closed: false, ship_via: "FE", total: "430" },
                { id: "40",  invdate: "2015-10-04", name: "test4",  amount: "200", tax: "10", closed: true,  ship_via: "TN", total: "210" },
                { id: "50",  invdate: "2015-10-31", name: "test5",  amount: "300", tax: "20", closed: false, ship_via: "FE", total: "320" },
                { id: "60",  invdate: "2015-09-06", name: "test6",  amount: "400", tax: "30", closed: false, ship_via: "FE", total: "430" },
                { id: "70",  invdate: "2015-10-04", name: "test7",  amount: "200", tax: "10", closed: true,  ship_via: "TN", total: "210" },
                { id: "80",  invdate: "2015-10-03", name: "test8",  amount: "300", tax: "20", closed: false, ship_via: "FE", total: "320" },
                { id: "90",  invdate: "2015-09-01", name: "test9",  amount: "400", tax: "30", closed: false, ship_via: "TN", total: "430" },
                { id: "100", invdate: "2015-09-08", name: "test10", amount: "500", tax: "30", closed: true,  ship_via: "TN", total: "530" },
                { id: "110", invdate: "2015-09-08", name: "test11", amount: "500", tax: "30", closed: false, ship_via: "FE", total: "530" },
                { id: "120", invdate: "2015-09-10", name: "test12", amount: "500", tax: "30", closed: false, ship_via: "FE", total: "530" }
            ],
            guiStyle: "bootstrap4",
            iconSet: "fontAwesome",
            idPrefix: "gb1_",
            rownumbers: true,
            sortname: "invdate",
            sortorder: "desc",
            caption: "List of Group Items"
        });
    });
    //]]>
    </script>
	<script src="{{ BACKEND.'js/jquery.validate.js'}}"></script>

	<script src="{{ BACKEND.'js/appjs/ui-tree.demo.js'}}"></script>


	<script src="{{ BACKEND.'js/appjs/dashboard.js'}}"></script>
	<script src="{{ BACKEND.'js/ecom-backend.js'}}"></script>

	<!-- ================== END PAGE LEVEL JS ================== -->
</body>

</html>