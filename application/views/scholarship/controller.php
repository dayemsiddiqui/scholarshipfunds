   <!-- Javascript Transcompilation Google Traceur -->
    <!-- <script src="https://google.github.io/traceur-compiler/bin/traceur.js"></script>
    <script src="https://google.github.io/traceur-compiler/bin/BrowserSystem.js"></script>
    <script src="https://google.github.io/traceur-compiler/src/bootstrap.js"></script> -->

<script type="text/javascript">
	
var ScholarshipBox = function() {
  this.scholarshipName    = 'Default Scholarship';
  this.description = 'Description Goes Here';
  this.provider        = 'Provider Name';
  this.imageSrc = 'http://placehold.it/700x450';
  this.learnMore = '#';
  this.template = '';
  this.frame = document.getElementById("scholarships");
  this.initialize();
}

//Initialize Fetches The Data from the webserver
ScholarshipBox.prototype.initialize = function() {
	theUrl = '<?php echo base_url();?>index.php/scholarship/get_scholarships';
    var xmlHttp = new XMLHttpRequest();
    xmlHttp.parent = this; 
    xmlHttp.onreadystatechange = function() { 
        if (xmlHttp.readyState == 4 && xmlHttp.status == 200){
        	var data_arr = JSON.parse(xmlHttp.responseText);
        	data_arr.forEach(function(obj){
        	xmlHttp.parent.setData(obj);
        	xmlHttp.parent.template = xmlHttp.parent.template + xmlHttp.parent.generateTemplate();
        	});
        	xmlHttp.parent.render();
        }    
    }
    xmlHttp.open("GET", theUrl, true); // true for asynchronous 
    xmlHttp.send(null);
}

ScholarshipBox.prototype.setData  = function(dataObject){
	this.scholarshipName = dataObject.title;
	this.description = dataObject.description;
  this.imageSrc = '<?php echo base_url();?>uploads/scholarship/' +  dataObject.s_id + '.jpg';
  //this.imageSrc = 'https://t3.ftcdn.net/jpg/01/06/07/16/240_F_106071621_UwCztl7yyMbVNSMijfuYyZrzbtmoxJPH.jpg';
	this.learnMore = '<?php echo base_url();?>index.php/scholarship/view_details/' +  dataObject.s_id;
}

/*Generate Template Function generates the html template based
  on the fetched data	
*/
ScholarshipBox.prototype.generateTemplate = function(){
        return `<div class="mdl-cell mdl-cell--3-col mdl-cell--4-col-tablet mdl-cell--4-col-phone mdl-card mdl-shadow--3dp">
                  <div class="mdl-card__media">
                    <img class='simg' src="`+ this.imageSrc +`" onerror="this.onerror=null;this.src='https://t3.ftcdn.net/jpg/01/06/07/16/240_F_106071621_UwCztl7yyMbVNSMijfuYyZrzbtmoxJPH.jpg';">
                  </div>
                  <div class="mdl-card__title">
                     <h4 class="mdl-card__title-text">`+ this.scholarshipName +`</h4>
                  </div>
                  <div class="mdl-card__supporting-text">
                    <span class="mdl-typography--font-light mdl-typography--subhead">`+ this.description +`</span>
                  </div>
                  <div class="mdl-card__actions">
                     <a class="android-link mdl-button mdl-js-button mdl-typography--text-uppercase" href="`+ this.learnMore +`">
                       Learn More
                       <i class="material-icons">chevron_right</i>
                     </a>
                  </div>
                </div>`;
 }

//This function renders the html on the view
ScholarshipBox.prototype.render = function(){
	// console.log(this.frame);
	this.frame.innerHTML =  this.template; 
}


var Filter = function(heading, options){
  this.heading = heading;
  this.options = options;

  this.renderOptions = ``;

  for (var i = 0; i < this.options.length; i++) {
    this.renderOptions = this.renderOptions + `<li>
                        <input type="checkbox" class="filled-in" id="`+this.options[i]+`" />
                        <label for="`+ this.options[i] +`">`+ this.options[i] +`</label>      
                        </li>`; 
  }

  this.template = `<div class="col-lg-4">
                <ul>
                <h5>`+ this.heading +`</h5>
                `+
                  this.renderOptions
                +`
            </ul>
            </div>`;
}


var displayFilters = function(options){
  this.frame = document.getElementById("displayFilters");
  this.template = ``;
  for (var i = 0; i < options.length; i++) {
   this.template = this.template + `<div class="chip">
                        `+ options[i] +`
                    </div>`; 
  }

  this.frame.innerHTML = this.template;
}

var ApplyFilter = function(){
  this.filterCount = 0;
  this.frame = document.getElementById("filterOptions");
  this.template = ``;
  this.checkedElements = [];
}

ApplyFilter.prototype.addFilter = function(filter){
  this.filterCount = this.filterCount + 1;
  this.template = this.template + filter.template;
}

ApplyFilter.prototype.render = function(){
  // console.log(this.frame);
  this.frame.innerHTML =  this.template;
  var reference = this;
  $('input.filled-in').click(function(){
    let item = $(this).attr('id');
    let index = reference.checkedElements.indexOf(item);
    if(index == -1){
    reference.checkedElements.push(item);
    }else{
      reference.checkedElements.splice(index,1);
    }
    displayFilters(reference.checkedElements);
  });
}

// renderFilters = new ApplyFilter();
// renderFilters.addFilter(new Filter('Location', ['Karachi', 'Lahore', 'Islamabad']));
// renderFilters.addFilter(new Filter('I am awesome', ['Moiz', 'Asad', 'Bitch']));
// renderFilters.addFilter(new Filter('I am awesome', ['Regal', 'Techno', 'CloudKibo']));

// renderFilters.render();
new ScholarshipBox();

</script>