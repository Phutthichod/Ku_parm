<?php 
    session_start();
    
    $idUT = $_SESSION[md5('typeid')];
    $CurrentMenu = "UserProfile";
?>


<?php include_once("../layout/LayoutHeader.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-xl-12 col-12 mb-4">
            <div class="card">
                <div class="card-header card-bg">
                    บัญชีผู้ใช้
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4 col-12 mb-4">
            <div class="row">
                <div class="col-xl-12 col-12">
                    <div class="card">
                        <div class="card-header card-bg">
                            รูปโปรไฟล์
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <img class="img-radius" src="../../picture/default.jpg" />
                            </div>
                            <div class="row mt-3">
                                <div class="col-xl-12 col-12">
                                    <input type="file" id="input_upload" style="display:none" />
                                    <button type="button" id="btn_upload" class="btn btn-primary btn-sm form-control mb-3">เปลี่ยนรูปโปรไฟล์</button>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6 col-12">
                                    <button type="button" id="btn_info" class="btn btn-warning btn-sm form-control mb-3">เปลี่ยนข้อมูลบัญชี</button>
                                </div>
                                <div class="col-xl-6 col-12">
                                    <button type="button" id="btn_pass" class="btn btn-success btn-sm form-control">เปลี่ยนรหัสผ่าน</button>
                                </div>       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- <div class="row mt-3">
                <div class="col-xl-12 col-12">
                    <div class="card">
                        <div class="card-header card-bg">
                            ตำแหน่งสวนปาล์ม
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-xl-12 col-12 mb-2">
                                    <div id="map_area" style="width:auto; height:200px;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="col-xl-8 col-12 mb-4">
            <div class="card">
                <div class="card-header card-bg">
                    รายละเอียดบัญชี
                </div>
                <div class="card-body">
                    <div class="row mb-4">
                        <div class="col-xl-3 col-12 text-right">
                            <span>คำนำหน้า</span>
                        </div>
                        <div class="col-xl-9 col-12">
                            <input type="text" class="form-control" id="rank" value="นาย" disabled>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-xl-3 col-12 text-right">
                            <span>ชื่อ</span>
                        </div>
                        <div class="col-xl-9 col-12">
                            <input type="text" class="form-control" id="firstname" value="ธารินทร์" disabled>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-xl-3 col-12 text-right">
                            <span>นามสกุล</span>
                        </div>
                        <div class="col-xl-9 col-12">
                            <input type="text" class="form-control" id="lastname" value="ตันตะโยธิน" disabled>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-xl-3 col-12 text-right">
                            <span>อีเมล์</span>
                        </div>
                        <div class="col-xl-9 col-12">
                            <input type="text" class="form-control" id="mail" value="nut_514@hotmail.com" disabled>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-xl-3 col-12 text-right">
                            <span>เบอร์โทรศัพท์</span>
                        </div>
                        <div class="col-xl-9 col-12">
                            <input type="text" class="form-control" id="mail" value="0866221212" disabled>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-xl-3 col-12 text-right">
                            <span>ชื่อบัญชี</span>
                        </div>
                        <div class="col-xl-9 col-12">
                            <input type="text" class="form-control" id="username" value="nutadmin" disabled>
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-xl-3 col-12 text-right">
                            <span>หน่วยงาน</span>
                        </div>
                        <div class="col-xl-9 col-12">
                            <input type="text" class="form-control" id="department" value="อะโกเทค" disabled> 
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-xl-3 col-12 text-right">
                            <span>สิทธิ์การเข้าถึง</span>
                        </div>
                        <div class="col-xl-9 col-12">
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" checked disabled> 
                                <label class="form-check-label" for="exampleCheck1">ผู้บริหารแอปพลิเคชัน</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" disabled>
                                <label class="form-check-label" for="exampleCheck1">สัตวแพทยศาสตร์</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" checked disabled>
                                <label class="form-check-label" for="exampleCheck1">พนักงานในสหกรณ์โคนม</label>
                            </div>
                            <!-- <div class="form-check form-check-inline">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1" checked disabled>
                                <label class="form-check-label" for="exampleCheck1">เกษตรกร</label>
                            </div> -->
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once("../layout/LayoutFooter.php"); ?>

<script src="UserProfile.js"></script>

<script>
    $("#btn_upload").click(function () {
        $("#input_upload").click();
    });

    $("#btn_info").click(function () {
        $("body").append(infoModal);
        $("#infoModal").modal('show');
    });

    $("#btn_pass").click(function () {
        $("body").append(passModal);
        $("#passModal").modal('show');
    });
</script>
