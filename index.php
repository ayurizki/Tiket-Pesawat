<html>
<head>
    <title>Trip Indonesia</title>
    <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    
  	  <?php
	error_reporting(0);
	$content = $_GET['content'];
	if(empty($content)){
		$content = 'home';
	}
	?>   
</head>
<body>
<div id="art-page-background-middle-texture">
	<div id="art-main">
			<div class="cleared reset-box"></div>
			<div class="art-box art-sheet">
				<div class="art-box-body art-sheet-body">
					<div class="art-bar art-nav">
						<div class="art-nav-outer">
							<ul class="art-hmenu">
								<li>
									<a href='index.php?content=home' title="Home" class="active">Home</a>
								</li>	
								<li>
									<a href="#">Tiket</a>
									<ul>
										<li><a href='index.php?content=informasi_tiket' title="Informasi Tiket" class="active">Informasi Tiket</a></li>
										<li><a href='index.php?content=pesan_tiket' title="Pesan Tiket" class="active">Pesan Tiket</a></li>
									</ul>
								</li>		
								<li>
								</li>
								<li>
									<a href='index.php?content=pembayaran' title="Pembayaran" class="active">Pembayaran</a>
								</li>
								<li>
									<a href="index.php?content=bantuan">Bantuan</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="cleared reset-box"></div>
					<div class="art-header">
							<div class="art-headerobject"></div>
								<div class="art-logo">
										<h1 class="art-logo-name"><a href="#">Trip Indonesia</a></h1>
												<h2 class="art-logo-text">Cepat dan Penerbangan Aman</h2>
									</div>
									
					</div>
					<div class="cleared reset-box"></div>
						<div class="art-layout-wrapper">
							<div class="art-content-layout">
								<div class="art-content-layout-row">
									<div class="art-layout-cell art-sidebar1">
											<div class="art-box art-block">
													<div class="art-box-body art-block-body">
															<div class="art-bar art-blockheader">
																	<h3 class="t">Login Form</h3>
															</div>
														<div class="art-box art-blockcontent">
															<div class="art-box-body art-blockcontent-body">
																	<form action="" method="post" name="login" id="form-login">
																	  <fieldset class="input" style="border: 0 none;">
																		<p id="form-login-username">
																		  <label for="modlgn_username">Username</label>
																		  <br />
																		  <input id="modlgn_username" type="text" name="username"class="inputbox" size="18" alt="username" />
																		  <p id="form-login-password">
																		  <label for="modlgn_passwd">Password</label>
																		  <br />
																		  <input id="modlgn_passwd" type="password" name="passwd" class="inputbox" size="18" alt="password" />
																		</p>
																		<p id="form-login-remember">
																	&nbsp;
																		</p>
																		<span class="art-button-wrapper">
																		  <span class="art-button-l"> </span>
																		  <span class="art-button-r"> </span>
																		  <input type="submit" name="Submit2" class="art-button" value="Login" />
																		</span>
																	  </fieldset>
																	  <ul>

																		<li>
																		  <a href="./?pages=register" title="Register" style="text-decoration: none;">Create an account</a>
																		</li>
																	  </ul>
																	</form>                
																<div class="cleared"></div>
															</div>
														</div>
															<div class="cleared"></div>
													</div>
											</div>
											<div class="art-box art-block">
													<div class="art-box-body art-block-body">
																		<div class="art-bar art-blockheader">
																			<h3 class="t">Kontak YM</h3>
																		</div>
																		
																		<div class="art-box art-blockcontent">
																			<div class="art-box-body art-blockcontent-body">
																					<a href="index.html"><img src="images/ym.jpg" width="170" height="220" /></a>
																								<div class="cleared"></div>
																			</div>
																		</div>
																		
																<div class="cleared"></div>
													</div>
												</div>
												<div class="art-box art-block">
															<div class="art-box-body art-block-body">
																		<div class="art-bar art-blockheader">
																			<h3 class="t">Rute Perjalanan</h3>
																		</div>
																		<div class="art-box art-blockcontent">
																			<div class="art-box-body art-blockcontent-body">
																		<ul>
																							<li>Jakarta</li>
																							<li>Lampung</li>
																							<li>Bandung</li>
																							<li>Surabaya</li>
																							<li>Bali</li>

																		</ul>                
																								<div class="cleared"></div>
																			</div>
																		</div>
																<div class="cleared"></div>
															</div>
													</div>
													<div class="art-box art-block">
															<div class="art-box-body art-block-body">
																		<div class="art-bar art-blockheader">
																			<h3 class="t">Pembayaran</h3>
																		</div>
																		<div class="art-box art-blockcontent">
																			<div class="art-box-body art-blockcontent-body">
																		<ul>
																							<li>BNI (a.n TripIndonesia  : 0669.01.004717.531)</li>
																							<li>BRI (a.n TripIndonesia  : 0669.01.004717.973)</li>
																							<li>BCA (a.n TripIndonesia : 0321670012)</li>

																		</ul>                
																								<div class="cleared"></div>
																			</div>
																		</div>
																<div class="cleared"></div>
															</div>
													</div>
													
											 <div class="cleared"></div>
									</div>
									<div class="art-layout-cell art-content">
									<div class="art-box art-post">
									<div class="art-box-body art-post-body">
									<div class="art-post-inner art-article">
									<div class="art-postcontent">	</div>
									<div>
							        	<!--pemanggilan menu-->
							            <?php
							                include "content/".$content.".php";
							            ?>
							        </div>
							        <div class="cleared"></div>
									</div>
									</div>
									<div class="cleared"></div>
									</div>
									</div>
							       </div>								
							</div>
						</div>
							<div class="cleared"></div>
								<div class="art-footer">
										<div class="art-footer-body">
											<div class="art-footer-text">
													<p>Copyright &copy;  2016 TripIndonesia. All rights reserved.</p>
											</div>
										<div class="cleared"></div>
									</div>
								</div>
							<div class="cleared"></div>
				</div>
			</div>
	</div>
</div>
</body>
</html>
