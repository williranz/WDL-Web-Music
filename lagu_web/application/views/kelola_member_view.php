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
		echo form_open('Kelola_member/GetMemberPaginationBy',$attributes);
	?>	
	<table width="100%">
		<tr>
			<td>
				<div align="center">

					<div style="width:1000px; height:100px;" id="container">
						<h1>
						<div align="left" style="margin-left:85px;">
						MANAGE MEMBERS
						</div>
						</h1>
						
						<table width="100%" border="0">
						<tr>
						<td width="93px" align="left" style="padding-left:100px;"> 
						<a href="<?php echo site_url('admin_submit');?>"> ADMIN HOME </a> &nbsp;\&nbsp;
						<a href="<?php echo site_url('kelola_lagu');?>"> MANAGE SONGS </a> &nbsp;\&nbsp;
						<a href="<?php echo site_url('kelola_member');?>"> MANAGE MEMBERS </a> </td>
						<td width="7px">  </td>
						</tr>
						</table>
					</div >
					
					<div style="width:1000px; height:400px;" id="container">
					<div align="center">
					
					<table width="100px" border="0">
						<tr>
							<td colspan="3" ></td>
							<td colspan="2" align="center">
								
								<div id="boxshadowX">
							
								SEARCHING 
								<?php 
									$data = array(
									'name' => 'mncari',
									'id'   => 'mncari',
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
								
								</div>
							</td>
						</tr>
					</table>
					
					<table width="800px" border="0">
					    <tr>
							<td>&nbsp;
							</td>
						</tr>
					
						<tr>
						
						
							<td align="center">
							<br>
							<div id="boxshadow">
							<table  width="100%" border="0">
								<tr style="background-color:#a5fb35;">
									<td><b>ID</b> </td>
									<td><b>FULL NAME</b></td>
									<td><b>EMAIL</b></td>
									<td><b>USERNAME</b></td>
									<td><b>PASSWORD</b></td>
									<td><b>ROLE</b></td>
									<td><b>EDIT</b></td>
									<td><b>DELETE</b></td>
									
								</tr>
								<?php
									$i=0;
									foreach((array)$member_listX as $rows)
									{
										$i++;
										if($i%2!=0)
										{
								?>	
											<tr class="odd" style="background-color:#dddddd;">
												<td><?php echo $rows['id_user']; ?></td>
												<td><?php echo $rows['nama_asli']; ?></td>
												<td><?php echo $rows['email']; ?></td>
												<td><?php echo $rows['username']; ?></td>
												<td><?php echo $rows['password']; ?></td>
												<td><?php echo $rows['role']; ?></td>
												<td><a href="<?php echo site_url('Kelola_member/ToEditMember');?>?s_id=<?php echo $rows['id_user']; ?>&s_na=<?php echo $rows['nama_asli']; ?>&s_em=<?php echo $rows['email']; ?>&s_us=<?php echo $rows['username']; ?>&s_pa=<?php echo $rows['password']; ?>"><input type="button" value="EDIT"/></a></td>
												<td><a href="<?php echo site_url('Kelola_member/ToDelMember');?>?s_id=<?php echo $rows['id_user']; ?>&s_na=<?php echo $rows['nama_asli']; ?>"><input type="button" value="DELETE"/></a></td>
											</tr>
								
								<?php
										}
										else 
										{
								?>	
											<tr class="even" style="background-color:#ebebea;">
												<td><?php echo $rows['id_user']; ?></td>
												<td><?php echo $rows['nama_asli']; ?></td>
												<td><?php echo $rows['email']; ?></td>
												<td><?php echo $rows['username']; ?></td>
												<td><?php echo $rows['password']; ?></td>
												<td><?php echo $rows['role']; ?></td>
												<td><a href="<?php echo site_url('Kelola_member/ToEditMember');?>?s_id=<?php echo $rows['id_user']; ?>&s_na=<?php echo $rows['nama_asli']; ?>&s_em=<?php echo $rows['email']; ?>&s_us=<?php echo $rows['username']; ?>&s_pa=<?php echo $rows['password']; ?>"><input type="button" value="EDIT"/></a></td>
												<td><a href="<?php echo site_url('Kelola_member/ToDelMember');?>?s_id=<?php echo $rows['id_user']; ?>&s_na=<?php echo $rows['nama_asli']; ?>"><input type="button" value="DELETE"/></a></td>
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
					</div>
					</div>
					
					<div style="width:1000px; height:60px;" id="container">
					<br>
						<b>..:: <a href="<?php echo site_url('first_submit/logout');?>"><input type="button" value="LOGOUT"></a> ::..</b>
					</div>
				</div>
			</td>
		</tr>
	</table>
</body>
</html>