<div class="modal fade" id="request-detail-modal" tabindex="-1" role="dialog" aria-labelledby="requestDetailModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Request Details</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" action="thank-you.php" method="post" name="frm_detail" id="frm_detail">
                    <div class="form-group">
                        <label for="" class="col-sm-4 control-label">I would Like</label>
                        <div class="col-sm-8">
                            <label class="radio-inline">
                                <input type="radio" name="interested_in" value="More Detail" checked="checked"/> More Detail
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="interested_in" value="To view a property"/> To view a property
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="rq-name" class="col-sm-4 control-label">First Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control required" name="name" id="rq-name" required/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="rq-surname" class="col-sm-4 control-label">Last Name</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="surname" id="rq-surname"/>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="rq-email" class="col-sm-4 control-label">Email</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control required email" name="email" id="rq-email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="rq-phone" class="col-sm-4 control-label">Phone</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control required number" name="phone" id="rq-phone">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="buyingStatus" class="col-sm-4 control-label">I have a property to sell</label>
                        <div class="col-sm-8">
                            <select class="cf_select form-control" name="buyingStatus" id="rq-buyingStatus">
                                <option value="316">No</option>
                                <option value="317">Yes, it is not yet on the market</option>
                                <option value="318">Yes, it is already on the market</option>
                                <option value="319">Yes, it is under offer</option>
                                <option value="320">Yes, it is exchanged</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group form-group-address" style="display: none;">
                        <label for="rq-address" class="col-sm-4 control-label">Property Address&nbsp;<span style="color:red">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="address" id="rq-address">
                        </div>
                    </div>
                    <div class="form-group form-group-postcode" style="display: none;">
                        <label for="rq-postcode" class="col-sm-4 control-label">Postcode&nbsp;<span style="color:red">*</span></label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="postcode" id="rq-postcode">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="rq-notes" class="col-sm-4 control-label">Your Message</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="3" name="notes" id="rq-notes"></textarea>
                        </div>
                    </div>

                    <input type="hidden" name="_wf_salt" value="883f0f1e355d5db7aa56eb7434820214"/>
                    <input type="hidden" name="_redirection" value="http://springbokproperties.co.uk/thanks"/>
                    <input type="hidden" name="_wf_name" value="Springbok Properties - Buyers WF"/>
                    <input type="hidden" name="_wf_len" value="5"/>
                    <input type="hidden" name="_source" value="http://springbokproperties.co.uk/accrington-property-for-sale/property-detail/11794"/>
                    <input type="hidden" name="_page_url" value="http://springbokproperties.co.uk/accrington-property-for-sale/property-detail/11794"/>
                    <input type="hidden" name="_srcChannel" value="WEB"/>

                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-8">
                            <input type="submit" class="btn btn-primary" name="cmdSubmit" value="Request Details"/>
                        </div>
                    </div>
                </form>
                <div class="thank-you-block">
                    <p>Your enquiry has been submitted successfully.</p>
                    <p>One of our consultants will get in touch with you shortly.</p>

                </div>
            </div>
            <div class="modal-footer" style="display: none;">
                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->