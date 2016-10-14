<body>
<header class="s2014 header-transparent" id="header-main">
  <div class="container">
    <h1><a href="/" class="image-site-logo"><span>Crowdfunder</span></a></h1>
    <div class="mobile-menu-btn">
      Access Menu
    </div>
      <ul class="nav">
      <li class="raise primary-menu-item "><a class='js-raise-capital' href="/raise-capital">Get Funded</a></li>
      <li class="browse primary-menu-item  primary-menu-item-active"><a href="/deals">Browse Companies</a></li>
      <li class="discover primary-menu-item "><a href="/blog">Learn</a></li>
      <li class="primary-menu-item "><a href="/vc-index-fund">Our Fund</a></li>
              <li class="header-signup"><a href="#" class="button-linkedin js-linkedin-connect">Sign Up<img src="/img/icon-button-linkedin.png" alt=""></a></li>
        <li class="header-signin"><a href="#login-popup" id="nav-login">Log In</a></li>
          </ul>
          <div class="jquery-popup" id="header-login" title="Login To Your Account">
        <a href="#" class="ui-dialog-titlebar-close ui-corner-all close-login" role="button"><span class="ui-icon ui-icon-closethick">close</span></a>
        <div class="login-error"></div>
        <div class="form-container clearfix">
          <div class="form-user-social">
            <h3>Log in via Social</h3>
            <button class="button-social  js-linkedin-connect">Log in with LinkedIn <img src="/img/icon-button-linkedin.png" alt=""></button>
            <button class="button-social button-facebook fbRegister">Log in with Facebook <img src="/img/icon-button-facebook.png" alt=""></button>
            <form action="/user/signup" method="post" id="form">
              <span style="display: none">
                <input id="facebookId" type="text" name="FacebookId" />
                <input id="token" type="text" name="FacebookToken" />
              </span>
            </form><!-- end form -->
          </div><!-- end form-user-social -->
          <form action="/user/login" method="POST" class="form-user-login vform">
            <h3>Log in with email</h3>
            <label for="email" class="sr-only">E-Mail</label>
            <input type="text" name="email" id="email" class="required email" value="" placeholder="Email Address">
            <label for="password" class="sr-only">Password</label>
            <input type="password" name="password" id="password" class="required" value="" placeholder="Password">
            <a href="/user/forgotpassword" class="forgot-password">Forgot your password?</a>
            <input type="submit" id="login" name="login" value="Log In">
          </form><!-- end form-user-login -->
        </div><!-- end .form-container -->
        <p class="login-newuser">New to Crowdfunder? <a href="#" class="js-linkedin-connect create-account" data-href="/investor-verification">Create an account now.</a></p>
      </div><!-- end header-login -->
      </div>
  <div id="fb-root"></div>
</header>

