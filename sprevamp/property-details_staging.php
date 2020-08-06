<?php
include("utils.php");
$DB = new Db(SERVER, DATABASE, USER, PASSWORD);

$id = $_REQUEST['pid'];
$sql_content = "SELECT R.id,R.leads_id, R.prop_status_id, R.branchId, R.description,R.disclaimer, R.price, R.currency, R.address_line1, R.address_line1, R.town, R.county, R.country, R.postcode_1, R.postcode_2, R.bedrooms, R.bath_num, R.rec_num, R.summary,R.summary_pre, R.MEDIA_IMAGE_00,R.MEDIA_IMAGE_TEXT, R.addedOn, R.updatedOn,STG.category, TYP.prop_type, TEN.category, PRC.qualifier, prop_cat FROM rm_properties R left join 
	categories STG on (STG.id=R.prop_status_id) left join rm_prop_type TYP on (TYP.id = R.prop_sub_id) left join categories TEN on (TEN.id=R.tenure_type_id) left join rm_price_qualifier PRC on (PRC.id=R.price_qualifier_id) where R.id = '".$id."' AND R.published_flag='1' ";
$res = $DB->query($sql_content);
$rcx = $res;

#--- FOR PROPERTY TYPE
$recPropType = '';
if($rcx[0]['prop_type']!='')
{

    if($rcx[0]['prop_type']=='Detached' || $rcx[0]['prop_type']=='Semi-Detached' || $rcx[0]['prop_type']=='Terraced' || $rcx[0]['prop_type']=='End of Terrace')
    {
        $recPropType.=$rcx['prop_type'].' house';
    }else{
        $recPropType = $rcx['prop_type'];
    }
}else{
    $recPropType = '';
}
if(isset($rcx) && $rcx[0]['prop_cat']!=''){
    //$meta_title = (($rcx['prop_cat']=='r' && $rcx['bedrooms']>0)?($rcx['bedrooms']." bedroom, "):'').$recPropType.' for sale - '.$rcx['address_line1'].', '.$rcx['town'].(($rcx['county']!='0')?(', '.$rcx['county']):'').' - Springbok Properties';
    $meta_title = $recPropType.' For Sale in '.$rcx[0]['address_line1'].', '.$rcx[0]['town'].' - Property For Sale in '.$rcx[0]['town'].' - Investment Property For Sale in '.$rcx[0]['town'];
    $propDesc = str_replace('\n',' ',trim(stripslashes($rcx['description'])));
    $meta_description = substr((str_replace("property\'s", "property's", $propDesc)),0,150);
}else{
    $meta_title = 'Residential properites for sale - Springbok Properties';
    $meta_description = 'Find Properties For Sale In The UK - Springbok Properties';
}
dhtml("main();", $meta_title, $meta_description, $meta_keywords);


