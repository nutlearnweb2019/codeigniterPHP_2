<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Login Page</title>	
</head>
<body>

    <section class="container mt-4">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h4 class="text-center mb-4">Form Login</h4>
                
                <form action="<?php echo site_url('Register/show_login'); ?>" method="post" class="form-horizontal">
                    <div class="form-group row">
                        <div class="col-sm-2 control-label">Username: </div>
                        <div class="col-sm-10">
                            <input type="text" name="username" required class="form-control" placeholder="Username">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2 control-label">Password: </div>
                        <div class="col-sm-10">
                            <input type="text" name="password" required class="form-control" placeholder="Password">
                        </div>
                    </div>

                    <hr>

                    <div class="form-group row text-center">
                        <div class="col-sm-12 mt-1">
                            <button type="submit" class="btn btn-primary">Register</button>
                        </div>
                    </div>
                    
                </form>
            </div>        
        </div>
    </section>

</body>
</html>