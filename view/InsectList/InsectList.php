<?php 
    session_start();
    
    $idUT = $_SESSION[md5('typeid')];
    $CurrentMenu = "InsectList";
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
    /* #carousel-item {
        width : 200px ;
        height : "120";
    } */
    .carouselExampleControls img{
        height:200px;
    }

</style>

<div class="container">

    <div class="row">
        <div class="col-xl-12 col-12 mb-4">
            <div class="card">
                <div class="card-header card-bg">
                    <div class="row">
                        <div class="col-12">
                            <span class="link-active">รายชื่อแมลง</span>
                            <span style="float:right;">
                                <i class="fas fa-bookmark"></i>
                                <a class="link-path" href="#">หน้าแรก</a>
                                <span> > </span>
                                <a class="link-path link-active" href="#">รายชื่อแมลง</a>
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
                            <div class="font-weight-bold  text-uppercase mb-1" style="color:#6F9EF7">จำนวนชนิดแมลง</div>
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
            <div class="card border-left-primary card-color-four shadow h-100 py-2" id="addInsect" style="cursor:pointer;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold  text-uppercase mb-1">เพิ่มชนิดแมลง</div>
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
            <h6 class="m-0 font-weight-bold ">รายชื่อแมลง</h6>
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
                        <?php //echo $insectList[1]['PL_NAME'] ; ?>
                        หนอนหน้าแมว
                    </h6>
                    <h6>ชื่อทางการ : 
                        <?php //echo $insectList[1]['PL_NAME_OFFICE'] ; ?>
                        Darna furva Wileman
                    </h6>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <h6>ลักษณะทั่วไป</h6>
                    หนอนที่ฟักจากไข่ใหม่ ๆ มีขนาดลำตัว 0.2 x 0.8 มิลลิเมตร สีขาวใส มีสีน้ำตาลอยู่กลางลำตัว 
                    มีกลุ่มขนบนลำตัว 4 แถวเห็นไม่ชัดเจน ส่วนหัวหลบซ่อนอยู่ใต้ลำตัว เคลื่อนไหวช้า กินแบบแทะผิวใบ 
                    หนอนที่เจริญเต็มที่มีขนาดลำตัวกว้าง 5 – 6 มิลลิเมตร ยาว 15 – 17 มิลลิเมตร มีกลุ่มขนข้างลำตัวข้างละ 11 กลุ่ม 
                    สีของลำตัวเป็นสีน้ำตาลเข้มถึงดำแต้มสีเป็นรอยเว้ารูปสามเหลี่ยมจากด้านข้างเข้าหากึ่งกลางลำตัว 
                    ปลายยอดสามเหลี่ยมห่างกันเล็กน้อย ภายในสามเหลี่ยมสีตองอ่อนมีขอบเป็นสีเหลือง 
                    ส่วนท้ายลำตัวมีสีเหลือง กลางหลังของลำตัวมีเส้นประสีเหลืองและจุดสีดำขนานไปกับกลุ่มขนสีดำอีก 2 แถว    
                        <br>
                    <br>                   
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" id="silder">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                            <img class="d-block w-100" src="../../picture/Pest/insect/03.jpg" alt="First slide" style="height:200px;">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="../../picture/Pest/insect/01.jpg" alt="Second slide" style="height:200px;">
                            </div>
                            <div class="carousel-item">
                            <img class="d-block w-100" src="../../picture/Pest/insect/02.jpg" alt="Third slide" style="height:200px;">
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
                    <h6>อันตรายของแมลง</h6>
                    ศัตรูปาล์มน้ำมัน ที่สำคัญมากอีกหนึ่งชนิด คือ “หนอนหน้าแมว” หรือที่เรียกกันว่า “หนอนดาน่า”
                     เป็นหนอนกัดทำลายใบปาล์มน้ำมัน ถ้าอาการรุนแรงมากใบจะถูกกัดจนเหลือแต่ก้านใบ หนักมากจนถึงต้นใบโกร๋น 
                     ทำให้ผลผลิตลดลง ต้นปาล์มชะงักการเจริญเติบโต และกว่าต้นจะฟื้นคืนดังเดิมใช้เวลานานเป็นปี 
                     เมื่อเกิดมีการระบาดแต่ละครั้งมักต้องใช้เวลาในการกำจัดนาน เป็นเพราะหนอนมีหลายระยะในเวลาเดียวกัน เช่น มีทั้งระยะหนอน ระยะดักแด้ 
                    เราจึงไม่สามารถกำจัดให้หมดได้ในคราวเดียวกัน ทำให้ต้องเสียค่าใช้จ่ายสูงในการกำจัดและติดตามการระบาดอย่างต่อเนื่อง      
                    <br>
                    <br>
                    <br>                        
                    <div id="carouselExampleControls2" class="carousel slide" data-ride="carousel" id="silder">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="../../picture/Pest/insect/1.jpg" alt="First slide" style="height:200px;">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../../picture/Pest/insect/01.jpg" alt="Second slide" style="height:200px;">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="../../picture/Pest/insect/02.jpg" alt="Third slide" style="height:200px;"> 
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
                                <img src="../../picture/Pest/insect/02.jpg" class="w-100"  alt="User" style="border-radius: 100px;">

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 card-pest">
                                <h5>หนอนหน้าแมว</h5>
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
                                <img src="../../picture/Pest/insect/01.jpg" class="w-100"  alt="User" style="border-radius: 100px;">

                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 card-pest">
                                <h5>หนอนหน้าหมา</h5>
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


<script src="InsectList.js"></script>
<script src="InsectListModal.js"></script>

<script>

        $("#looks").val("xxxxxxxxxxx")
        $('#danger').val("xxxxxxxxxxx")

</script>


</body>

</html>
