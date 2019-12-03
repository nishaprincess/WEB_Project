<div class="col-md-12" style="background-color: #EDEDED;" align="center">




	<p style="text-align: center;margin-top: 20px; margin-bottom: 20px;font-size: 28px; text-shadow:3px 3px 6px #D29004;font-weight: bold; text-transform: uppercase;">ACTIVITIES</p>

	 <img src="images/border.jpg" width="1260px" height="15px" alt="">

  
             <?php
			           

			               $query24="SELECT  *  from activities";

				           if($res24=mysql_query($query24))
				           {

				               while($row24=mysql_fetch_assoc($res24)){


                           

				                 
				                       echo '
			                                 
			                                

											<div class="col-md-3" style="margin-top:120px;margin-bottom:70px;;padding:50px;">

										        
															
													<div class="activity_div">

													    <a href="javascript:void(0)" style="text-decoration:none;" class="activity_detail" act_id="'.$row24['id'].'" >
													
										               
	                                                       <p class="activity_name" style="color:#fff;font-size:22px;text-align: center; text-justify: inter-word; ">'

	                                                         
	                                                        .$row24['aname'].



	                                                      '</p>
										              

										              </a>   


												   </div>

												


											</div>

			                               


				                       ';


				                 }      
				                    
				            }


			           


			     ?>
    


</div>