<div class="s2014" id="browse">
      <header class="browse-mast">
      <div class="container">
        <div class="browse-mast-cta-container browse-mast-not-logged-in">
          <div class="browse-mast-cta">
            <h1>Venture Capital: Crowdsourced</h1>
            <h2>We get you into the deal at the same terms as leading VCs</h2>
            <div class="browse-not-logged-in-cta">
              <p>Join for free access to private VC-backed deals</p>
              <button class="js-linkedin-connect">Free Deal Access <img src="/img/icon-button-linkedin.png"></button>
            </div><!-- .browse-not-logged-in-cta -->
          </div><!-- .browse-mast-cta -->
        </div><!-- .browse-mast-cta-container -->
      </div><!-- .container -->
    </header><!-- .browse-mast -->
      <div class="browse-subheader clearfix">
    <div class="container">
      <div class="browse-sort-filter-list clearfix">
        
              <span class="no-filters">No Filters Applied</span>
            </div><!-- browse-sort-filter-list -->
            <ul class="browse-flags hidden clearfix ">
        <li class="flag-trending " data-results-class="results-trending" data-tab="trending">Trending</li>
        <li class="flag-all " data-tab="" data-results-class="results-all">All Deals</li>
        <li class="flag-funded " data-results-class="results-funded" data-tab="funded">Funded</li>
      </ul><!-- .browse-flags -->
          </div><!-- .container -->
  </div><!-- .browse-subheader -->
              <form action="" class="browse-filter-form container clearfix">
        <div class="browse-filter-container" id="browse-filter-tabs">
          <ul class="browse-tabs clearfix" data-selected-tab="">
            <li data-tab-id="1" class="browse-tabs-category">
              <a href="#browse-industries">Industries ▼</a>
              <div class="browse-filters clearfix" id="browse-industries">
                <div data-item-selector=".industry-item">
                  <ul class="clearfix">
                                        <li>
                      <label>
                        <input class="industry" type="checkbox" data-industry-id="12" > Advertising & Marketing                      </label>
                    </li>
                                      <li>
                      <label>
                        <input class="industry" type="checkbox" data-industry-id="6" > Arts, Fashion, & Media                      </label>
                    </li>
                                      <li>
                      <label>
                        <input class="industry" type="checkbox" data-industry-id="3" > Business to Business                      </label>
                    </li>
                                      <li>
                      <label>
                        <input class="industry" type="checkbox" data-industry-id="7" > Cleantech                      </label>
                    </li>
                                      <li>
                      <label>
                        <input class="industry" type="checkbox" data-industry-id="15" > Construction & Manufacturing                      </label>
                    </li>
                                      <li>
                      <label>
                        <input class="industry" type="checkbox" data-industry-id="5" > Consumer Products                      </label>
                    </li>
                                      <li>
                      <label>
                        <input class="industry" type="checkbox" data-industry-id="19" > Ed-Tech                      </label>
                    </li>
                                      <li>
                      <label>
                        <input class="industry" type="checkbox" data-industry-id="8" > Energy/Transport                      </label>
                    </li>
                                      <li>
                      <label>
                        <input class="industry" type="checkbox" data-industry-id="11" > Finance                      </label>
                    </li>
                                      <li>
                      <label>
                        <input class="industry" type="checkbox" data-industry-id="18" > FinTech                      </label>
                    </li>
                                      <li>
                      <label>
                        <input class="industry" type="checkbox" data-industry-id="10" > Food & Beverage                      </label>
                    </li>
                                      <li>
                      <label>
                        <input class="industry" type="checkbox" data-industry-id="13" > Healthcare                      </label>
                    </li>
                                      <li>
                      <label>
                        <input class="industry" type="checkbox" data-industry-id="14" > Hospitality                      </label>
                    </li>
                                      <li>
                      <label>
                        <input class="industry" type="checkbox" data-industry-id="17" > Impact Investments                      </label>
                    </li>
                                      <li>
                      <label>
                        <input class="industry" type="checkbox" data-industry-id="1" > Internet                      </label>
                    </li>
                                      <li>
                      <label>
                        <input class="industry" type="checkbox" data-industry-id="9" > Lifestyle                      </label>
                    </li>
                                      <li>
                      <label>
                        <input class="industry" type="checkbox" data-industry-id="4" > Mobile & Gaming                      </label>
                    </li>
                                      <li>
                      <label>
                        <input class="industry" type="checkbox" data-industry-id="16" > Real Estate                      </label>
                    </li>
                                      <li>
                      <label>
                        <input class="industry" type="checkbox" data-industry-id="2" > Technology                      </label>
                    </li>
                                    </ul>
                </div>
              </div><!-- .browse-industries -->
            </li>
            <li data-tab-id="0" class="browse-tabs-category">
              <a href="#browse-stage">Categories ▼</a>
              <div class="browse-filters clearfix" id="browse-stage">
                <div data-item-selector=".industry-item">
                  <ul class="clearfix">
                                        <li>
                      <label>
                        <input class="stage" type="checkbox" data-stage="1" > VC Index Fund                      </label>
                    </li>
                                        <li>
                      <label>
                        <input class="stage" type="checkbox" data-stage="2" > Pre-seed to Series A                      </label>
                    </li>
                                        <li>
                      <label>
                        <input class="stage" type="checkbox" data-stage="3" > Series B                      </label>
                    </li>
                                        <li>
                      <label>
                        <input class="stage" type="checkbox" data-stage="4" > Series C or Higher                      </label>
                    </li>
                                        <li>
                      <label>
                        <input class="stage" type="checkbox" data-stage="5" > Other                      </label>
                    </li>
                                        <li>
                      <label>
                        <input class="stage" type="checkbox" data-stage="6" > Funded                      </label>
                    </li>
                                      </ul>
                </div>
              </div><!-- .browse-stage -->
            </li>
            <li data-tab-id="2" id="locations-tab" class="browse-tabs-category">
              <a href="#browse-locations">Locations ▼</a>
              <div class="browse-filters clearfix" id="browse-locations">
                <div data-item-selector=".location-item">
                  <ul class="clearfix">
                  <li>
                  <label>
                    <input type="checkbox" name="static_location" data-location_id="2920653" > Los Angeles, CA
                  </label>
                  </li>
                  <li>
                  <label>
                    <input type="checkbox" class="static_location"   name="static_location" data-location_id="2922110" > San Francisco, CA
                  </label>
                  </li>
                  <li>
                  <label>
                    <input type="checkbox" class="static_location"  name="static_location" data-location_id="2990573" > New York, NY
                  </label>
                  </li>
                  <li>
                  <label>
                    <input type="checkbox" class="static_location"  name="static_location" data-location_id="3027896" > Houston, TX
                  </label>
                  </li>
                  <li>
                  <label>
                    <input type="checkbox" class="static_location"  name="static_location" data-location_id="2981988" > Las Vegas, NV
                  </label>
                  </li>
                  <li>
                  <label>
                    <input type="checkbox" class="static_location"  name="static_location" data-location_id="2929261" > Miami, FL
                  </label>
                  </li>
                  <li>
                  <label>
                    <input type="checkbox" class="static_location"  name="static_location" data-location_id="2938451" > Chicago, IL
                  </label>
                  </li>
                  <li>
                  <label>
                    <input type="checkbox" class="static_location"  name="static_location" data-location_id="351417" > Toronto, ONT, CA
                  </label>
                  </li>
                  </ul>
                  <footer class="clearfix">
                    <!-- <input type="text" placeholder="Enter Location..."> -->
                    <input type="text" locationId="" class="location-lookup" id="user_location" value="" placeholder="Search for a city..." autocomplete="off" data-submit='true'>
                    <input type="hidden" class="location_city">
                    <input type="hidden" class="location_state">
                    <input type="hidden" class="location_country">
                    <input type="hidden" name="location" id="location_id" class="location_id" value="">
                  </footer>
                </div><!-- .browse-filter-dropdown -->
              </div><!-- .browse-locations -->
            </li>
            <li data-tab-id="3" class="browse-tabs-category browse-tabs-deal-type">
              <a href="#browse-deal-type">Deal Type ▼</a>
              <div class="browse-filters clearfix" id="browse-deal-type">
                <div>
                  <ul class="clearfix">
                  <li>
                  <label>
                    <input class="deal_type" type="checkbox"  data-deal_type_id="1"> Equity
                  </label>
                  </li>
                  <li>
                  <label>
                    <input class="deal_type" type="checkbox"  data-deal_type_id="3"> Convertible Note
                  </label>
                  </li>
                  <li>
                  <label>
                    <input class="deal_type" type="checkbox"  data-deal_type_id="2"> Debt
                  </label>
                  </li>
                  <li>
                  <label>
                    <input class="deal_type" type="checkbox"  data-deal_type_id="7"> Revenue Share
                  </label>
                  </li>
                  </ul>
                </div>
              </div><!-- .browse-deal-type -->
            </li>
          </ul><!-- browse-tabs -->
        </div><!-- .browse-filter-container -->
      </form><!-- .browse-filter-form -->
        <header class="browse-search deal-search  hidden ">
    <div class="container">
            <!-- remove this condition to show search bar -->
                </div><!-- .container -->
  </header><!-- .browse-search -->
      <div class="container clearfix">
        <div class="browse-name-search">
            <input type="text" placeholder="Search by company name" maxlength="40" id="browse-name-search" value="" autocomplete="off" autofocus></input>
            <i class="fa fa-search" aria-hidden="true"></i>
        </div>
      <div class="browse-sort">
        <span>Sorted by Relevance ▼</span>
        <ul>
          <li><a class="sort_by " data-sort-by="relevance" href="#">Relevance</a></li>
          <li><a class="sort_by " href="#" data-sort-by="newest">Newest</a></li>
          <li><a class="sort_by  " href="#" data-sort-by="end_date">End Date</a></li>
          <li><a class="sort_by " href="#" data-sort-by="percent_raised">Percent Raised</a></li>
          <li><a class="sort_by " href="#" data-sort-by="amount_requested">Amount Requested</a></li>
        </ul>
      </div><!-- .browse-sort -->
    </div><!-- .browse-sort-container -->
        <div class="browse-results">
    <div class="container">
      <section id="results" data-page="1">
      
              


  <div class="results-tab results-global ">
    <!-- BACKEND NOTE: This should only show if a user is logged in but not accredited -->
      
