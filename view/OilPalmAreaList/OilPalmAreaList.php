
<?php 
    session_start();
    
    $idUT = $_SESSION[md5('typeid')];
    $CurrentMenu = "OilPalmAreaList";
?>


<?php include_once("../layout/LayoutHeader.php"); ?>


<div class="container">
    <div class="row">
        <div class="col-xl-12 col-12 mb-4">
            <div class="card">
                <div class="card-header card-bg">
                    <div class="row">
                        <div class="col-12">
                            <span class="link-active">รายชื่อสวนปาล์มน้ำมัน</span>
                            <span style="float:right;">
                                <i class="fas fa-bookmark"></i>
                                <a class="link-path" href="#">หน้าแรก</a>
                                <span> > </span>
                                <a class="link-path link-active" href="#">รายชื่อสวนปาล์มน้ำมัน</a>
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
                            <div class="font-weight-bold  text-uppercase mb-1">จำนวนสวน</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">3 สวน</div>
                        </div>
                        <div class="col-auto">
                            <i class="material-icons icon-big">group</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-12 mb-4">
            <div class="card border-left-primary card-color-two shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold  text-uppercase mb-1">จำนวนแปลง</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">20 แปลง</div>
                        </div>
                        <div class="col-auto">
                            <i class="material-icons icon-big">waves</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-12 mb-4">
            <div class="card border-left-primary card-color-three shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold  text-uppercase mb-1">พื้นที่ทั้งหมด</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">10 ไร่</div>
                        </div>
                        <div class="col-auto">
                            <i class="material-icons icon-big">dashboard</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-12 mb-4">
            <div class="card border-left-primary card-color-four shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold  text-uppercase mb-1">จำนวนต้นไม้</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">150 ต้น</div>
                        </div>
                        <div class="col-auto">
                            <i class="material-icons icon-big">format_size</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12 col-12">
            <div class="card">
                <div class="card-header card-bg">
                    ตำแหน่งสวนปาล์มน้ำมัน
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6 col-12">
                            <div id="map_area" style="width:auto;"></div>
                        </div>
                        <div class="col-xl-6 col-12" id="forMap">
                            <div class="row">
                                <div class="col-12">
                                    <span>จังหวัด</span>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-12">
                                    <select id="province" class="form-control">
                                        <option selected>เลือกจังหวัด</option>
                                        <option>กรุงเทพ</option>
                                        <option>นครปฐม</option>
                                    </select>
                                </div>  
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <span>อำเภอ</span>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-12">
                                    <select id="amp" class="form-control">
                                        <option selected>เลือกอำเภอ</option>
                                        <option>เมือง</option>
                                        <option>กำแพงแสน</option>
                                    </select>
                                </div>  
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <span>ชื่อเกษตรกร</span>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-12">
                                    <input type="text" class="form-control" id="rank">
                                </div>  
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <span>หมายเลขบัตรประชาชน</span>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-12">
                                    <input type="password" class="form-control input-setting" id="idcard">
                                    <i class="far fa-eye-slash eye-setting"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-xl-12 col-12">
            <div class="card">
                <div class="card-header card-bg">
                    <div>
                        <span>สวนปาล์มน้ำมันในระบบ</span>
                        <button type="button" id="btn_add_garden" style="float:right;" class="btn btn-success btn-sm"><i class="fas fa-plus"></i> เพิ่มสวน</button>
                    </div>
                </div>
                <div class="card-body" style="overflow-x:scroll;">
                    <div class="row mb-2">
                        <div class="col-xl-3 col-12">
                            <button type="button" id="btn_comfirm" class="btn btn-outline-success btn-sm"><i class="fas fa-file-excel"></i> Excel</button>
                            <button type="button" id="btn_comfirm" class="btn btn-outline-danger btn-sm"><i class="fas fa-file-pdf"></i> PDF</button>

                        </div>
                    
                    </div>
                    <div class="table-responsive" style="">
                        <table class="table table-bordered table-striped table-hover table-data" width="100%">
                            <thead>
                                <tr>
                                    <th>จังหวัด</th>
                                    <th>อำเภอ</th>
                                    <th>ชื่อเกษตรกร</th>
                                    <th>ชื่อสวน</th> 
                                    <th>จำนวนแปลง</th>
                                    <th>พื้นที่ปลูก (ไร่)</th>
                                    <th>จำนวนต้น</th>
                                    <th>รายละเอียด</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>จังหวัด</th>
                                    <th>อำเภอ</th>
                                    <th>ชื่อเกษตรกร</th>
                                    <th>ชื่อสวน</th> 
                                    <th>จำนวนแปลง</th>
                                    <th>พื้นที่ปลูก (ไร่)</th>
                                    <th>จำนวนต้น</th>
                                    <th>รายละเอียด</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>กรุงเทพ</td>
                                    <td>พระประะแดง</td>
                                    <td>บรรยาวัชร</td>
                                    <td>ไลอ้อน 1</td>
                                    <td>10</td>
                                    <td>120</td>
                                    <td>320</td>
                                    <td style="text-align:center;">
                                        <a href="OilPalmAreaListDetail.php"><button type="button" id="btn_info" class="btn btn-info btn-sm"><i class="fas fa-bars"></i></button></a>
                                        <button type="button" id="btn_delete" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>

                                    </td>
                                </tr>
                                <tr>
                                    <td>กรุงเทพ</td>
                                    <td>พระประะแดง</td>
                                    <td>บรรยาวัชร</td>
                                    <td>ไลอ้อน 2</td>
                                    <td>20</td>
                                    <td>120</td>
                                    <td>320</td>
                                    <td style="text-align:center;">
                                        <button type="button" id="btn_info" class="btn btn-info btn-sm"><i class="fas fa-bars"></i></button>
                                        <button type="button" id="btn_delete" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>

                                    </td>
                                </tr>
                                <tr>
                                    <td>กรุงเทพ</td>
                                    <td>พระประะแดง</td>
                                    <td>ธารินทร์</td>
                                    <td>นัท 1</td>
                                    <td>30</td>
                                    <td>120</td>
                                    <td>320</td>
                                    <td style="text-align:center;">
                                        <button type="button" id="btn_info" class="btn btn-info btn-sm"><i class="fas fa-bars"></i></button>
                                        <button type="button" id="btn_delete" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>

                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once("../layout/LayoutFooter.php"); ?>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwVxLnsuNM9mJUqDFkj6r7FSxVcQCh4ic&callback=map_create" async defer></script>
<script src="OilPalmAreaList.js"></script>
<script src="OilPalmAreaListModal.js"></script>

<script>

    $("#map_area").css('height', $("#forMap").css('height'));

    $("#btn_add_garden").click(function () {
        $("body").append(addModal);
        $("#addModal").modal('show');
    });


    $("#btn_info").click(function () {
        console.log("testefe");
    });

    $("#btn_delete").click(function () {
        swal({
            title: "ยืนยันการลบข้อมูล",
            icon: "warning",
            buttons:  ["ยกเลิก", "ยืนยัน"],
        });
    });
</script>