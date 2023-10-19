<?php 
	include "header.php";
?>
<style>
	nav.main-header{display:none}
</style>
<!-- Content Wrapper. Contains page content -->
  <div id="login-page" class="content-wrapper">
    <section class="w-100">
		<div class="container">
			<div class="row justify-content-center">

				<div class="col-sm-6 col-md-5">
	
					<div class="card overflow-hidden border-0 shadow-lg mb-md-0 rounded-20">
						<div class="card-body p-0">
							<!-- Nested Row within Card Body -->
							<div class="row">
								<div class="col-12 position-relative">
									<div class="p-4 pt-5 pb-4 p-md-5">
										<div class="text-center">
											<h1 class="h2 text-gray-900 mb-2 fw-bold">Log In</h1>
											<h5 class="fs-6 text-black-50 mb-4">Untuk melanjutkan ke <span class="text-black text-bold"><u>LP2B KEMENTAN</u></span></h5>
										</div>
										<div class="row justify-content-center">
											<div class="col-xl-12">
												<form class="user">
													<div class="form-group mb-3">
														<input type="email" class="form-control form-control-user py-2" id="exampleInputEmail" placeholder="Enter Email Address...">
													</div>
													<div class="form-group mb-3">
														<input type="password" class="form-control form-control-user py-2" id="exampleInputPassword" placeholder="Password">
													</div>
													<div class="form-group mb-4 text-black-50">
														<label class="d-flex align-items-center">
															<input type="checkbox" class="mr-2"> Remember Password
														</label>
													</div>
													<input type="submit" class="btn btn-primary btn-user btn-block rounded-5 d-block mb-2 p-2" value="Log In">
													<div class="text-center mt-4 mb-3"><a href="" class="google-login"><img style="height:30px" src="dist/img/google-logo.png"></a></div>
													<div class="text-center"><a href="forgot_password.php"><u>Lupa Password?</u></a></div>
													<div class="text-center">Belum terdaftar ? daftar sekarang! <a href="signup.php"><u>Sign Up</u></a></div>
												</form>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>

			</div>
		</div>
	</section>
</div>

<?php 
	include "footer.php";
?>