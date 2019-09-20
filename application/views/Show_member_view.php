<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Show Member Page</title>	
</head>
<body>

    <section class="container mt-4">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <h4 class="text-center mb-4">Show Member Data</h4>
                
                <table class="table table-bordered table-hover">
                    <thead class="text-center">
                        <tr>
                            <th>id</th>
                            <th>picture</th>
                            <th>position</th>
                            <th>name</th>
                            <th>lastName</th>
                            <!-- <th>Email</th> -->
                            <th>level</th>
                            <th>dateSave</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($query as $row_show) { ?>
                        <tr>
                            <td class="text-center"> <?php echo $row_show->mem_id; ?> </td>
                            <td class="text-center"> 
                                <img src="<?php echo base_url('pictures'); ?>/<?php echo $row_show->mem_picture; ?>" width="100px">
                            </td>
                            <td class="text-center"> <?php echo $row_show->pos_name; ?> </td>
                            <td> <?php echo $row_show->mem_nickName.$row_show->mem_name; ?> </td>
                            <!-- <td> <?php echo $row_show->mem_name; ?> </td> -->
                            <td> <?php echo $row_show->mem_lastName; ?> </td>
                            <!-- <td> <?php echo $row_show->mem_email; ?> </td> -->
                            <td class="text-center"> <?php echo $row_show->mem_level; ?> </td>
                            <td> <?php echo $row_show->mem_dateSave; ?> </td>
                            <td class="text-center"> 
                                <a href="<?php echo site_url('Insert_data/edit_data/').$row_show->mem_id; ?>"><button class="btn btn-warning btn-sm">edit</button></a>
                                <?php echo nbs(4); ?>
                                <a href="<?php echo site_url('Insert_data/delete_data/').$row_show->mem_id; ?>" onclick="return confirm('Yes, I Confirm.');"><button class="btn btn-danger btn-sm">delete</button></a>   
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                
            </div>        
        </div>
    </section>

</body>
</html>