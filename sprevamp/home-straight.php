<?php
	include("utils.php");
	
	#---Param 1
	$param1 = (isset($_GET['param1']) && $_GET['param1']!='')?ucwords(strtolower($_GET['param1'])):'Nationwide Estate Agents';
	
	dhtml("main();",$param1.' - Best Estate Agents - Sell Fast',$page_keywords,$page_description);
	
	function main()
	{	
		?>
		<section class="home-banner-2 section-hero-form padding-top-30 padding-bottom-30">
            <div class="container">
                <div class="row margin-bottom-0">
                    <div class="col s12 m5 push-m7 l5 push-l7 animatedParent">
                        <form class="white z-depth-2 animated fadeIn delay-250 wf_1" action="//simbacloud.co.uk/Users/forms/processFormValid.php" method="post">
                            <div class="form-title sp-primary sp-secondary-text center-align">
                                <div class="nowrap">Get A Free</div>
                                <div class="nowrap">No-Obligation Offer</div>
                            </div>

                            <div class="classic-form sp-primary">
                                
                                <input placeholder="Name" id="name" name="name" type="text" class="z-depth-1 top-form">
                                <input placeholder="Phone" id="phone" name="phone" type="text" class="z-depth-1">
                                <input placeholder="Email" id="email" name="email" type="email" class="z-depth-1">
								<input placeholder="Postcode" id="postcode" name="postcode" type="text" class="z-depth-1">
								<input type="hidden" name="address" value="declined">
								<input type="hidden" name="_wf_salt" value="068afc1f994a9e31165c519d4b406d38">
								<input type="hidden" name="_redirection" value="https://springbokproperties.co.uk/thanks">
								<input type="hidden" name="_wf_name" value="SP HOME PAGE - Offer Estimator">
								<input type="hidden" name="_wf_len" value="5">
								<input type="hidden" name="_source" value="SP.co.uk - Home Striaght">
								<input type="hidden" name="_page_url" value="springbokproperties.co.uk/home-straight">
								<input type="hidden" name="_srcChannel" value="WEB">
								<input type="hidden" value="" name="notext">
								<input type="hidden" value="" name="searchterm">
                                <div class="center-align margin-top-10">
                                    <button type="submit" class="waves-effect waves-light btn-large btn-block white-text offer-button animated fadeInUpShort delay-250">Get an Offer</button>
                                </div>
                                <div class="center-align smallest margin-top-15">
                                    <i class="material-icons">lock</i>
                                    100% secure & confidential. Data protection registration number ZA065473
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col s12 m7 pull-m5 l6 pull-l5">
                        <div class="banner-text">
                            <div class="banner-text-content animatedParent">
                                <h3 class="banner-h animated fadeInDownShort">
                                    Fast Sale Specialist - UK's Most
                                    Versatile Property Company
                                </h3>
                                <div class="margin-top-30">
                                    <div class="valign-wrapper margin-bottom-15 animated fadeInRightShort">
                                        <img class="hero_speed-circle" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFQAAABUAQMAAAAmpYKCAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABFJREFUeNpjYBgFo2AUjBQAAAPwAAE1GW0yAAAAAElFTkSuQmCC">
                                        <div class="margin-left-10">
                                            <h5 class="margin-0">SPEED</h5>
                                            <div>You need cash in a few days or weeks? We have a solution</div>
                                        </div>
                                    </div>
                                    <div class="valign-wrapper margin-bottom-15 animated fadeInRightShort delay-250">
                                        <img class="hero_value-circle" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFQAAABUAQMAAAAmpYKCAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABFJREFUeNpjYBgFo2AUjBQAAAPwAAE1GW0yAAAAAElFTkSuQmCC">
                                        <div class="margin-left-10">
                                            <h5 class="margin-0">MAXIMUM VALUE</h5>
                                            <div>You need to get 100% value? We have 1000s of case studies and success stories</div>
                                        </div>
                                    </div>
                                    <div class="valign-wrapper animated fadeInRightShort delay-500">
                                        <img class="hero_secure-circle" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFQAAABUAQMAAAAmpYKCAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABFJREFUeNpjYBgFo2AUjBQAAAPwAAE1GW0yAAAAAElFTkSuQmCC">
                                        <div class="margin-left-10">
                                            <h5 class="margin-0">SECURE SALE</h5>
                                            <div>You need a secure sale for your peace of mind? We've got you covered</div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="home-voted" class="home-voted sp-secondary lighten-5 sp-secondary-text scrollspy">
            <div class="container">
                <div class="row margin-bottom-0 voted-row">
                    <div class="col s12 m7 l6 center-align voted-left animatedParent">
                        <h5 class="animated fadeIn">Over 10,400 happy sellers - 24 Gold Awards</h5>
                    </div>
                </div>
            </div>
        </section>

        <section class="services-regulator sp-secondary lighten-1 white-text">
            <div class="container">
                <div class="row margin-bottom-0 animatedParent">
                    <div class="col s12 m12 l3">
                        <h4 class="regulated-label animated fadeInLeftShort">We Are Regulated:</h4>
                    </div>
                    <div class="col s12 m12 l9">
                        <div class="logos">
                            <img class="responsive-img logo-1 animated growIn delay-250" src="images/regulators/1.png" alt="The Property Ombudsman">
                            <img class="responsive-img logo-2 animated growIn delay-500" src="images/regulators/2.png" alt="GOV.UK">
                            <img class="responsive-img logo-3 animated growIn delay-750" src="images/regulators/3.png" alt="Approved Code">
                            <img class="responsive-img logo-4 animated growIn delay-1000" src="images/regulators/4.png" alt="napb">
                            <img class="responsive-img logo-5 animated growIn delay-1250" src="images/regulators/5.png" alt="nava">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="ratings services-rating scrollspy padding-20">
            <div class="container">
                <div class="center">
                    <div class="logo first">
                        <div class="left"> <img src="images/logo_trust.png" alt="" width="116" height="28"> <span> <i class="material-icons tiny">star</i> <i class="material-icons tiny">star</i> <i class="material-icons tiny">star</i> <i class="material-icons tiny">star</i> <i class="material-icons tiny">star_half</i> </span> </div>
                        <div class="right animatedParent"> <span class="animated bounceIn go">8/10</span> 494+ reviews</div>
                    </div>
                    <div class="logo">
                        <div class="left"> <img src="images/logo_allagen.png" alt="" width="107" height="33"> <span> <i class="material-icons tiny">star</i> <i class="material-icons tiny">star</i> <i class="material-icons tiny">star</i> <i class="material-icons tiny">star</i> <i class="material-icons tiny">star_half</i> </span> </div>
                        <div class="right animatedParent"> <span class="animated bounceIn go">4.6/5</span>1,524+ reviews</div>
                    </div>
                    <div class="logo">
                        <div class="left"> <img src="images/logo_google.png" alt="" width="108" height="36"> <span> <i class="material-icons tiny">star</i> <i class="material-icons tiny">star</i> <i class="material-icons tiny">star</i> <i class="material-icons tiny">star</i> <i class="material-icons tiny">star_half</i> </span> </div>
                        <div class="right animatedParent"> <span class="animated bounceIn go">4.1/5</span>444+ reviews</div>
                    </div>
                </div>
            </div>
        </section>
  
  <!-- springbook price result-->
  <section id="priceresult" class="springbook_priceresult grey lighten-4 scrollspy">
    <div class="container">
      <div class="row margin-bottom-0">
        <div class="col s12 padding-top-30">
          <div class="row">
            <div class="col s12 m4 center">
              <div class="card">
                <div class="card-title"><span class="counter">10,400+</span></div>
                <div class="card-content">
                  <p>Sales agreed<br>
                    all over the UK</p>
                </div>
              </div>
            </div>
            <div class="col s12 m4 center">
              <div class="card">
                <div class="card-title"><span class="counter">63%</span></div>
                <div class="card-content">
                  <p>of our property<br>
                    sales (STC) take less<br>
                    than 30 days</p>
                </div>
              </div>
            </div>
            <div class="col s12 m4 center">
              <div class="card">
                <div class="card-title"><span class="counter">3,210</span></div>
                <div class="card-content">
                  <p class="small">sellers achieved more money who were considering <u>taking a lower cash offer</u> due to tight timescales and situation</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- springbook price result--> 
  
  <!-- springbook propertiesapart-->
 <section id="setuspart" class="springbook_propertiesapart scrollspy">
    <div class="container">
     
          <div class="row">
            <div class="col s12 m5 hide-on-med-and-up">
              <div class="top_head hide-on-small-only"><img src="images/springbooklogo_icon.png" alt="" width="69" height="52"> Sell with springbok</div>
              <div class="card">
                <div class="card-content left-align">
                  <ul>
                    <li class="springboksell grey darken-3"><span>Ability to pay cash in 7 days</span></li>
					<li class="highstreetsell"><span>No possibility of cash in a week</span></li>
                    <li class="springboksell grey darken-3"><span>Sell in days</span></li>
					<li class="highstreetsell"><span>Sell in months or years</span></li>
                    <li class="springboksell grey darken-3"><span>Data-driven valuations</span></li>
					<li class="highstreetsell"><span>Inflated valuations</span></li>
                    <li class="springboksell grey darken-3"><span>Committed transaction, securing the sale</span></li>
					<li class="highstreetsell"><span>1 in 3 sales fall through</span></li>
                    <li class="springboksell grey darken-3"><span>Fast completion, from 20 days to 70 days</span> </li>
					<li class="highstreetsell"><span>National average is 143 days to sell</span></li>
                    <li class="springboksell grey darken-3"><span>5 specialist services to suit you</span></li>
					<li class="highstreetsell"><span>One person juggling multiple roles</span></li>
                    <li class="springboksell grey darken-3"><span>Specialist teams for every step</span></li>
					<li class="highstreetsell"><span>No plan B, "one size fits all" service</span></li>
                    <li class="springboksell grey darken-3"><span>21 Gold Awards based on customer feedback, including 4 National Awards</span></li>
					<li class="highstreetsell"><span>Awards typically voted for by industry insiders</span></li>
                    <li class="springboksell grey darken-3"><span>Specialists in handling difficult properties</span></li>
					<li class="highstreetsell"><span>Struggle to sell even the easiest property</span></li>
                    <li class="springboksell grey darken-3"><span>Proceedable buyers only</span></li>
					<li class="highstreetsell"><span>Anyone can view and make an offer they'll never follow through</span></li>
                    <li class="springboksell grey darken-3"><span>Proactively building a network</span></li>
					<li class="highstreetsell"><span>Wait for buyers and sellers to come to them</span></li>
                    <li class="springboksell grey darken-3"><span>Multiple reviews from multiple sources, including 100s of videos</span></li>
					<li class="highstreetsell"><span>Few reviews, usually from a single source</span></li>
                  </ul>
                </div>
              </div>
            </div>
			  
			  <div class="col s12 m5 hide-on-small-only show-on-medium-and-up">
              <div class="top_head"><img src="images/springbooklogo_icon.png" alt="" width="69" height="52"> Sell with springbok</div>
              <div class="card">
                <div class="card-content left-align">
                  <ul>
                    <li><span>Ability to pay cash in 7 days</span></li>
                    <li><span>Sell in days</span></li>
                    <li><span>Data-driven valuations</span></li>
                    <li><span>Committed transaction, securing the sale</span></li>
                    <li><span>Fast completion, from 20 days to 70 days</span> </li>
                    <li><span>5 specialist services to suit you</span></li>
                    <li><span>Specialist teams for every step</span></li>
                    <li><span>21 Gold Awards based on customer feedback, including 4 National Awards</span></li>
                    <li><span>Specialists in handling difficult properties</span></li>
                    <li><span>Proceedable buyers only</span></li>
                    <li><span>Proactively building a network</span></li>
                    <li><span>Multiple reviews from multiple sources, including 100s of videos</span></li>
                  </ul>
                </div>
              </div>
            </div>
			  
			  
            <div class="col m2 s12 animatedParent hide-on-small-only show-on-medium-and-up">
              <div class="apartvs animated growIn">vs</div>
            </div>
            <div class="col s12 m5 hide-on-small-only show-on-medium-and-up">
              <div class="top_head grey lighten-2"><img src="images/highstreet_logo.png" alt="" width="55" height="54"> High-Street or Online Estate Agent Sale</div>
              <div class="card light-grey">
                <div class="card-content left-align">
                  <ul>
                    <li><span>No possibility of cash in a week</span></li>
					<li><span>Sell in months or years</span></li>
					<li><span>Inflated valuations</span></li>
                    <li><span>1 in 3 sales fall through</span></li>
                    <li><span>National average is 143 days to sell</span></li>
					<li><span>One person juggling multiple roles</span></li>
                    <li><span>No plan B, "one size fits all" service</span></li>
                    <li><span>Awards typically voted for by industry insiders</span></li>
                    <li><span>Struggle to sell even the easiest property</span></li>
                    <li><span>Anyone can view and make an offer they'll never follow through</span></li>
                    <li><span>Wait for buyers and sellers to come to them</span></li>
                    <li><span>Few reviews, usually from a single source</span></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col s12 center-align margin-top-40"> <a href="/free-valuation" class="waves-effect waves-light btn-large grey darken-4 sp-primary-text center-align">Get Started Now</a> </div>
          </div>
     
    </div>
  </section>
  <!-- springbook propertiesapart--> 
  
  <section class="section-investment-reviews grey lighten-4 sp-secondary-text">
        <div class="container animatedParent">
            <h3 class="text-bold center-align margin-bottom-30">In this 3-minute video, find out what customers say about us</h3>
            <div class="investment-videos" data-id="9mzmXW5t4ao">
                <div class="row margin-bottom-0 animated fadeIn">
                    <div class="col s4 m2 l2">
                        <div class="card" data-id="BYKz90GY5EM">
                            <div class="card-image">
                                <img class="responsive-img" src="https://img.youtube.com/vi/BYKz90GY5EM/mqdefault.jpg"
                                     width="320" height="180" loading="lazy">
                                <div class="play-button"><i class="social social-youtube-play-small"></i></div>
                            </div>
                            <div class="card-content center-align">Marion Williams</div>
                        </div>
                    </div>
                    <div class="col s4 m2 l2">
                        <div class="card" data-id="AL18YfGfBQ8">
                            <div class="card-image">
                                <img class="responsive-img" src="https://img.youtube.com/vi/AL18YfGfBQ8/mqdefault.jpg"
                                     width="120" height="90" loading="lazy">
                                <div class="play-button"><i class="social social-youtube-play-small"></i></div>
                            </div>
                            <div class="card-content center-align">Julian Roberts</div>
                        </div>
                    </div>
                    <div class="col s4 m2 l2">
                        <div class="card" data-id="ZTh3cXTzo8M">
                            <div class="card-image">
                                <img class="responsive-img" src="https://img.youtube.com/vi/ZTh3cXTzo8M/mqdefault.jpg"
                                     width="120" height="90" loading="lazy">
                                <div class="play-button"><i class="social social-youtube-play-small"></i></div>
                            </div>
                            <div class="card-content center-align">Diane Limer</div>
                        </div>
                    </div>
                    <div class="col s4 m2 l2">
                        <div class="card" data-id="mxbvoMspw0k">
                            <div class="card-image">
                                <img class="responsive-img" src="https://img.youtube.com/vi/mxbvoMspw0k/mqdefault.jpg"
                                     width="120" height="90" loading="lazy">
                                <div class="play-button"><i class="social social-youtube-play-small"></i></div>
                            </div>
                            <div class="card-content center-align">Ian Wynn</div>
                        </div>
                    </div>
                    <div class="col s4 m2 l2">
                        <div class="card" data-id="P8TOSyLkWlo">
                            <div class="card-image">
                                <img class="responsive-img" src="https://img.youtube.com/vi/P8TOSyLkWlo/mqdefault.jpg"
                                     width="120" height="90" loading="lazy">
                                <div class="play-button"><i class="social social-youtube-play-small"></i></div>
                            </div>
                            <div class="card-content center-align">Julie Price</div>
                        </div>
                    </div>
                    <div class="col s4 m2 l2">
                        <div class="card" data-id="EfgAXRE6Ybk">
                            <div class="card-image">
                                <img class="responsive-img" src="https://img.youtube.com/vi/EfgAXRE6Ybk/mqdefault.jpg"
                                     width="120" height="90" loading="lazy">
                                <div class="play-button"><i class="social social-youtube-play-small"></i></div>
                            </div>
                            <div class="card-content center-align">Mohammed Ashraf</div>
                        </div>
                    </div>
                </div>
                <div class="row margin-bottom-0 animated fadeIn delay-250">
                    <div class="col s4 m2 l2">
                        <div class="card" data-id="mvsbbI3tXA4">
                            <div class="card-image">
                                <img class="responsive-img" src="https://img.youtube.com/vi/mvsbbI3tXA4/mqdefault.jpg"
                                     width="120" height="90" loading="lazy">
                                <div class="play-button"><i class="social social-youtube-play-small"></i></div>
                            </div>
                            <div class="card-content center-align">Dianne Sass</div>
                        </div>
                    </div>
                    <div class="col s4 m2 l2">
                        <div class="card" data-id="iY38J2sNq-U">
                            <div class="card-image">
                                <img class="responsive-img" src="https://img.youtube.com/vi/iY38J2sNq-U/mqdefault.jpg"
                                     width="120" height="90" loading="lazy">
                                <div class="play-button"><i class="social social-youtube-play-small"></i></div>
                            </div>
                            <div class="card-content center-align">Mike Gaughan</div>
                        </div>
                    </div>
                    <div class="col s4 m2 l2">
                        <div class="card" data-id="B8iI-PnmrPU">
                            <div class="card-image">
                                <img class="responsive-img" src="https://img.youtube.com/vi/B8iI-PnmrPU/mqdefault.jpg"
                                     width="120" height="90" loading="lazy">
                                <div class="play-button"><i class="social social-youtube-play-small"></i></div>
                            </div>
                            <div class="card-content center-align">David Gardner</div>
                        </div>
                    </div>
                    <div class="col s4 m2 l2">
                        <div class="card" data-id="Ag5sJFE6vQM">
                            <div class="card-image">
                                <img class="responsive-img" src="https://img.youtube.com/vi/Ag5sJFE6vQM/mqdefault.jpg"
                                     width="320" height="180" loading="lazy">
                                <div class="play-button"><i class="social social-youtube-play-small"></i></div>
                            </div>
                            <div class="card-content center-align">Denise Broomhall</div>
                        </div>
                    </div>
                    <div class="col s4 m2 l2">
                        <div class="card" data-id="dqY8H0b7YKs">
                            <div class="card-image">
                                <img class="responsive-img" src="https://img.youtube.com/vi/dqY8H0b7YKs/mqdefault.jpg"
                                     width="120" height="90" loading="lazy">
                                <div class="play-button"><i class="social social-youtube-play-small"></i></div>
                            </div>
                            <div class="card-content center-align">Megan Woods</div>
                        </div>
                    </div>
                    <div class="col s4 m2 l2">
                        <div class="card" data-id="5ed3wfFdkKw">
                            <div class="card-image">
                                <img class="responsive-img" src="https://img.youtube.com/vi/5ed3wfFdkKw/mqdefault.jpg"
                                     width="120" height="90" loading="lazy">
                                <div class="play-button"><i class="social social-youtube-play-small"></i></div>
                            </div>
                            <div class="card-content center-align">Nicola Ward</div>
                        </div>
                    </div>
                </div>
                <div class="row margin-bottom-0 animated fadeIn delay-500">
                    <div class="col s4 m2 l2">
                        <div class="card" data-id="-Tv9Izvris0">
                            <div class="card-image">
                                <img class="responsive-img" src="https://img.youtube.com/vi/-Tv9Izvris0/mqdefault.jpg"
                                     width="120" height="90" loading="lazy">
                                <div class="play-button"><i class="social social-youtube-play-small"></i></div>
                            </div>
                            <div class="card-content center-align">Samantha Lad</div>
                        </div>
                    </div>
                    <div class="col s4 m2 l2">
                        <div class="card" data-id="Xx2S0rLeBqk">
                            <div class="card-image">
                                <img class="responsive-img" src="https://img.youtube.com/vi/Xx2S0rLeBqk/mqdefault.jpg"
                                     width="120" height="90" loading="lazy">
                                <div class="play-button"><i class="social social-youtube-play-small"></i></div>
                            </div>
                            <div class="card-content center-align">David Johnson</div>
                        </div>
                    </div>
                    <div class="col s4 m2 l2">
                        <div class="card" data-id="PPJv9AY77KU">
                            <div class="card-image">
                                <img class="responsive-img" src="https://img.youtube.com/vi/PPJv9AY77KU/mqdefault.jpg"
                                     width="120" height="90" loading="lazy">
                                <div class="play-button"><i class="social social-youtube-play-small"></i></div>
                            </div>
                            <div class="card-content center-align">Warren Terry</div>
                        </div>
                    </div>
                    <div class="col s4 m2 l2">
                        <div class="card" data-id="F0WdUkXvBiQ">
                            <div class="card-image">
                                <img class="responsive-img" src="https://img.youtube.com/vi/F0WdUkXvBiQ/mqdefault.jpg"
                                     width="320" height="180" loading="lazy">
                                <div class="play-button"><i class="social social-youtube-play-small"></i></div>
                            </div>
                            <div class="card-content center-align">Jon Desmond</div>
                        </div>
                    </div>
                    <div class="col s4 m2 l2">
                        <div class="card" data-id="0PK0_RMxgLs">
                            <div class="card-image">
                                <img class="responsive-img" src="https://img.youtube.com/vi/0PK0_RMxgLs/mqdefault.jpg"
                                     width="120" height="90" loading="lazy">
                                <div class="play-button"><i class="social social-youtube-play-small"></i></div>
                            </div>
                            <div class="card-content center-align">Keighley Richardson</div>
                        </div>
                    </div>
                    <div class="col s4 m2 l2">
                        <div class="card" data-id="0Irq3ggPT4Y">
                            <div class="card-image">
                                <img class="responsive-img" src="https://img.youtube.com/vi/0Irq3ggPT4Y/mqdefault.jpg"
                                     width="120" height="90" loading="lazy">
                                <div class="play-button"><i class="social social-youtube-play-small"></i></div>
                            </div>
                            <div class="card-content center-align">Gary Morrish</div>
                        </div>
                    </div>
                </div>
                <div class="play-button">
                    <img src="images/services/youtube.png" width="120" height="90" class="youtube-play">
                </div>
            </div>
        </div>
    </section>
  
  <!-- springbook price result-->
  <section id="sale_solutions" class="springbook_problems scrollspy">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h2 class="center mb-0">Here are some of the problems we can solve</h2>
          <!--<h4 class="center">Choose from one of our many property solutions</h4>-->
          <div class="row center margin-top-30">
            <div class="col s12 m4 l2">
              <div class="icon">
                <div class="bg animatedParent"><i class="sprite_icons problemicon_1 animated fadeInDownShort go"></i></div>
              </div>
              <p>You are stuck with your estate agent for 2+ months with no sale</p>
            </div>
            <div class="col s12 m4 l2">
              <div class="icon">
                <div class="bg animatedParent"><i class="sprite_icons problemicon_3 animated fadeInDownShort go"></i></div>
              </div>
              <p>You want the best possible offer within 30 days</p>
            </div>
            <div class="col s12 m4 l2">
              <div class="icon">
                <div class="bg animatedParent"><i class="sprite_icons problemicon_4 animated fadeInDownShort go"></i></div>
              </div>
              <p>You lost a buyer at the last minute</p>
            </div>
            <div class="col s12 m4 l2">
              <div class="icon">
                <div class="bg animatedParent"><i class="sprite_icons problemicon_6 animated fadeInDownShort go"></i></div>
              </div>
              <p>You need to sell a &pound;30,000 or &pound;3,000,000 house, anywhere in the UK</p>
            </div>
            <div class="col s12 m4 l2">
              <div class="icon">
                <div class="bg animatedParent"><i class="sprite_icons problemicon_2 animated fadeInDownShort go"></i></div>
              </div>
              <p>You need cash now due to repossession, inherited probate, mortgage arrears</p>
            </div>
            <div class="col s12 m4 l2">
              <div class="icon">
                <div class="bg animatedParent"><i class="sprite_icons problemicon_5 animated fadeInDownShort go"></i></div>
              </div>
              <p>Your buyer reduced their price at the last minute</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col s12 m12">
      <div class="card handwriting">
        <div class="card-content left-align"> No matter what the problem is, we can solve it! </div>
      </div>
    </div>
    <div class="container">
      <div class="row margin-top-30">
        <div class="col s12">
          <div class="row center">
            <div class="col s12 m4 l2">
              <p>You found a house and want to part-exchange yours</p>
              <div class="icontop">
                <div class="bg animatedParent"><i class="sprite_icons problemicon_7 animated fadeInDownShort go"></i></div>
              </div>
            </div>
            <div class="col s12 m4 l2">
              <p>You are struggling to sell on the open market for whatever reason</p>
              <div class="icontop">
                <div class="bg animatedParent"><i class="sprite_icons problemicon_10 animated fadeInDownShort go"></i></div>
              </div>
            </div>
            <div class="col s12 m4 l2">
              <p>You had insultingly low offers from a cash buyer or at a traditional auction</p>
              <div class="icontop">
                <div class="bg animatedParent"><i class="sprite_icons problemicon_8 animated fadeInDownShort go"></i></div>
              </div>
            </div>
            <div class="col s12 m4 l2">
              <p>You are sick of paying upfront fees online for no results and no communication</p>
              <div class="icontop">
                <div class="bg animatedParent"><i class="sprite_icons problemicon_11 animated fadeInDownShort go"></i></div>
              </div>
            </div>
            <div class="col s12 m4 l2">
              <p>You are fed up with traditional estate agents</p>
              <div class="icontop">
                <div class="bg animatedParent"><i class="sprite_icons problemicon_9 animated fadeInDownShort go"></i></div>
              </div>
            </div>
            <div class="col s12 m4 l2">
              <p>You need a guaranteed sale</p>
              <div class="icontop">
                <div class="bg animatedParent"><i class="sprite_icons problemicon_12 animated fadeInDownShort go"></i></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- springbook price result--> 
  
  <!-- section how fast-->
  <section id="howfast" class="howfast scrollspy">
    <div class="container">
      <div class="row">
        <div class="col s12 m10 offset-m1 offset-l1">
          <div class="row">
            <div class="col s12 m7">
              <h3 class="m-0"><strong>HOW FAST IS "FAST"?</strong></h3>
              <p>Our fast is so fast that you'll think we're making it up. It's so fast that our competitors got the Advertising Standards people to audit us because they thought it was impossible.</p>
              <div class="card-content left-align dflex animatedParent"> <span class="counter"><u>63%</u></span>
                <p>of our property sales (STC)<br>
                  take less than 30 days</p>
              </div>
              <div class="card-content left-align dflex animatedParent"> <span class="counter"><u>77%</u></span>
                <p>of our property sales (STC)<br>
                  take less than 8 weeks</p>
              </div>
              <div class="card-content left-align dflex animatedParent"> <span>Over </span><span class="counter"><u>1,800</u></span>
                <p>properties sold in less than<br>
                  10 days</p>
              </div>
            </div>
            <div class="col s12 m5"> <img src="images/ASA.png" alt="asa" width="627" height="601" loading="lazy"> </div>
          </div>
          <div class="center">
            <p>In March 2018, the ASA verified our numbers and confirmed the truth: we really are that fast!</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- section how fast--> 
  
        <!-- publication-->
        <section id="publication" class="publications scrollspy">
            <div class="container">
                <div class="row">
                    <div class="col s12 m10 offset-m1">
                        <div class="container">
                            <div class="col s12">
                                <div class="row">
                                    <h2 class="center">Trusted By Major Publications</h2>
                                    <h4 class="center">We are the go-to experts for local and national papers on market insights, housing data and key issues in property.</h4>
                                </div>
                                <div class="row mb-0 animatedParent">
                                    <div class="col s12 m4">
                                        <div class="card center animated fadeInLeft"><img class="publication_layer-114" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAPsAAAAeAQMAAADQNfrUAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABFJREFUeNpjYBgFo2AUDE8AAAPeAAF1Iz5PAAAAAElFTkSuQmCC"></div>
                                    </div>
                                    <div class="col s12 m4">
                                        <div class="card center animated fadeInLeft"><img class="publication_layer-118" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAL4AAAAnAQMAAACL02BVAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABFJREFUeNpjYBgFo2AUDBMAAAPPAAGMsnTLAAAAAElFTkSuQmCC"></div>
                                    </div>
                                    <div class="col s12 m4">
                                        <div class="card center animated fadeInLeft"><img class="publication_layer-122" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOgAAAArAQMAAABIG1YhAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABJJREFUeNpjYBgFo2AUjIKRDgAFCgABFSkeqgAAAABJRU5ErkJggg=="></div>
                                    </div>
                                    <div class="col s12 m4">
                                        <div class="card center animated fadeInLeft"><img class="publication_layer-38-copy-4" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAQMAAAAgAQMAAAAsUI+kAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABJJREFUeNpjYBgFo2AUjALyAAAEQAABA/fDCwAAAABJRU5ErkJggg=="></div>
                                    </div>
                                    <div class="col s12 m4">
                                        <div class="card center animated fadeInLeft"><img class="publication_layer-116" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKsAAAAnAQMAAABKVCr5AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABFJREFUeNpjYBgFo2AUDBgAAAOBAAH0sYD7AAAAAElFTkSuQmCC"></div>
                                    </div>
                                    <div class="col s12 m4">
                                        <div class="card center animated fadeInLeft"><img class="publication_layer-115" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMYAAAAmAQMAAAClEXacAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABFJREFUeNpjYBgFo2AUDEcAAAPcAAFFSKRGAAAAAElFTkSuQmCC"></div>
                                    </div>
                                    <div class="col s12 m4">
                                        <div class="card center animated fadeInLeft"><img class="publication_daily-express" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAVgAAAAoAQMAAACB93B2AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABZJREFUeNpjYBgFo2AUjIJRMAqGHwAABuAAAVCwYGgAAAAASUVORK5CYII="></div>
                                    </div>
                                    <div class="col s12 m4">
                                        <div class="card center animated fadeInLeft"><img class="publication_london" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAWgAAAAfAQMAAADwe8VbAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABRJREFUeNpjYBgFo2AUjIJRMDgAAAWSAAH5w4j7AAAAAElFTkSuQmCC"></div>
                                    </div>
                                    <div class="col s12 m4">
                                        <div class="card center animated fadeInLeft"><img class="publication_estates" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHsAAAA5AQMAAAAsmcZbAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABFJREFUeNpjYBgFo2AUDHkAAAPJAAGn+RvSAAAAAElFTkSuQmCC"></div>
                                    </div>
                                    <div class="col s12 m4">
                                        <div class="card center animated fadeInLeft"><img class="publication_idealhome" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAANQAAAApAQMAAAB3HJWcAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABJJREFUeNpjYBgFo2AUjAL6AwAEfAABm/3jNgAAAABJRU5ErkJggg=="></div>
                                    </div>
                                    <div class="col s12 m4">
                                        <div class="card center animated fadeInLeft"><img class="publication_residential" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAAAzAQMAAABlrpJTAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABFJREFUeNpjYBgFo2AU0BAAAANjAAE8iqkBAAAAAElFTkSuQmCC"></div>
                                    </div>
                                    <div class="col s12 m4">
                                        <div class="card center animated fadeInLeft"><img class="publication_estate" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAFUAAAA2AQMAAACMW0ftAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAAA9JREFUeNpjYBgFo2DgAQACiAABHxUwMAAAAABJRU5ErkJggg=="></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  <!-- publication-->
  
  <section id="success_stories" class="sold_houses scrollspy">
    <div class="container">
      <div class="row animatedParent">
        <h2 class="center animated growIn slow">We Sold Over 4,400 houses that<br>
          <font class="red-text">High-Street & Online Estate Agents Failed</font> To Sell</h2>
      </div>
      <div class="row margin-top-30">
        <div class="col s12 m6 l4 animatedParent">
          <div class="blockcard animated fadeInUpShort">
            <div class="card-title">420 Days Not Sold With Previous Agent</div>
            <div class="card-image">
              <h4>Bolton</h4>
              <img src="images/BL2 6JA.jpg" alt="" width="620" height="413" loading="lazy"></div>
            <div class="card-footer"><img width="25" src="images/springbooklogo_icon.png" alt="">SALE AGREED IN 6 DAYS WITH SPRINGBOK</div>
          </div>
        </div>
        <div class="col s12 m6 l4 animatedParent">
          <div class="blockcard animated fadeInUpShort">
            <div class="card-title">348 Days Not Sold With Previous Agent</div>
            <div class="card-image">
              <h4>South West London</h4>
              <img src="images/SW6 7ND.jpg" alt="" width="620" height="413" loading="lazy"></div>
            <div class="card-footer"><img width="25" src="images/springbooklogo_icon.png" alt="">SALE AGREED IN 19 DAYS WITH SPRINGBOK</div>
          </div>
        </div>
        <div class="col s12 m6 l4 animatedParent">
          <div class="blockcard animated fadeInUpShort">
            <div class="card-title">211 Days Not Sold With Previous Agent</div>
            <div class="card-image">
              <h4>Stevenage</h4>
              <img src="images/SG9 9EE.jpg" alt="" width="620" height="414" loading="lazy"></div>
            <div class="card-footer"><img width="25" src="images/springbooklogo_icon.png" alt="">SALE AGREED IN 17 DAYS WITH SPRINGBOK</div>
          </div>
        </div>
      </div>
      <div class="row margin-top-30">
        <div class="col s12 m6 l4 animatedParent">
          <div class="blockcard animated fadeInUpShort">
            <div class="card-title">106 Days Not Sold With Previous Agent</div>
            <div class="card-image">
              <h4>Edinburgh</h4>
              <img src="images/EH22 4AQ.jpg" alt="" width="620" height="413" loading="lazy"></div>
            <div class="card-footer"><img width="25" src="images/springbooklogo_icon.png" alt="">SALE AGREED IN 19 DAYS WITH SPRINGBOK</div>
          </div>
        </div>
        <div class="col s12 m6 l4 animatedParent">
          <div class="blockcard animated fadeInUpShort">
            <div class="card-title">167 Days Not Sold With Previous Agent</div>
            <div class="card-image">
              <h4>Medway</h4>
              <img src="images/ME12 4PR.jpg" alt="" width="620" height="413" loading="lazy"></div>
            <div class="card-footer"><img width="25" src="images/springbooklogo_icon.png" alt="">SALE AGREED IN 7 DAYS WITH SPRINGBOK</div>
          </div>
        </div>
        <div class="col s12 m6 l4 animatedParent">
          <div class="blockcard animated fadeInUpShort">
            <div class="card-title">108 Days Not Sold With Previous Agent</div>
            <div class="card-image">
              <h4>Petersborough</h4>
              <img src="images/PE14 9SH.jpg" alt="" width="620" height="413" loading="lazy"></div>
            <div class="card-footer"><img width="25" src="images/springbooklogo_icon.png" alt="">SALE AGREED IN 9 DAYS WITH SPRINGBOK</div>
          </div>
        </div>
      </div>
      <div class="col s12 pl-0 center-align margin-top-30"> <a href="/free-valuation"  class="waves-effect waves-light btn-large grey darken-4 center-align sp-primary-text">Book your Free valuation visit now</a> </div>
    </div>
  </section>
  
  <!-- key_promises-->
        <section id="key_promises" class="key_promises grey lighten-4 scrollspy">
            <div class="container">
                <div class="row">
                    <div class="col s12">
                        <div class="row">
                            <h2 class="center">20 Key promises to you</h2>
                            <h4 class="center">We eliminate the clutter and focus on what matters to you! <br>
                                Speed. Communication. Getting more people through your door. Getting you the best price.</h4>
                        </div>
                        <div class="col s6 m3 l2 animatedParent center">
                            <div class="icon animated fadeInLeftShort go">
                                <img class="key_best-possible" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAF4AAAB8AQMAAADaeJUQAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABVJREFUeNpjYBgFo2AUjIJRMAooAwAGTAABqOTaNAAAAABJRU5ErkJggg==">
                            </div>
                            <h5>Best possible price - fast!</h5>
                            <p class="rowone mobileone">We get you the best possible price in the shortest possible time (typically less than 30 days). Simple!</p>
                        </div>
                        <div class="col s6 m3 l2 animatedParent center">
                            <div class="icon animated fadeInLeftShort go">
                                <img class="key_tailior" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHEAAABxAQMAAADYsN6TAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABVJREFUeNpjYBgFo2AUjIJRMApGAQAHEAAB47/8NgAAAABJRU5ErkJggg==">
                            </div>
                            <h5>Tailor-made solutions</h5>
                            <p class="rowone mobileone">We do not believe one size fits all. Our selling solutions are flexible depending upon your timeframe, your circumstances and your price targets.</p>
                        </div>

                        <!-- mobile btn 1-->
                        <div class="collapsible-header center-align hide-on-med-and-up"> <a id="mobileone" class="btn-floating btn-small waves-effect waves-light white"> <i class="material-icons left middle-indicator-text ">add</i> </a> </div>
                        <!-- mobile btn-->

                        <div class="col s6 m3 l2 animatedParent center">
                            <div class="icon animated fadeInLeftShort go">
                                <img class="key_dedicated" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAG4AAABxAQMAAAAOFQT2AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABZJREFUeNpjYBgFo2AUjIJRMAoGHQAABp8AAcu52/YAAAAASUVORK5CYII=">
                            </div>
                            <h5>Dedicated specialist negotiator</h5>
                            <p class="rowone mobiletwo">Trained to drive price upwards using our pricing strategy.</p>
                        </div>
                        <div class="col s6 m3 l2 animatedParent center">
                            <div class="icon animated fadeInLeftShort go">
                                <img class="key_unique" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAI4AAABwAQMAAADyq9oiAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABlJREFUeNpjYBgFo2AUjIJRMApGwSigDAAACFAAAbCL2iwAAAAASUVORK5CYII=">
                            </div>
                            <h5>Unique buyer commitment</h5>
                            <p class="rowone mobiletwo">Buyer reservation deposit to secure your sale and reduce buyer pull-outs.</p>
                        </div>

                        <!-- mobile btn 2-->
                        <div class="collapsible-header center-align hide-on-med-and-up"> <a id="mobiletwo" class="btn-floating btn-small waves-effect waves-light white"> <i class="material-icons left middle-indicator-text ">add</i> </a> </div>
                        <!-- mobile btn-->

                        <div class="col s6 m3 l2 animatedParent center">
                            <div class="icon animated fadeInLeftShort go">
                                <img class="key_no-charges" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHgAAAB4AQMAAAADqqSRAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABdJREFUeNpjYBgFo2AUjIJRMApGAb0BAAeAAAGB8v1lAAAAAElFTkSuQmCC">
                            </div>
                            <h5>No hidden charges</h5>
                            <p class="rowone mobilethree">No sneaky charges, no upfront fees whatsoever. Transparent fees paid only at completion.</p>
                        </div>

                        <!-- desktop btn 1-->
                        <div class="collapsible-header center-align hide-on-small-only"> <a id="rowone" class="btn-floating btn-small waves-effect waves-light white"> <i class="material-icons left middle-indicator-text ">add</i> </a> </div>
                        <!-- desktop btn-->

                        <div class="col s6 m3 l2 animatedParent center">
                            <div class="icon animated fadeInLeftShort go">
                                <img class="key_part-exchange" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHQAAAB1AQMAAAClCFfBAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABdJREFUeNpjYBgFo2AUjIJRMApGAaUAAAdQAAGTFslZAAAAAElFTkSuQmCC">
                            </div>
                            <h5>Part exchange</h5>
                            <p class="rowtwo mobilethree">Double the number of buyers, turn unproceedable buyers into proceedable buyers.</p>
                        </div>

                        <!-- mobile btn 3-->
                        <div class="collapsible-header center-align hide-on-med-and-up"> <a id="mobilethree" class="btn-floating btn-small waves-effect waves-light white"> <i class="material-icons left middle-indicator-text ">add</i> </a> </div>
                        <!-- mobile btn-->

                        <div class="col s6 m3 l2 animatedParent center">
                            <div class="icon animated fadeInLeftShort go">
                                <img class="key_no-sale" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKEAAABnAQMAAABSLrBcAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABlJREFUeNpjYBgFo2AUjIJRMApGwSgYLgAACNoAAQEYod0AAAAASUVORK5CYII=">
                            </div>
                            <h5>No sale, no fee - guaranteed!</h5>
                            <p class="rowtwo mobilefour">Only one fee, agreed upfront, paid only upon success. Simply no other charges whatsoever!</p>
                        </div>
                        <div class="col s6 m3 l2 animatedParent center">
                            <div class="icon animated fadeInLeftShort go">
                                <img class="key_quicker" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGsAAABcAQMAAABTDtlaAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABRJREFUeNpjYBgFo2AUjIJRQCsAAAVkAAGy7JBaAAAAAElFTkSuQmCC">
                            </div>
                            <h5>Quicker progression </h5>
                            <p class="rowtwo mobilefour">One of the finest, most experienced sales progression teams in the UK, dedicated to fully managing the whole process.</p>
                        </div>

                        <!-- mobile btn 4-->
                        <div class="collapsible-header center-align hide-on-med-and-up"> <a id="mobilefour" class="btn-floating btn-small waves-effect waves-light white"> <i class="material-icons left middle-indicator-text ">add</i> </a> </div>
                        <!-- mobile btn-->

                        <div class="col s6 m3 l2 animatedParent center">
                            <div class="icon animated fadeInLeftShort go">
                                <img class="key_24-7" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAH0AAABmAQMAAADcXww+AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABZJREFUeNpjYBgFo2AUjIJRMAqGKgAABsYAAZYr0M8AAAAASUVORK5CYII=">
                            </div>
                            <h5>At your service 24/7</h5>
                            <p class="rowtwo mobilefive">Whether you need a valuation for  your house or have a question, we are with you every step of the way.</p>
                        </div>
                        <div class="col s6 m3 l2 animatedParent center">
                            <div class="icon animated fadeInLeftShort go">
                                <img class="key_effective" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJEAAABzAQMAAACimnLpAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABhJREFUeNrtwQEBAAAAgiD/r25IQAEA/BgI/AABJ5CRsAAAAABJRU5ErkJggg==">
                            </div>
                            <h5>Effective & proven pricing strategy</h5>
                            <p class="rowtwo mobilefive">To ignite interest and spark bidding wars for your property.</p>
                        </div>

                        <!-- mobile btn 5-->
                        <div class="collapsible-header center-align hide-on-med-and-up"> <a id="mobilefive" class="btn-floating btn-small waves-effect waves-light white"> <i class="material-icons left middle-indicator-text ">add</i> </a> </div>
                        <!-- mobile btn-->
                        <!-- desktop btn 2-->
                        <div class="collapsible-header center-align hide-on-small-only"> <a id="rowtwo" class="btn-floating btn-small waves-effect waves-light white"> <i class="material-icons left middle-indicator-text ">add</i> </a> </div>
                        <!-- desktop btn-->

                        <div class="col s6 m3 l2 animatedParent center">
                            <div class="icon animated fadeInLeftShort go">
                                <img class="key_strict" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHgAAAB4AQMAAAADqqSRAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABdJREFUeNpjYBgFo2AUjIJRMApGAb0BAAeAAAGB8v1lAAAAAElFTkSuQmCC">
                            </div>
                            <h5>Strict buyer screening</h5>
                            <p class="rowthree mobilesix">No time-wasters. We target property investors, cash-ready buyers and proceedable buyers.</p>
                        </div>
                        <div class="col s6 m3 l2 animatedParent center">
                            <div class="icon animated fadeInLeftShort go">
                                <img class="key_5star" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAL4AAAB3AQMAAACHXWiiAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABpJREFUeNrtwTEBAAAAwqD1T20ND6AAAIATAwufAAH8W3tVAAAAAElFTkSuQmCC">
                            </div>
                            <h5>5-star solicitors included</h5>
                            <p class="rowthree mobilesix">Your independent property law and conveyancing specialist.</p>
                        </div>

                        <!-- mobile btn 6-->
                        <div class="collapsible-header center-align hide-on-med-and-up"> <a id="mobilesix" class="btn-floating btn-small waves-effect waves-light white"> <i class="material-icons left middle-indicator-text ">add</i> </a> </div>
                        <!-- mobile btn-->

                        <div class="col s6 m3 l2 animatedParent center">
                            <div class="icon animated fadeInLeftShort go">
                                <img class="key_planb" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJIAAAB2AQMAAAAZYFhZAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABlJREFUeNrtwYEAAAAAw6D5U1/hAFUBAPAYCTgAAUwAsjMAAAAASUVORK5CYII=">
                            </div>
                            <h5>Plan B</h5>
                            <p class="rowthree mobileseven">The UK's only multi-solution property specialists, with a Plan B if your property fails to sell and you have a deadline.</p>
                        </div>
                        <div class="col s6 m3 l2 animatedParent center">
                            <div class="icon animated fadeInLeftShort go">
                                <img class="key_progessor" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHcAAAB3AQMAAAAD903JAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABdJREFUeNpjYBgFo2AUjIJRMApGAa0BAAdwAAFT6BJ7AAAAAElFTkSuQmCC">
                            </div>
                            <h5>Dedicated progressor</h5>

                            <p class="rowthree mobileseven">Their legal background, experience and persistence will prevent dreaded fall-throughs.</p>
                        </div>

                        <!-- mobile btn 7-->
                        <div class="collapsible-header center-align hide-on-med-and-up"> <a id="mobileseven" class="btn-floating btn-small waves-effect waves-light white"> <i class="material-icons left middle-indicator-text ">add</i> </a> </div>
                        <!-- mobile btn-->

                        <div class="col s6 m3 l2 animatedParent center">
                            <div class="icon animated fadeInLeftShort go">
                                <img class="key_national-adv" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJ0AAABhAQMAAAD2uDH3AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABdJREFUeNpjYBgFo2AUjIJRMApGwYgAAAf1AAGYaUm5AAAAAElFTkSuQmCC">
                            </div>
                            <h5>Extensive national advertising & large investor database</h5>
                            <p class="rowthree mobileeight">Wider net, more buyers, getting you a better price.</p>
                        </div>

                        <!-- desktop btn 3-->
                        <div class="collapsible-header center-align hide-on-small-only"> <a id="rowthree" class="btn-floating btn-small waves-effect waves-light white"> <i class="material-icons left middle-indicator-text ">add</i> </a> </div>
                        <!-- desktop btn-->

                        <div class="col s6 m3 l2 animatedParent center">
                            <div class="icon animated fadeInLeftShort go">
                                <img class="key_manchester" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAGkAAABqAQMAAACF2O3XAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABVJREFUeNpjYBgFo2AUjIJRMAqIBQAGNgABYHAHwQAAAABJRU5ErkJggg==">
                            </div>
                            <h5>Manchester and UK-based teams only</h5>
                            <p class="rowfour mobileeight">Effectively capturing all buyer interest and offers 24/7.</p>
                        </div>
                        <!-- mobile btn 8-->
                        <div class="collapsible-header center-align hide-on-med-and-up"> <a id="mobileeight" class="btn-floating btn-small waves-effect waves-light white"> <i class="material-icons left middle-indicator-text ">add</i> </a> </div>
                        <!-- mobile btn-->

                        <div class="col s6 m3 l2 animatedParent center">
                            <div class="icon animated fadeInLeftShort go">
                                <img class="key_sp-hub" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAKEAAAB5AQMAAABr8tO3AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABlJREFUeNrtwTEBAAAAwqD1T20JT6AAAOBtCmYAATE1zRAAAAAASUVORK5CYII=">
                            </div>
                            <h5>Springbok Hub</h5>
                            <p class="rowfour mobilenine">Get real-time updates on new offers and key notifications about your sale progress.</p>
                        </div>
                        <div class="col s6 m3 l2 animatedParent center">
                            <div class="icon animated fadeInLeftShort go">
                                <img class="key_more-money" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOsAAABEAQMAAABajlCtAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABlJREFUeNpjYBgFo2AUjIJRMApGwSggHgAACDwAAVI84FUAAAAASUVORK5CYII=">
                            </div>
                            <h5>More money</h5>
                            <p class="rowfour mobilenine">25%-30% more money for sellers considering a low cash offer or traditional auction due to tight timescales and situation.</p>
                        </div>

                        <!-- mobile btn 9-->
                        <div class="collapsible-header center-align hide-on-med-and-up"> <a id="mobilenine" class="btn-floating btn-small waves-effect waves-light white"> <i class="material-icons left middle-indicator-text ">add</i> </a> </div>
                        <!-- mobile btn-->

                        <div class="col s6 m3 l2 animatedParent center">
                            <div class="icon animated fadeInLeftShort go">
                                <img class="key_national-adv" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAJ0AAABhAQMAAAD2uDH3AAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABdJREFUeNpjYBgFo2AUjIJRMApGwYgAAAf1AAGYaUm5AAAAAElFTkSuQmCC">
                            </div>
                            <h5>90% of UK postcodes</h5>
                            <p class="rowfour mobileten">National coverage means more buyers, more interest and the best possible price.</p>
                        </div>
                        <div class="col s6 m3 l2 animatedParent center">
                            <div class="icon animated fadeInLeftShort go">
                                <img class="key_buyers-int" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHEAAAB2AQMAAADFte4rAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABdJREFUeNpjYBgFo2AUjIJRMApGAbUBAAdgAAEb/2OiAAAAAElFTkSuQmCC">
                            </div>
                            <h5>International buyers</h5>
                            <p class="rowfour mobileten">Springbok Prestige has access to global buyers for high-end and luxury homes.</p>
                        </div>

                        <!-- mobile btn 10-->
                        <div class="collapsible-header center-align hide-on-med-and-up"> <a id="mobileten" class="btn-floating btn-small waves-effect waves-light white"> <i class="material-icons left middle-indicator-text ">add</i> </a> </div>
                        <!-- mobile btn-->

                        <!-- desktop btn 4 -->
                        <div class="collapsible-header center-align hide-on-small-only"> <a id="rowfour" class="btn-floating btn-small waves-effect waves-light white"> <i class="material-icons left middle-indicator-text ">add</i> </a> </div>
                        <!-- desktop btn 4 -->

                    </div>
                </div>
            </div>
        </section>
  <!-- key_promises-->
  
  <section id="home-estimator" class="home-estimator scrollspy">
    <div class="container">
      <h2 class="center-align">Try Our Free Offer Estimator</h2>
      <h4 class="center-align">See what's possible with your property in 2 minutes online</h4>
      <div class="row margin-top-30">
        <form class="sp-primary sp-secondary-text col s12 m8 offset-m2 l6 offset-l3 WF_OFFER_EST" action="//simbacloud.co.uk/Users/forms/processFormValid.php" method="post">
          <div class="classic-form">
            <input placeholder="Name" id="name" name="name" type="text" class="z-depth-1">
            <input placeholder="Phone Number" id="phone" name="phone" type="text" class="z-depth-1">
            <input placeholder="Email" id="email" name="email" type="text" class="z-depth-1">
            <input placeholder="Postcode" id="postcodeM" name="postcode" type="hidden" class="z-depth-1">
            <!--<input type="text" autocomplete="off" id="addressListX" placeholder="Address" name="address" class="autocomplete">-->
            <div class="typeahead__container">
              <div class="typeahead__field"> <span class="typeahead__query">
                <input id="addressListX" class="autocomplete" name="address" type="search" autocomplete="off" placeholder="Postcode">
                </span> </div>
            </div>
            <select name="are_you_looking_to_sell_your_home" id="homeLookingToSell" class="margin-bottom-10 white browser-default" style="">
              <option value="">Are you looking to sell your home?</option>
              <option value="670">Yes, I'd like to sell with Springbok</option>
              <option value="671">Yes, but I'm not sure who to sell with</option>
              <option value="672">I am not selling</option>
              <option value="673">Just curious about the value</option>
            </select>
            <select name="how_quickly_are_you_looking_to_sell" id="homeQuickToSell" class="margin-bottom-10 white browser-default hide" style="">
              <option value="">How quickly are you looking to sell?</option>
              <option value="666">As soon as possible</option>
              <option value="667">Within 1-3 months</option>
              <option value="668">Within 3-6 months</option>
              <option value="669">After 6 months</option>
            </select>
            <input type="hidden" name="_wf_salt" value="068afc1f994a9e31165c519d4b406d38">
            <input type="hidden" name="_redirection" value="https://springbokproperties.co.uk/thanks">
            <input type="hidden" name="_wf_name" value="SP HOME PAGE - Offer Estimator">
            <input type="hidden" name="_wf_len" value="5">
            <input type="hidden" name="_source" value="SP.co.uk - Home Free Offer Estimator">
            <input type="hidden" name="_page_url" value="springbokproperties.co.uk">
            <input type="hidden" name="_srcChannel" value="WEB">
            <input type="hidden" value="" name="notext">
            <input type="hidden" value="" name="searchterm">
            <button type="submit" class="btn-large btn-block mt-1 grey darken-4 sp-primary-text text-lighten-5">Get Started</button>

          </div>
          <i class="sprite sprite-9000" style="opacity: 1;"></i>
        </form>
      </div>
      <p class="center-align"> We can help you estimate how quickly you can sell &amp; work towards your target asking price. <br>
        It takes 2 minutes to fill in our online offer estimator. You have nothing to lose - it's on us!</p>
    </div>
  </section>
  
  
  <!-- data-driven--> 
  
  <!-- team-->
  <section id="team" class="springbok_team scrollspy">
    <div class="container">
      <div class="row">
        <div class="col m6 l4 offset-l4 s12 offset-m3">
          <h2 class="center"><strong>We are springbok!</strong><br>
            Pleased to meet you</h2>
        </div>
      </div>
      <div class="row">
        <div class="col s12 animatedParent">
          <div class="content animated fadeInUpShort">
            <h5 class="center margin-top-0 margin-bottom-0">SPRINGBOK CUSTOMER STORIES</h5>
            <p><strong>"Actually the most amazing experience  we have ever had,</strong> these guys are not 'estate agent' in the true sense of the word - they are totally on your side, totally human and fantastic. The house was on the market for a former days before we had offers on the table, and in this market that's just awesome! We were on the market with another estate agent for months without even a bit and now look at us, sold. done. dusted. with no drama and on our way to the sunshine! I would thought recommend Springbok, every member of the staff a delight, the process easy and the results AMAZEBALLS! Thank you to everyone at Springbok." </p>
            <div class="teambottom_block"> <span><strong>Elizabeth & Sally</strong></span>
              <button class="waves-effect waves-light btn-large grey darken-4 center-align">
              <a href="/about-us">Go to about us</a>
              </button>
              <small><a href="/about-us"><u>Read more stories</u></a></small> </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- team--> 
  
  <!--videos-->
  <section id="home-video" class="home-video scrollspy scrollspy">
    <div class="container">
      <div class="row">
        <div class="col s12 l8 offset-l2 center-align">
          <h2>Here's why hundreds of customer choose us after being let down by their estate agent</h2>
          <h4>We could not have said it better</h4>
        </div>
      </div>
      <div class="row">
        <div class="col s12 m4">
          <div class="card hoverable" data-id="Ag5sJFE6vQM">
            <div class="card-image"> <img alt="youtube" class="responsive-img" src="https://img.youtube.com/vi/Ag5sJFE6vQM/mqdefault.jpg" width="320" height="180" loading="lazy">
              <div class="play-button"><i class="social social-youtube-play-large"></i></div>
            </div>
            <div class="card-content center-align">"They did everything they said they would."</div>
          </div>
        </div>
        <div class="col s12 m4 hide-on-small-only">
          <div class="card hoverable" data-id="F0WdUkXvBiQ">
            <div class="card-image"> <img alt="youtube" class="responsive-img" src="https://img.youtube.com/vi/F0WdUkXvBiQ/mqdefault.jpg" width="320" height="180" loading="lazy">
              <div class="play-button"><i class="social social-youtube-play-large"></i></div>
            </div>
            <div class="card-content center-align">"I'm very grateful and I would really recommend Springbok."</div>
          </div>
        </div>
        <div class="col s12 m4 hide-on-small-only">
          <div class="card hoverable" data-id="BYKz90GY5EM">
            <div class="card-image"> <img alt="youtube" class="responsive-img" src="https://img.youtube.com/vi/BYKz90GY5EM/mqdefault.jpg" width="320" height="180" loading="lazy">
              <div class="play-button"><i class="social social-youtube-play-large"></i></div>
            </div>
            <div class="card-content center-align">"Went above anything that I ever expected."</div>
          </div>
        </div>
      </div>
      <ul class="small-videos ">
        <li class="card hoverable" data-id="0PK0_RMxgLs" >
          <div class="card-image"> <img alt="youtube" class="responsive-img" src="https://img.youtube.com/vi/0PK0_RMxgLs/default.jpg" width="120" height="90" loading="lazy">
            <div class="play-button"><i class="social social-youtube-play-small"></i></div>
          </div>
          <div class="card-content center-align">Keighley <br>
            Richardson</div>
        </li>
        <li class="card hoverable" data-id="P8TOSyLkWlo" >
          <div class="card-image"> <img alt="youtube" class="responsive-img" src="https://img.youtube.com/vi/P8TOSyLkWlo/default.jpg" width="120" height="90" loading="lazy">
            <div class="play-button"><i class="social social-youtube-play-small"></i></div>
          </div>
          <div class="card-content center-align">Julie <br>
            Price</div>
        </li>
        <li class="card hoverable" data-id="mxbvoMspw0k" >
          <div class="card-image"> <img alt="youtube" class="responsive-img" src="https://img.youtube.com/vi/mxbvoMspw0k/default.jpg" width="120" height="90" loading="lazy">
            <div class="play-button"><i class="social social-youtube-play-small"></i></div>
          </div>
          <div class="card-content center-align">Ian <br>
            Wynn</div>
        </li>
        <li class="card hoverable" data-id="mvsbbI3tXA4" >
          <div class="card-image"> <img alt="youtube" class="responsive-img" src="https://img.youtube.com/vi/mvsbbI3tXA4/default.jpg" width="120" height="90" loading="lazy">
            <div class="play-button"><i class="social social-youtube-play-small"></i></div>
          </div>
          <div class="card-content center-align">Dianne <br>
            Sass</div>
        </li>
        <li class="card hoverable" data-id="QedLPJ3dYXU" >
          <div class="card-image"> <img alt="youtube" class="responsive-img" src="https://img.youtube.com/vi/QedLPJ3dYXU/default.jpg" width="120" height="90" loading="lazy">
            <div class="play-button"><i class="social social-youtube-play-small"></i></div>
          </div>
          <div class="card-content center-align">Samantha <br>
            Lad</div>
        </li>
        <li class="card hoverable" data-id="PPJv9AY77KU" >
          <div class="card-image"> <img alt="youtube" class="responsive-img" src="https://img.youtube.com/vi/PPJv9AY77KU/default.jpg" width="120" height="90" loading="lazy">
            <div class="play-button"><i class="social social-youtube-play-small"></i></div>
          </div>
          <div class="card-content center-align">Warren <br>
            Terry</div>
        </li>
        <li class="card hoverable" data-id="EfgAXRE6Ybk" >
          <div class="card-image"> <img alt="youtube" class="responsive-img" src="https://img.youtube.com/vi/EfgAXRE6Ybk/default.jpg" width="120" height="90" loading="lazy">
            <div class="play-button"><i class="social social-youtube-play-small"></i></div>
          </div>
          <div class="card-content center-align">Mohammed <br>
            Ashraf</div>
        </li>
        <li class="card hoverable" data-id="iY38J2sNq-U" >
          <div class="card-image"> <img alt="youtube" class="responsive-img" src="https://img.youtube.com/vi/iY38J2sNq-U/default.jpg" width="120" height="90" loading="lazy">
            <div class="play-button"><i class="social social-youtube-play-small"></i></div>
          </div>
          <div class="card-content center-align">Mike <br>
            Gaughan</div>
        </li>
        <li class="card hoverable" data-id="AL18YfGfBQ8" >
          <div class="card-image"> <img alt="youtube" class="responsive-img" src="https://img.youtube.com/vi/AL18YfGfBQ8/default.jpg" width="120" height="90" loading="lazy">
            <div class="play-button"><i class="social social-youtube-play-small"></i></div>
          </div>
          <div class="card-content center-align">Julian <br>
            Roberts</div>
        </li>
        <li class="card hoverable" data-id="0Irq3ggPT4Y" >
          <div class="card-image"> <img alt="youtube" class="responsive-img" src="https://img.youtube.com/vi/0Irq3ggPT4Y/default.jpg" width="120" height="90" loading="lazy">
            <div class="play-button"><i class="social social-youtube-play-small"></i></div>
          </div>
          <div class="card-content center-align">Gary <br>
            Morrish</div>
        </li>
      </ul>
      <div class="center-align"> <a href="/reviews"  class="waves-effect waves-light btn-large grey darken-4 sp-primary-text">See more reviews</a></div>
    </div>
  </section>
  <!--videos--> 
  
  <!-- reviews-->
  <section id="home-customer-service" class="home-customer-service white-text scrollspy">
    <div class="container">
      <div class="row">
        <div class="col s12 m6 center-align">
          <h3>No. 1 for customer service</h3>
          <p>7 Gold Awards<sup>2</sup> with over 1,862 independent third-party reviews <br>
            96% of our customers recommend selling with us</p>
          <p> <i class="sprite sprite-all-agents-star"></i></p>
        </div>
        <div class="col s12 m6">
          <div class="">
            <div class="review-slider unslider-horizontal">
              <ul class="unslider-wrap unslider-carousel">
                <li class="unslider-clone">
                  <p>I was very happy with the professionalism both Ahmed and Alistair showed. The house sold within their promised one month timeline and sold at a good price.</p>
                  <p class="big">- Munir -</p>
                </li>
                <li>
                  <p>Having had my property on the market for 5 months with 2 high street estate agents with just one viewing, I decided to try Springbok Properties. Within weeks I had an offer and the property was sold.</p>
                  <p class="big">- David Ward -</p>
                </li>
                <li>
                  <p>I sold my property with Springbok as I wanted a really quick sale. I tried a couple of 'quick buy' companies, but they weren't all they cracked up to be, despite all that they tell you. Springbok are different. They rate amongst the most helpful, proactive companies I have ever dealt with. No chasing, no hassles.</p>
                  <p class="big">- Mark -</p>
                </li>
                <li>
                  <p>Excellent service, within two weeks had multiple viewers and a final high bidder. Were efficient, helpful and friendly. Definitely recommend....</p>
                  <p class="big">- Terry Fitz -</p>
                </li>
                <li>
                  <p>Springbok did what they said they would. Sold my property very quickly and attained more than I expected. A good job, well done.</p>
                  <p class="big">- David Davies -</p>
                </li>
                <li>
                  <p>Very pleased with the service from Springbok. Generated lots of viewers and enabled a prompt sale at a good price after being on the market for a long time with another agent.</p>
                  <p class="big">- H Family -</p>
                </li>
                <li>
                  <p>Many thanks to the professional staff, particularly Laura. The sale of the house went swiftly and without any stress to myself, as it was sold through a divorce settlement.</p>
                  <p class="big">- Sue -</p>
                </li>
                <li>
                  <p>I was really dreading the process of selling my home as another property nearby had taken months to sell, but the process was so quick and efficient and painless.</p>
                  <p class="big">- Mazzie B -</p>
                </li>
                <li>
                  <p>Just finalising our house through Springbok, must say we haven't had any of the drama we experienced with other estate agents and were able to process very quickly. Thank you!!...</p>
                  <p class="big">- K Bloor -</p>
                </li>
                <li>
                  <p>I was very happy with the professionalism both Ahmed and Alistair showed. The house sold within their promised one month timeline and sold at a good price.</p>
                  <p class="big">- Munir -</p>
                </li>
                <li>
                  <p>Having had my property on the market for 5 months with 2 high street estate agents with just one viewing, I decided to try Springbok Properties. Within weeks I had an offer and the property was sold.</p>
                  <p class="big">- David Ward -</p>
                </li>
              </ul>
            </div>
            <!--<a class="unslider-arrow next"><i class="sprite sprite-right-arrow-round"></i></a>
					<a class="unslider-arrow prev"><i class="sprite sprite-left-arrow-round"></i></a>--> 
          </div>
          <div class="center-align"> <br>
            <a href="/reviews"  class="waves-effect waves-light btn-large sp-primary sp-secondary-text">Read more reviews</a></div>
        </div>
      </div>
    </div>
  </section>
  <!-- reviews--> 
  
  <!-- recent sales-->
  <section id="home-recent-sale" class="home-recent-sale sp-primary scrollspy">
    <div class="container">
      <div class="row dflex alignitem">
        <div class="col s12 m4 valign-wrapper">
          <div class="map-text valign">
            <h2>WE'VE SOLD OVER <span class="counter">10,400</span> HOMES ALL OVER THE UK</h2>
            <p>More than 63% of these sold in less than 30 days<sup>4</sup></p>
            <a href="/recent-sales"  class="margin-top-20 waves-effect waves-light btn-large grey darken-4 sp-secondary sp-primary-text">See Our Recent Sales</a></div>
        </div>
        <div class="col s12 m8 hide-on-small-only right-align"> <img alt="map" src="images/map.png" width="550" height="557" class="responsive-img" style="opacity: 1;"></div>
      </div>
    </div>
  </section>
  <!-- recent sales--> 
  
  <!-- success numbers-->
  <section id="home-success-numbers" class="home-success-numbers grey lighten-4 center-align scrollspy">
    <div class="container">
      <h2>Springbok Success in Numbers</h2>
      <div class="masonry clearfix center-align">
        <div class="card-panel sp-primary sp-secondary-text valign-wrapper w-small h-small">
          <div class="valign">
            <div class=""> <i class="sprite sprite-calendar"></i>
              <div class="big spantag counter">63%</div>
            </div>
            <div>of sales (STC)<sup>1</sup> agreed <br>
              in less than 30 days<sup>4</sup></div>
          </div>
        </div>
        <div class="card-panel white sp-secondary-text valign-wrapper w-small h-small">
          <div class="valign">
            <div class="">
              <div class="big spantag counter">21</div>
              <i class="sprite sprite-badge"></i></div>
            <div>gold awards<sup>2</sup> for <br>
              customer service</div>
          </div>
        </div>
        <div class="card-panel sp-primary sp-secondary-text valign-wrapper w-large h-small">
          <div class="valign">
            <div class="">
              <div class="big spantag counter">96%</div>
              <i class="sprite sprite-people-large"></i></div>
            <div>of our customers <br>
              recommend us</div>
          </div>
        </div>
        <div class="card-panel white sp-secondary-text valign-wrapper w-small h-large">
          <div class="valign">
            <div>From over</div>
            <div class="">
              <div class="medium spantag counter">15,204</div>
            </div>
            <div>firms across the UK, <br>
              we are voted no. 1 <br>
              in customer service <br>
              <br>
            </div>
            <div><i class="sprite sprite-badge-first"></i></div>
          </div>
        </div>
        <div class="row masonry_row">
          <div class="card-panel white margin-0 sp-primary sp-secondary-text valign-wrapper custom-height-1">
            <div class="valign">
              <div class="">
                <div class="big less spantag counter">&pound;3,500,000</div>

              </div>
              <div>Our highest value property</div>
            </div>
          </div>
          <div class="card-panel sp-primary sp-secondary-text valign-wrapper custom-height-2">
            <div class="valign">
              <div class="">
                <div class="big spantag counter">3</div>
                out of
                <div class="big spantag counter">4</div>
              </div>
              <div><i class="sprite sprite-house"></i> </div>
              <div class="margin-top-10">sales (STC)<sup>1</sup> agreed in less <br>
                than 8 weeks<sup>4</sup></div>
            </div>
          </div>
        </div>
        <div class="row masonry_row">
          <div class="card-panel white margin-0 sp-primary sp-secondary-text valign-wrapper padding-top-30 padding-bottom-40 custom-height-3">
            <div class="valign">
              <div class=""> 
                <div class="big spantag counter">44%</div>
              </div>
              <div>of our clients switched to us from another estate agents</div>
            </div>
          </div>
          <div class="card-panel sp-primary sp-secondary-text valign-wrapper padding-top-30 padding-bottom-30 custom-height-4">
            <div class="valign">
              <div class=" margin-bottom-20">
                <div class="big spantag counter">65+</div>
                <i class="sprite sprite-people"></i> </div>
              <div>property experts working <br>
                at Springbok</div>
            </div>
          </div>
        </div>
        <div class="card-panel white sp-secondary-text valign-wrapper w-small h-large">
          <div class="valign">
            <div class=""> <i class="sprite sprite-thumb"></i><br>
              <div class="medium counter">2,800</div>
            </div>
            <div>independent customer <br>
              reviews &amp; counting</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- success numbers--> 
  
  <!-- house prices -->
  <section id="houseworth" class="houseprices scrollspy">
    <div class="container relative zindex">
      <div class="row">
        <div class="col s12 m12">
          <h2 class="center-align">How much is your house worth?</h2>
          <h4 class="center-align">Get a free house valuation now</h4>
        </div>
      </div>
      <div class="row center-align">
        <div class="col s12 animatedParent"> <img class="animated fadeInUpShort" src="images/graph.png" alt="" width="824" height="559" loading="lazy"> </div>
        <div class="col l8 offset-l2 m8 s12 offset-m2">
          <ul>
            <li>Get Land Registry data for sold house prices in your area</li>
            <li>Comparable data for what properties are selling for in and around your street</li>
            <li>Free to use tool with results in seconds</li>
          </ul>
          <div class="right mt-1"><img class="logo_poweredby" alt="" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIYAAABIAQMAAAAJVR8WAAAAA1BMVEX///+nxBvIAAAAAXRSTlMAQObYZgAAABNJREFUeNpjYBgFo2AUjIJRAAIABRAAAWH8LIUAAAAASUVORK5CYII="></div>
        </div>
        <div class="col l6 offset-l3 m8 s12 offset-m2">
          <div class="input-field input-group dflex margin-top-50">
          	<form name="frmSeller2" action="//simbacloud.co.uk/Users/forms/processForm.php"  class="wf_f2" method="post">
	            <div class="typeahead__container">
	                <div class="typeahead__field">
	                    <span class="typeahead__query">
	                        <input id="addressListX_f2" class="autocomplete" name="address" type="text" autocomplete="off" placeholder="Enter Postcode">
	                    </span>
	                </div>
	            </div>
	            <span class="get-free-report-btn"> <button type="submit" id="" class="btn-large waves-effect waves-light grey darken-4 sp-primary-text">Get Your Free Report Now</button> <span class="d-block center">Can't find your address? <u><a href="javascript:void(0)" id="send-to-top">Enter it here</a></u></span> </span>
	            <input name="name" value="unknown" type="hidden">
	            <input name="phone" value="0000000000" type="hidden"> 
	            <input name="email" value="noemail@noemail.com" type="hidden">
	            <input id="postcodeM_f2" name="postcode" type="hidden" class="z-depth-1">
	            <input type="hidden" name="_wf_salt" value="4a1c7dfcc6a97a20b0afec8bfdc65eb2" />
              <input type="hidden" name="_redirection" value="https://springbokproperties.co.uk/how-much-is-my-house-worth-tool" />
  					  <input type="hidden" name="_wf_name" value="Staging SP - GET FREE REPORT" />
  					  <input type="hidden" name="_wf_len" value="5" />
  					  <input type="hidden" name="_source" value="SP.co.uk - GET YOUR FREE REPORT NOW" />
  					  <input type="hidden" name="_page_url" value="springbokproperties.co.uk/home-straight" />
  					  <input type="hidden" name="_remote_ip" value="" />
  					  <input type="hidden" name="_srcChannel" value="web" />
              <input type="hidden" value="" name="notext">
              <input type="hidden" value="" name="searchterm">
	        </form>
	      </div>
        </div>
      </div>
    </div>
  </section>
  <!-- house prices --> 
  
  <!-- call-->
  <section class="call_section scrollspy">
    <div class="container">
      <div class="row">
        <div class="col s12 m6 offset-m3">
          <div class="container">
            <div class="row animatedParent">
              <h2 class="center"><strong>CALL US NOW FOR A FREE VALUATION</strong></h2>
              <h4 class="center">Remember, our valuation offer is completely free and doesn't commit you to anything at all. Take action now!</h4>
              <h1 class="center animated bounceIn">0800 068 7935</h1>
              <h4 class="center">Freephone - we're open 24/7</h4>
            </div>
          </div>
        </div>
        <div class="col s12 pl-0 center-align mt-1 animatedParent"> <a href="/contact-us"  class="waves-effect waves-light btn-large grey darken-4 center-align sp-primary-text animated bounceIn">Contact us</a> </div>
      </div>
    </div>
  </section>
  <!-- call--> 
  
  <!-- chat-->
  <section class="chat_section scrollspy">
    <div class="container-fluid">
      <div class="row dflex alignitem">
        <div class="col s12 m6 l6"><img src="images/chatsection_people.jpg" width="758" height="545" alt="" loading="lazy"></div>
        <div class="col s12 m5 l4">
          <h2><strong>Want to Chat?</strong></h2>
          <h4>Talk to our friendly experts who can help you make a better decision.</h4>
          <h2><strong>We can call you back</strong></h2>
          <form class="wf_1" action="//simbacloud.co.uk/Users/forms/processFormValid.php" method="post">
            <input placeholder="Your Name" id="name" name="name" type="text">
            <input placeholder="Your Number" id="phone" name="phone" type="text">
            <input type="hidden" name="postcode" value="M12 6JH">
            <input type="hidden" name="address" value="Declined">
            <input type="hidden" name="email" value="noemail@noemail.com">
            <input type="hidden" name="_wf_salt" value="2640cd3529b02a68b483c68a5a24c507">
            <input type="hidden" name="_redirection" value="">
            <input type="hidden" name="_wf_name" value="Springbok Properties - Short">
            <input type="hidden" name="_wf_len" value="5">
            <input type="hidden" value="SP.co.uk - Want To Chat" name="_source">
            <input type="hidden" value="springbokproperties.co.uk" name="_page_url">
            <input type="hidden" value="WEB" name="_srcChannel">
            <input type="hidden" value="" name="notext">
            <div class="animatedParent"><button type="submit" class="waves-effect waves-light btn-large grey darken-4 center-align sp-primary-text animated bounceIn">Call Me Back</button></div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- chat--> 
  
  <!--social icons-->
  <section class="ratings scrollspy padding-10">
    <div class="container">
      <div class="center">
        <h5><strong>Connect with us</strong></h5>
        <div class="social_icons animatedParent"> <a href="https://www.facebook.com/SpringbokProperties" target="_blank"><i class="sprite_social fb animated growIn slower"></i></a> <a href="https://www.instagram.com/springbokp/?hl=en" target="_blank"><i class="sprite_social insta animated growIn slower"></i></a> <a href="https://twitter.com/springbokprop" target="_blank"><i class="sprite_social twitter animated growIn slower"></i></a> 
          <!--<a href="#" target="_blank"><i class="sprite_social gplus animated growIn slower"></i></a>--> 
          <a href="https://in.linkedin.com/company/springbok-properties-llp" target="_blank"><i class="sprite_social linkdin animated growIn slower"></i></a> </div>
      </div>
    </div>
  </section>
		<?php
	}

?>
