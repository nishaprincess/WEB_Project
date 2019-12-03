<?php


  
function readMoreFunction2($story_desc) {  
//Number of characters to show  

$chars = 100;  
$story_desc = substr($story_desc,0,$chars);  
$story_desc = substr($story_desc,0,strrpos($story_desc,' '));  
 
return $story_desc;  

} 


			               $query24="SELECT  *  from up_events";

				           if($res24=mysql_query($query24))
				           {
                              
                              $n=mysql_num_rows($res24);



                              

                              if($n>0)
                              {

                              	  echo '<div class="col-md-12" style="background-color: #EDEDED">

                                	  <p style="text-align: center;margin-top: 30px; margin-bottom: 20px;font-size: 28px;text-shadow:3px 3px 6px #D29004;font-weight: bold; text-transform: uppercase;">Upcoming events</p>

                                       <img src="images/border.jpg" width="1260px" height="15px" style="margin-left:23px;margin-top:6px;margin-bottom:60px;" alt="">

                              	       
                                       



                              	  ';


	                                  if($n==1)
		                              {


		                              	  $row=mysql_fetch_assoc($res24);
		                               
                                          echo '

			                                    
                                               <div align="center" class="col-md-12">
			                                      	
			                                       <div style="margin-bottom:30px;padding:10px;" class="card_up">
									 
													  <div class="" style="padding:10px;">

													    <h4><b>'.$row['ename'].'</b></h4> 
													  

													     <p>'.readMoreFunction2($row['edesc']).'....</p>
                                                          
                                                         <a href="#" align:center class="btn btn-small btn-tertiary show_total_up_user" style="color: #fff;background: #533185; border: .0625rem solid #9177b9;" evt_up_id="'.$row['id'].'">Read More</a> 


													  </div>


													</div>

			                                    </div>


			                              	 ';


		                              }
		                              elseif($n==2)
		                              {
		                              	  

		                              	while ($row=mysql_fetch_assoc($res24)) {
		                              	  	# code...


		                              	  	echo '

			                                    
                                               <div align="center" class="col-md-6">
			                                      	
			                                       <div style="margin-bottom:30px;padding:10px;" class="card_up">
									 
													  <div class="" style="padding:10px;">

													    <h4><b>'.$row['ename'].'</b></h4> 
													  

													     <p>'.readMoreFunction2($row['edesc']).'....</p>
                                                          
                                                         <a href="#" align:center class="btn btn-small btn-tertiary show_total_up_user" style="color: #fff;background: #533185; border: .0625rem solid #9177b9;" evt_up_id="'.$row['id'].'">Read More</a> 


													  </div>


													</div>

			                                    </div>


			                              	 ';




		                              	  }
		                              }
		                              else
		                              {
		                              	  while ($row=mysql_fetch_assoc($res24)) {
		                              	  	# code...


		                              	  	echo '

			                                    
                                               <div align="center" class="col-md-4">
			                                      	
			                                       <div style="margin-bottom:30px;padding:10px;" class="card_up">
									 
													  <div class="" style="padding:10px;">

													    <h4><b>'.$row['ename'].'</b></h4> 
													  

													     <p>'.readMoreFunction2($row['edesc']).'....</p>
                                                          
                                                         <a href="#" align:center class="btn btn-small btn-tertiary show_total_up_user" style="color: #fff;background: #533185; border: .0625rem solid #9177b9;" evt_up_id="'.$row['id'].'">Read More</a> 


													  </div>


													</div>

			                                    </div>


			                              	 ';




		                              	  }
		                              }
		                             



		                          echo ' </div>';    
                              	
                              }
                              
    
				                    
				           }




?>