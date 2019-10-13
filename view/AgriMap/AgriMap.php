
<?php 
    session_start();
    
    $idUT = $_SESSION[md5('typeid')];
    $CurrentMenu = "AgriMap";
?>


<?php include_once("../layout/LayoutHeader.php"); ?>

<div class="container">
    <div class="row">
        <div class="col-xl-12 col-12">
            <div id="accordion">
                <div class="card">
                    <div class="card-header collapsed" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne" style="cursor:pointer; background-color: #E91E63; color: white;">
                        <div class="row">
                            <div class="col-3">               
                                <i class="fas fa-search"> ค้นหาขั้นสูง</i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body" style="background-color: white; ">
                    <div class="row mb-2">
                        <div class="col-12">
                            <input type="checkbox" name="vehicle1" id="fertilizer_check"  value="" style="color:red;" checked>
                            <span>การใส่ปุ๋ย</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <select id="fertilizer" class="form-control" >
                                <option value="all" selected>ทั้งหมด</option>
                                <option >ใส่ครบ</option>
                                <option>ใส่ไม่ครบ</option>
                                <option>ไม่ใส่</option>
                            </select>
                        </div>  
                    </div>
                    <div class="row mb-2">
                        <div class="col-12">
                            <input type="checkbox" id="product_check" name="vehicle1" value="" style="color:red;" checked>
                            <span>ผลผลิต</span>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-12">
                            <select id="product" class="form-control" >
                                <option value="all" selected>ทั้งหมด</option>
                                <option>เกินค่าเฉลี่ย</option>
                                <option>ไม่เกินค่าเฉลี่ย</option>
                                <option>ไม่มีผลผลิต</option>
                            </select>
                        </div>  
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-12 col-12 mt-4">
            <div class="card">
                <div class="card-header card-bg">
                    ตำแหน่งสวนปาล์ม
                </div>
                <div class="card-body">
                    <div class="row">
                       
                        <div class="col-xl-12 col-12 mb-2">
                            <div id="map_area" style="width:auto; height:450px;"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include_once("../layout/LayoutFooter.php"); ?>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDwVxLnsuNM9mJUqDFkj6r7FSxVcQCh4ic&callback=map_create" async defer></script>

<script src="AgriMap.js"></script>
