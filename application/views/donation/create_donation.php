
   

    <!-- Page Content -->
    <div class="android-content mdl-layout__content">

  
 
                 <div class="mdl-grid">
                  <div class="mdl-cell mdl-cell--2-col"></div>
                    <div class="mdl-cell mdl-cell--8-col">
                    <div class="android-card-container">
            <div class="mdl-card mdl-shadow--3dp demo-card-wide">

              <div class="light-red mdl-card__title ">
                 <h4 class="mdl-card__title-text" style="color:white;">Make Donation</h4>
              </div>
              <div class="mdl-card__supporting-text">
                   <form method="post" action="<?php echo base_url();?>index.php/donation/insert" enctype="multipart/form-data">
                   <div class="mdl-grid">
                   <div class="mdl-cell mdl-cell--6-col">
                      <div class="mdl-textfield mdl-js-textfield">
                        <input type="text" name="display_name" class="mdl-textfield__input">
                        <label class="mdl-textfield__label">Display Name</label>
                      </div>
                   </div>

                   <div class="mdl-cell mdl-cell--6-col">
                      <div class="mdl-textfield mdl-js-textfield">
                        <input type="number" name="amount" class="mdl-textfield__input">
                        <label class="mdl-textfield__label">Donation Amount (in USD)</label>
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
                          <input type="text" maxlength="120" name="phone" class="mdl-textfield__input">
                          <label class="mdl-textfield__label">Phone Number</label>
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
                      <div class="mdl-textfield mdl-js-textfield">
                        <input type="text" name="address" class="mdl-textfield__input">
                        <label class="mdl-textfield__label">Address</label>
                      </div>
                   </div>
                   

                   <div class="mdl-cell mdl-cell--6-col">
                      <div class="mdl-textfield mdl-js-textfield">
                        <input type="text" name="zip_code" class="mdl-textfield__input">
                        <label class="mdl-textfield__label">Zip Code</label>
                        <input type="text" name="id_scholarship" class="hide" value="<?php echo $id_scholarship;?>">
                      </div>
                   </div>
                   </div>
                        
                       
                     


                        
            <!--             <label>Upload An Image:</label>
                        <input type="file" name="dp" /> -->
                        <input type='submit' class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" value="Confirm Donation">
                        </form>  
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="<?php echo base_url();?>index.php/welcome">
                   Find Scholarships
                 </a>
              </div>
            </div></div>
                    
                    </div>
                      <div class="mdl-cell mdl-cell--2-col"></div>
                  </div>
                  
                 
      
   



     

