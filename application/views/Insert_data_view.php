<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Insert Data Page</title>	
</head>
<body>

    <section class="container mt-4">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h4 class="text-center mb-4">Form Insert Data</h4>
                
                <form action="<?php echo site_url('Insert_data/adding'); ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
                    
                    <div class="form-group row">
                        <div class="col-sm-2 control-label">Name: </div>
                        <div class="col-sm-10">
                            <input type="text" name="mem_name" required class="form-control form-control-sm" placeholder="Your Name">
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-sm-2 control-label">Lastname: </div>
                        <div class="col-sm-10">
                            <input type="text" name="mem_lastName" required class="form-control form-control-sm" placeholder="Your Lastname">
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-2 control-label">Picture: </div>
                        <div class="col-sm-10">
                            <input type="file" name="mem_picture" required accept="image/*">
                        </div>
                    </div>

                    <div class="form-group row text-center">
                        <div class="col-sm-12 mt-1">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                    
                </form>
            </div>        
        </div>
    </section>

</body>
</html>