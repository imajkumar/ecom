<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="theme-color" content="#ef8813" />
<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,700&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
</head>
<body style="background:#f2f2f2">
<table style="background: #333333; padding: 5px; width: 800px; display: table; margin:60px auto">
<tbody>
<tr>
<td>
<table style="width: 100%; background: #fff; border:1px solid #d8d8d8; padding: 10px 10px 10px 10px">
<tbody>
<tr>
<td colspan="4" style=" padding:0px 0px 0px 0px">
<img  alt="Logo" height="30" src="images/logo.png" title="" /></td>
</tr>
<tr>
<td colspan="4" style="border-top: 1px solid #d8d8d8; font-family: arial">
<div style="margin-top:10px;"<strong style="font-size: 12px">Dear {{ucfirst($fname.' '.$lname)}},</strong>
<p style="font-size: 25px; line-height:1.2; margin: 15px 0px 0px 0px;"><strong>Sorry your registration has been rejected by out team <br />
<span style="font-size: 16px">for following reason: </span></strong></p>

<p style="font-size: 16px; padding: 10px; font-size:14px; line-height:1.7; font-weight:300; border:2px dotted #f1f1f1">{{$remark}}</p>



</tr>
<tr>
<td colspan="4">
<div style="font-family: arial; font-size: 12px">
<strong style="color:#ccc">Best regards,</strong><br />
System Administrator.


</div>
</td>
</tr>
</tbody>
</table>
</td>
</tr>
</tbody>
</table>
</body>
</html>
