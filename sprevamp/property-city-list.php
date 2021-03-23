<?php
include("utils.php");
$meta_title = "City and Towns - Springbok Properties";
$meta_description = "All cities and towns in UK - Springbok Properties ";
$meta_keywords = "All cities and towns in UK - Springbok Properties ";
$cond = '';

dhtml("main();", $meta_title, $meta_description, $meta_keywords);

function main() {
    ?>
    <style>
        .sitemap h2 {
            font-size: 1.52rem;
            line-height: 110%;
            margin-bottom: -10px;
        }

        .sitemap a {
            text-decoration: none;
        }
    </style>

    <section class="sitemap white sp-secondary-text">
        <div class="container">
            <h2 class="left-align margin-bottom-30">All cities and towns in the UK</h2>
            <div class="row">
				<div class="col s6 m6">

                    <h2 class="left-align big">EAST MIDLANDS</h2>
                    <ul class="sitemap-list">
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Derby">Properties for Sale in Derby</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Leicester">Properties for Sale in Leicester</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Lincoln">Properties for Sale in Lincoln</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Nottingham">Properties for Sale in Nottingham</a></li>
                    </ul>
                    
                    <h2 class="left-align big">EAST</h2>
                    <ul class="sitemap-list">
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Cambridge">Properties for Sale in Cambridge</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Chelmsford">Properties for Sale in Chelmsford</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Norwich">Properties for Sale in Norwich</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Peterborough">Properties for Sale in Peterborough</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/St Albans">Properties for Sale in St Albans</a></li>
                    </ul>

                    <h2 class="left-align big">London</h2>
                    <ul class="sitemap-list">
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/London">Properties for Sale in London</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Westminster">Properties for Sale in Westminster</a></li>
                    </ul>

                    <h2 class="left-align big">North East</h2>
                    <ul class="sitemap-list">
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Durham">Properties for Sale in Durham</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Newcastle-upon-Tyne">Properties for Sale in Newcastle upon Tyne</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Sunderland">Properties for Sale in Sunderland</a></li>
                    </ul>

                    <h2 class="left-align big">North West</h2>
                    <ul class="sitemap-list">
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Chester">Properties for Sale in Chester</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Lancaster">Properties for Sale in Lancaster</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Liverpool">Properties for Sale in Liverpool</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Manchester">Properties for Sale in Manchester</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Preston">Properties for Sale in Preston</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Salford">Properties for Sale in Salford</a></li>
                    </ul>

                    <h2 class="left-align big">Scotland</h2>
                    <ul class="sitemap-list">
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Dundee">Properties for Sale in Dundee</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Edinburgh">Properties for Sale in Edinburgh</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Glasgow">Properties for Sale in Glasgow</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Perth">Properties for Sale in Perth</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Stirling">Properties for Sale in Stirling</a></li>
                    </ul>

                </div>
				<div class="col s6 m6">

                    <h2 class="left-align big">South East</h2>
                    <ul class="sitemap-list">
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Brighton-&-Hove">Properties for Sale in Brighton & Hove</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Canterbury">Properties for Sale in Canterbury</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Chichester">Properties for Sale in Chichester</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Oxford">Properties for Sale in Oxford</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Portsmouth">Properties for Sale in Portsmouth</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Southampton">Properties for Sale in Southampton</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Winchester">Properties for Sale in Winchester</a></li>
                    </ul>

                    <h2 class="left-align big">South West</h2>
                    <ul class="sitemap-list">
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Bath">Properties for Sale in Bath</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Bristol">Properties for Sale in Bristol</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Gloucester">Properties for Sale in Gloucester</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Salisbury">Properties for Sale in Salisbury</a></li>
                    </ul>

                    <h2 class="left-align big">Wales</h2>
                    <ul class="sitemap-list">
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Bangor">Properties for Sale in Bangor</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Cardiff">Properties for Sale in Cardiff</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Newport">Properties for Sale in Newport</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Swansea">Properties for Sale in Swansea</a></li>
                    </ul>

                    <h2 class="left-align big">West Midlands</h2>
                    <ul class="sitemap-list">
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Birmingham">Properties for Sale in Birmingham</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Coventry">Properties for Sale in Coventry</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Hereford">Properties for Sale in Hereford</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Lichfield">Properties for Sale in Lichfield</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Stoke-on-Trent">Properties for Sale in Stoke-on-Trent</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Wolverhampton">Properties for Sale in Wolverhampton</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Worcester">Properties for Sale in Worcester</a></li>
                    </ul>

                    <h2 class="left-align big">Yorkshire and the Humber</h2>
                    <ul class="sitemap-list">
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Bradford">Properties for Sale in Bradford</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Kingston-upon-Hull">Properties for Sale in Kingston upon Hull</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Leeds">Properties for Sale in Leeds</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Ripon">Properties for Sale in Ripon</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Sheffield">Properties for Sale in Sheffield</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/Wakefield">Properties for Sale in Wakefield</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/York">Properties for Sale in York</a></li>
                    </ul>

				</div>
            </div>

        </div>
    </section>
    <?php
}
?>
