<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Edit Data Page</title>	
</head>
<body>

    <section class="container mt-4">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <h4 class="text-center mb-4">Form Edit Data</h4>
                
                <form action="<?php echo site_url('Insert_data/save_edit_data'); ?>" method="post" class="form-horizontal">
                    <div class="form-group row">
                        <div class="col-sm-2 control-label">Name: </div>
                        <div class="col-sm-10">
                            <input type="text" name="mem_name" required class="form-control form-control-sm" value=<?php echo $query->mem_name; ?>>
                        </div>
                    </div>
                    
                    <div class="form-group row">
                        <div class="col-sm-2 control-label">Lastname: </div>
                        <div class="col-sm-10">
                            <input type="text" name="mem_lastName" required class="form-control form-control-sm" value=<?php echo $query->mem_lastName; ?>>
                        </div>
                    </div>

                    <div class="form-group row text-center">
                        <div class="col-sm-12 mt-1">
                            <input type="hidden" name="mem_id" value=<?php echo $query->mem_id; ?>>
                            <button type="submit" class="btn btn-warning">Save Your Edit</button>
                        </div>
                    </div>
                    
                </form>
            </div>        
        </div>
    </section>

</body>
</html>