
   

    <!-- Page Content -->
    <div class="android-content mdl-layout__content">

  
 
                 <div class="mdl-grid">
         
                    <div class="mdl-cell mdl-cell--3-col">
                    <div class="android-card-container">
            <div class="mdl-card mdl-shadow--3dp">
            	<div class="mdl-card__media">
                <img src="<?php echo base_url();?>uploads/scholarship/<?php echo $result[0]->id_scholarship . '.jpg';?>" onerror="this.onerror=null;this.src='https://t3.ftcdn.net/jpg/01/06/07/16/240_F_106071621_UwCztl7yyMbVNSMijfuYyZrzbtmoxJPH.jpg';">
              </div>
              <div class="mdl-card__title">
                 <h2 class="mdl-card__title-text"><?php echo $result[0]->name;?></h2>
              </div>
              <div class="mdl-card__supporting-text">
              <div>
              	<h2 style="padding:0; margin:0;">$<?php echo $achieved[0]->total;?></h2>
              	<h6 style="color:grey; margin-top:-3px; margin-left:5px;">
					      raised of<b> $<?php echo $result[0]->amount;?></b> goal
			    </h6>
			    <!-- Simple MDL Progress Bar -->
				<div id="p1" class="mdl-progress mdl-js-progress"></div>
              </div>

              <div class="mdl-grid">
                <!-- Backers Section -->
    			<div class="mdl-cell mdl-cell--4-col amount-raised backers ">
    				<h2>11</h2>
    				<p>supporters</p>
    			</div>
                <!-- /Backers Section -->
                <!-- Days Count Section -->
                    <div class="mdl-cell mdl-cell--5-col amount-raised ">
                        <h2>24</h2>
                        <p>days to go</p>
                    </div>
                                <!-- /Days Count Section -->
            </div>
                   
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" id="donate-button" href="<?php echo base_url();?>index.php/donation/create/<?php echo $result[0]->id_scholarship;?>">
                   Donate
                 </a>
            

                 <a  style="float:right;" id="likes-icon" class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="<?php echo base_url();?>index.php/login/register">

             
                   <span >
                   <i class="fa fa-heart-o " style="color:red;"  aria-hidden="true"></i> 5
                 </span>
                 </a>

                <div class="mdl-tooltip" for="likes-icon">
				Shows the number of likes
				</div>
                  	
              </div>
            </div></div>
             			
                    
                    </div>

                     <div class="mdl-cell mdl-cell--9-col">
                    <div class="android-card-container innerpad">
            <div class="mdl-card mdl-shadow--3dp demo-card-wide">
            
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Student's Story</h4>
              </div>
              <div class="mdl-card__supporting-text">
                   <?php echo $result[0]->story;?>
                   
              </div>
              <div class="mdl-card__actions">
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="#">
                   Like
                 </a>
                 <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="#">
                   Share
                 </a> 
              </div>
            </div></div>

            <div class="android-card-container">
            <div class="mdl-card mdl-shadow--3dp demo-card-wide ">
            
              <div class="mdl-card__title">
                 <h4 class="mdl-card__title-text">Reviews Section</h4>
              </div>
              <div class="mdl-card__supporting-text">
                   
						<ul class="demo-list-three mdl-list">

						<?php
			        	foreach ($reviews as $r) {

			        		echo "<li class='mdl-list__item mdl-list__item--three-line'>
						    <span class='mdl-list__item-primary-content'>
						      <i class='material-icons mdl-list__item-avatar'>person</i>
						      <span>$r->username</span>
						      <span class='mdl-list__item-text-body'>
						        $r->review
						        
						      </span>
						    </span>
						    <span class='mdl-list__item-secondary-content'>
						      <a class='mdl-list__item-secondary-action' href='#'><i class='material-icons'>star</i></a>
						    </span>
						  </li>";
			        		
			        	}
			        ?>
						  
						  
						  
						</ul>
						   <h5 class="mdl-typography--text-uppercase">
			                   Your Review
			                 </h5>

						<form action="<?php echo base_url();?>index.php/scholarship/add_review" method="post">
				  <div class="mdl-textfield mdl-js-textfield" style="width:100%;">
				  	<input type="text" name="id_scholarship" value="<?php echo $result[0]->id_scholarship;?>" style="display:none;">
				    <textarea class="mdl-textfield__input wide-text" name="review"  type="text" cols="5000" rows= "3" id="sample5" ></textarea>
				    <label class="mdl-textfield__label" for="sample5">Leave A Review...</label>
				  </div>
				  <input type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" value="Post Review"/>
				</form>

              </div>
              <div class="mdl-card__supporting-text">
              
             	<!-- Floating Multiline Textfield -->
				

              </div>
            </div></div>
                    
                    </div>

                  </div>
                  
                 
      
   

<script>
  document.querySelector('#p1').addEventListener('mdl-componentupgraded', function() {
    this.MaterialProgress.setProgress(<?php echo $achieved[0]->total;?>/<?php echo $result[0]->amount;?> * 100);
  });


  
</script>

     






