<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>..::W:D:L::..</title>
	<link href="http://localhost/lagu_web/themes/1/js-image-slider.css" rel="stylesheet" type="text/css" />
    <script src="http://localhost/lagu_web/themes/1/js-image-slider.js" type="text/javascript"></script>
	<link href="generic.css" rel="stylesheet" type="text/css" />
	
	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background: url(http://localhost/lagu_web/images/music_bgA.jpg) 0 50%;
		background-repeat: repeat-x;
		position : bottom;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: white;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 16px 0;
		padding: 14px 15px 10px 15px;
	}
	
	h2 {
		color: #444;
		background-color: white;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		align : center;
		text-align : center;
		border: 1px solid #D0D0D0;
		background-color: white;
		opacity:0.94;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>

<body>
<?php if($username == NULL)
		{
			$usernameX = " ";
		}
		else
		{
			$usernameX = $username;
		}
?>
	<table width="100%">
		<tr>
			<td>
				<div align="center">

					<div style="width:1000px; height:110px;" id="container">
						<h1>WELCOME <?php echo strtoupper($username); ?></h1>
						<h2>..:: M U S I C ::..</h2>
					</div >
					
					
					<div style="width:1000px; height:370px;" id="container">
					
					<div id="sliderFrame">
						<div id="slider">
							<img src="http://localhost/lagu_web/images/star.jpg"width="780px" height="450px" alt="" title="" style="margin-top:20px;"/>
							<img src="http://localhost/lagu_web/images/music_bgO.jpg"width="780px" height="450px" alt="" title="" style="margin-top:20px;"/>
							<img src="http://localhost/lagu_web/images/music_bgZ.jpg"width="780px" height="450px" alt="" title="" style="margin-top:20px;"/>
							<img src="http://localhost/lagu_web/images/image_fantastic.jpg"width="780px" height="450px" alt="" title="" style="margin-top:20px;"/>
							<img src="http://localhost/lagu_web/images/music_bgS.jpg"width="780px" height="450px" alt="" title="" style="margin-top:20px;"/>
						</div>
					</div>
					</div>
					
					
					
					<div style="width:1000px; height:90px;" id="container">
						<table width="100%" border="0" style="margin-top:10px;">
						<tr>
						<td width="100px"> &nbsp; </td>
						<td width="100px"> <a href="<?php echo site_url('album');?>"> ALBUM </a> </td>
						<td width="250px"> <a href="<?php echo site_url('chatbox');?>"> CHAT BOX </a> </td>
						<td width="200px"> <a href="<?php echo site_url('contact_us');?>"> CONTACT US </a> </td>
						<td width="100px"> <a href="<?php echo site_url('about');?>"> ABOUT </a> </td>
						<td width="100px"> &nbsp; </td>
						</tr>
						</table>
						<div style="margin-left:100px;margin-right:100px;">
						<hr>
						<b>..::<a href="<?php echo site_url('first_submit/logout');?>"><input type="button" value="LOGOUT"></a>::..</b>
						</div>
					</div >

				</div>

			</td>
		</tr>
	</table>
</body>
</html>