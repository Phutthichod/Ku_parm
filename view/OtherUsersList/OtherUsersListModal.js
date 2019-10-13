var addModal =
`
<div class="modal fade" id="addModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header header-modal">
                <h4 class="modal-title" style="color:white">เพิ่มบัญชีผู้ใช้</h4>
            </div>
            <div class="modal-body" id="addModalBody">
                <div class="container">
                    <div class="row mb-4"> 
                        <div class="'col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                            <span>คำนำหน้า<span class="text-danger"> *</span></span>
                        </div>
                      
                        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">

                            <select class="form-control" id="sel1">
                                <option>นาย</option>
                                <option>นางสาว</option>
                                <option>นาง</option>
                            </select>
                           
                        </div>


                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                            <span>ชื่อ<span class="text-danger"> *</span></span>
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                            <input type="text" class="form-control" id="username" placeholder="ชื่อ">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                            <span>นามสกุล<span class="text-danger"> *</span></span>
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                            <input type="text" class="form-control" id="username" placeholder="นามสกุล">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                            <span>ชื่อผู้ใช้<span class="text-danger"> *</span></span>
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                            <input type="text" class="form-control" id="rank" placeholder="ชื่อผู้ใช้">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                            <span>รหัสผ่าน<span class="text-danger"> *</span></span>
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                            <input type="password" class="form-control" id="firstname" placeholder="Password">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                            <span>ยืนยันรหัสผ่าน<span class="text-danger"> *</span></span>
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                            <input type="password" class="form-control" id="lastname" placeholder="Password">
                        </div>
                    </div>
                    <div class="row mb-4">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                            <span>อีเมล์<span class="text-danger"> *</span></span>
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                            <input type="text" class="form-control" id="mail" placeholder="อีเมล์">
                        </div>
                    </div>
                   
                    <div class="row mb-4">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                            <span>จังหวัด<span class="text-danger"> *</span></span>
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                            <select class="form-control" id="exampleFormControlSelect1">
                            <option>กรุงเทพมหานคร</option>
                            <option>นนทบุรี</option>
                            
                            </select>
                      
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                            <span>อำเภอ<span class="text-danger"> *</span></span>
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">
                            <select class="form-control" id="exampleFormControlSelect1">
                                <option>ไทรน้อย</option>
                                <option>บางบัวทอง</option>
                            
                            </select>
                    
                        </div>
                    </div>

                    <div class="row mb-4">
                        <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 text-right">
                            <span>สิทธิการเข้าใช้งาน<span class="text-danger"> *</span></span>
                        </div>
                        <div class="col-lg-9 col-md-8 col-sm-12 col-xs-12">

                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                                <label class="form-check-label" for="inlineCheckbox1">ผู้ดูแลระบบ</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                                <label class="form-check-label" for="inlineCheckbox2">นักวิจัย</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3" >
                                <label class="form-check-label" for="inlineCheckbox3">พนักงานทั่วไป</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4" >
                                <label class="form-check-label" for="inlineCheckbox4">เกษตรกร</label>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer"> 
                <button type="button" class="btn btn-success">ยืนยัน</button>
                <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>               
            </div>
        </div>
    </div>
</div>

`;