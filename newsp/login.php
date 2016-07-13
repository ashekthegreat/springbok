<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="requestDetailModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Login Required</h4>
            </div>
            <div class="modal-body">
                <div role="tabpanel">
                    <!-- Nav tabs -->
                    <!-- Use "active" class on appropriate tab item, based on URL param. -->

                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class=""><a href="#register" aria-controls="register" role="tab" data-toggle="tab">Create Account</a></li>
                        <li role="presentation" class="active"><a href="#signin" aria-controls="signin" role="tab" data-toggle="tab">Sign In</a></li>
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane" id="register">

                            <form id="web_form" action="" method="post" name="web_form">
                                <p class="bg-danger text-center" style="display: none">Error Text</p>

                                <div class="form-group">
                                    <label for="title">Name</label>

                                    <div class="name-group clearfix">
                                        <div class="name-title">
                                            <input type="text" maxlength="10" placeholder="Title" id="title" class="form-control validate[required] txtbox txtbox-small" name="title">
                                        </div>
                                        <div class="name-first">
                                            <input type="text" maxlength="30" placeholder="First Name" onfocus="" id="firstname" class="form-control validate[required] txtbox" name="firstname">
                                        </div>
                                        <div class="name-last">
                                            <input type="text" maxlength="30" placeholder="Last Name" id="lastname" class="form-control validate[required] txtbox" name="lastname">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" maxlength="100" id="email" class="form-control validate[required,custom[email]]" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password <span class="form-label-note">(at least 6 characters)</span></label>
                                    <input type="password" maxlength="20" id="password" class="form-control validate[required,minSize[6]]" name="password">
                                </div>
                                <div class="form-group">
                                    <label for="confpassword">Password Confirmation</label>
                                    <input type="password" maxlength="20" id="confpassword" class="form-control validate[required,equals[password]]" name="confpassword">
                                </div>
                                <input type="submit" name="saveWebForm" id="saveWebForm" class="btn btn-primary" value="Create account">
                            </form>
                            <p class="register-disclaimer">
                                By clicking Create Account you confirm that you agree to our website
                                <a href="terms-and-conditions.php">terms of use</a> and our <a href="privacy-policy.php">privacy policy</a>
                            </p>
                        </div>
                        <div role="tabpanel" class="tab-pane active" id="signin">
                            <form id="web_form2" action="" method="post" name="web_form2">
                                <p class="bg-danger text-center" style="display: none">Error Text</p>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" maxlength="100" id="email" class="form-control validate[required,custom[email]]" name="email">
                                </div>
                                <div class="form-group">
                                    <label for="password">Password <span class="form-label-note">(at least 6 characters)</span></label>
                                    <input type="password" maxlength="20" id="password" class="form-control validate[required]" name="password">
                                </div>
                                <input type="submit" value="Sign in" id="signin" name="signin" class="btn btn-primary">
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div><!-- /.modal -->