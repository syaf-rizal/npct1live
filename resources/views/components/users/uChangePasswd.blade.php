<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12">
        <div class="card-body">
            <h5 class="card-title">Change Password</h5>
            <div class="divider"></div>
            <form action="{{ $action }}" method="post" id="frmChangePasswrd" name="frmChangePasswrd" autocomplete="off" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label class="">Current Password *</label>
                            <input id="oldPassword" placeholder="Current Password" type="password" class="form-control" name="oldPassword" wajib="yes">
                        </div>
                        <div class="position-relative form-group">
                            <label class="">New Password *</label>
                            <input id="newPassword" placeholder="New Password" type="password" class="form-control" name="newPassword" wajib="yes">
                        </div>
                        <div class="position-relative form-group">
                            <label class="">Confirm New Password *</label>
                            <input id="confirmNewPassword" placeholder="Confirm New Password" type="password" class="form-control" name="confirmNewPassword" wajib="yes">
                        </div>
                    </div>
                </div>
                <div class="clearfix">&nbsp;</div>
                <div class="position-relative form-group">
                    <button class="mr-2 btn-wide btn-pill btn btn-primary btn-lg" id="<?= rand(); ?>" onclick="postRequest('frmChangePasswrd', $(this)); return false;">Change Password</button>
                </div>
            </form>
        </div>
    </div>
</div>