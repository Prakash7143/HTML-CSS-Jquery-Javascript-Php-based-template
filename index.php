<?php 
include_once('header.php');
?>
<style>
.affix {
    top: 100;
    width: 100%;
    z-index: 9999 !important;
  }
  .center { margin: auto;
  margin-top:8%;
  width: 60%;
  padding: 10px;
}
	
</style>
<div class="container-fluid first-container">

	<div class="row">
    	<div class="banner_top">

        	<div class="center">
        		<h1  class="head_text st1">IT Service desk that's actually simple</h1>
            	<p  class="head_text st2">Modernize IT and other business functions with a refreshingly easy-to-use,
                	 simple-to-configure IT service desk solution in the cloud.</p>
                 <center><a href="#"><button class="btn our_btn">SIGNUP FOR FREE</button></a>
                 <a href="#"><button class="btn our_btn2">REQUEST A DEMO</button></a></center>
	        </div>

        	<img src="svgs/home.svg" class="img-fluid" style="height:500px;">
        </div>
        <div class="gartner text-center">
        	<div class="in_gart">
            	<h3 class="gart_h">Gartner Peer Insights Customers' Choice</h3>
                <p class="gart_p">Freshservice has yet again been voted the customers' choice for ITSM software.<br> The most usable service desk software is now the most loved too!</p>
            </div>
        </div>
        
        <div class="block_descs" style="margin:2% 8%">
            <h2 class="head_text st1">Everything you need for IT support</h2>
        	<div class="row">
                <div class="col-sm-4">
                	<img src="svgs/complete-itil-package.svg" class="awards img-fluid">
                    <h4 class="head_text">Easy to use and set up</h4>
                    <p class="sub_text">Freshservice's modern and intuitive UI requires minimal to no training, and is customizable to IT and non-IT needs.</p>
                </div>
                <div class="col-sm-4">
                	<img src="svgs/connect-easily-across-functions.svg" class="awards img-fluid">
                    <h4 class="head_text">Easy to use and set up</h4>
                    <p class="sub_text">Freshservice's modern and intuitive UI requires minimal to no training, and is customizable to IT and non-IT needs.</p>
                </div>
                <div class="col-sm-4">
                	<img src="svgs/empower-users-with-knowledge.svg" class="awards img-fluid">
                    <h4 class="head_text">Easy to use and set up</h4>
                    <p class="sub_text">Freshservice's modern and intuitive UI requires minimal to no training, and is customizable to IT and non-IT needs.</p>
                </div>
            </div>
            <div class="row" style="margin:2% 15%;">
            	<div class="col-sm-6">
                	<img src="svgs/information-at-your-fingertips.svg" class="awards img-fluid">
                    <h4 class="head_text">Easy to use and set up</h4>
                    <p class="sub_text">Freshservice's modern and intuitive UI requires minimal to no training, and is customizable to IT and non-IT needs.</p>
                </div>
                
                <div class="col-sm-6">
                	<img src="svgs/work-smarter-on-the-go.svg" class="awards img-fluid">
                    <h4 class="head_text">Easy to use and set up</h4>
                    <p class="sub_text">Freshservice's modern and intuitive UI requires minimal to no training, and is customizable to IT and non-IT needs.</p>
                </div>
            </div>
            
        </div>
        
        <div class="col-sm-12 second-head">
        	<center><h3 class="font-weight-bold">Loved by companies who love their employees</h3></center>
        	<center><img class="img-fluid comps" src="images/logos-desktop.png"></center><br>
            <center><h3 class="font-weight-bold third-head">Why Stellar?</h3></center>
            <div class="row second-row">
            		<div class="col-sm-4 srcns">
                        <div class="side_secs" id="ct1">
                            <a  href=""  >Section One</a>
                        </div>
                        <div class="side_secs" id="ct2">
                            <a class="" href="" >Section Two</a>
                        </div>
                        <div class="side_secs" id="ct3">
                            <a class="" href=""  >Section Three</a>
                        </div>
                        <div class="side_secs"  id="ct4">
                            <a class="" href="" >Section Four</a>
                        </div>
                        
                    </div>
                    <div class="col-sm-8 scrs">
                        <div class="img_scr_brdr">
                            <div style="">
                            <!--<span style="margin:20% 20%; z-index:999" data-toggle="tooltip" data-placement="top" title="Hooray!">1</span>-->
                                <img id="img1" src="images/simplified-accounting.png" class="img-fluid hover_imgs" 
                                style="display:block; transition:.5s; z-index-99;">
                            </div>
                            <img id="img2" src="images/instafyle.png" class="img-fluid hover_imgs" 
                                    style="display:none; transition:.5s; z-index-99;">
                            <img id="img3" src="images/simplified-accounting.png" class="img-fluid hover_imgs" 
                                style="display:none; transition:.5s; z-index-99;">
                            <img id="img4" src="images/instafyle.png" class="img-fluid hover_imgs" 
                                style="display:none; transition:.5s; z-index-99;">
                        </div>
                    </div>
               
            </div><!-- inner row-->
        </div>
    </div><!--- first row ends --->
    

</div><!-- container ends --->
 <?php include_once('footer.php'); ?>

<script type="text/javascript">
	$(document).ready(function(e) {
        $('[data-toggle="tooltip"]').tooltip();   
        $('body').on('scroll', function(){
			$('.navbar').css('box-shadow' , '2px 1px');
			});
            checkPosition();	
    });
    function checkPosition() {
		if (window.matchMedia('(max-width: 920px)').matches) {
		   $('#img2, #img3, #img4').css('display', 'block');
		   $('#c7').removeClass('col-sm-7');
		   $('#c4').removeClass('col-sm-4');
		   $('#img1').appendTo('#ct1');
		   $('#img2').appendTo('#ct2');
		   $('#img3').appendTo('#ct3');
           $('#img4').appendTo('#ct4');
		} else {
			showSliders();
		}
	}
	
	
	function showSliders(){
		$('#ct1, #ct2, #ct3, #ct4').css('cursor', 'pointer');
        $('#ct2').on('click', function(){
			$('#img2').css('display', 'block').css('transition', '.5s');
			$('#img1, #img3,  #img4').css('display', 'none');
			$('#ct2').addClass('cts2');
			$('#ct1').removeClass('cts1');
			$('#ct3').removeClass('cts3');
			});
		$('#ct1').on('click', function(){
			$('#img1').css('display', 'block');
			$('#img2, #img3, #img4').css('display', 'none');
			$('#ct2').removeClass('cts2');
			$('#ct1').addClass('cts1');
			$('#ct3').removeClass('cts3');
			});
		$('#ct3').on('click', function(){
			$('#img3').css('display', 'block');
			$('#img1, #img2, #img4').css('display', 'none');
			$('#ct2').removeClass('cts2');
			$('#ct1').removeClass('cts1');
			$('#ct3').addClass('cts3');
			});
        $('#ct4').on('click', function(){
			$('#img4').css('display', 'block');
			$('#img1, #img2, #img3').css('display', 'none');
			$('#ct2').removeClass('cts2');
			$('#ct1').removeClass('cts1');
			$('#ct3').addClass('cts3');
			});
			
	}
</script>