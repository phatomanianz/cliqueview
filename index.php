
<!DOCTYPE html>
<html>
<head>

	<title>CliqueView: Clinic Management System</title>
	<link rel="stylesheet" href="resources/css/style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
        <div class="cliqueview">
        <h1 class= "text-center p-3 fs-3">CliqueView</h1>
        	<div class="container d-flex justify-content-center 
        		align-items-center"
        			style="min-height: 50vh">

        <form class="border shadow p-3 rounded"
            	action="php/check-login.php"
           	    method="post"
           	   		style="width: 400px;">

            <div class="imgcontainer text-center">
            	<img src ="resources/images/user.png" alt="Login" class="userimage">

      	      <h1 class="text-center p-3 fs-3">Sign In</h1>
      	      	<?php if (isset($_GET['error'])) { ?>

      	      <div class="alert alert-danger" role="alert">
				  <?=$_GET['error']?>
			  </div>
			  <?php } ?>

			  <div class = "mb-1">
            <select class="form-select mb-3" 
					name="role"
            		aria-label="select form">
            <option selected disabled >Select Type</option>
            <option value="admin">Admin</option>
            <option value="patient">Patient</option>
            <option value="doctor">Doctor</option>
			</select>

		  <div class="mb-3">
		    <input type="email" 
		           class="form-control" 
		           name="email"
				   placeholder="Email" 
		           id="email">
		  </div>

		  <div class="mb-3">
		    <input type="password" 
		           name="password" 
		           class="form-control" 
				   placeholder="Password"
		           id="password">
		  </div>
		 </div>

				<button type="submit" 
					class="btn btn-primary">LOGIN</button>			
			</form>
     	 </div>
	</body>
</html>

