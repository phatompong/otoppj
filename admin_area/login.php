<?php 

    session_start();
    include("includes/db.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OTOP : แผงควบคุมระบบขายสินค้า</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
   
   <div class="container"><!-- container begin -->
       <form action="" class="form-login" method="post"><!-- form-login begin -->
           <h2 class="form-login-heading"> ล็อคอินเข้าสู่ระบบ </h2>
           
           <input type="text" class="form-control" placeholder="อีเมล์ของคุณ" name="admin_email" required>
           
           <input type="password" class="form-control" placeholder="รหัสผ่าน" name="admin_pass" required>
           
           <button type="submit" class="btn btn-lg btn-primary btn-block" name="admin_login"><!-- btn btn-lg btn-primary btn-block begin -->
               
               ลงชื่อเข้าใช้
               
           </button><!-- btn btn-lg btn-primary btn-block finish -->
           
       </form><!-- form-login finish -->
   </div><!-- container finish -->
    
</body>
</html>


<?php 

    if(isset($_POST['admin_login'])){
        
        $admin_email = mysqli_real_escape_string($con,$_POST['admin_email']);
        
        $admin_pass = mysqli_real_escape_string($con,$_POST['admin_pass']);
        
        $get_admin = "select * from admins where admin_email='$admin_email' AND admin_pass='$admin_pass'";
        
        $run_admin = mysqli_query($con,$get_admin);
        
        $count = mysqli_num_rows($run_admin);
        
        if($count==1){
            
            $_SESSION['admin_email']=$admin_email;
            
            echo "<script>alert('ลงชื่อเข้าใช้งานสำเร็จ ยินดีต้อนรับ!')</script>";
            
            echo "<script>window.open('index.php?dashboard','_self')</script>";
            
        }else{
            
            echo "<script>alert('อีเมล์หรือรหัสผ่านของคุณไม่ถูกต้อง!')</script>";
            
        }
        
    }

?>