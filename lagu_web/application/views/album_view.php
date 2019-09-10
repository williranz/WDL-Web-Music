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
		align : center;
		text-align : center;
		border: 1px solid #D0D0D0;
		background-color: white;
		%margin-left:80px;
		%margin-right:80px;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
		padding:8px;
	}
	
	#boxshadow{
		align : center;
		text-align : center;
		border: 1px solid #D0D0D0;
		background-color: white;
		%margin-left:80px;
		%margin-right:80px;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>

<body>
	<?php
		$attributes = array('id' => 'insertform');
		echo form_open('Album/GetLaguPaginationBy',$attributes);
	?>

	<table width="100%">
		<tr>
			<td>
				<div align="center">

					<div style="width:1000px; height:100px;" id="container">
						<h1>
						<div align="right" style="margin-right:80px;">
						ALBUM
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
					
					<div style="width:1000px; height:600px;" id="container">
					<div align="center">
					
					
					
					<table width="800px" border="0">
					    <tr>
							<td>&nbsp;
							</td>
						</tr>
					
						<tr>
							<td align="center">
							
							
							<table  width="100%" border="0">
								<tr>
								<td colspan="3" >
								</td>
									<td colspan="2" align="right">
									<div id="boxshadowX">
									
									SEARCHING 
									<?php 
											$data = array(
												'name' => 'cari',
												'id'   => 'cari',
												'value'=> '',
												'maxlength' => '100',
												'size' => '20'
												);
												
												echo form_input($data); ?>
												
												<?php 
												$data = array(
													'type' => 'submit',
													'name' => 'search',
													'value'=> 'SEARCH',
													);
													
													echo form_input($data); ?>
												<div>
									</td>
						
								</tr>
								<tr>
									<td colspan="5" align="right">&nbsp;</td>
						
								</tr>
								<tr>
									<td colspan="5" align="left"><b>CATEGORY</b><hr></td>
						
								</tr>
								<tr>
									
									
									<td width="20%"><i>BLUES</i></td>
									<td width="20%"><i>CLASSIC</i></td>
									<td width="20%"><i>DANGDUT</i></td>
									<td width="20%"><i>HIP HOP</i></td>
									<td width="20%"><i>JAZZ</i></td>
									
									<td width="20%">&nbsp;</td>
									
								</tr>
								<tr>
									<td width="20%"><i>METAL</i></td>
									<td width="20%"><i>POP</i></td>
									<td width="20%"><i>R n B</i></td>
									<td width="20%"><i>REGGAE</i></td>
									<td width="20%"><i>ROCK</i></td>
									<td width="20%">&nbsp;</td>
									
								</tr>
								
							</table>
							<br>
							<div id="boxshadow">
							<table  width="100%" border="0">
								<tr style="background-color:#a5fb35;">
									<td><b>NO</b></td>
									<td><b>ARTIST</b></td>
									<td><b>TITLE</b></td>
									<td><b>ALBUM</b></td>
									<td><b>SIZE</b></td>
									<td><b>GENRE</b></td>
									<td><b>DOWNLOAD</b></td>
									<td><b>VIEW|LISTEN</b></td>
									
								</tr>
								<?php
										$i=0;
										foreach((array)$lagu_listX as $rows)
										{
											$i++;
											if($i%2!=0)
											{
									?>	
												<tr class="odd" style="background-color:#dddddd;">
													<td align="left" style="padding-left:5px;"><?php echo $rows['id_lagu']; ?></td>
													<td align="left" style="padding-left:5px;"><?php echo $rows['artis']; ?></td>
													<td align="left" style="padding-left:5px;"><?php echo $rows['judul']; ?></td>
												    <td align="left" style="padding-left:5px;"><?php echo $rows['album']; ?></td>
													<td align="left" style="padding-left:5px;"><?php echo $rows['size_lagu']; ?></td>
													<td align="left" style="padding-left:5px;"><?php echo $rows['genre']; ?></td>
													<?php  (string)$filename = (string)$rows['judul']; ?> 
													<td align="center" style="padding-left:5px;"><a href="<?php echo site_url("Album/to_download");?>?s_judul=<?php echo $rows['judul']; ?>&s_artis=<?php echo $rows['artis']; ?>&s_album=<?php echo $rows['album']; ?>&s_genre=<?php echo $rows['genre']; ?>&s_size=<?php echo $rows['size_lagu']; ?>&s_dt=<?php echo $rows['download_time']; ?>"><input type="button" value="DOWNLOAD"/></a></td>
													<td align="center" style="padding-left:5px;"><a href="http://localhost/lagu_web/file/uploads/" + "." +  <?php $filename?> > <input type="button" value="LISTEN|VIEW"/></a></td>
							
												</tr>
								
									<?php
											}
											else if($i%2==0)
											{
									?>	
												<tr class="odd"  style="background-color:#ebebea;">
													<td align="left" style="padding-left:5px;"><?php echo $rows['id_lagu']; ?></td>
													<td align="left" style="padding-left:5px;"><?php echo $rows['artis']; ?></td>
													<td align="left" style="padding-left:5px;"><?php echo $rows['judul']; ?></td>
												    <td align="left" style="padding-left:5px;"><?php echo $rows['album']; ?></td>
													<td align="left" style="padding-left:5px;"><?php echo $rows['size_lagu']; ?></td>
													<td align="left" style="padding-left:5px;"><?php echo $rows['genre']; ?></td>
													<?php  (string)$filename = (string)$rows['judul']; ?> 
													<td align="center" style="padding-left:5px;"><a href="<?php echo site_url("Album/to_download");?>?s_judul=<?php echo $rows['judul']; ?>&s_artis=<?php echo $rows['artis']; ?>&s_album=<?php echo $rows['album']; ?>&s_genre=<?php echo $rows['genre']; ?>&s_size=<?php echo $rows['size_lagu']; ?>&s_dt=<?php echo $rows['download_time']; ?>"><input type="button" value="DOWNLOAD"/></a></td>
													<td align="center" style="padding-left:5px;"><a href="http://localhost/lagu_web/file/uploads/" + "." + <?php $filename?> > <input type="button" value="LISTEN|VIEW"/></a></td>
							
												</tr>
									<?php
											}
										}
									?>
								
							</table>
							</div>
							</td>
						</tr>
					</table>
					<br> <?php echo $this->pagination->create_links(); ?>
					<br>
					
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