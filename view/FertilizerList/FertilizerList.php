<?php 
    session_start();
    
    $idUT = $_SESSION[md5('typeid')];
    $CurrentMenu = "FertilizerList";
?>
<link rel="stylesheet" href="style.css">

<?php include_once("../layout/LayoutHeader.php"); ?>

<div class="row">
    <div class="col-xl-12 col-12 mb-4">
        <div class="card">
            <div class="card-header card-bg">
                <div class="row">
                    <div class="col-12">
                        <span class="link-active">รายการชนิดปุ๋ย</span>
                        <span style="float:right;">
                            <i class="fas fa-bookmark"></i>
                            <a class="link-path" href="#">หน้าแรก</a>
                            <span> > </span>
                            <a class="link-path link-active" href="#">รายการชนิดปุ๋ย</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
        <div class="col-xl-3 col-12 mb-4">
            <div class="card border-left-primary card-color-one shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold  text-uppercase mb-1">จำนวนชนิดปุ๋ย</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">3 ชนิด</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-bug fa-3x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="col-xl-3 col-12 mb-4">
            <div class="card border-left-primary card-color-four shadow h-100 py-2" id="addFertilizer" style="cursor:pointer;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold  text-uppercase mb-1">เพิ่มชนิดปุ๋ย</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">+1 ชนิด</div>
                        </div>
                        <div class="col-auto">
                            <!-- <i class="material-icons icon-big">add_location</i> -->
                            <i class="fas fa-plus-square fa-3x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
    <!-- 1 -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" id="card1">
        <h6 class="m-0 font-weight-bold text-white">โดโลไมท์</h6>
        <div class="dropdown no-arrow">
            <a class="dropdown-toggle" href="" role="button" id="edit1" data-toggle="modal" data-target="#edit" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-cog fa-lg" style="color:#FDFEFE" ></i>
            </a>
            <!-- <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                <div class="dropdown-header">แก้ไขปุ๋ย :</div> 
                <a class="dropdown-item" href="" id="">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div> -->
        </div>

    </div>
    <!-- Card Body -->
    <div class="card-body shadow" id="card1-detail">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <br>
                <center>
                    <img src="../../picture/ปูนขาว.jpg" id="pic-Fertilizer" class="" style="border-radius: 100px;width:100px;"; >
                    <br>
                    <br>

                    <h5>โดโลไมท์</h5>
                </center>

            </div>
            <div class="col-lg-3 col-sm-12 col-xs-12">
                <h4> เงื่อนไข </h4>
                <div>
                    <h5>1. ใส่เดือนละหนึ่งครั้ง</h5>
                    <h5>2. ไม่ควรใส่ตอนฝนตก</h5>
                    <h5>3. xxxxx</h5>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card shadow" >                
                    <div class="card-body">
                    <div class="">
                        <canvas id="lineChart" height="200" width="400" ></canvas>
                    </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <br>
    <!-- 2 -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" id="card1">
        <h6 class="m-0 font-weight-bold text-white">ปุ๋ยสร้างต้น</h6>
        <div class="dropdown no-arrow">
            <a class="dropdown-toggle"   id="edit1" >
                <i class="fas fa-cog fa-lg" style="color:#FDFEFE"></i>
            </a>
            <!-- <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                <div class="dropdown-header">แก้ไขปุ๋ย :</div> 
                <a class="dropdown-item" href="" id="">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div> -->
        </div>

    </div>
    <!-- Card Body -->
    <div class="card-body shadow" id="card1-detail">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <br>
                <center>
                    <img src="../../picture/Fertilizer/04.jpg" id="pic-Fertilizer" class="" style="border-radius: 100px;width:100px;"; >
                    <br>
                    <br>

                    <h5>ปุ๋ยสร้างต้น</h5>
                </center>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <h4> เงื่อนไข </h4>
                <div>
                    <h5>1. ใส่เดือนละหนึ่งครั้ง</h5>
                    <h5>2. ไม่ควรใส่ตอนฝนตก</h5>
                    <h5>3. xxxxx</h5>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card shadow mb-4" >                
                    <div class="card-body">
                    <div class="">
                        <canvas id="lineChart2" height="200" width="400" ></canvas>
                    </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
    <br>
    <!-- 3 -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between" id="card1">
        <h6 class="m-0 font-weight-bold text-white">ปุ๋ยผลผลิต</h6>
        <div class="dropdown no-arrow">
            <a class="dropdown-toggle"   id="edit1"  >
                <i class="fas fa-cog fa-lg" style="color:#FDFEFE"></i>
            </a>
            <!-- <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                <div class="dropdown-header">แก้ไขปุ๋ย :</div> 
                <a class="dropdown-item" href="" id="">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Something else here</a>
            </div> -->
        </div>

    </div>
    <!-- Card Body -->
    <div class="card-body shadow" id="card1-detail">
        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
            <br>
                <center>
                    <img src="../../picture/Fertilizer/05.jpg" id="pic-Fertilizer" class="" style="border-radius: 100px;width:100px;"; >
                    <br>
                    <br>

                    <h5>ปุ๋ยผลผลิต</h5>
                </center>

            </div>
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <h4> เงื่อนไข </h4>
                <div>
                    <h5>1. ใส่เดือนละหนึ่งครั้ง</h5>
                    <h5>2. ไม่ควรใส่ตอนฝนตก</h5>
                    <h5>3. xxxxx</h5>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                <div class="card shadow" >                
                    <div class="card-body">
                    <div class="">
                        <canvas id="lineChart3" height="200" width="400" ></canvas>
                    </div>
                    </div>
                </div>
            </div>


        </div>
    </div>





    <div class="edit-modal" >
                            <div class="modal fade" id="edit" tabindex="-1" role="dialog">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header header-modal" id="header-card">
                                        <h4 class="modal-title" id="largeModalLabel">แก้ไขปุ๋ย</h4>
                                    </div>
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">                                                
                                                <center>
                                                    <img src="../../picture/ปูนขาว.jpg" id="pic-Fertilizer" class="w-100" style="border-radius: 50%"; ">
                                                    <br>
                                                    <br>
                                                    <button type="button" class="btn btn-warning mb-4" id="edit-pic">
                                                        Edit
                                                    </button>
                                                </center>
                                            </div>
                                        
                                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12"> 
                                                <div class='row'>
                                                    <div class='col-lg-1 col-md-1 col-sm-1 col-xs-1 form-control-label'>
                                                                <label>ชื่อ</label>
                                                    </div>
                                                    <div class='col-lg-8 col-md-8 col-sm-8 col-xs-8'>
                                                        <div class='form-group'>
                                                            <div class='form-line'>
                                                                <input type='text' id='user-email' name='user-email' class='form-control' placeholder='' onchange="checkUemail();" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <label>เงื่อนไขการใส่</label>
                                                <div class='row'>
                                                    <div class='col-lg-1 col-md-1 col-sm-1 col-xs-1 form-control-label'>
                                                                
                                                    </div>
                                                    <div class='col-lg-8 col-md-8 col-sm-8 col-xs-8'>
                                                        <label>1. ปริมาณที่ใส่ตาม</label>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label'>
                                                                
                                                    </div>
                                                    <div class='col-lg-8 col-md-8 col-sm-12 col-xs-12'>
                                                        <input type="radio" name="gender" value="male"> จำนวนต้นและอายุ<br>

                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label'>
                                                                
                                                    </div>
                                                    <div class='col-lg-8 col-md-8 col-sm-12 col-xs-12'>
                                                        <input type="radio" name="gender" value="male"> จำนวนต้นและผลผลิต<br>

                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label'>
                                                                
                                                    </div>
                                                    <div class='col-lg-8 col-md-8 col-sm-12 col-xs-12'>
                                                        <input type="radio" name="gender" value="male"> จำนวนต้น<br>

                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-lg-1 col-md-1 col-sm-1 col-xs-1 form-control-label'>
                                                                
                                                    </div>
                                                    <div class='col-lg-8 col-md-8 col-sm-8 col-xs-8'>
                                                        <label>2. ช่วงเดือนที่ใส่</label>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label'>
                                                                
                                                    </div>
                                                    <div class='col-lg-8 col-md-8 col-sm-12 col-xs-12'>
                                                        <input type="radio" name="gender" value="male"> ทั้งปี<br>

                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label'>
                                                                
                                                    </div>
                                                    <div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>
                                                        <input type="radio" name="gender" value="male"> ตั้งแต่เดือน<br>

                                                    </div>
                                                    <div class='col-lg-2 col-md-2 col-sm-12 col-xs-12'>
                                                        <div class='form-group'>
                                                            <div class='form-line'>
                                                                <input type='text' id='user-email' name='user-email' class='form-control' placeholder='' onchange="" >
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class='col-lg-1 col-md-1 col-sm-1 col-xs-1'>
                                                        ถึง
                                                    </div>
                                                    <div class='col-lg-2 col-md-2 col-sm-12 col-xs-12'>
                                                        <div class='form-group'>
                                                            <div class='form-line'>
                                                                <input type='text' id='user-email' name='user-email' class='form-control' placeholder='' onchange="" >
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>

                                                <div class='row'>
                                                    <div class='col-lg-1 col-md-1 col-sm-1 col-xs-1 form-control-label'>
                                                                
                                                    </div>
                                                    <div class='col-lg-8 col-md-8 col-sm-8 col-xs-8'>
                                                        <label>3. ข้อห้าม/คำเตือน</label>
                                                        <button type="button" class="btn btn-success btn-sm" id="add-interdict">
                                                            เพิ่ม
                                                        </button>
                                                       
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-lg-2 col-md-2 col-sm-2 col-xs-2 form-control-label'>
                                                                
                                                    </div> 
                                                    <div class='col-lg-8 col-md-8 col-sm-12 col-xs-12 interdict' >
                                                        <input type='textarea' id='user-email' name='user-email' class='form-control' placeholder='' onchange="" >
                                                    </div>
                                                </div>

                                                <label>ปริมาณปุ๋ยที่ต้องใส่</label>
                                                <div class='row'>
                                                    <div class='col-lg-1 col-md-1 col-sm-1 col-xs-1 form-control-label'>
                                                                
                                                    </div>
                                                    <div class='col-lg-2 col-md-2 col-sm-2 col-xs-2 '>
                                                        หน่วย :
                                                    </div>
                                                    <div class='col-lg-8 col-md-8 col-sm-8 col-xs-8'>
                                                        <div class="form-check form-check-inline">
                                                            <input type="radio" class="form-check-input" id="exampleCheck1"  > 
                                                            <label class="form-check-label" for="exampleCheck1">กก./ต้น</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input type="radio" class="form-check-input" id="exampleCheck1" >
                                                            <label class="form-check-label" for="exampleCheck1">กก./ไร่</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                    <div class='col-lg-1 col-md-1 col-sm-1 col-xs-1 form-control-label'>
                                                                
                                                    </div>
                                                    <div class='col-lg-3 col-md-3 col-sm-3 col-xs-3 '>
                                                        ปริมาณที่ต้องใส่
                                                    </div>
                                                    <div class='col-lg-1 col-md-1 col-sm-1 col-xs-1'>
                                                        a= 
                                                    </div>
                                                    <div class="equation">
                                                        <div class='col-lg-4 col-md-4 col-sm-4 col-xs-4'>
                                                            <div class='form-group'>
                                                                <div class='form-line'>
                                                                    <input type='text' id='user-email' name='user-email' class='form-control' placeholder='' onchange="" >
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class='row'>
                                                <div class='col-lg-1 col-md-1 col-sm-1 col-xs-1 form-control-label'>
                                                            
                                                </div>
                                                <div class='col-lg-3 col-md-3 col-sm-3 col-xs-3 '>
                                                    
                                                </div>
                                                <div class='col-lg-1 col-md-1 col-sm-1 col-xs-1'>
                                                    b= 
                                                </div>
                                                <div class='col-lg-3 col-md-3 col-sm-3 col-xs-3'>
                                                    <div class='form-group'>
                                                        <div class='form-line'>
                                                            <input type='text' id='user-email' name='user-email' class='form-control' placeholder='' onchange="" >
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- <div class='col-lg-2 col-md-2 col-sm-2 col-xs-2'>
                                                    * อายุ + 
                                                </div>
                                                <div class='col-lg-2 col-md-2 col-sm-2 col-xs-2'>
                                                    <div class='form-group'>
                                                        <div class='form-line'>
                                                            <input type='text' id='user-email' name='user-email' class='form-control' placeholder='' onchange="" >
                                                            
                                                        </div>
                                                    </div>
                                                </div> -->

                                              
                                               

                                            </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success">ยืนยัน</button>
                                        <button type="button" class="btn btn-danger " data-dismiss="modal">ปิด</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <div>

    </div>


    <?php include_once("../layout/LayoutFooter.php"); ?>



<script src="chart.js"></script>


