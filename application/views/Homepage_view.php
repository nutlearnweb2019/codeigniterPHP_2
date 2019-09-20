<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home Page</title>	
</head>
<body>

    <section class="container mt-2">
        <div class="row">
            <div class="col-md-12">
                <h4>:: List Produce ::</h4>
            </div> 

            <div class="col-md-4 text-center p-0">
            <img src="<?php echo base_url('images/ex_p1.jpg'); ?>" class="w-100" alt="ex_p1">
                <p>Ex.Produce 1</p>
                <button class="btn btn-dark">More..</button> 
            </div>

            <div class="col-md-4 text-center p-0">
            <img src="<?php echo base_url('images/ex_p1.jpg'); ?>" class="w-100" alt="ex_p1">
                <p>Ex.Produce 2</p>
                <button class="btn btn-dark">More..</button> 
            </div>

            <div class="col-md-4 text-center p-0">
            <img src="<?php echo base_url('images/ex_p1.jpg'); ?>" class="w-100" alt="ex_p1">
                <p>Ex.Produce 3</p>
                <button class="btn btn-dark">More..</button> 
            </div>        
        </div>
    </section>

    <Article class="container mt-4">
        <div class="row">
            <div class="col-md-12">
                <h4>:: List Article ::</h4>
            </div> 

            <div class="col-md-3 text-center p-0">
            <img src="<?php echo base_url('images/ex_p2.jpg'); ?>" class="w-100" alt="ex_p2">
                <p>Ex.Produce 1</p>
                <button class="btn btn-dark">More..</button> 
            </div>

            <div class="col-md-3 text-center p-0">
            <img src="<?php echo base_url('images/ex_p2.jpg'); ?>" class="w-100" alt="ex_p2">
                <p>Ex.Produce 2</p>
                <button class="btn btn-dark">More..</button> 
            </div>

            <div class="col-md-3 text-center p-0">
            <img src="<?php echo base_url('images/ex_p2.jpg'); ?>" class="w-100" alt="ex_p2">
                <p>Ex.Produce 3</p>
                <button class="btn btn-dark">More..</button> 
            </div>  

            <div class="col-md-3 text-center p-0">
            <img src="<?php echo base_url('images/ex_p2.jpg'); ?>" class="w-100" alt="ex_p2">
                <p>Ex.Produce 4</p>
                <button class="btn btn-dark">More..</button> 
            </div>      
        </div>
    </Article>

</body>
</html>