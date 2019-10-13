<?php 
    session_start();
    
    $idUT = $_SESSION[md5('typeid')];
    $CurrentMenu = "OtherPestList";
?>


<?php include_once("../layout/LayoutHeader.php"); ?>


<style>
    #serach{
        background-color: #E91E63;
        color:white;
        float:right;
    }
    #card-detail{
        border-color: #E91E63;
        border-top:none;
    }

</style>

<div class="container">

    <div class="row">
        <div class="col-xl-12 col-12 mb-4">
            <div class="card">
                <div class="card-header card-bg">
                    <div class="row">
                        <div class="col-12">
                            <span class="link-active">รายชื่อศัตรูพืชอื่นๆ</span>
                            <span style="float:right;">
                                <i class="fas fa-bookmark"></i>
                                <a class="link-path" href="#">หน้าแรก</a>
                                <span> > </span>
                                <a class="link-path link-active" href="#">รายชื่อศัตรูพืชอื่นๆ</a>
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
                            <div class="font-weight-bold  text-uppercase mb-1">จำนวนชนิดศัตรูพืช</div>
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
            <div class="card border-left-primary card-color-four shadow h-100 py-2" id="addOrther" style="cursor:pointer;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold  text-uppercase mb-1">เพิ่มชนิดศัตรูพืช</div>
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

  


    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold ">รายชื่อศัตรูพืช</h6>
        </div>
        <div class="card-body" id="card-pest">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 " style="text-align: center;">
                    <div style="text-align: center;">
                        <?php //$src = "picture/pest/insect/".$insectList[1]['PL_ID']."/logo/1.jpg"; ?>
                        <!-- <img src=<?php echo $src ?> width="120" height="120" alt="User" style="border-radius: 100px;"> -->
                        <img src="../../picture/default2.jpg" width="120" height="120" alt="User" style="border-radius: 100px;">
                        <br><br>
                    </div>
                    <h6>ชื่อ : 
                        ศัตรูพืช1
                        <?php //echo $insectList[1]['PL_NAME'] ; ?>

                    </h6>
                    <h6>ชื่อทางการ : 
                        ศัตรูพืช1
                        <?php //echo $insectList[1]['PL_NAME_OFFICE'] ; ?>
                    </h6>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <h6>ลักษณะทั่วไป</h6>
                    xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                    <br>
                    <br>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" id="silder">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block w-100" src="../../picture/default.jpg" alt="First slide" style="height:200px;">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="../../picture/default2.jpg" alt="Second slide" style="height:200px;">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="../../picture/default2.jpg" alt="Third slide" style="height:200px;">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <h6>อันตรายของศัตรูพืช</h6>
                    xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx
                    <br>
                    <br>
                    <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel" id="silder">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="../../picture/default.jpg" alt="First slide" style="height:200px;">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../../picture/default2.jpg" alt="Second slide" style="height:200px;">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../../picture/default2.jpg" alt="Third slide" style="height:200px;"> 
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>


                </div>


           
            </div>
        </div>
    </div>

    <div>
        <div class="row">
            <div class="col-xl-3 col-12 mb-4">
                <div class="card border-left-primary card-color-one shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                <img src="../../picture/default2.jpg" class="w-100"  alt="User" style="border-radius: 100px;">

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 card-pest">
                                <h5>ศัตรูพืช1</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-12 mb-4">
                <div class="card border-left-primary card-color-one shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 ">
                                <img src="../../picture/default2.jpg" class="w-100"  alt="User" style="border-radius: 100px;">

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 card-pest">
                                <h5>ศัตรูพืช2</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
    
    </div>


    <div class="Modal"></div>







</div>

<?php include_once("../layout/LayoutFooter.php"); ?>


<script src="OtherPestList.js"></script>
<script src="OtherPestListModal.js"></script>

<script>

</script>


</body>

</html>
