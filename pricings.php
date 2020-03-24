<?php 
include_once('header.php');
?>
<style>
.center { margin: auto;
  padding-top:28%;
  width: 60%;
  padding: 10px;
}
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}

/* Rounded sliders */
.slider.round {
  border-radius: 34px;
}

.slider.round:before {
  border-radius: 50%;
}
.dekho{display:none;}
.mr { font-weight:bolder; color:#08c7fb; }
.ansShow { display: block; border:1px solid #FFF; margin:5% 0; border-radius: 10px; background:rgba(8,199,251, .09) }
</style>

<div class="container-fluid first-container">
  <div class="it_intro_bnr">
    <div class="center">
      <h1  class="white_head_text st1">21-day FREE trial. No credit card required.</h1>
      <p  class="white_head_text2">Free to get started, affordable as you grow</p>
      <center><a href="#"><button class="btn our_btn">SIGNUP FOR FREE</button></a></center>
    </div>
  </div>
    <div class="pricing_top">
            <div class="zig_zags">
                <div class="ms_switch"><h4 style="display:flex"><span id="mon"> MONTHLY </span><span> <label class="switch">
                        <input id="cbox" type="checkbox" ><span class="slider round"></span></label></span> <span id="yr">YEARLY</span></h4>
                </div>

                <div class="price_tags">
                    <div class="row">
                        <div class="col-sm-3 col-md-3 prices">
                            <img src="svgs/blossom.svg" style="width:100%;">
                            <div style="text-align:center; height:60px; padding:10px 20px; line-height:.9em; background-color: rgba(8,199,251,.1);">
                                <h5 style="font-size:17px; font-weight:bold; opacity:.85; ">BLOSSOM</h5>
                                <p style="font-size:12px; opacity:.85; ">Perfect for small teams</p>
                            </div>
                            <div style="text-align:center; background:#fff;">
                                <h1 class="rs">Rs.999</h1>
                                <p class="bill">/agent/month billed yearly</p>
                                <a href=""><button class="btn our_btn">TRY FOR FREE</button></a>
                            </div>
                            <div style="background:#fff; text-align:left; padding:10px 20px;">
                            <p style="font-size:12px; opacity:.85; "> Incident Management</p>
                            <p style="font-size:12px; opacity:.85; "> Knowledge Base </p>
                            <p style="font-size:12px; opacity:.85; "> Self Service Portal</p>
                            <p style="font-size:12px; opacity:.85; "> Automations</p>
                            <p style="font-size:12px; opacity:.85; "> Standard Reports</p>
                            <p style="font-size:12px; opacity:.85; "> Marketplace </p>
                            <p style="font-size:12px; opacity:.85; "> Unlimited End Users</p>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-3 prices">
                            <img src="svgs/garden.svg" style="width:100%;">
                            <div style="text-align:center; height:60px; padding:10px 20px; line-height:.9em; background-color: rgba(8,199,251,.1);">
                                <h5 style="font-size:17px; font-weight:bold; opacity:.85; ">CHERRY</h5>
                                <p style="font-size:12px; opacity:.85; ">Perfect for small teams</p>
                            </div>
                            <div style="text-align:center; background:#fff;">
                                <h1 class="rs">Rs.999</h1>
                                <p class="bill">/agent/month billed yearly</p>
                                <a href=""><button class="btn our_btn">TRY FOR FREE</button></a>
                            </div>
                            <div style="background:#fff; text-align:left; padding:10px 20px;">
                            <p style="font-size:12px; opacity:.85; "> Incident Management</p>
                            <p style="font-size:12px; opacity:.85; "> Knowledge Base </p>
                            <p style="font-size:12px; opacity:.85; "> Self Service Portal</p>
                            <p style="font-size:12px; opacity:.85; "> Automations</p>
                            <p style="font-size:12px; opacity:.85; "> Standard Reports</p>
                            <p style="font-size:12px; opacity:.85; "> Marketplace </p>
                            <p style="font-size:12px; opacity:.85; "> Unlimited End Users</p>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-3 prices">
                            <img src="svgs/windmill.svg" style="width:100%;">
                            <div style="text-align:center; height:60px; padding:10px 20px; line-height:.9em; background-color: rgba(8,199,251,.1);">
                                <h5 style="font-size:17px; font-weight:bold; opacity:.85; ">MARRYGOLD</h5>
                                <p style="font-size:12px; opacity:.85; ">Perfect for small teams</p>
                            </div>
                            <div style="text-align:center; background:#fff;">
                                <h1 class="rs">Rs.999</h1>
                                <p class="bill">/agent/month billed yearly</p>
                                <a href=""><button class="btn our_btn">TRY FOR FREE</button></a>
                            </div>
                            <div style="background:#fff; text-align:left; padding:10px 20px;">
                            <p style="font-size:12px; opacity:.85; "> Incident Management</p>
                            <p style="font-size:12px; opacity:.85; "> Knowledge Base </p>
                            <p style="font-size:12px; opacity:.85; "> Self Service Portal</p>
                            <p style="font-size:12px; opacity:.85; "> Automations</p>
                            <p style="font-size:12px; opacity:.85; "> Standard Reports</p>
                            <p style="font-size:12px; opacity:.85; "> Marketplace </p>
                            <p style="font-size:12px; opacity:.85; "> Unlimited End Users</p>
                            </div>
                        </div>
                        <div class="col-sm-3 col-md-3 prices">
                            <img src="svgs/forest.svg" style="width:100%;">
                            <div style="text-align:center; height:60px; padding:10px 20px; line-height:.9em; background-color: rgba(8,199,251,.1);">
                                <h5 style="font-size:17px; font-weight:bold; opacity:.85; ">ROSE</h5>
                                <p style="font-size:12px; opacity:.85; ">Perfect for small teams</p>
                            </div>
                            <div style="text-align:center; background:#fff;">
                                <h1 class="rs">Rs.999</h1>
                                <p class="bill">/agent/month billed yearly</p>
                                <a href=""><button class="btn our_btn">TRY FOR FREE</button></a>
                            </div>
                            <div style="background:#fff; text-align:left; padding:10px 20px;">
                            <p style="font-size:12px; opacity:.85; "> Incident Management</p>
                            <p style="font-size:12px; opacity:.85; "> Knowledge Base </p>
                            <p style="font-size:12px; opacity:.85; "> Self Service Portal</p>
                            <p style="font-size:12px; opacity:.85; "> Automations</p>
                            <p style="font-size:12px; opacity:.85; "> Standard Reports</p>
                            <p style="font-size:12px; opacity:.85; "> Marketplace </p>
                            <p style="font-size:12px; opacity:.85; "> Unlimited End Users</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <div class="day_pass">
      <div class="row">
        <div class="col-sm-6">
          <h1 class="dp_head">Day Passes</h1>
          <p class="dp_sb">Get extra support help for a product launch or other spike</p>
          <p class="dp_sb">Need extra support help for a product launch or other spike? Day Passes make it easy for you to 
            add extra agents temporarily when you need them. Just add them as occasional agents, buy a few Day Passes,
            and let them use a day pass for each day they need to access your support.
          </p>
        </div>
        <div class="col-sm-6" >
          <img src="svgs/day-pass.svg" class="day_img img-fluid">
        </div>
        <div class="clearfix"></div>
      </div>
      <div class="faqs">
      <h1 class="dp_head">Frequently Asked Questions</h1>
        <div class="row faqs_row">
          
          <div class="col-sm-6 qs">
            <p class="quests-f" id="q1" onclick="showAns(id)" >What are managed assets? &nbsp;<span id="m1" class="plus">+</span><br>
              
            </p>
              <div class="ans" id="a1">
                <span class="hitex">Any asset discovered by the Probe or the Agent is considered a managed asset. 
                  The same goes for assets that are added using other methods and are later updated using the Discovery Agent.</span>
              </div> 
                                
              
            <p class="quests" id="q2" onclick="showAns(id)">What are managed assets? &nbsp;<span id="m2" class="plus">+</span>
              <div class="ans" id="a2">
                <span class="hitex">Any asset discovered by the Probe or the Agent is considered a managed asset. 
                  The same goes for assets that are added using other methods and are later updated using the Discovery Agent.</span>
              </div>
            </p>
            <p class="quests" id="q3" onclick="showAns(id)">What are managed assets? &nbsp;<span id="m3" class="plus">+</span>
              <div class="ans" id="a3">
                <span class="hitex">Any asset discovered by the Probe or the Agent is considered a managed asset. 
                  The same goes for assets that are added using other methods and are later updated using the Discovery Agent.</span>
              </div> 
            </p>
            <p class="quests-f" id="q4" onclick="showAns(id)">What are managed assets? &nbsp;<span id="m4" class="plus">+</span>
              <div class="ans" id="a4">
                <span class="hitex">Any asset discovered by the Probe or the Agent is considered a managed asset. 
                  The same goes for assets that are added using other methods and are later updated using the Discovery Agent.</span>
              </div> 
            </p>
          </div>
          <div class="col-sm-6 qs" >
            <p class="quests-f" id="q5" onclick="showAns(id)">What are managed assets? &nbsp;<span id="m5" class="plus">+</span>
              <div class="ans" id="a5">
                <span class="hitex">Any asset discovered by the Probe or the Agent is considered a managed asset. 
                  The same goes for assets that are added using other methods and are later updated using the Discovery Agent.</span>
              </div> 
            </p>
            <p class="quests" id="q6" onclick="showAns(id)">What are managed assets? &nbsp;<span id="m6" class="plus">+</span>
              <div class="ans" id="a6">
                <span class="hitex">Any asset discovered by the Probe or the Agent is considered a managed asset. 
                  The same goes for assets that are added using other methods and are later updated using the Discovery Agent.</span>
              </div> 
            </p>
            <p class="quests" id="q7" onclick="showAns(id)">What are managed assets? &nbsp;<span id="m7" class="plus">+</span>
              <div class="ans" id="a7">
                <span class="hitex">Any asset discovered by the Probe or the Agent is considered a managed asset. 
                  The same goes for assets that are added using other methods and are later updated using the Discovery Agent.</span>
              </div> 
            </p>
            <p class="quests-f" id="q8" onclick="showAns(id)">What are managed assets? &nbsp;<span id="m8" class="plus">+</span>
              <div class="ans" id="a8">
                <span class="hitex">Any asset discovered by the Probe or the Agent is considered a managed asset. 
                  The same goes for assets that are added using other methods and are later updated using the Discovery Agent.</span>
              </div>
            </p>
          </div>
        </div>
      </div>
    </div><!------- day pass ends ------>

</div>
<?php
 include_once('footer.php');
?>

<script type="text/javascript">
$(document).ready(function(e) {
  $('#mon').addClass('mr');

  $("#cbox").click(function(){
    var x = document.getElementById("yr");
        if (x.innerHTML === "yr") {
          $('#mon').removeClass('mr');
    } else {
          $('#yr').toggleClass('mr');
          $('#mon').toggleClass('mr');
          
    }
    
  });
  //showAns(); 
  
});
function showAns(id){
    if(id == 'q1'){
      $('#a1').toggleClass('ansShow');
     // $('#a2, #a3, #a4, #a5, #a6, #a7, #a8').toggleClass('dekho');
      var x = document.getElementById("m1");
      if (x.innerHTML === "+") {
        x.innerHTML = "_";
      } else {
        x.innerHTML = "+";
      } 
      
    }
    else if(id == 'q2'){
      $('#a2').toggleClass('ansShow');
      var x = document.getElementById("m2");
      if (x.innerHTML === "+") {
        x.innerHTML = "_";
      } else {
        x.innerHTML = "+";
      } 
    }
    else if(id == 'q3'){
      $('#a3').toggleClass('ansShow');
      var x = document.getElementById("m3");
      if (x.innerHTML === "+") {
        x.innerHTML = "_";
      } else {
        x.innerHTML = "+";
      } 
    }
    else if(id == 'q4'){
      $('#a4').toggleClass('ansShow');
      var x = document.getElementById("m4");
      if (x.innerHTML === "+") {
        x.innerHTML = "_";
      } else {
        x.innerHTML = "+";
      } 
    }
    else if(id == 'q5'){
      $('#a5').toggleClass('ansShow');
      var x = document.getElementById("m5");
      if (x.innerHTML === "+") {
        x.innerHTML = "_";
      } else {
        x.innerHTML = "+";
      } 
    }
    else if(id == 'q6'){
      $('#a6').toggleClass('ansShow');
      var x = document.getElementById("m6");
      if (x.innerHTML === "+") {
        x.innerHTML = "_";
      } else {
        x.innerHTML = "+";
      } 
    }
    else if(id == 'q7'){
      $('#a7').toggleClass('ansShow');
      var x = document.getElementById("m7");
      if (x.innerHTML === "+") {
        x.innerHTML = "_";
      } else {
        x.innerHTML = "+";
      } 
    }
    else if(id == 'q8'){
      $('#a8').toggleClass('ansShow');
      var x = document.getElementById("m8");
      if (x.innerHTML === "+") {
        x.innerHTML = "_";
      } else {
        x.innerHTML = "+";
      } 
    }
    
  }
</script>