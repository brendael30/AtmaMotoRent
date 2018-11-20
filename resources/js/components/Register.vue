<template>
    <div id="gambar">
        <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-50">
				<form class="login100-form validate-form" name="form1" method="post" action="register.php">
					<span class="login100-form-title p-b-33">
						REGISTER
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Nama kosong">
						<input class="input100" type="text" name="nama_lengkap" placeholder="Nama">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100  validate-input" data-validate = "Username kosong">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>
					
					<div class="wrap-input100 validate-input" data-validate = "Alamat kosong">
						<input class="input100" type="text" name="alamat" placeholder="Alamat">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 rs1 validate-input" data-validate="Password invalid">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "No Telp kosong">
						<input class="input100" type="text" name="phone" placeholder="No Telp">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Email invalid (ex@abc.xyz)">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100-1"></span>
						<span class="focus-input100-2"></span>
					</div>

					<div class="container-login100-form-btn m-t-20">
						<button class="login100-form-btn" type="submit" name="Submit" value="Add">
							Register
						</button>
					</div>
					
				</form>
				
			</div>
		</div>
	</div>
    </div>
</template>