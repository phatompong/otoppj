<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> แก้ไขโปรโมชั่น </title>
</head>
<body>



<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> แผงควบคุม / เพิ่มโปรโมชั่นสินค้า
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-money fa-fw"></i> เพิ่มโปรโมชั่นสินค้า
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <form action="" class="form-horizontal" method="post"><!-- form-horizontal begin -->

<!-- ------------------------------------------------------------------------------------------- -->

                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            ชื่อโปรโมชั่น
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input name="cat_title" type="text" class="form-control" required>
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->

<!-- ------------------------------------------------------------------------------------------- -->

                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            รายละเอียดโปรโมชั่น
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <textarea type='text' name="cat_desc" id="" cols="19" rows="6" class="form-control" ></textarea>
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->

<!-- ------------------------------------------------------------------------------------------- -->

                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                    
                            วันที่เริ่มโปรโมชั่น
                    
                        </label><!-- control-label col-md-3 finish --> 
                    
                        <div class="col-md-6"><!-- col-md-6 begin -->
                    
                        <input type="date" name="cat_start" class="form-control">
                    
                        </div><!-- col-md-6 finish -->
                
                    </div><!-- form-group finish -->

<!-- ------------------------------------------------------------------------------------------- -->

                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                    
                            ส่วนลด
                    
                        </label><!-- control-label col-md-3 finish --> 
                    
                        <div class="col-md-6"><!-- col-md-6 begin -->
                    
                        <input name="cat_disc" type="text" class="form-control" required>
                    
                        </div><!-- col-md-6 finish -->
                
                    </div><!-- form-group finish -->

<!-- ------------------------------------------------------------------------------------------- -->

                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                    
                            ช่วงราคา
                    
                        </label><!-- control-label col-md-3 finish --> 
                    
                        <div class="col-md-6"><!-- col-md-6 begin -->
                    
                        <input name="cat_price" type="text" class="form-control" required>
                    
                        </div><!-- col-md-6 finish -->
                
                    </div><!-- form-group finish -->

<!-- ------------------------------------------------------------------------------------------- -->

                    <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                             
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value="เพิ่มโปรโมชั่น" name="submit" type="submit" class="form-control btn btn-primary">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
                </form><!-- form-horizontal finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->

<script src="js/tinymce/tinymce.min.js"></script>
    <script>tinymce.init({ selector:'textarea'});</script>
</body>
</html>

<?php  

          if(isset($_POST['submit'])){
              
              $cat_title = $_POST['cat_title'];
              
              $cat_desc = $_POST['cat_desc'];

              $cat_start = $_POST['cat_start'];

              $cat_disc = $_POST['cat_disc'];

              $cat_price = $_POST['cat_price'];
              
              $insert_cat = "insert into categories (cat_title,cat_desc,cat_start,cat_disc,cat_price) values ('$cat_title','$cat_desc','$cat_start','$cat_disc','$cat_price')";
              
              $run_cat = mysqli_query($con,$insert_cat);
              
              if($run_cat){
                  
                  echo "<script>alert('โปรโมชั่นสินค้าของคุณถูกเพิ่มเรียบร้อยแล้ว')</script>";
                  
                  echo "<script>window.open('index.php?view_cats','_self')</script>";
                  
              }
              
          }

?>

<?php } ?>