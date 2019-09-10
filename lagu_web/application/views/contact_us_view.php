<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>..::W:D:L::..</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background: url(http://localhost/lagu_web/images/music_bg.jpg) 0 50%;
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
		margin: 0 0 14px 0;
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
	
	.photo
	{
		border-width:3px;
		border-style:solid;
		border-color:#cfcdcd;
		
	}
	
	#boxshadowX{
		%align : center;
		%text-align : center;
		border: 1px solid #D0D0D0;
		background-color: white;
		%margin-left:80px;
		%margin-right:80px;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
		padding:8px;
	}
	</style>
</head>

<body>
<?php
				$attributes = array('id' => 'insertform');
				echo form_open('contact_us/sendEmail',$attributes);
			?>
			
	<table width="100%">
		<tr>
			<td>
				<div align="center">

					<div style="width:1000px; height:100px;" id="container">
						<h1>
						<div align="right" style="margin-right:80px;">
						CONTACT US
						</div>
						</h1>
						
						<table width="100%" border="0">
						<tr>
						<td width="120px" align="right"> 
						<a href="<?php echo site_url('first_submit');?>"> HOME </a> &nbsp;/&nbsp;
						<a href="<?php echo site_url('album');?>"> ALBUM </a> &nbsp;/&nbsp;
						<a href="<?php echo site_url('chatbox');?>"> CHATBOX </a> &nbsp;/&nbsp;
						<a href="<?php echo site_url('contact_us');?>"> CONTACT US </a>&nbsp;/&nbsp;
						<a href="<?php echo site_url('about');?>"> ABOUT </a></td> </td>
						<td width="10px">  </td>
						</tr>
						</table>
					</div >
					
					<div style="width:1000px; height:400px;" id="container">
					<div align="center">
					<table width="800px" border="0">
					    <tr>
							<td>&nbsp;
							</td>
						</tr>
						<tr>
							<td>
									 <table border="0" width="100%">
					 <tr>
					 <td width="50%" align="left" style="text-align:justify;">
							<img class="" src="http://localhost/lagu_web/images/email-icon.jpg" width="98%" height="270px" alt="" title="" style="float:left; margin-right:15px; margin-bottom:5px"/> 
							</td>
					 <td width="50%" align="center">
					 <div id="boxshadowX">
						 <table border="0">
									<tr>
										<td align="center" colspan="3">
										<b>CONTACT US</b>
										<br>
										We are ready to serve our member for 24 hour in a day. Contact this phone number <b>tlp: +6287 865848278</b> if you need any help. You can also sent email to us by form below if you have any comments or suggestions.<hr>
										</td>
									</tr>
									<tr>
										<td align="left">Email</td>
										<td>:</td>
										<td>
										<?php 
											$data = array(
												'name' => 'email',
												'id'   => 'email',
												'value'=> '',
												'maxlength' => '100',
												'size' => '30'
												);
												
												echo form_input($data); ?>
										</td>
									</tr>
									
									<tr>
										<td align="left">Password</td>
										<td>:</td>
										<td>
										<?php 
											$data = array(
												'name' => 'password',
												'id'   => 'password',
												'value'=> '',
												'maxlength' => '100',
												'size' => '30'
												);
												
												echo form_password($data); ?>
										</td>
									</tr>
									<tr>
										<td align="left">Subject</td>
										<td>:</td>
										<td>
										<?php 
											$data = array(
												'name' => 'subjek',
												'id'   => 'subjek',
												'value'=> '',
												'maxlength' => '100',
												'size' => '30'
												);
												
												echo form_input($data); ?>
										</td>
									</tr>
									
									<tr>
										<td align="left">Message</td>
										<td>:</td>
										<td>
										<?php 
											$data = array(
												'name' => 'pesan',
												'id'   => 'pesan',
												'value'=> '',
												'cols' => '33',
												'rows' => '3'

												);
												
												echo form_textarea($data); ?>
										</td>
									</tr>
									
									<tr>
										<td colspan="3" align="center">
										
											<?php 
												$data = array(
													'type' => 'submit',
													'name' => 'send',
													'value'=> 'SEND EMAIL',
													);
													
													echo form_input($data); ?>
										</td>
										
									</tr>
								</table>
								</div>
								</td>
								</tr>
								</table>
					
							</td>
						</tr>
						
					</table>
					<br>
					<?php echo validation_errors(); ?>
						 
					</div>
					</div>
					
					<div style="width:1000px; height:60px;" id="container">
					<br>
						<b>..:: <a href="<?php echo site_url('first_submit/logout');?>"><input type="button" value="LOGOUT"></a> ::..</b>
					</div >

				</div>

			</td>
		</tr>
	</table>
</body>
</html>