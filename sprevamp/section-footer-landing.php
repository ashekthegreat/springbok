<footer class="page-footer white sp-secondary-text padding-top-0" style="border-top: 1px solid #eee;">
    <div class="footer-copyright white margin-top-0">
        <div class="container center-align sp-secondary-text white">
            <strong>&copy; 2015 Springbok Properties</strong> |
            <a href="#">Privacy Policy</a> |
            <a href="#">Terms & Conditions</a> |
            <a href="reviews.php">Springbok Properties Reviews</a> |
            <a href="#">Complaints Procedure</a> |
            <a href="#">Sitemap</a>
            <br><br><br>
        </div>
    </div>
</footer>

<div id="modal-video" class="modal">
    <div class="modal-content"></div>
</div>

<div id="property-book" class="modal">
    <div class="modal-content">
        <!--<h4>Modal Header</h4>-->
        <form class="form-horizontal" autocomplete="off" action="http://simbacloud.co.uk/Users/forms/processForm.php" method="post" name="frm_detail" id="frm_detail" novalidate="novalidate">
            <div class="row">
                <div class="input-field col s6">
                    <input type="text" name="name" id="rq-name" auto-complete="off" required="">
                    <label for="rq-name">Name&nbsp;<font color="red">*</font></label>
                </div>
                <div class="input-field col s6">
                    <input type="tel" name="phone" auto-complete="off" id="rq-phone" required>
                    <label for="rq-phone">Phone&nbsp;<font color="red">*</font></label>
                </div>
            </div>
            <div class="input-field">
                <input type="email" name="email" auto-complete="off" id="rq-email" required>
                <label for="rq-email">Email&nbsp;<font color="red">*</font></label>
            </div>

            <div class="input-field">
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
            <div class="input-field form-group-postcode" style="display: none;">
                <label for="rq-postcode">Selling Postcode&nbsp;<span style="color:red">*</span></label>
                <input type="text" name="postcode" id="rq-postcode">
            </div>
            <div class="input-field">
                <textarea class="materialize-textarea" name="notes" id="rq-notes"></textarea>
                <label for="rq-notes">Your Message (Optional)</label>
            </div>
            <input type="hidden" name="_wf_salt" value="883f0f1e355d5db7aa56eb7434820214">
            <input type="hidden" name="_redirection" value="http://springbokproperties.co.uk/thanks">
            <input type="hidden" name="_wf_name" value="Springbok Properties - Buyers WF">
            <input type="hidden" name="_wf_len" value="5">
            <input type="hidden" name="_source" value="http://springbokproperties.co.uk/heysham-property-for-sale/property-detail/173555">
            <input type="hidden" name="_page_url" value="http://springbokproperties.co.uk/heysham-property-for-sale/property-detail/173555">
            <input type="hidden" name="_srcChannel" value="WEB">
            <input type="hidden" class="form-control" name="address" id="rq-address" value="declined">
        </form>
        <div class="thank-you-block" style="display: none;">
            <p>Your enquiry has been submitted successfully.</p>
            <p>One of our consultants will get in touch with you shortly.</p>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="cmd-submit modal-action modal-close waves-effect waves-green btn-flat">Request Details</a>
    </div>
</div>


<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="assets/js/jquery-2.2.4.min.js"></script>
<script type="text/javascript" src="assets/js/jquery-migrate-1.4.1.min.js"></script>
<script type="text/javascript" src="assets/js/materialize.js"></script>
<script type="text/javascript" src="assets/js/unslider-min.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