<div class="card deal-card   " data-more-results="1" >
            <div class="card-image">
      <div class="card-image-cover"></div>
              <img src="<?php echo base_url(); ?>static/card.jpg" alt="Digitzs ">
          </div><!-- end .card-image -->
    <div class="card-body">
      <div class="card-title">DIGITZS </div>
      <div class="card-description">We make payments painless for apps, marketplaces and platforms.</div>
              <div class="card-details">
          <div class="card-amount clearfix">
            <div class="card-amount-raised"><em>Raised</em><strong>$5,818,504</strong> of $6.2M</div>
            <div class="card-percentage"><strong>94%</strong> of goal</div>
          </div><!-- end card-amount -->
          <div class="card-percentage-graph">
            <span class="card-percentage-background"></span>
            <span class="card-percentage-progress" style="width:
              94%;"></span>
            <span class="card-percentage-current" style="left:
              94%;">$</span>
          </div><!-- end .card-percentage-graph -->
        </div><!-- end .card-details -->
          </div><!-- end .card-body -->
    <div class="card-tagline  ">
      <span>
                  Over $1 Billion in Processing Commitments Secured for 2016              </span>
    </div><!-- end .card-tagline -->

    
   <a href="/digitzs/invest" data-href="/digitzs/invest" data-deal_id="41840" class="deal-card-link card-link">View Company</a>
       <div class="card-lead-investor ">
      <div class="card-lead-investor-image">
        <img src="https://s3.amazonaws.com/cf_stage/company/team_member_image/103298_702507.jpg?865586" alt="">
      </div><!-- .card-lead-investor-image -->
      <div class="card-lead-investor-name">
        <h2>Featured investor</h2>
        <p>Kevin Harrington</p>
      </div><!-- .card-lead-investor-name -->
    </div><!-- .card-lead-investor -->
    </div><!-- end card -->
    
    
