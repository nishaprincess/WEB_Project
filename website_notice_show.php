<?php

mysql_connect("localhost","root","");

mysql_select_db("literatute_club");

session_start();

/*if(session_status() == PHP_SESSION_ACTIVE)
{
  $id=$_SESSION['id'];
}
*/
                  


$directoryURI =basename($_SERVER['SCRIPT_NAME']);




?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
     <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
   
    <title>Notice</title>

   <!--Css Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet">
    <link href="css/activities.css" rel="stylesheet">
    <link href="css/upcoming.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <style type="text/css">



   
      
    
   .main_container2{

      background-color:#b9d1f7; 
      padding: 30px;
      color:#3E1D6F;
      margin-right:10px; 
      margin-top: 10px;
      height:300px;
      transition-duration: 700ms;


   }    


   .main_container2:hover{

       background-color:#3E1D6F;
       color:#fff;


    }

    #lnk_color:hover{

      color: #fff;
      
    }


   .error_form{

      font-size: 14px;

      color: #f95616;

     }



    </style>


  </head>
  <body>

 <!-- Navbar Starts--> 
 

  <div class="wrap-header">
    
    <div class="wrap">

      <div class="header">

        <div class="header-left-side">
        
          <ul class="nav">
            
            <li class="left_"><a class="left_a home_click_navbar" id="home_show_" href="#">Home</a></li>
                <li class="left_" ><a class="left_a notice_click_navbar" id="" href="#">Notice</a></li>
            
          
                    
                    <?php

                      mysql_select_db("literatute_club");

                         $q="SELECT * FROM event_link";

                $data=mysql_query($q);

               if(mysql_num_rows($data)>0)
               {
                  

                  while ($row=mysql_fetch_assoc($data)) {
                    # code...
                     echo '<li class=" left_" ><a class="left_a" target="_blank" href="'.$row['link'].'">'.$row['ename'].'</a></li>';

                  }
               }
              

                      ?>
              
          

          </ul>

        </div>  

        <a href="/" class="logo" title="MIST LITERATURE CLUB">

                <img src="logo/aunkur_logo.png" height="130" width="190" alt="MIST LITERATURE CLUB">

            </a>

        <div class="header-right-side">

          <ul class="nav">
            
          
              <li class="right_"><a class="right_a" id="video_show" href="#">Story of LCC</a></li>
              <li class="right_ dropdown-toggle" id="dropdownMenu3" data-toggle="dropdown"><a class="right_a" href="javascript:void(0)">Previous Events<span class="caret" style="margin-bottom: 5px;"></span></a></li>
                    
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu3" style="margin-top: -50px; margin-left: 670px;" >
                      
                        <?php

                      mysql_select_db("literatute_club");

                         $q="SELECT * FROM prev_events";

                $data=mysql_query($q);

               if(mysql_num_rows($data)>0)
               {
                  

                  while ($row=mysql_fetch_assoc($data)) {
                    # code...
                     echo "<li><a href='$row[link]' target='_blank'>$row[ename]</a></li>";

                  }
               }
               else
               {
                     echo "<li><a href='#'>No Event</a></li>";
               }


                      ?>



                    </ul>
                     

              <li class="right_"><a class="right_a" href="#" id="contact_us_sl">Contact</a></li>
            


          </ul>

         </div>


      </div>

    </div>


  </div>  


 <!-- Navbar Ends--> 
     

<div class="box-banner">

    <div class="col-md-12 club" >
      
      <p style="font-family: 'Lato';color: #fff;text-align: center;font-size: 40px;margin-top: 90px">MIST Literature & Cultural Club</p>
     
    </div>


    <div class="col-md-12 club" >
      
      <p style="font-family: 'Lato';color: #fff;text-align: center;font-size: 40px;margin-top: 40px;text-transform: uppercase;">Club Notices</p>
     
    </div>

</div>


<div class="col-md-12" style="background-color:#EDEDED;padding: 20px;">

    <div class="col-md-1"></div> 
    <div class="col-md-10" style="margin-top: 10px; margin-bottom: 10px;" id="notice__" >
      

        

    <div id="notice_content">
      





    </div>




    </div> 
    <div class="col-md-1"></div> 

 </div>   

      <p></br></p>
      <p></br></p>
      <p></br></p>


 
  <!-- Activity part--> 

   <?php include 'activities_show.php';?>


  <!-- Upcoming event part--> 

   <?php include 'upcoming_event_show.php';?>


   <!-- Messages part--> 

   <?php include 'messages_show.php';?>


 <!-- Contact part--> 

   <?php include 'contact_us.php';?>
   
   <!-- Footer part--> 

   <?php include 'common_footer.php';?>
    

   <!-- Modal  -->

  <div class="modal fade" id="myModal_notice_show" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #0f2954">
          <button type="button" class="close" data-dismiss="modal"  id="" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" style="color: #fff; text-align: center;">Notice Detail</h4>
        </div>
        <div class="modal-body" id="total_notice_show">
         
          

        </div>
        <div class="modal-footer">
         
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


    <!-- Modal  -->

  <div class="modal fade" id="total_act_showf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: blue">
          <button type="button" class="close" data-dismiss="modal"  id="" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" style="color: #fff;text-align: center;">Activity Detail</h4>
        </div>
        <div class="modal-body" id="total_act_show" >
         
          

        </div>
        <div class="modal-footer">
        
          <button type="button" class="btn btn-danger" id="modal_up_cv_no" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>



  <!--Video Modal  -->

  <div class="modal fade" id="total_video_showf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: blue">
          <button type="button" class="close" data-dismiss="modal"  id="" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" style="color: #fff;text-align: center;">Story Of MISTLCC</h4>
        </div>
        <div class="modal-body" id="total_Video_show" style="text-align: center;" >
         
          <iframe width="420" height="400" src="https://www.youtube.com/embed/j-5D7A3U8K8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>

        </div>
        <div class="modal-footer">
        
          <button type="button" class="btn btn-danger" id="modal_up_cv_no" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>


  <!--Upcoming Modal  -->

  <div class="modal fade" id="total_upcome_showf" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: blue">
          <button type="button" class="close" data-dismiss="modal"  id="" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" style="color: #fff;text-align: center;">EVENT DETAILS</h4>
        </div>
        <div class="modal-body" id="total_upcome_show" style="text-align: center;" >
         
        

        </div>
        <div class="modal-footer">
        
          <button type="button" class="btn btn-danger" id="modal_up_cv_no" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

     <!-- Modal -->

  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #113977">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title" id="myModalLabel" style="color: #fff"></h4>
        </div>
        <div class="modal-body" id="reg_detail">
         

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div> 


  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-3.2.1.min.js"></script> 
  <script src="js/bootstrap.min.js"></script>
  
  <script src="js/website_content.js"></script>




</body>
</html>