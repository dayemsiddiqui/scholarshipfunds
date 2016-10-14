
   

    <!-- Page Content -->
    <div class="android-content mdl-layout__content">

  
 
                 <div class="mdl-grid">
                  <div class="mdl-cell mdl-cell--2-col"></div>
                    <div class="mdl-cell mdl-cell--8-col">
                    <div class="android-card-container">
            <div class="mdl-card mdl-shadow--3dp demo-card-wide">

              <div class="light-red mdl-card__title ">
                 <h4 class="mdl-card__title-text" style="color:white;">Create Scholarship</h4>
              </div>
              <div class="mdl-card__supporting-text">
                   <form method="post" action="<?php echo base_url();?>index.php/scholarship/insert" enctype="multipart/form-data">
                   <div class="mdl-grid">
                   <div class="mdl-cell mdl-cell--6-col">
                      <div class="mdl-textfield mdl-js-textfield">
                        <input type="text" name="title" class="mdl-textfield__input">
                        <label class="mdl-textfield__label">Title</label>
                      </div>
                   </div>

                   <div class="mdl-cell mdl-cell--6-col">
                      <div class="mdl-textfield mdl-js-textfield">
                        <input type="number" name="amount" class="mdl-textfield__input">
                        <label class="mdl-textfield__label">Goal (in USD)</label>
                      </div>
                   </div>
                   
                    
                   </div>

                   <div class="mdl-grid">
                   <div class="mdl-cell mdl-cell--6-col">
                      <div class="mdl-textfield mdl-js-textfield">
                          <input type="text" name="name" class="mdl-textfield__input">
                          <label class="mdl-textfield__label">Name</label>
                      </div>
                   </div>

                   <div class="mdl-cell mdl-cell--6-col">
                      <div class="mdl-textfield mdl-js-textfield">
                          <input type="text" maxlength="120" name="description" class="mdl-textfield__input">
                          <label class="mdl-textfield__label">Short Description (Max 120 characters)</label>
                      </div>
                   </div>

                   
                   </div>
                   <div class="mdl-grid">
                   <div class="mdl-cell mdl-cell--6-col">
                      <div class="mdl-textfield mdl-js-textfield">
                        <input type="text" name="city" class="mdl-textfield__input">
                        <label class="mdl-textfield__label">City</label>
                      </div>
                   </div>
                   

                   <div class="mdl-cell mdl-cell--6-col">
                      <div class="mdl-textfield mdl-js-textfield">
                        <input type="text" name="country" class="mdl-textfield__input">
                        <label class="mdl-textfield__label">Country</label>
                      </div>
                   </div>
                   </div>
                        <div class="mdl-grid">
                          <div class="mdl-cell mdl-cell--6-col">
                             <div class="mdl-textfield mdl-js-textfield" >
                              <label>Beneficiary</label>
                              <?php
                              print_select('beneficiary', -1, all_beneficiary(), '');
                              ?>
                                  
                              </div>
                          </div>
                          <div  class="mdl-cell mdl-cell--6-col">
                            <div class="mdl-textfield mdl-js-textfield" >
                            <input id="first_name" type="text" name="institution" class="mdl-textfield__input">
                            <label class="mdl-textfield__label" for="first_name">Institution Name</label>
                            </div>                            
                          </div>
                        </div>
                       
                        <div class="mdl-grid">
                          <div class="mdl-cell mdl-cell--12-col">
                              <div class="mdl-textfield mdl-js-textfield wide-text" >
                              <textarea name="story" id="textarea1" class="mdl-textfield__input wide-text" cols="5000", rows="5"></textarea>
                             <label class="mdl-textfield__label" for="textarea1">Your Story:</label>
                              </div> 
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

                        
                        
            <!--             <label>Upload An Image:</label>
                        <input type="file" name="dp" /> -->
                        <input type='submit' class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" value="Submit Scholarship">
                        </form>  
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="<?php echo base_url();?>index.php/login/register">
                   Find Scholarships
                 </a>
              </div>
            </div></div>
                    
                    </div>
                      <div class="mdl-cell mdl-cell--2-col"></div>
                  </div>
                  
                 
      
   



     