<div class="card deal-card   card-featured" data-more-results="1" >
      <img src="<?php echo base_url();?>static/featured.png" class="featured-deal" alt="Featured">
                    <div class="card-image">
      <div class="card-image-cover"></div>
              <img src="<?php echo base_url(); ?>static/card.jpg" alt="Digitzs ">
          </div><!-- end .card-image -->
    <div class="card-body">
      <div class="card-title">BRIGHT WORLD ADVENTURES</div>
      <div class="card-description">A series of ground-breaking apps that excite children's imaginations and help prepare them for future success, one word at a time. </div>
              <div class="card-details">
          <div class="card-amount clearfix">
            <div class="card-amount-raised"><em>Raised</em><strong>$70,000</strong> of $800K</div>
            <div class="card-percentage"><strong>9%</strong> of goal</div>
          </div><!-- end card-amount -->
          <div class="card-percentage-graph">
            <span class="card-percentage-background"></span>
            <span class="card-percentage-progress" style="width:
              9%;"></span>
            <span class="card-percentage-current" style="left:
              9%;">$</span>
          </div><!-- end .card-percentage-graph -->
        </div><!-- end .card-details -->
          </div><!-- end .card-body -->
    <div class="card-tagline  ">
      <span>
                  Prepared to become the leader in ed-apps for children, a $2.3B market              </span>
    </div><!-- end .card-tagline -->

    
   <a href="/bright-world-ebooks/invest" data-href="/bright-world-ebooks/invest" data-deal_id="45144" class="deal-card-link card-link">View Company</a>
     </div><!-- end card -->
    

    
    
<div class="card deal-card  private-card " data-more-results="1" >
        <div class="private-card-image">
      <div class="private-card-image-cover">
        <div class="card-notice">
  <img src="<?php echo base_url(); ?>static/private.png" class="card-private-flag">
  <i class="fa fa-lock"></i>
  <p>Sign Up for free<br> to view this deal</p>
  <!-- <a href="/user/create?set_redirect_page=true&entity_type=deal&entity_id=#investor">Sign Up</a> -->
  <button class="button-social button-linkedin js-linkedin-connect" data-href="/crossfader/invest?set_redirect_page=true&entity_type=deal&entity_id=43255">Sign Up</button>
</div>        <a data-href="/crossfader/invest?set_redirect_page=true&entity_type=deal&entity_id=43255" data-deal_id="43255" class="js-linkedin-connect deal-card-link card-link js-private-deal-link"></a>
      </div>
       <img src="<?php echo base_url(); ?>static/blurred.jpg" alt="Digitzs ">
    </div><!-- end .card-image -->
        <div class="card-lead-investor card-lead-investor-private">
      <div class="card-lead-investor-image">
        <img src="https://com-prod.s3.amazonaws.com/site/company/logo/26611_794703.jpg" alt="">
      </div><!-- .card-lead-investor-image -->
      <div class="card-lead-investor-name">
        <h2>Featured investor</h2>
        <p>Google Ventures</p>
      </div><!-- .card-lead-investor-name -->
    </div><!-- .card-lead-investor -->
    </div><!-- end card -->
    </div>
  </section>

 
      
        <div class="pagination-container clearfix">
          <ul class="pagination" data-pages="9">
              <li class="arrow unavailable"><a href="" class="  previous-page" data-page="0"> Previous</a></li>
                          <li class="pagination-list  active " id="pageNumber1"><a class="changePage  disabled " href="?page=1" data-page="1">1</a></li>
                          <li class="unavailable hidden ellipsis-start"><a href="">&hellip;</a></li>
                                      <li class="pagination-list " id="pageNumber2"><a class="changePage " href="?page=2" data-page="2">2</a></li>
                                      <li class="pagination-list " id="pageNumber3"><a class="changePage " href="?page=3" data-page="3">3</a></li>           
             <li class="arrow "><a class="changePage next-page" href="" data-page="2">Next</a></li>
          </ul>
        </div><!-- end .pagination-container -->
                      
    </div><!-- .container -->
  </div><!-- .browse-results -->
  <span class="overlay"></span>
</div><!-- #browse -->
