<?php 
    session_start();
    
    $idUT = $_SESSION[md5('typeid')];
    $CurrentMenu = "DepartmentList";
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
                            <span class="link-active">รายชื่อหน่วยงาน</span>
                            <span style="float:right;">
                                <i class="fas fa-bookmark"></i>
                                <a class="link-path" href="#">หน้าแรก</a>
                                <span> > </span>
                                <a class="link-path link-active" href="#">รายชื่อหน่วยงาน</a>
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
                            <div class="font-weight-bold text-uppercase mb-1">หน่วยงาน</div>
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
            <div class="card border-left-primary card-color-two shadow h-100 py-2" id="addDept" style="cursor:pointer;">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="font-weight-bold  text-uppercase mb-1">เพิ่มหน่วยงานใหม่</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">+1 หน่วยงาน</div>
                        </div>
                        <div class="col-auto">
                            <i class="material-icons icon-big">dashboard</i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        
    </div>
 


<!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header card-header-table py-3">
            <h6 class="m-0 font-weight-bold ">รายชื่อหน่วยงานในระบบ</h6>
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
                        <th>ชื่อหน่วยงาน</th>
                        <th>ชื่อย่อ</th>
                        <th>หมายเหตุ</th>
                        <th>จัดการ</th>
                    
                </tr>
                </thead>
                <tfoot>
                <tr>
                        <th>ชื่อหน่วยงาน</th>
                        <th>ชื่อย่อ</th>
                        <th>หมายเหตุ</th>
                        <th>จัดการ</th>
                </tr>
                </tfoot>
                <tbody>
                <tr>
                    <td>ซีพีไอ อะโกรเทค	</td>
                    <td>CPI</td>
                    <td>ทีมนักวิจัย</td>
                
                    <td style="text-align:center;">

                        <button type="button" id="btn_edit" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></button>
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


<?php include_once("../layout/LayoutFooter.php"); ?>


<script src="DepartmentList.js"></script>
<script src="DepartmentListModal.js"></script>

<script>


</script>


