<div id="modal-video" class="modal">
    <div class="modal-content"></div>
</div>

<div id="property-book" class="modal">
    <div class="modal-content">
        <div class="container">
            <h4>Buchanan Street, Pendlebury, Swinton, Manchester</h4>
            <form class="form-horizontal" autocomplete="off" action="http://simbacloud.co.uk/Users/forms/processForm.php" method="post" name="frm_detail" id="frm_detail" novalidate="novalidate">
                <div class="row margin-bottom-0">
                    <div class="input-field col s6">
                        <input type="text" name="name" id="rq-name" auto-complete="off" required="">
                        <label for="rq-name">Name&nbsp;<font color="red">*</font></label>
                    </div>
                    <div class="input-field col s6">
                        <input type="tel" name="phone" auto-complete="off" id="rq-phone" required>
                        <label for="rq-phone">Phone&nbsp;<font color="red">*</font></label>
                    </div>

                    <div class="input-field col s12">
                        <input type="email" name="email" auto-complete="off" id="rq-email" required>
                        <label for="rq-email">Email&nbsp;<font color="red">*</font></label>
                    </div>

                    <div class="input-field col s12">
                        <select class="cf_select form-control" name="buyingStatus" id="rq-buyingStatus">
                            <option value="0" disabled selected>-SELECT-</option>
                            <option value="316">No</option>
                            <option value="317">Yes, it is not yet on the market</option>
                            <option value="318">Yes, it is already on the market</option>
                            <option value="319">Yes, it is under offer</option>
                            <option value="320">Yes, it is exchanged</option>
                        </select>
                        <label for="buyingStatus">I have a property to sell&nbsp;<font color="red">*</font></label>
                    </div>

                    <div class="input-field form-group-postcode col s12" style="display: none;">
                        <label for="rq-postcode">Selling Postcode&nbsp;<span style="color:red">*</span></label>
                        <input type="text" name="postcode" id="rq-postcode">
                    </div>

                    <div class="input-field col s12">
                        <textarea class="materialize-textarea" name="notes" id="rq-notes"></textarea>
                        <label for="rq-notes">Your Message (Optional)</label>
                    </div>
                </div>
                <input type="hidden" name="_wf_salt" value="883f0f1e355d5db7aa56eb7434820214">
                <input type="hidden" name="_redirection" value="http://springbokproperties.co.uk/thanks">
                <input type="hidden" name="_wf_name" value="Springbok Properties - Buyers WF">
                <input type="hidden" name="_wf_len" value="5">
                <input type="hidden" name="_source" value="http://springbokproperties.co.uk/heysham-property-for-sale/property-detail/173555">
                <input type="hidden" name="_page_url" value="http://springbokproperties.co.uk/heysham-property-for-sale/property-detail/173555">
                <input type="hidden" name="_prop_id" value="">
                <input type="hidden" name="_srcChannel" value="WEB">
                <input type="hidden" class="form-control" name="address" id="rq-address" value="declined">
            </form>
            <div class="thank-you-block" style="display: none;">
                <p>Your enquiry has been submitted successfully.</p>
                <p>One of our consultants will get in touch with you shortly.</p>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <div class="container">
            <a href="#" class="cmd-submit modal-action modal-close waves-effect waves-green btn sp-secondary sp-primary-text">Book Viewing</a>
        </div>
    </div>
</div>

<div id="login-modal" class="modal">
    <div class="modal-content">
        <h4 class="margin-top-0 margin-bottom-30">Login required</h4>
        <ul class="tabs old margin-bottom-0">
            <li class="tab col s3"><a href="#register">Create Account</a></li>
            <li class="tab col s3"><a href="#signin">Sign In</a></li>
        </ul>

        <div class="tab-content margin-0 card-panel z-depth-0">
            <div role="tabpanel" class="tab-pane" id="register">
                <form id="web_form" action="" method="post" name="web_form">
                    <p class="red-text center-align" style="display: none"></p>
                    <div class="row margin-bottom-0">
                        <div class="input-field col s3">
                            <input type="text" maxlength="10" id="title" class="validate[required]" name="title">
                            <label for="title">Title</label>
                        </div>
                        <div class="input-field col s5">
                            <input type="text" maxlength="30" id="firstname" class="validate[required]" name="firstname">
                            <label for="firstname">First Name</label>
                        </div>
                        <div class="input-field col s4">
                            <input type="text" maxlength="30" id="lastname" class="validate[required]" name="lastname">
                            <label for="lastname">Last Name</label>
                        </div>
                    </div>

                    <div class="row margin-bottom-0">
                        <div class="input-field col s12">
                            <input type="text" maxlength="100" id="email" class="validate[required,custom[email]]" name="email">
                            <label for="email">Email</label>
                        </div>
                    </div>
                    <div class="row margin-bottom-0">
                        <div class="input-field col s12">
                            <input type="password" maxlength="20" id="password" class="validate[required,minSize[6]]" name="password">
                            <label for="password">Password (at least 6 characters)</label>
                        </div>
                    </div>
                    <div class="row margin-bottom-0">
                        <div class="input-field col s12">
                            <input type="password" maxlength="20" id="confpassword" class="validate[required,equals[password]]" name="confpassword">
                            <label for="confpassword">Password Confirmation</label>
                        </div>
                    </div>

                    <input type="submit" name="saveWebForm" id="saveWebForm" class="btn sp-primary sp-secondary-text margin-top-20" value="Create account">
                </form>
                <p class="smaller margin-top-30">
                    By clicking Create Account you confirm that you agree to our website
                    <a target="_blank" href="http://springbokproperties.co.uk/terms-and-conditions">terms of use</a> and our <a target="_blank" href="http://springbokproperties.co.uk/privacy-policy">privacy policy</a>
                </p>
            </div>
            <div role="tabpanel" class="tab-pane" id="signin">
                <form id="web_form2" action="" method="post" name="web_form2">
                    <p class="red-text center-align"style="display: none"></p>
                    <div class="row margin-bottom-0">
                        <div class="input-field col s12">
                            <input type="text" maxlength="100" id="signin-email" class="validate[required,custom[email]]" name="email">
                            <label for="signin-email">Email</label>
                        </div>
                    </div>
                    <div class="row margin-bottom-0">
                        <div class="input-field col s12">
                            <input type="password" maxlength="20" id="signin-password" class="form-control validate[required]" name="password">
                            <label for="signin-password">Password (at least 6 characters)</label>
                        </div>
                    </div>
                    <input type="submit" value="Sign in" id="signin" name="signin" class="btn sp-primary sp-secondary-text margin-top-20">
                </form>
            </div>
        </div>
    </div>
</div>


<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-migrate-1.4.1.min.js"></script>
<script type="text/javascript" src="assets/js/materialize.min.js"></script>
<script type="text/javascript" src="assets/js/unslider-min.js"></script>
<script type="text/javascript" src="assets/js/jquery.dotdotdot.min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
