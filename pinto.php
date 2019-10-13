<?php 

require "dbConnect.php";
connectDB();
$sql = "SELECT `u-pwd` FROM  `user-list` where `u-name` = 'root'";
$data = ((selectData($sql)[1]['u-pwd']));


echo($data);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form class="form-signin" method="POST" action='sign-in-verify.php'>
                                        <center><h6>ล็อกอินเข้าสู่ระบบ</h6></center>
                                        <br>
                                        <div class="form-label-group">
                                            <label for="inputEmail">ชื่อผู้ใช้</label>
                                            <input type="text" name="username" id="username" class="form-control" placeholder="username" required autofocus>

                                            <!-- <div class="row">
                                                <div class="col-sm-1 col-md-1 col-lg-1 mx-auto" >
                                                    <span><i class="fas fa-user fa-lg"></i></span>
                                                </div>
                                                <div class="col-sm-10 col-md-10 col-lg-10 mx-auto">
                                                    <input type="email" id="inputEmail" class="form-control" placeholder="username" required autofocus>

                                                </div>

                                            </div> -->
                                            
                                        </div>
                                        <br>
                                        <div class="form-label-group"> 
                                            <label for="inputPassword">รหัสผ่าน</label>
                                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" required>
                                        
                                        </div>
                                        <br>
                                            <div class="custom-control custom-checkbox mb-1">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">บันทึกบัญชีผู้ใช้</label> 
                                            <button class="btn btn-success btn-md" style="float:right;" type="submit">ล็อกอิน</button>
                                        
                                       
                                        </div>
                                       
                                
                                
                                    </form>
</body>
</html>