function main()
{
    $DB = new Db(SERVER, DATABASE, USER, PASSWORD);
    require_once('includes/amazon_s3/aws-sdk/sdk.class.php');
    require_once('includes/amazon_s3/S3.php');
    $s3 = new AmazonS3();
    $s3LINK = new S3(awsAccessKey, awsSecretKey);
    #--- VARIABLE FOR CARRYING PROPERTY REQUEST FORM IN CODE, SHOW IF HAVE VALID PROPERTY INFO AVAILABLE; SPAM PROTECTION
    $_SESSION['havePropInfo'] = 'true'; //default

    $id = $_REQUEST['pid'];

    $sql = "SELECT R.id,R.leads_id, R.prop_status_id, R.branchId, R.description,R.disclaimer, R.price, R.currency, R.address_line1, R.address_line1, R.town, R.county, R.country, R.postcode_1, R.postcode_2, R.bedrooms, R.bath_num, R.rec_num, R.summary,R.summary_pre, R.MEDIA_IMAGE_00,R.MEDIA_IMAGE_TEXT, R.addedOn, R.updatedOn,STG.category, TYP.prop_type, TEN.category, PRC.qualifier,prop_cat,L.email FROM rm_properties R LEFT JOIN leads L ON L.id=R.leads_id left join  
        categories STG on (STG.id=R.prop_status_id) left join rm_prop_type TYP on (TYP.id = R.prop_sub_id) left join categories TEN on (TEN.id=R.tenure_type_id) left join rm_price_qualifier PRC on (PRC.id=R.price_qualifier_id) where R.id = '" . $id . "' AND R.published_flag='1' ";
    $query = $DB->query($sql);
//    if($id == 481689){
//      echo $sql; die();
//    }
    //print_r($query); die();

    $sql_features = "SELECT features FROM rm_prop_features WHERE prop_id= '" . $id . "' ORDER BY item_order ASC";
    $query_features = $DB->query($sql_features);


    $sql1 = "SELECT media_name,caption FROM rm_prop_details WHERE prop_id= '" . $id . "' and media_type='IMG' order by 	item_count ASC";
    $query1 = $DB->query($sql1);


    ?>
    <section class="property-details white sp-secondary-text  buyer-page">
        <div class="container">
            <div class="row">
                <?php
                #--- If property info exists
                if(count($query)>0)
                {
                    $res_row = $query;

                    $map_address = str_replace("#", " ", $res_row[0]['address_line1']);
                    $map_address = $res_row[0]['postcode_1'] . " " . $res_row[0]['postcode_2'] . ",".$res_row[0]['address_line1'].", United Kingdom";
                    $postcode = $res_row[0]['postcode_1'] . " " . $res_row[0]['postcode_2'];
                    $leads_id = $res_row[0]['leads_id'];
                    ?>
                    <div class="col s12 m12 l8 margin-bottom-40">
                        <div class="z-depth-1 sp-secondary lighten-5 margin-bottom-30">
                            <div class="property-head sp-secondary lighten-5 clearfix">
                                <div class="property-head-right">
                                    <div class="property-head-offer"><?php echo ($res_row[0]['qualifier']!='')?$res_row[0]['qualifier']:''?></div>
                                    <div class="property-head-price"><?php echo ($res_row[0]['price']!='0' && $res_row[0]['qualifier']!='POA')?'&pound;'.number_format($res_row[0]['price']):''?></div>
                                </div>
                                <?php
                                #--- FOR PROPERTY TYPE
                                $recPropType = '';
                                if($res_row[0]['prop_type']!='')
                                {
                                    if($res_row[0]['prop_type']=='Detached' || $res_row[0]['prop_type']=='Semi-Detached' || $res_row[0]['prop_type']=='Terraced' || $res_row[0]['prop_type']=='End of Terrace')
                                    {
                                        $recPropType.=$res_row[0]['prop_type'].' house';
                                    }else{
                                        $recPropType = $res_row[0]['prop_type'];
                                    }
                                }else{
                                    $recPropType = '';
                                }

                                ?>

                                <h4 class="property-header"><?php if($res_row[0]['prop_cat']=='r' && $res_row[0]['bedrooms']>0) { echo $res_row[0]['bedrooms']." bedroom, "; } ?>  <?php echo $recPropType ?> for sale</h4>
                                <div class="property-location"><?php echo $res_row[0]['address_line1'];?>, <?php echo $res_row[0]['town'];?><?php echo ($res_row[0]['county']!='0')?(', '.$res_row[0]['county']):'';?></div>
                                <?php $_SESSION['prop_address'] = $res_row[0]['address_line1'].(($res_row[0]['town']!='')?(', '.$res_row[0]['town']):'').(($res_row[0]['county']!='0')?(', '.$res_row[0]['county']):'');?>
                            </div>

                            <div id="property-carousel">
                                <ul>
                                    <li>
                                        <?php

                                        //$s3fileExist = $s3->get_object('crm-media', 'uploads/large/'.$res_row['MEDIA_IMAGE_00']);
                                        //print_r($s3fileExist);
                                        if ($s3fileExist->status=='200' && $res_row[0]['MEDIA_IMAGE_00']!=''){
                                            ?><img src="<?php echo ((trim($res_row[0]['MEDIA_IMAGE_00'])!='' && $res_row[0]['MEDIA_IMAGE_00']!='NULL')?(MEDIA_LARGE_PATH.$res_row[0]['MEDIA_IMAGE_00']):(SITE_PATH.'images/big.png'))?>" onerror="if (this.src != 'big.png') this.src = '<?php echo SITE_PATH?>/images/big.png';" /><?php
                                        }else{
                                            ?><img src="<?php echo ((trim($res_row[0]['MEDIA_IMAGE_00'])!='' && $res_row[0]['MEDIA_IMAGE_00']!='NULL')?(MEDIA_PATH.$res_row[0]['MEDIA_IMAGE_00']):(SITE_PATH.'images/camera-placeholder.png'))?>" onerror="if (this.src != 'big.png') this.src = '<?php echo SITE_PATH?>/images/big.png';" /><?php
                                        }
                                        ?>
                                        <div class="carousel-caption">Front Aspect</div>
                                    </li>
                                    <?php

                                    $thumbStr=''; $medThum = 1;
                                    foreach($query1 as $row1)

                                    {
                                        //$s3fileExist = $s3->get_object('crm-media', 'uploads/large/'.$row1['media_name']);
                                        if ($s3fileExist->status=='200' && $row1['media_name']!=''){
                                            ?>
                                            <li>
                                                <img src="<?php echo SITE_PATH?>images/busy.gif" xsrc="<?php echo ((trim($row1['media_name'])!='' && $row1['media_name']!='NULL')?(MEDIA_LARGE_PATH.$row1['media_name']):(SITE_PATH.'images/big.png'))?>">
                                                <div class="carousel-caption"><?php echo $row1['caption'];?></div>
                                            </li>
                                            <?php
                                        }
                                        else{
                                            ?>
                                            <li>
                                                <img src="<?php echo SITE_PATH?>images/busy.gif" xsrc="<?php echo ((trim($row1['media_name'])!='' && $row1['media_name']!='NULL')?(MEDIA_PATH.$row1['media_name']):(SITE_PATH.'images/camera-placeholder.png'))?>">
                                                <div class="carousel-caption"><?php echo $row1['caption'];?></div>
                                            </li>
                                            <?php
                                        }

                                    }
                                    ?>
                                </ul>
                                <?php

                                #---- Property Status
                                if($res_row[0]['prop_status_id']=='261')
                                {
                                    ?><span class="corner corner-soldstc"></span><?php
                                }else if($res_row[0]['prop_status_id']=='262'){
                                    ?><span class="corner corner-soldstcm"></span><?php
                                }else if($res_row[0]['prop_status_id']=='263'){
                                    ?><span class="corner corner-underoffer"></span><?php
                                }else if($res_row[0]['prop_status_id']=='264'){
                                    ?><span class="corner corner-reserved"></span><?php
                                }else if($res_row[0]['prop_status_id']=='265'){
                                    ?><span class="corner corner-letagreed"></span><?php
                                }else{
                                    // silence
                                }

                                #--- Property Category (Commercial / Residential)
                                if($rec['prop_cat']=='c' || $rec['prop_type']=='Commercial Property' || $rec['prop_type']=='Shop')
                                {
                                    ?><span class="corner corner-commercial"></span><?php
                                }
                                ?>
                                <div class="slideshow-control hide-on-small-only"><span class="sprite sprite-slideshow-small"></span> Start Slideshow</div>
                            </div>

                            <div class="property-interest clearfix">
                                <h3>Interested in this property?</h3>
                                <div class="text-center property-interest-details">
                                    <span class="sprite sprite-call-large"></span>
                                    <div class="property-call">
                                        <div class="bigger">Call <a href="tel:08000684015">0800 068 4015</a></div>
                                        <div class="bigger">Or <a href="tel:03332007322">0333 200 7322</a></div>
                                        <div class="property-call-help-text">(mobile friendly line, free for <br>mobile inclusive minutes)</div>
                                    </div>
                                    <a class="waves-effect waves-light btn sp-primary sp-secondary-text margin-bottom-15 trigger-book-modal" data-email="<?php echo base64_encode($res_row[0]['email'])?>" href="#property-book" data-prop="<?php echo $id;?>">Book Viewing</a>
                                </div>
                            </div>
                        </div>

                        <div class="property-details z-depth-1">
                            <?php

                            #--- TO SHOW EXTRA TABS FOR FLP & VIDEO TOUR

                            $result = getFloorPlan($id, "FLP");
                            //die("Theree");
                            $floor_plan	= count($result);

                            $result1 = getFloorPlan($id, "LINK");
                            $virtual_tour	= count($result1);
                            ?>
                            <ul class="tabs old margin-bottom-0">
                                <li class="tab col s3"><a class="active" href="#property-tab-description">Description</a></li>
                                <li class="tab col s3"><a href="#property-tab-map">Map</a></li>
                                <?php if($floor_plan > 0) { ?><li class="tab col s3"><a href="#property-tab-flp">Floor Plan</a></li><?php } ?>
                                <?php if($virtual_tour > 0) { ?><li class="tab col s3"><a href="#property-tab-vtour">Virtual tour (<?php echo $virtual_tour;?>)</a></li><?php } ?>
                            </ul>

                            <div class="tab-content margin-top-0 card-panel z-depth-0">
                                <div role="tabpanel" class="tab-pane active" id="property-tab-description">
                                    <div class="row">
                                        <div class="col s8">
                                            <div class="property-key-features">
                                                <h3>Key features</h3>
                                                <ul class="list-two-col list-style-square clearfix">
                                                    <?php
                                                    foreach($query_features as $res_features)
                                                    {
                                                        ?><li><?php echo $res_features['features'];?></li><?php
                                                    }
                                                    ?>
                                                </ul>
                                            </div>
                                            <div class="property-description">
                                                <h3>Full description</h3>
                                                <?php
                                                #--- Summary Pre Text
                                                $summaryPreText = str_replace('Ã‚Â£','&pound;',$res_row[0]['summary_pre']);
                                                $summaryPreText = str_replace('Â£','&pound;',$summaryPreText);
                                                $summaryPreText = str_replace('ï¿½','&pound;',$rec[0]['summary_pre']);
                                                echo nl2br(html_entity_decode(stripslashes($summaryPreText)));
                                                ?>
                                                <?php
                                                #--- Summary Text
                                                $summaryText = str_replace('Ã‚Â£','&pound;',$res_row[0]['summary']);
                                                $summaryText = str_replace('ï¿½','&pound;',$summaryText);
                                                $summaryText = str_replace('Â£','&pound;',$summaryText);
                                                echo nl2br(html_entity_decode(stripslashes($summaryText)));


                                                $propDesc = nl2br(html_entity_decode(stripslashes($res_row[0]['description'])));
                                                $propDesc = str_replace("property\'s", "property's", $propDesc);

                                                $propDisc = nl2br(html_entity_decode(stripslashes($res_row[0]['disclaimer'])));
                                                $propDisc = str_replace("property\'s", "property's", $propDisc);

                                                #--- Discription & Disclaimer
                                                echo $propDesc.' '.$propDisc.'</b>';

                                                #---- For EPC Graph
                                                $epcGraph = getFloorPlan($id, "EPC");
                                                $numGraph	= count($epcGraph);
                                                if($numGraph> 0) {
                                                    ?>
                                                    <h3>Energy Performance Certificate (EPC) graphs</h3>
                                                    <ul class="list-style-square">
                                                        <?php
                                                        foreach($epcGraph as $row3) { ?>
                                                            <li>
                                                                <a href="<?php echo MEDIA_PATH . $row3['media_name']; ?>"
                                                                   rel="nofollow" target="_blank" class="js-ga-hipepc">
                                                                    <span class="print-hidden">View EPC for this property</span>
                                                                    <span class="print-only">See full size version online</span>
                                                                    <img alt="View EPC for this property"
                                                                         src="<?php echo MEDIA_THUMB_PATH . $row3['media_name']; ?>">
                                                                </a>
                                                            </li>
                                                        <?php } ?>
                                                    </ul>
                                                    <div>&nbsp;</div>
                                                    <?php
                                                }

                                                #---- For DOC / Broshure

                                                $brochure 		= getDocument($leads_id);
                                                $numBrochure	= count($brochure);
                                                $s3_url = '';
                                                if($numBrochure> 0) { ?>
                                                    <h3>Brochure:</h3>
                                                    <ul class="list-style-square">
                                                        <?php
                                                        foreach($brochure as $bro) {

                                                            $docFileName = $bro['doc_name'];
                                                            $s3_url = $s3LINK->getAuthenticatedURL(S3_DOC_BUCKET_NAME, $docFileName, $lifetime=S3_DOC_EXPIRY_TIME);?>
                                                            <li><a href="<?php echo $s3_url; ?>" rel="nofollow" target="_blank" class="js-ga-hipepc">Download Brochure</a></li>
                                                        <?php } ?>
                                                    </ul>
                                                    <div>&nbsp;</div>
                                                    <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                        <div class="col s4">
                                            <?php $filename = "https://maps.googleapis.com/maps/api/staticmap?center=".$map_address; ?>
                                            <a id="mapid" href="#property-tab-map"><img class="responsive-img" src="https://maps.googleapis.com/maps/api/staticmap?center=<?php echo $map_address; ?>&zoom=13&size=270x250&sensor=false&key=AIzaSyACSwYbUMws0UPgufd7UK8-8Q6RY3aBvdA"></a>
                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="property-tab-map">
                                    <div class="video-container">
                                        <?php
                                        $queMap = "SELECT latitude,longitude FROM `postcodelatlng` where postcode like '".$postcode."' AND showOnSPMap='y'";
                                        $resMap = $DB->query($queMap);
                                        $map_row = $resMap;	#prx($map_row);
                                        if($map_row[0]['longitude']!='' && $map_row[0]['latitude']!='')
                                        {
                                            $address = trim($map_address, ',');
                                            $address = str_replace(' ','+',$address);
                                            $lat = number_format($map_row['latitude'],7);
                                            $long = number_format($map_row['longitude'],7);
                                        }else{
                                            $address = trim($map_address, ',');
                                            $address = str_replace(' ','+',$address);
                                            $geocode=file_get_contents('https://maps.google.com/maps/api/geocode/json?address='.$address.'&sensor=false');
                                            $output= json_decode($geocode);
                                            $lat = $output->results[0]->geometry->location->lat;
                                            $long = $output->results[0]->geometry->location->lng;
                                        }
                                        ?>
                                        <iframe width="590" height="400" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.uk/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=+&amp;ie=UTF8&amp;hq=&amp;q=<?=$address?>&amp;hnear=<?=$address?>&amp;t=m&amp;z=14&amp;ll=<?=$lat;?>,<?=$long;?>&amp;t=m&amp;output=embed&amp;iwloc=1"></iframe>
                                        <!--<div id="map-canvas" style="width: 590px; height: 400px;"></div>-->
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="property-tab-flp">
                                    <div class="">
                                        <?php
                                        $flpGraph = getFloorPlan($id, "FLP");
                                        $floor_plan	= count($flpGraph);
                                        foreach($flpGraph as $row)
                                        { ?>
                                            <img src="<?php echo MEDIA_PATH.$row['media_name'] ?>"  class="img-responsive" title="" alt="">
                                            <?php
                                        } ?>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="property-tab-vtour">
                                    <div class="">
                                        <?php
                                        $vTourLinks = getFloorPlan($id, "LINK");
                                        $virtual_tour	= count($vTourLinks);
                                        foreach($vTourLinks as $row)
                                        {
                                            if(strpos($row['media_name'],'youtube')>0)
                                            {
                                                $YT = explode('watch?v=',$row['media_name']);
                                                $YT = 'https://www.youtube.com/embed/'.$YT[1];
                                                ?><iframe width="560" height="315" src="<?php echo $YT;?>" frameborder="0" allowfullscreen></iframe><?php
                                            }else{
                                                ?><img src="<?php echo MEDIA_PATH.$row['media_name'] ?>"  class="img-responsive" title="" alt=""><?php
                                            }
                                        } ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card-panel sp-secondary lighten-5 sp-secondary-text big">
                            To view this property, <a id="contactfrm2" href="#" data-toggle="modal" data-target="#request-detail-modal" data-keyboard="false" data-backdrop="static">click here</a>
                            or call us on <strong class="click-to-call">0800 068 4015</strong> or <strong class="click-to-call">0333 200 7322</strong>
                            (free for mobile inclusive minutes)
                        </div>

                    </div>

                    <div class="col s12 m12 l4">
                        <aside class="main-sidebar hidden-print">

                            <div class="card-panel margin-top-0 sp-secondary lighten-5 property-back-too-list">
                                <a href="<?php echo SITE_PATH?>property-list" onclick="history.back()">&Lt; Back to property listings</a>
                            </div>

                            <div class="card-panel margin-top-0 sp-secondary lighten-5 property-contact-methods">
                                <div class="item center-align">
                                    <a class="waves-effect waves-light btn sp-primary sp-secondary-text margin-bottom-15 trigger-book-modal" data-email="<?php echo base64_encode($res_row[0]['email'])?>" href="#property-book" data-prop="<?php echo $id;?>">Book Viewing</a>
                                    <a class="waves-effect waves-light btn sp-secondary sp-primary-text margin-bottom-15 trigger-book-modal" data-email="<?php echo base64_encode($res_row[0]['email'])?>" href="#property-book" data-prop="<?php echo $id;?>">Request Details</a>
                                    <?php
                                    $query = "SELECT buyitnow,buyitnow_updatedOn FROM rm_properties WHERE id=".$id;
                                    $buyitnow = $DB->query($query); #prx($buyitnow);
                                    $arrBuyItNow = $buyitnow; //mysql_fetch_array($buyitnow);	#prx($arrBuyItNow);
                                    if(isset($arrBuyItNow[0]['buyitnow']) && $arrBuyItNow[0]['buyitnow']!='NONE')
                                    {
                                        ?><a class="waves-effect waves-light btn green sp-secondary-text margin-bottom-15" data-email="<?php echo base64_encode($arrBuyItNow[0]['email'])?>" href="<?php echo SITE_PATH.'bid/register.php?register=true&property='.$id?>" data-prop="<?php echo $id;?>">Buy It Now</a><?php
                                    }
                                    ?>
                                    <div class="text-center call-us">
                                        or call us <a href="tel:08000684015">0800 068 4015</a>
                                        <br>
                                        local rates <a href="tel:03332007322">0333 200 7322</a>
                                    </div>
                                </div>

                                <div class="item property-sidebar-action">
                                    <a class="save-property <?php echo ($_SESSION['user_id']>0)?'':'not-logged-in'?>"  <?php echo ($_SESSION['user_id']>0)?'href="javascript:void(0)"':'href="register.php#signin"'?>  data-prop="<?php echo $id;?>" data-action="saveProp"><span class="sprite sprite-star-24"></span> Save Property</a>
                                </div>
                                <div class="item property-sidebar-action">
                                    <a class="print-property" href="https://springbokproperties.co.uk/print.php?propertyId=<?php echo $id;?>"><span class="sprite sprite-printer-24"></span> Print</a>
                                </div>
                                <div class="item property-sidebar-action">
                                    <a class="add-notes <?php echo ($_SESSION['user_id']>0)?'':'not-logged-in'?>" <?php echo ($_SESSION['user_id']>0)?'href="javascript:void(0)"':'href="register.php#signin"'?>  data-prop="<?php echo $id;?>"><span class="sprite sprite-note-24"></span> Add Notes</a>
                                    <div class="add-note-editor" style="display: none;">
                                        <div>
                                            <textarea id="myTextarea" name="myTextarea" rows="4"></textarea>
                                        </div>
                                        <div>
                                            <span id="charsLeft" class="pull-right"></span>
                                            <button class="btn btn-primary btn-save-note" data-prop="<?php echo $id;?>">Save Note</button>
                                            <button class="btn btn-primary btn-cancel-note">Cancel</button>
                                        </div>
                                        <?php
                                        if($_SESSION['user_id']>0)
                                        {
                                            $note = check_notes($id);//	pr($rows);
                                            if($note['comment']!=''){
                                                ?>
                                                <div>
                                                    <p><b>Last Note : </b><?php echo nl2br(stripslashes($note['comment']));?></p>
                                                </div>
                                                <?php
                                            }
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="item property-sidebar-action">
                                    <a href="<?php echo SITE_PATH?>sendToFriend.php?propertyId=<?php echo $id;?>"><span class="sprite sprite-message-24"></span> Send to Friend</a>
                                </div>
                            </div>
                            <?php if(!isset($_SESSION['user_id'])) { ?>
                                <div class="card-panel margin-top-0 sp-secondary lighten-5 property-investment-detail">

                                    <h4 class="margin-top-0">Property Investment<?php echo ($res_row[0]['town']!='')?(' in '.stripslashes($res_row[0]['town'])):''?></h4>
                                    <h5 class="margin-top-0">Investment Details in <?php echo (($res_row[0]['address_line1']!='')?(stripslashes($res_row[0]['address_line1'])):'').(($res_row[0]['town']!='')?(', '.stripslashes($res_row[0]['town'])):'')?></h5>
                                    <?php
                                    $price 		= $res_row[0]['price'];
                                    $outCode 	= $res_row[0]['postcode_1'];
                                    $dep 		= number_format(($price*25/100),1);	// DEPOSIT

                                    //--- AVG RENT
                                    $opts = array('http' => array('header'=> 'Cookie: ' . $_SERVER['HTTP_COOKIE']."\r\n"));
                                    $context = stream_context_create($opts);
                                    /*$rentData 	= file_get_contents('http://www.home.co.uk/for_rent/'.$outCode.'/current_rents?location='.$outCode,false,$context); #pr($rentData);
                                    //$rentData 	= file_get_contents('http://www.cash-buyer.co.uk/rentFetch.php?outCode='.$outCode,false,$context); #pr($rentData);
                                    //$rentData 	= file_get_contents('http://cash-for-houses.co.uk/rentFetch.php?outCode='.$outCode,false,$context); #pr($rentData);

                                    //$arrRent	= explode('property rents in '.strtoupper($outCode).':',$rentData); #prx($arrRent[1]);
                                    //$strRent	= substr($arrRent[1],0,80);
                                    //$matches 	= array();
                                    if (preg_match('/&pound;[0-9,]+ pcm/i', $strRent, $matches)) {	//&pound;
                                        $rent = $matches[0];
                                    }#prx($matches);
                                    $rentVal = filter_var($rent, FILTER_SANITIZE_NUMBER_INT);
                                    //--- Mortgage Figures
                                    $mortFig 	= number_format(($price*75*3.5)/120000,1);

                                    //--- GROSS Yield
                                    $grsYld = number_format((($rentVal*12/$price)*100),2);

                                    //ROI
                                    $mortInt = (($rentVal - $mortFig)*12)/($price*25/100);
                                    $ROI = number_format($mortInt*100,1);//number_format(($rentVal) - ((3.5*12*100)/($dep)),1);

                                    //GROWTH
                                    $randNum = range(4, 11);
                                    shuffle($randNum);
                                    */
                                    ?>
                                    <div class="item"></div>
                                    <div class="item">
                                        <strong>Deposit:</strong> &pound;<?php echo $dep;?> (25%)
                                    </div>
                                    <div class="item <?php echo ($_SESSION['user_id']>0)?'':'not-logged-in'?>">
                                        <strong>Average Rental Figure:</strong> <?php echo ($_SESSION['user_id']>0)?(($rent!='')?($rent):'NA'):('<strong class="question">?</strong> <small>Log in to unlock details</small>')?>
                                    </div>
                                    <div class="item">
                                        <strong>Mortgage Figure:</strong> <abbr title="<?php echo $price.'*75*3.5/120000';?>">&pound;<?php echo $mortFig;?></abbr>
                                    </div>
                                    <div class="item">
                                        <strong>Mortgage Rate:</strong> 3.5%
                                    </div>
                                    <div class="item <?php echo ($_SESSION['user_id']>0)?'':'not-logged-in'?>">
                                        <strong>Gross Yield:</strong> <?php echo ($_SESSION['user_id']>0)?(($grsYld!='')?($grsYld.'%'):'NA'):('<strong class="question">?</strong> <small>Log in to unlock details</small>')?>
                                    </div>
                                    <div class="item <?php echo ($_SESSION['user_id']>0)?'':'not-logged-in'?>">
                                        <strong>Return on Investment:</strong> <?php echo ($_SESSION['user_id']>0)?(($ROI!='')?('<abbr title="('.($rentVal).' - (3.5x12x100))/'.$dep.'">'.$ROI.'%</abbr>'):'NA'):('<strong class="question">?</strong> <small>Log in to unlock details</small>')?>
                                    </div>
                                    <div class="item <?php echo ($_SESSION['user_id']>0)?'':'not-logged-in'?>">
                                        <strong>Property Growth:</strong>  <?php echo ($_SESSION['user_id']>0)?(($randNum[0]>0)?($randNum[0].'%'):'NA'):('<strong class="question">?</strong> <small>Log in to unlock details</small>')?>
                                    </div>
                                </div>
                            <?php }?>
                        </aside>
                    </div>
                    <?php
                }else{
                    ?>
                    <div class="s12 m12 l9 margin-bottom-40 center-align">
                        <div class="card white sp-secondary-text margin-top-0">
                            <div class="card-content">
                                <p>&nbsp;</p>
                                <h4>We are sorry but we could not find the property you have requested. <br />It could've been either sold or removed.</h4>
                                <h6><a href="<?php echo SITE_PATH?>property-list">Back to property search <i class="material-icons">youtube_searched_for</i></h6>
                            </div>
                        </div>
                    </div>
                    <?php
                    $_SESSION['havePropInfo'] = 'false';
                }

                ?>
            </div>
        </div>
    </section>
    <!--<script type="text/javascript">
		var map;
		function initialize() {
			var mapOptions = {
				zoom: 13,
				center: new google.maps.LatLng(<?php echo $lat?>,<?php echo $long?>),
			};

			map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

			var myLatlng = new google.maps.LatLng(<?php echo $lat?>,<?php echo $long?>);

			var marker = new google.maps.Marker({
				position: myLatlng,
				map: map,
				title: 'Space Needle, Seattle WA'
			});
		}

		function loadScript() {
			var script = document.createElement('script');
			script.type = 'text/javascript';
			script.src = 'https://maps.googleapis.com/maps/api/js?key=AIzaSyACSwYbUMws0UPgufd7UK8-8Q6RY3aBvdA&callback=initialize';
			document.body.appendChild(script);
		}

		window.onload = loadScript;
		</script>-->
    <?php
} ?>
