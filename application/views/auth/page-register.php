
   

    <!-- Page Content -->
    <div class="android-content mdl-layout__content">

  
 
                 <div class="mdl-grid">
                  <div class="mdl-cell mdl-cell--4-col"></div>
                    <div class="mdl-cell mdl-cell--8-col">
                    <div class="android-card-container">
            <div class="mdl-card mdl-shadow--3dp">

              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text"> Register A New Account</h4>
              </div>
              <div class="mdl-card__supporting-text">
                   <form class="col s12" method="post" action="<?php echo base_url();?>index.php/login/create_account" enctype="multipart/form-data">
                              <div class="mdl-textfield mdl-js-textfield">
                                <div class="col s12">
                                  <input id="first_name" name="username" type="text" class="mdl-textfield__input">
                                  <label class="mdl-textfield__label" for="first_name">Username</label>
                                </div>
                              </div>
                              
                              <div class="mdl-textfield mdl-js-textfield">
                                <div class="col s12">
                                  <input id="password" type="password"  name="password" class="mdl-textfield__input">
                                  <label class="mdl-textfield__label" for="password">Password</label>
                                </div>
                                
                              </div>

                                <div class="mdl-textfield mdl-js-textfield">
                                <div class="col s12">
                                  <input id="first_name" type="email" name="email" class="mdl-textfield__input">
                                  <label class="mdl-textfield__label" for="first_name">Email</label>
                                </div>
                              </div>

                                <div class="mdl-textfield mdl-js-textfield">
                                    <label>Select Your Account Type:</label>
                                <div class="col s12">
                                    <?php
                                    print_select('account_type', -1, all_account_type(), '');
                                    ?> 
                                </div>
                              </div>

                               <div class="mdl-grid">
                          <div class="mdl-cell mdl-cell--12-col">
                              <div class="mdl-textfield mdl-js-textfield wide-text" >
                              <input type="file" name="dp" class="mdl-textfield__input" />
                             <label class="mdl-textfield__label" for="textarea1"></label>
                              </div> 
                          </div>
                        </div>
                            


                              <div class="row">
                                  <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" value="Sign Up"/>
                                  
                                
                              </div>
                              
                            </form>
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="<?php echo base_url();?>index.php/login/register">
                   Dont have an account?
                 </a>
              </div>
            </div></div>
                    
                    </div>
                  </div>
                  
                 
      
   



     

   
