var passModal =
`
<div class="modal fade" id="passModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header header-modal">
                <h4 class="modal-title">เปลี่ยนรหัสผ่าน</h4>
            </div>
            <div class="modal-body" id="passModalBody">
                <div class="row mb-4">
                    <div class="col-xl-3 col-12 text-right">
                        <span>รหัสผ่านเก่า<span class="text-danger"> *</span></span>
                    </div>
                    <div class="col-xl-9 col-12">
                        <input type="password" class="form-control" id="mail">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-xl-3 col-12 text-right">
                        <span>รหัสผ่านใหม่<span class="text-danger"> *</span></span>
                    </div>
                    <div class="col-xl-9 col-12">
                        <input type="password" class="form-control" id="mail">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-xl-3 col-12 text-right">
                        <span>ยืนยันรหัสผ่านใหม่<span class="text-danger"> *</span></span>
                    </div>
                    <div class="col-xl-9 col-12">
                        <input type="password" class="form-control" id="mail">
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

var infoModal =
`
<div class="modal fade" id="infoModal" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header header-modal">
                <h4 class="modal-title">แก้ไขข้อมูลบัญชี</h4>
            </div>
            <div class="modal-body" id="infoModalBody">
                <div class="row mb-4">
                    <div class="col-xl-3 col-12 text-right">
                        <span>คำนำหน้า<span class="text-danger"> *</span></span>
                    </div>
                    <div class="col-xl-9 col-12">
                        <input type="text" class="form-control" id="rank">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-xl-3 col-12 text-right">
                        <span>ชื่อ<span class="text-danger"> *</span></span>
                    </div>
                    <div class="col-xl-9 col-12">
                        <input type="text" class="form-control" id="firstname">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-xl-3 col-12 text-right">
                        <span>นามสกุล<span class="text-danger"> *</span></span>
                    </div>
                    <div class="col-xl-9 col-12">
                        <input type="text" class="form-control" id="lastname">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-xl-3 col-12 text-right">
                        <span>อีเมล์<span class="text-danger"> *</span></span>
                    </div>
                    <div class="col-xl-9 col-12">
                        <input type="text" class="form-control" id="mail">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-xl-3 col-12 text-right">
                        <span>ชื่อบัญชี<span class="text-danger"> *</span></span>
                    </div>
                    <div class="col-xl-9 col-12">
                        <input type="text" class="form-control" id="username">
                    </div>
                </div>
                <div class="row mb-4">
                    <div class="col-xl-3 col-12 text-right">
                        <span>หน่วยงาน<span class="text-danger"> *</span></span>
                    </div>
                    <div class="col-xl-9 col-12">
                        <input type="text" class="form-control" id="department">
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