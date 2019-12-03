

<div class="col-md-12" style="padding: 20px;height: 60vh;background-color: #EDEDED">


	<p style="text-align: center;margin-top: 30px;text-shadow:3px 3px 6px #D29004; margin-bottom: 20px;font-size: 28px; text-transform: uppercase;font-weight: bold;">Club Leaders</p>

	<img src="images/border.jpg" width="1260px" height="15px" style="margin-left:23px;margin-top:6px;margin-bottom:30px;" alt="">

	<div class="col-md-4" style="margin-top: 100px;">
		



           <div class="hexagon" style="margin-top:30px ">

				<div class="hexagon-inner">
					
			       <div class="hexagon-inner-in">

			         
			         <?php
			           

			               $query24="SELECT  *  from messeges where designation='PRESIDENT'";

				           if($res24=mysql_query($query24))
				           {

				             $row24=mysql_fetch_assoc($res24);




				                 
				                       echo '
			                                 
			                                 <img src="images/'.$row24['image'].'" style="width:300px; height:200px;" alt="">
			                               


				                       ';
				                    
				            }


			           


			          ?>



			       </div>



				</div>
				
			 </div>


	</div>
	<div class="col-md-4" style="margin-top: 130px;">
		
			  <div class="hexagon">

				<div class="hexagon-inner">
					
			       <div class="hexagon-inner-in">

			         
			         <?php
			           

			               $query24="SELECT  *  from messeges where designation='GENERAL SECRETARY'";

				           if($res24=mysql_query($query24))
				           {

				             $row24=mysql_fetch_assoc($res24);




				                 
				                       echo '
			                                 
			                                 <img src="images/'.$row24['image'].'" style="width:300px; height:200px;" alt="">


				                       ';
				                    
				            }


			           


			          ?>



			       </div>



				</div>
				
			 </div>



	</div>
	<div class="col-md-4" style="margin-top: 130px;">
		
          <div class="hexagon">

				<div class="hexagon-inner">
					
			       <div class="hexagon-inner-in">

			         
			         <?php
			           

			               $query24="SELECT  *  from messeges where designation='VICE PRESIDENT (PUBLICATION)'";

				           if($res24=mysql_query($query24))
				           {

				             $row24=mysql_fetch_assoc($res24);




				                 
				                       echo '
			                                 
			                                 <img src="images/'.$row24['image'].'" style="width:300px; height:200px;" alt="">


				                       ';
				                    
				            }


			           


			          ?>



			       </div>



				</div>
				
			 </div>


	</div>
	





</div>


<div class="col-md-12" style="background-color: #EDEDED;padding: 20px;">

	
  <div class="col-md-4">
  	
    

    <?php
			           

			           $query25="SELECT  *  from messeges where designation='PRESIDENT'";

				           if($res25=mysql_query($query25))
				           {

				             $row25=mysql_fetch_assoc($res25);




				                 
				                       echo '
			                                 
			                                <p style="text-align: center;margin-top: 0px; margin-bottom: 0px;font-size: 22px; color: #000;text-transform: uppercase;">'.$row25['personname'].'</p>
			                                <p style="text-align: center;margin-top: 0px; margin-bottom: 0px;font-size: 18px; color: #000;text-transform: uppercase;">'.$row25['designation'].'</p>


				                       ';
				                    
				            }


			           


	 ?>


  </div>
  <div class="col-md-4">
  	
   
   <?php
			           

			           $query25="SELECT  *  from messeges where designation='GENERAL SECRETARY'";

				           if($res25=mysql_query($query25))
				           {

				             $row25=mysql_fetch_assoc($res25);




				                 
				                       echo '
			                                 
			                                <p style="text-align: center;margin-top: 0px; margin-bottom: 0px;font-size: 22px; color: #000;text-transform: uppercase;">'.$row25['personname'].'</p>

			                                <p style="text-align: center;margin-top: 0px; margin-bottom: 0px;font-size: 18px; color: #000;text-transform: uppercase;">'.$row25['designation'].'</p>


				                       ';
				                    
				            }


			           


	 ?>


  </div>
  <div class="col-md-4">
  	
    <?php
			           

			           $query25="SELECT  *  from messeges where designation='VICE PRESIDENT (PUBLICATION)'";

				           if($res25=mysql_query($query25))
				           {

				             $row25=mysql_fetch_assoc($res25);




				                 
				                       echo '
			                                 
			                                <p style="text-align: center;margin-top: 0px; margin-bottom: 0px;font-size: 22px; color: #000;text-transform: uppercase;">'.$row25['personname'].'</p>
			                                <p style="text-align: center;margin-top: 0px; margin-bottom: 0px;font-size: 18px; color: #000;text-transform: uppercase;">'.$row25['designation'].'</p>


				                       ';
				                    
				            }


			           


	 ?>


  </div>



</div>