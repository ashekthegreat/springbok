<?php
include("utils.php");
$meta_title = "Sitemap - Springbok Properties";
$meta_description = "Sitemap - Springbok Properties ";
$meta_keywords = "Sitemap - Springbok Properties ";
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
            <h2 class="left-align big">Sitemap</h2>
            <p class="big">This sitemap displays links to all pages within springbokproperties.co.uk.</p>
            <div class="row">
				<div class="col s6 m6">
                    <h2 class="left-align big"><a class="" href="<?php print SITE_PATH; ?>">HOME</a></h2>
                    <ul class="sitemap-list">
                        <li><a class="small" href="<?php print SITE_PATH; ?>free-valuation">Free Valuation</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>how-we-compare">How We Compare</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>where-we-advertise">Where we advertise</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>refer-springbok-properties">Refer Springbok Properties</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>reviews">Springbok Properties Reviews & Video Messages</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>success-stories">Springbok Success Stories</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>recent-sales">Springbok Recent Sales</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>how-much-is-my-house-worth">How Much Is My House Worth</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>rightmove">Advertise on Rightmove</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>zoopla">Advertise on Zoopla</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>primelocation">Advertise on Primelocation</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>nethouseprices">Advertise on Nethouseprices</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>moving-abroad-sell-house">Moving Abroad Sell House</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>stop-repossession">Stop Repossession</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>quick-home-sale">Quick Home Sale</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>sell-house-fast">Sell House Fast</a></li>
					</ul>

                    

                    <h2 class="left-align big"><a class="" href="<?php print SITE_PATH; ?>contact-us">CONTACT US</a></h2>

                    <h2 class="left-align big"><a class="" href="<?php print SITE_PATH; ?>about-us">ABOUT US</a></h2>
                    <ul class="sitemap-list">
                        <li><a class="small" href="<?php print SITE_PATH; ?>springbok-team">Springbok Team</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>springbok-mission">Springbok Mission, Values & Culture</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>springbok-story">Springbok Story</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>springbok-charities">Springbok Charities</a></li>
                    </ul>

                    <h2 class="left-align big"><a class="" href="<?php print SITE_PATH; ?>blog">PROPERTY BLOG</a></h2>
                    <h2 class="left-align big"><a class="" href="<?php print SITE_PATH; ?>register.php#signin">SIGN IN / REGISTER</a></h2>

                    <h2 class="left-align big"><a class="" href="<?php print SITE_PATH; ?>careers">SPRINGBOK CAREERS</a></h2>
                    <ul class="sitemap-list">
                        <li><a class="small" href="<?php print SITE_PATH; ?>careers/jobs.html">Springbok Properties Jobs</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>careers/people.html">Springbok Properties People</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>careers/about.html">About Careers At Springbok</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>careers/why-work-at-Springbok.html">Why Work At Springbok </a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>careers/culture.html">Springbok Culture</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>careers/contact_us.html">Careers Contact</a></li>
                    </ul>

                    <h2 class="left-align big"><a class="" href="<?php print SITE_PATH; ?>property-list">PROPERTIES FOR SALE</a></h2>

                    <ul class="sitemap-list">
						<li><a class="small" href="<?php print SITE_PATH; ?>property-for-sale/over-500000">Luxury Homes For Sale</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>properties-for-sale/under-20000">Properties for Sale Under 20K</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>properties-for-sale/under-50000">Properties for Sale Under 50K</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>properties-for-sale/under-70000">Properties for Sale Under 70K</a></li>
                    </ul>
                    
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

                    

                </div>
				<div class="col s6 m6">
					<h2 class="left-align big">PROPERTY ADVICE</h2>
                    <ul class="sitemap-list">
                        <li><a class="small" href="<?php print SITE_PATH; ?>property-investment">Property Investments</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>why-use-springbok-buy">Buying Properties With Springbok</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>prestige-homes">Prestige Homes</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>guide-to-buying">Guide to Buying</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>mortgage">Mortgage</a></li>
                        <li><a class="small" href="<?php print SITE_PATH; ?>conveyance">Property Conveyancing</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>probate-property">Selling Property In Probate</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>value-my-house">Value My House</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>divorce-divided">How is a House Divided in a Divorce</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>we-buy-any-house">Springbok Properties Alternative Options To Sell</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>national-homebuyers">National Home Buyers</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>conveyancing-solicitors">Conveyancing Solictors</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>divorce-property">Selling Property On Divorce</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>mouseprice">Sell Or Advertise On Mouseprice</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>land-registry">Land Registry And Property</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>your-move-hassle-free">Selling And Your Move</a></li>
						<!-- -->
						<li><a class="small" href="<?php print SITE_PATH; ?>how-is-a-house-divided-in-divorce">How is a house divided in divorce</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>house-valuation-probate">House Valuation Probate</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>cost-to-sell-house">Cost to sell house</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>fair-market-value-house">Fair market value house</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>sell-my-house-fast-for-market-value">Sell my house fast for market value</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>what-is-my-house-value-at-current-market">What is my house value at current market</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>home-value-estimator">Home value estimator</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>property-websites">Property websites</a></li>
						<!-- -->
						<li><a class="small" href="<?php print SITE_PATH; ?>nationwide-house-price-index">Nationwide House Price Index</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>sold-prices">Sold Prices</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>house-values">House Values</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>property-values">Property Values</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>house-price-calculator">House Price Calculator</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>nationwide-house-price-calculator">Nationwide House Price Calculator</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>house-sale-prices">House Sale Prices</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>how-much-did-a-house-sell-for">How much did a house sell for</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>estate-agents-fees">Estate agents Fees</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>estate-agents-selling-fees">Estate Agents Selling Fees</a></li>
						
						<!-- -->
						<li><a class="small" href="<?php print SITE_PATH; ?>solicitors-fees-for-selling-a-house">Solicitors Fees For Selling a House</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>fees-for-selling-a-house">Fees for selling a house</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>estate-agents-reviews">Estate Agent Reviews</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>online-estate-agents-reviews">Online Estate Agents Reviews </a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>selling-property">Selling Property</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>how-to-sell-your-house">How to sell your house</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>house-sale">House Sale</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>the-property-buying-company-reviews">The Property Buying Company Reviews</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>property-companies">Property Companies</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>companies-that-buy-houses">Companies that buy houses</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>british-home-buyers">British Home Buyers</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>cash-buyers-only">Cash Buyers Only</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>house-buyers">House Buyers</a></li>
						
						<li><a class="small" href="<?php print SITE_PATH; ?>all-agents">All-agents</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>yellow-estate-agents">Yellow Estate Agents</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>myhouseprice-professional">Myhouseprice Professional</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>property-cash-buyers">Property Cash Buyers</a></li>
						
						<li><a class="small" href="<?php print SITE_PATH; ?>sell-your-house-for-cash">Sell your house for cash</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>how-long-to-sell-a-house">How long to sell a house</a></li>
						<li><a class="small" href="<?php print SITE_PATH; ?>property-rescue">Property Rescue</a></li>
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

                    <h2 class="left-align big">OTHER USEFUL LINKS</h2>
                    <ul class="sitemap-list">
                        <li><a class="small" target="_blank" href="https://www.facebook.com/SpringbokProperties">Springbok Properties Facebook</a></li>
                        <li><a class="small" target="_blank" href="https://twitter.com/springbokprop">Springbok Properties Twitter</a></li>
                        <li><a class="small" target="_blank" href="https://www.youtube.com/channel/UCoX4BOtThDYw0p1MEd_y4Nw">Springbok Properties Youtube Channel</a></li>
                        <li><a class="small" target="_blank" href="<?php print SITE_PATH; ?>reviews">Springbok Properties Reviews</a></li>
                        <li><a class="small" target="_blank" href="https://uk.pinterest.com/springbokproper/pins/">Springbok Properties Pinterest</a></li>
                    </ul>
				</div>
            </div>

        </div>
    </section>
    <?php
}
?>
