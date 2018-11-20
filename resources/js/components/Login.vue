<template>
    <div id="gambar">
        
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form" name="form1" method="post" action="ceklogin.php">
					<span class="login100-form-title p-b-33">
						Log In 
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid Username is required: ex@abc.xyz">
						<input class="input100" type="text" name="username" placeholder="Username" id="username">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="password" id="password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn" type="submit" name="Submit" value="Login">
							Log In
						</button>
					</div>


					<div class="text-center">
						<span class="txt1">
							Create an account?
						</span>
                        
                        <router-link to="/register">
                            <a href="" class="txt2 hov1">
                                Sign up
                            </a>
                        </router-link>

					</div>
					
					<div class="text-center p-t-45 p-b-4">
						<span class="txt1">
							Bingung sewa motor? ATMAMOTORENT Saja
						</span>

						
					</div>
					
				</form>
				
			</div>
		</div>
	</div>
    </div>
</template>

<script>
		$(window).on("load", function () {
		  $("#preloader").fadeOut("slow", function () {
			// Animation complete.
			$(this).remove();
		  });
		});
	  </script>