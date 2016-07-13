<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <title>Request Detail</title>
    <style>
        body {
            padding: 0px;
            margin: 0px;
            font-family: Arial, Helvetica, sans-serif;
            color: #535353;
            font-size: 14px;
        }

        label {
            width: 10em;
            float: left;
        }

        label.error {
            float: none;
            color: red;
            padding-left: 4em;
            vertical-align: top;
        }

        p {
            clear: both;
        }

        .submit {
            margin-left: 12em;
        }

        em {
            font-weight: bold;
            padding-right: 1em;
            vertical-align: top;
        }

        .valid {
            background-image: url('dealLiveArrow.png');
        }

        .txt_bxb {
            border: 1px solid #D3D3D3;
            font-family: Arial;
            font-size: 12px;
            width: 260px;
        }
    </style>
    <!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>-->
    <script type="text/javascript" src="http://springbokproperties.co.uk//js/jquery.js"></script>
    <script type="text/javascript" src="http://springbokproperties.co.uk//js/jquery.validate.js"></script>
    <script>
        $(document).ready(function () {
            $("#frm_detail").validate({

            });
        });
    </script>
</head>

<body>
    <form action="http://simbacloud.co.uk/Users/forms/processForm.php" method="post" name="frm_detail" id="frm_detail" onsubmit="return validForm()">
        <fieldset>
            <table cellpadding="4" cellspacing="0" border="0" align="center">
                <tr>
                    <td valign="top" align="left"><b>I would Like: </b></td>
                    <td valign="top"><b>
                            <input type="radio" name="interested_in" value="More Detail" checked="checked"/>More Detail &nbsp;&nbsp;<input type="radio" name="interested_in" value="To view a property"/>To view a property</b></td>
                </tr>
                <tr>
                    <td valign="top">First Name:</td>
                    <td valign="top"><input type="text" name="name" class="txt_bxb required"/></td>
                </tr>
                <tr>
                    <td valign="top">Last Name:</td>
                    <td valign="top"><input type="text" name="surname" class="txt_bxb"/></td>
                </tr>
                <tr>
                    <td valign="top">Email:</td>
                    <td valign="top"><input type="text" name="email" class="txt_bxb required email"/></td>
                </tr>
                <tr>
                    <td valign="top">Phone:</td>
                    <td valign="top"><input type="text" name="phone" class="txt_bxb required number" value=""/></td>
                </tr>
                <tr>
                    <td valign="top">I have a property to sell:</td>
                    <td valign="top">
                        <select class="cf_select" name="buyingStatus" id="buyingStatus" class="txt_bxb" onchange="showFields(this.value)">
                            <option value="316">No</option>
                            <option value="317">Yes, it is not yet on the market</option>
                            <option value="318">Yes, it is already on the market</option>
                            <option value="319">Yes, it is under offer</option>
                            <option value="320">Yes, it is exchanged</option>
                        </select>
                    </td>
                </tr>
                <!-- Addition Fields-->
                <tr id="field_1">
                    <td valign="top">Property Address&nbsp;<span style="color:red">*</span></td>
                    <td valign="top"><input type="text" name="address" class="txt_bxb" id="address"/></td>
                </tr>
                <tr id="field_2">
                    <td valign="top">Postcode&nbsp;<span style="color:red">*</span></td>
                    <td valign="top"><input type="text" name="postcode" class="txt_bxb" id="postcode"/></td>
                </tr>
                <!-- Addition Fields-->
                <tr>
                    <td valign="top">Your Message:</td>
                    <td valign="top"><textarea cols="30" rows="3" class="txt_bxb" name="notes"></textarea></td>
                </tr>
                <!--<input type="hidden" name="referer" value="http://springbokproperties.co.uk/accrington-property-for-sale/property-detail/11794" />  -->
                <input type="hidden" name="_wf_salt" value="883f0f1e355d5db7aa56eb7434820214"/>
                <input type="hidden" name="_redirection" value="http://springbokproperties.co.uk/thanks"/>
                <input type="hidden" name="_wf_name" value="Springbok Properties - Buyers WF"/>
                <input type="hidden" name="_wf_len" value="5"/>
                <input type="hidden" name="_source" value="http://springbokproperties.co.uk/accrington-property-for-sale/property-detail/11794"/>
                <input type="hidden" name="_page_url" value="http://springbokproperties.co.uk/accrington-property-for-sale/property-detail/11794"/>
                <input type="hidden" name="_srcChannel" value="WEB"/>
                <tr>
                    <td colspan="2" align="center" valign="top"><input type="image" src="/images/request-details-button.png" name="cmdSubmit" value="Submit"/></td>
                </tr>

            </table>
        </fieldset>
    </form>
</body>
</html>
<script>
    function closeFunction() {
        $.fancybox.close();
    }
    function showFields(vals) {
        if (vals == 317 || vals == 318) {
            $('#field_1').show();
            $('#field_2').show();
        } else {
            $('#field_1').hide();
            $('#field_2').hide();
        }
    }
    showFields(0);

    function validForm() {
        if ($('#prop_sell').val() == 317 || $('#prop_sell').val() == 318) {
            if ($('#address').val() == '') {
                alert('Please provide address information for vendor property');
                $('#address').focus();
                return false;
            }
            else if ($('#postcode').val() == '') {
                alert('Please provide valid postcode information for vendor property');
                $('#postcode').focus();
                return false;
            }
            else if ($('#postcode').val() == '' || !isPostcode($('#postcode').val())) {
                alert('Please provide valid UK postcode with a space between the two parts. e.g. AB1 1BA; S60 4DT; WA16 7HN');
                $('#postcode').val();
                $('#postcode').focus();
                return false;
            }
            else {
                return true;
            }
        }
    }

    function isPostcode(s) {
        var regex = /^(GIR 0AA)|([A-PR-UWYZ]((\d(\d|[A-HJKSTUW])?)|([A-HK-Y]\d(\d|[ABEHMNPRV-Y])?)) \d[ABD-HJLNOP-UW-Z]{2})$/i;
        return regex.test(s);
    }
</script>