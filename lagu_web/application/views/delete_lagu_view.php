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
		background: url(http://localhost/lagu_web/images/music_bgB.jpg) 0 50%;
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
	
	#boxshadow{
		align : center;
		text-align : center;
		border: 1px solid #D0D0D0;
		background-color: white;
		margin-left:100px;
		margin-right:100px;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
		padding:8px;
	}
	</style>
</head>

<body>

<?php 
$sid = $_GET['s_id']; 
$sjudul = $_GET['s_ju'];
?>

<?php
				$attributes = array('id' => 'insertform');
				echo form_open('Kelola_lagu/DelLagu',$attributes);
			?>
	<table width="100%">
		<tr>
			<td>
				<div align="center">

					<div style="width:550px; height:110px;" id="container">
						<h1>DELETE</h1>
						
						<b>&nbsp;</b>
					</div >
					
					<div style="width:550px; height:300px;" id="container">
					<br><br><br>
						 <div id="boxshadow" >
						 <table align="center" border="0">
									<tr>
										<td align="center" colspan="3">DELETE SONG<hr></td>
									</tr>
									<tr>
										<td align="left">SONG ID</td>
										<td>:</td>
										<td>
										<?php 
											$data = array(
												'name' => 'id_lagu',
												'id'   => 'id_lagu',
												'value'=> $sid,
												'maxlength' => '100',
												'size' => '20',
												'readonly' => 'true'
												);
												
												echo form_input($data); ?>
										</td>
									</tr>
									<tr>
										<td align="left">SONG TITLE</td>
										<td>:</td>
										<td>
										<?php 
											$data = array(
												'name' => 'judul',
												'id'   => 'judul',
												'value'=> $sjudul,
												'maxlength' => '100',
												'size' => '20',
												'readonly' => 'true'
												);
												
												echo form_input($data); ?>
										</td>
									</tr>
									
									
									<tr>
										<td colspan="3" align="center">
										
											<?php 
												$data = array(
													'type' => 'submit',
													'name' => 'delete',
													'value'=> 'DELETE',
													);
													
													echo form_input($data); ?>
										</td>
										
									</tr>
									
									<tr>
									<td colspan="3" align="center">
										<a href="<?php echo site_url('kelola_lagu');?>"> cancel </a> &nbsp;&nbsp;
										
									</td>
										
								</tr>
								</table>
								<?php echo validation_errors(); ?>
						 </div>
					</div>
					
					<div style="width:550px; height:60px;" id="container">
						<table width="100%" border="0" style="margin-top:10px;">
						<tr>
						<td width="10px">  </td>
						<td width="25px">
						<img src="http://localhost/lagu_web/images/reg_kiri.jpg" width="100%" height="30px" alt="" title=""/>
						</td>
						<td width="30px">
						<img src="http://localhost/lagu_web/images/reg_tengah_polos.jpg" width="100%" height="30px" alt="" title=""/>
						</td>
						<td width="25px">
						<img src="http://localhost/lagu_web/images/reg_kiri_flip.jpg" width="100%" height="30px" alt="" title=""/>
						</td>
						<td width="10px">  </td>
						</tr>
						</table>
					</div >

				</div>

			</td>
		</tr>
	</table>
</body>
</html>