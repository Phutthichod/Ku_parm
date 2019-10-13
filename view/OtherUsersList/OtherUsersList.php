<?php 
    session_start();
    
    $idUT = $_SESSION[md5('typeid')];
    $CurrentMenu = "OtherUsersList";
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
                            <span class="link-active">รายชื่อผู้ใช้</span>
                            <span style="float:right;">
                                <i class="fas fa-bookmark"></i>
                                <a class="link-path" href="#">หน้าแรก</a>
                                <span> > </span>
                                <a class="link-path link-active" href="#">รายชื่อผู้ใช้</a>
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
                            <div class="font-weight-bold  text-uppercase mb-1">หน่วยงาน</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">4 หน่วยงาน</div>
                        </div>
                        <div class="col-auto">
                            <i class="material-icons icon-big">waves</i>
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
                            <div class="font-weight-bold  text-uppercase mb-1">ผู้ใช้งานทั้งหมด</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">9 คน</div>
                        </div>
                        <div class="col-auto">
                            <i class="material-icons icon-big">dashboard</i>
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
                            <div class="font-weight-bold  text-uppercase mb-1">ผู้ดูแลระบบ</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">6 คน</div>
                        </div>
                        <div class="col-auto">
                            <i class="material-icons icon-big">format_size</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-12 mb-4">
            <div class="card border-left-primary card-color-four shadow h-100 py-2" id="addUser" style="cursor:pointer;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold  text-uppercase mb-1">เพิ่มผู้ใช้งานใหม่</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">+1 คน</div>
                        </div>
                        <div class="col-auto">
                            <i class="material-icons icon-big">add_location</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 


    <div class="row">
        <div class="col-xl-12 col-12 mb-4">
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
            <div id="collapseOne" class="collapse " aria-labelledby="headingOne" data-parent="#accordion">
                <div class="card-body" style="background-color: white;">
                    <div class="row mb-4 ">
                        <div class="col-xl-4 col-12 text-right">
                            <span>หน่วยงาน</span>
                        </div>
                        <div class="col-xl-6 col-12">
                            <input type="text" class="form-control" id="username">
                            <!-- <select id="select-testing" class="selectpicker" data-live-search="true" title="Please select">
                                <option>Ant</option>
                                <option>Bat</option>
                                <option>Cat</option>
                                <option>Dog</option>
                                <option>Egg</option>
                            </select> -->

                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-xl-4 col-12 text-right">
                            <span>สิทธิการเข้าใช้งาน</span>
                        </div>
                        <div class="col-xl-6 col-12">
                            <input type="text" class="form-control" id="username">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-xl-4 col-12 text-right">
                            <span>การบล็อกการเข้าใช้งานของผู้ใช้</span>
                        </div>
                        <div class="col-xl-6 col-12">
                            <input type="text" class="form-control" id="username">
                        </div>
                    </div>
                   
                    <div class="row mb-4">
                        <div class="col-xl-4 col-12 text-right">
                        </div>
                        <div class="col-xl-6 col-12">
                            <button type="button" id="btn_pass" class="btn btn-success btn-sm form-control">ค้นหา</button>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header card-header-table py-3">
            <h6 class="m-0 font-weight-bold">รายชื่อผู้ใช้ในระบบ</h6>
        </div>
        <div class="card-body">

            <div class="row mb-2">
                <div class="col-xl-3 col-12">
                    <button type="button" id="btn_comfirm" class="btn btn-outline-success btn-sm"><i class="fas fa-file-excel"></i> Excel</button>
                    <button type="button" id="btn_comfirm" class="btn btn-outline-danger btn-sm"><i class="fas fa-file-pdf"></i> PDF</button>

                </div>
            
            </div>
            <div class="table-responsive">
            <table class="table table-bordered table-data" id="dataTable" width="100%" cellspacing="0">
                <thead>
                <tr>
                        <th>บัญชีชื่อผู้ใช้</th>
                        <th>อีเมล์</th>
                        <th>ชื่อ-นามสกุล</th>
                        <th>หน่วยงาน</th>
                        <th>สิทธิการเข้าใช้งาน</th>
                        <th>จัดการ</th>
                </tr>
                </thead>
                <tfoot>
                <tr>
                        <th>บัญชีชื่อผู้ใช้</th>
                        <th>อีเมล์</th>
                        <th>ชื่อ-นามสกุล</th>
                        <th>หน่วยงาน</th>
                        <th>สิทธิการเข้าใช้งาน</th>
                        <th>จัดการ</th>
                </tr>
                </tfoot>
                <tbody>
                <tr>
                    <td>nutadmin</td>
                    <td>nut_514@hotmail.com</td>
                    <td>ธารินทร์ ตันตะโยธิน</td>
                    <td>ซีพีไอ อะโกรเทค	</td>
                    <td style="text-align:center;">
                        <button type="button" id="btn_comfirm" class="btn btn-success btn-sm btn-circle">A</button>
        
                        <button type="button" id="btn_info" class=" btn btn-success btn-sm btn-circle">R</button>
                        <button type="button" id="btn_delete" class="btn btn-danger btn-sm btn-circle">O</button>
                        <button type="button" id="btn_delete" class="btn btn-danger btn-sm btn-circle">F</button>


                    </td>
                    
                    <td style="text-align:center;">
                        <button type="button" id="btn_comfirm" class="btn btn-success btn-sm"><i class="fas fa-ban"></i></button>

                        <button type="button" id="btn_info" class="btn btn-info btn-sm"><i class="fas fa-edit"></i></button>
                        <button type="button" id="btn_delete" class="btn btn-danger btn-sm"><i class="far fa-trash-alt"></i></button>

                    </td>
                </tr>
        


                </tbody>
            </table>
            </div>
        </div>
    </div>

    <div class="Modal">
    
    </div>

</div>

<!-- <div class="card-body">
                    
    <div class="accordion basic-accordion" id="accordion" role="tablist">
        <div class="card">
            <div class="card-header" role="tab" id="headingOne">
                <h6 class="mb-0">
                <a data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne" class="collapsed">
                    <i class="card-icon mdi mdi-checkbox-marked-circle-outline"></i>
                    <i class="material-icons">perm_contact_calendar</i>
                    How can I pay for an order I placed?
                </a>
                </h6>
            </div>
        <div id="collapseOne" class="collapse" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" style="">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <img class="img-fluid rounded" src="https://placehold.it/200x150" alt="image"> </div>
                        <div class="col-md-9">
                        <p>You can pay for the product you bit cards, or via online banking. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
        
</div> -->

<?php include_once("../layout/LayoutFooter.php"); ?>


<script src="OtherUsersList.js"></script>
<script src="OtherUsersListModal.js"></script>


<script>

    // $( document ).ready(function() {

    //     $('#addUser').click(function(){
    //         console.log('fffff')
    //     });
    // });
    $( document ).ready(function() {
        console.log( "ready!" );
       
        
        $("#btn_delete").click(function () {
            swal({
                title: "ยืนยันการลบข้อมูล",
                icon: "warning",
                buttons:  ["ยกเลิก", "ยืนยัน"],
            });
        });
    });
    


</script>