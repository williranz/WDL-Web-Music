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
		background: url(http://localhost/lagu_web/images/music_bgD.jpg) 0 50%;
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
	
	.copyright
	{
		float:left;
		padding-top:5px;
		padding-bottom:5px;
		font:normal 80% Verdana,Trebuchet,Arial,Sans-serif;
	}
	</style>
</head>

<body>
	<table width="100%">
		<tr>
			<td>
				<div align="center">

					<div style="width:1000px; height:100px;" id="container">
						<h1>
						<div align="left" style="margin-left:85px;">
						About ..::W:D:L::..
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
							<td align="left" style="text-align:justify;">
							<img class="" src="http://localhost/lagu_web/images/MusicX.jpg" width="350px" height="250px" alt="" title="" style="float:left; margin-right:15px; margin-bottom:5px"/> 
							..:: W: D: L ::.. Song Download Websites is a simple website which contains the latest list of songs that are ready to be downloaded.
							Describing about the web, at the first time when this web loaded, visitors are offered by the login page, if already have an account, then just log in, but if dont have any account visitor have to register him/her self in order to have an account and become the member who can access this website. 
							For registration go to the register page. in register page, list yourself as a member by completing the form on the page. After finished creating an account, do login again. then after login you can browse this website, see the information of the songs, download the songs as well as chat to other online member.
							Account has two roles, namely admin and member. as a member there are 3 pieces of menu available on the website. First is the album contents menu which display list of songs that are ready for download. Second menu is chat box whose contents has chat feature with other members. 
							Third is the menu that contains the contact us form which display Admin's phone number and sending email form to the Admin.
							That's the description of this simple website, hopefully can provide the needed information.</td>
							<div class='copyright'> Copyright &#169 2010 This website is created by William Cahyadi.<div>
						</tr>
					</table>
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