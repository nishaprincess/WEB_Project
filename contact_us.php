
<div class="col-md-12" style="background-image:url('images/2281.jpg');" id="contact_show_">

	<div class="col-md-12">
		
      <p style="text-shadow:3px 3px 6px #000;font-weight: bold;text-align: center;font-size: 28px;margin-top:50px; text-transform: uppercase;margin-bottom: 50px;">Contact Us</p>

	</div>
	
	<div class="col-md-8" style="background-color: #000B; padding: 10px;margin-bottom: 30px;">


		<p style="color: #fff;text-align: center;font-size: 28px;margin-top:30px; text-transform: uppercase;margin-bottom: 20px;">Leave a quesion</p>


	<form>
		

	   <div class="form-group col-md-6">

             <input id="rfirstname" class="form-control" type="text" name="rfirstname"  placeholder="Enter Name" required="">
             <span class="error_form" id="rfirstname_error"></span>
       </div> 	

        <div class="col-md-6" style="">
      
          <input type="email" class="form-control" id="remail" name="remail" placeholder="Enter Email" required="">
          <span class="error_form" id="remail_error"></span>
        </div>

       <div class="form-group col-md-12">

		
		  <textarea class="form-control" rows="4" id="about_desc" style="margin-top: 10px" placeholder="Enter Question"></textarea>
		  <span class="error_form" id="about_d_error"></span>

       </div>


       <div align="center" class="col-md-12" style="">
        

          <button type="submit" id="contact_btn_clk"  class="btn btn-lg btn-success " style="margin-top:10px; margin-bottom: 10px ;text-align: center; ">Send</button>


        </div>


    </form>


	</div>

	<div class="col-md-4" style="margin-bottom: 20px;">
		
        <p style="margin-left: 40px; color: #000; text-align: center;font-weight:bold; color:#841211">Contact us and we'll get back to you within 24 hours.</p>


        <?php

           
           $query24="SELECT  place from location";

           if($res24=mysql_query($query24))
           {

             $row24=mysql_fetch_assoc($res24);



             
                 
                      echo '

                          <p style="margin-left: 46px; color: #000;"><span class="glyphicon glyphicon-map-marker" aria-hidden="true" style="margin-right:5px;"></span>'.$row24['place'].'</p>

                      ';
                    
            }



            $query25="SELECT  * from email_phone";

           if($res25=mysql_query($query25))
           {

             $row25=mysql_fetch_assoc($res25);



             
                 
                      echo '

                          <p style="margin-left: 46px; color: #000;"><span class="glyphicon glyphicon-phone" aria-hidden="true" style="margin-right:5px;"></span>'.$row25['phone'].'</p>

                      ';


                       echo '

                          <p style="margin-left: 46px; color: #000;"><span class="glyphicon glyphicon-envelope" aria-hidden="true" style="margin-right:5px;"></span>'.$row25['email'].'</p>

                      ';
                    
            }


             


        ?>

       
       <p style="margin-left: 45px;margin-top: 18px; color: #000;font-weight:bold; color:#841211">Follow Us</p>

     
   


      <?php

        
           $query24="SELECT  fblink from follow";

           if($res24=mysql_query($query24))
           {

           	 $n1=mysql_num_rows($res24);

           	 $row24=mysql_fetch_assoc($res24);

           	 $fb=$row24['fblink'];

           	 if($n1==1 && $fb!=' ')
           	 {

           	         

                 
                      echo '

                         

                             <a  target="_blank" href="'.$row24['fblink'].'" data-toggle="tooltip" data-placement="top" title="Facebook">


                                <img src="logo/facebook.png"  style="height: 40px;width: 40px;margin-left: 46px" alt="Facebook">

                             

                             </a>

                        

                      ';

           	 }

             
                    
            }




           $query25="SELECT * from follow";

           if($res25=mysql_query($query25))
           {

           	 $n2=mysql_num_rows($res25);

           	 $row25=mysql_fetch_assoc($res25);

           	 $tw=$row25['tlink'];


           	// echo $n2;

           	 if($tw!=' ' && $n2==1)
           	 {

           	         


           	        
                      echo '

                       <a target="_blank" href="'.$row25['tlink'].'" data-toggle="tooltip" data-placement="top" title="Twitter" class="tw"><img src="logo/twitter.png" style="height: 40px;width: 40px;margin-left: 10px" alt="Twitter"></a>

                      ';

           	 }

             
                    
            }



            $query26="SELECT * from follow";

           if($res26=mysql_query($query26))
           {

           	 $n3=mysql_num_rows($res26);

           	 $row26=mysql_fetch_assoc($res26);

           	 $yl=$row26['ylink'];


           	// echo $n2;

           	 if($yl!=' ' && $n3==1)
           	 {

           	         


           	        
                      echo '

                        <a target="_blank" href="'.$row26['ylink'].'" data-toggle="tooltip" data-placement="top" title="YouTube" class="yt"> <img src="logo/youtube.png" style="height: 40px;width: 40px;margin-left: 10px" alt="You Tube"></a>

                      ';

           	 }

             
                    
            }




            $query27="SELECT * from follow";

           if($res27=mysql_query($query27))
           {

           	 $n4=mysql_num_rows($res27);

           	 $row27=mysql_fetch_assoc($res27);

           	 $in=$row27['glink'];


           	// echo $n2;

           	 if($in!=' ' && $n4==1)
           	 {

           	         


           	        
                      echo '

                          <a target="_blank" href="'.$row27['glink'].'" data-toggle="tooltip" data-placement="top" title="GooglePlus" class="gp"><img src="logo/googleplus.png" style="height: 40px;width: 40px;margin-left: 10px" alt="Google Plus"></a>

                      ';

           	 }

             
                    
            }




      




      ?>


 



 
       

        


	</div>


</div>