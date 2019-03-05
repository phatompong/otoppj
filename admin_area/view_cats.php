<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>

<div class="row"><!-- row 1 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <ol class="breadcrumb"><!-- breadcrumb begin -->
            <li>
                
                <i class="fa fa-dashboard"></i> แผงควบคุม / รายการโปรโมชั่นสินค้าทั้งหมด
                
            </li>
        </ol><!-- breadcrumb finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 1 finish -->

<div class="row"><!-- row 2 begin -->
    <div class="col-lg-12"><!-- col-lg-12 begin -->
        <div class="panel panel-default"><!-- panel panel-default begin -->
            <div class="panel-heading"><!-- panel-heading begin -->
                <h3 class="panel-title"><!-- panel-title begin -->
                
                    <i class="fa fa-tags fa-fw"></i> รายการโปรโมชั่นสินค้า
                
                </h3><!-- panel-title finish -->
            </div><!-- panel-heading finish -->
            
            <div class="panel-body"><!-- panel-body begin -->
                <div class="table-responsive"><!-- table-responsive begin -->
                    <table class="table table-hover table-striped table-bordered"><!-- tabel tabel-hover table-striped table-bordered begin -->
                        
                        <thead><!-- thead begin -->
                            <tr><!-- tr begin -->
                                <th> รหัสโปรโมชั่น </th>
                                <th> ชื่อโปรโมชั่น </th>
                                <th> รายละเอียดโปรโมชั่น </th>
                                <th> วันที่เริ่มโปรโมชั่น </th>
                                <th> ส่วนลด </th>
                                <th> ช่วงราคา </th>
                                <th> แก้ไข </th>
                                <th> ลบ </th>
                            </tr><!-- tr finish -->
                        </thead><!-- thead finish -->
                        
                        <tbody><!-- tbody begin -->
                            
                            <?php 
                            
                                $i=0;
          
                                $get_cats = "select * from categories";
          
                                $run_cats = mysqli_query($con,$get_cats);
          
                                while($row_cats=mysqli_fetch_array($run_cats)){
                                    
                                    $cat_id = $row_cats['cat_id'];
                                    
                                    $cat_title = $row_cats['cat_title'];
                                    
                                    $cat_desc = $row_cats['cat_desc'];

                                    $cat_start = $row_cats['cat_start'];

                                    $cat_disc = $row_cats['cat_disc'];

                                    $cat_price = $row_cats['cat_price'];
                                    
                                    $i++;
                            
                            ?>
                            
                            <tr><!-- tr begin -->
                                <td> <?php echo $i; ?> </td>
                                <td> <?php echo $cat_title; ?> </td>
                                <td width="300"> <?php echo $cat_desc; ?> </td>
                                <td> <?php echo $cat_start; ?> </td>
                                <td> <?php echo $cat_disc; ?> %</td>
                                <td> <?php echo $cat_price; ?> </td>
                                <td> 
                                    <a href="index.php?edit_cat= <?php echo $cat_id; ?> ">
                                        <i class="fa fa-pencil"></i> แก้ไข
                                    </a>
                                </td>
                                <td> 
                                    <a href="index.php?delete_cat= <?php echo $cat_id; ?> ">
                                        <i class="fa fa-trash"></i> ลบ
                                    </a>
                                </td>
                            </tr><!-- tr finish -->
                            
                            <?php } ?>
                        
                        </tbody><!-- tbody finish -->
                        
                    </table><!-- tabel tabel-hover table-striped table-bordered finish -->
                </div><!-- table-responsive finish -->
            </div><!-- panel-body finish -->
            
        </div><!-- panel panel-default finish -->
    </div><!-- col-lg-12 finish -->
</div><!-- row 2 finish -->


<?php } ?>