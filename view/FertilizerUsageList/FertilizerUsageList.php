
<?php 
    session_start();
    
    $idUT = $_SESSION[md5('typeid')];
    $CurrentMenu = "FertilizerUsageList";
    
    $currentYear = date("Y") + 543;
    $backYear = date("Y") + 543 - 1;
?>


<?php include_once("../layout/LayoutHeader.php"); ?>


<div class="container">
    <div class="row">
        <div class="col-xl-12 col-12 mb-4">
            <div class="card">
                <div class="card-header card-bg">
                    <div class="row">
                        <div class="col-12">
                            <span class="link-active">การใส่ปุ๋ย</span>
                            <span style="float:right;">
                                <i class="fas fa-bookmark"></i>
                                <a class="link-path" href="#">หน้าแรก</a>
                                <span> > </span>
                                <a class="link-path link-active" href="#">การใส่ปุ๋ย</a>
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
                            <div class="font-weight-bold  text-uppercase mb-1">ปริมาณทีปุ๋ย่ใส่</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">21 ก.ก.</div>
                        </div>
                        <div class="col-auto">
                            <i class="material-icons icon-big">panorama_vertical</i>
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
                            <div class="font-weight-bold  text-uppercase mb-1">ผลผลิตปี <?php echo $backYear ?></div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">30 ก.ก.</div>
                        </div>
                        <div class="col-auto">
                            <i class="material-icons icon-big">filter_vintage</i>
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
                            <div class="font-weight-bold  text-uppercase mb-1">จำนวนต้นไม้ทั้งหทด</div>
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
                    ตำแหน่งใส่ปุ๋ยสวนปาล์มน้ำมัน
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-xl-6 col-12">
                            <div id="map_area" style="width:auto; height:60vh;"></div>
                        </div>
                        <div class="col-xl-6 col-12" id="forMap">
                            <div class="row">
                                <div class="col-12">
                                    <span>ปี</span>
                                </div>
                            </div>
                            <div class="row mb-2">
                                <div class="col-12">
                                    <select id="year" class="form-control">
                                        <option selected>2562</option>
                                        <option>2561</option>
                                        <option>2560</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-12 col-12">
                                    <div class="irs-demo">
                                        <b>ปริมาณปุ๋ยที่ใส่แล้ว (%)</b>
                                        <input type="text" id="palmvolsilder" value="" />
                                    </div>
                                </div>
                            </div>
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
    <div class="row mt-4 mb-4">
        <div class="col-xl-12 col-12">
            <div class="card">
                <div class="card-header card-bg">
                    <div>
                        <span>การใส่ปุ๋ยสวนปาล์มน้ำมันในระบบ</span>
                        <span style="float:right;">ปี 2562</span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row mb-2">
                        <div class="col-xl-3 col-12">
                            <button type="button" id="btn_comfirm" class="btn btn-outline-success btn-sm"><i class="fas fa-file-excel"></i> Excel</button>
                            <button type="button" id="btn_comfirm" class="btn btn-outline-danger btn-sm"><i class="fas fa-file-pdf"></i> PDF</button>

                        </div>
                    
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover table-data" width="100%">
                            <thead style="text-align:center;">
                                <tr>
                                    <th rowspan="2">ชื่อเกษตรกร</th>
                                    <th rowspan="2">ชื่อสวน</th>
                                    <th rowspan="2">จำนวนแปลง</th>
                                    <th rowspan="2">พื้นที่ปลูก (ไร่)</th>
                                    <th rowspan="2">จำนวนต้น</th>
                                    <th >ผลผลิตปี  <?php echo $backYear?></th>
                                    <th colspan="3">ปริมาณปุ๋ย (ก.ก.)</th>
                                    <th rowspan="2">รายละเอียด</th>
                                </tr>
                                <tr>
                                    <th>(ก.ก. / ไร่)</th>
                                    <th>ที่ควรใส่</th>
                                    <th>ที่ใส่</th>
                                    <th>ที่ควรใส่เพิ่ม</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>ชื่อเกษตรกร</th>
                                    <th>ชื่อสวน</th>
                                    <th>จำนวนแปลง</th>
                                    <th>พื้นที่ปลูก (ไร่)</th>
                                    <th>จำนวนต้น</th>
                                    <th>ผลผลิตปี  <?php echo $backYear?></th>
                                    <th>ปริมาณปุ๋ยที่ควรใส่</th>
                                    <th>ปริมาณปุ๋ยที่ใส่</th>
                                    <th>ปริมาณที่ควรใส่เพิ่ม</th>
                                    <th>รายละเอียด</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>บรรยาวัชร</td>
                                    <td>ไลอ้อน</td>
                                    <td>150</td>
                                    <td>200</td>
                                    <td>50</td>
                                    <td>150</td>
                                    <td>200</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td style="text-align:center;">
                                        <a href="FertilizerUsageListDetail.php"><button type="button" id="btn_info" class="btn btn-info btn-sm"><i class="fas fa-bars"></i></button></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>บรรยาวัชร</td>
                                    <td>ไลอ้อน</td>
                                    <td>150</td>
                                    <td>200</td>
                                    <td>50</td>
                                    <td>150</td>
                                    <td>200</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td style="text-align:center;">
                                        <button type="button" id="btn_info" class="btn btn-info btn-sm"><i class="fas fa-bars"></i></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>บรรยาวัชร</td>
                                    <td>ไลอ้อน</td>
                                    <td>150</td>
                                    <td>200</td>
                                    <td>50</td>
                                    <td>150</td>
                                    <td>200</td>
                                    <td>50</td>
                                    <td>50</td>
                                    <td style="text-align:center;">
                                        <button type="button" id="btn_info" class="btn btn-info btn-sm"><i class="fas fa-bars"></i></button>
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
<script src="FertilizerUsageList.js"></script>
<script src="FertilizerUsageListModal.js"></script>

<script>

    $("#map_area").css('height', $("#forMap").css('height'));

    // $("#card_add").click(function () {
    //     $("body").append(addModal);
    //     $("#addModal").modal('show');
    // });

    // $("#btn_info").click(function () {
    //     console.log("testefe");
    // });

    $("#btn_delete").click(function () {
        swal({
            title: "ยืนยันการลบข้อมูล",
            icon: "warning",
            buttons:  ["ยกเลิก", "ยืนยัน"],
        });
    });
</script>