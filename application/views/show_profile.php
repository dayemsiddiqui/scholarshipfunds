
   

    <!-- Page Content -->
    <div class="android-content mdl-layout__content">

  
 
                 <div class="mdl-grid">
         
                    <div class="mdl-cell mdl-cell--3-col">
                    <div class="android-card-container">
            <div class="mdl-card mdl-shadow--3dp">
            	<div class="mdl-card__media">
                <img src="<?php echo base_url();?>uploads/<?php echo $id . '.jpg';?>" onerror="this.onerror=null;this.src='https://t3.ftcdn.net/jpg/01/06/07/16/240_F_106071621_UwCztl7yyMbVNSMijfuYyZrzbtmoxJPH.jpg';">
              </div>
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Your Profile</h4>
              </div>
              <div class="mdl-card__supporting-text">
                    
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="<?php echo base_url();?>index.php/login/register">
                   View Active Scholarships
                 </a>
              </div>
            </div></div>
                    
                    </div>

                     <div class="mdl-cell mdl-cell--9-col">
                    <div class="android-card-container">
            <div class="mdl-card mdl-shadow--3dp demo-card-wide">
            
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Edit Profile</h4>
              </div>
              <div class="mdl-card__supporting-text">
                    <form method="post" action="<?php echo base_url();?>index.php/student/update" class="col s12">
			      <div class="row">
			        <div class="mdl-textfield mdl-js-textfield">
			          <input  type="text" name="name" class="mdl-textfield__input" value="<?php echo $name;?>">
			          <label class="mdl-textfield__label" >Name</label>
			        </div>
			        <div class="mdl-textfield mdl-js-textfield">
			          <input id="last_name" type="text" name="fathername" class="mdl-textfield__input" value="<?php echo $fathername;?>">
			          <label class="mdl-textfield__label" for="last_name">Father's Name</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="mdl-textfield mdl-js-textfield">
			          <input id="password" type="text" class="mdl-textfield__input" name="city" value="<?php echo $city;?>">
			          <label class="mdl-textfield__label" for="password">City</label>
			        </div>
			      
			        <div class="mdl-textfield mdl-js-textfield">
			          <input id="password" type="text" class="mdl-textfield__input" name="country" value="<?php echo $country;?>">
			          <label class="mdl-textfield__label" for="password">Country</label>
			        </div>
			      </div>
			      <div class="row">
			        <div class="mdl-textfield mdl-js-textfield">
			          <input id="password" type="text" class="mdl-textfield__input" name="address" value="<?php echo $address;?>">
			          <label class="mdl-textfield__label" for="password">Address</label>
			        </div>
			      </div>
			      
			      <div class="row">
			        <div class="mdl-textfield mdl-js-textfield">
			          <input id="email" disabled="disabled" type="email" name="email" class="mdl-textfield__input" value="<?php echo $email;?>">
			          <label class="mdl-textfield__label" for="email">Email</label>
			        </div>
			      </div>
			    
        <div class="card-action">
          <a href="#"></a>
          <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" value="Save"/>
        </div>
        </form>
              </div>
              <div class="mdl-card__actions">
            <!--      <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="<?php echo base_url();?>index.php/login/register">
                   View Active Scholarships
                 </a> -->
              </div>
            </div></div>
                    
                    </div>

                  </div>
                  
                 
      
   



     





