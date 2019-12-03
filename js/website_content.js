$(document).ready(function(){



var filePath = window.location.pathname;
var fileName = filePath.substr(filePath.lastIndexOf("/") + 1);


  $.ajax({

    url:"website_content1.php",
    method:"POST",
    data:{about_show:1},
    success:function(data){

      $("#About_show").html(data);

    }


  })


  $(".notice_user").click(function(eve){

    eve.preventDefault();

    var id=$(this).attr('notice_id');

    $.ajax({

        url:"website_content1.php",
	    method:"POST",
	    data:{notice_show:1,id:id},

	    success:function(data){

	      $("#up_cov").html(data);
	      $('#myModal_cover').modal('show');

	    }


    })



  })


 $(".notice_click_navbar").click(function(eve){

  eve.preventDefault();


  


          if(fileName=="website_notice_show.php")
            {
                
                    $('html, body').animate({
                            scrollTop: $("#notice_content").offset().top-80
                     }, 1000);
                
            }
            else
            {

                  window.location.href="website_notice_show.php";

            }


 })


 $("#home_show_").click(function(eve){

         eve.preventDefault();

 
 


          if(fileName=="website_show.php")
            {
                
                    $('html, body').animate({
                            scrollTop: $("#home_show_detail").offset().top-80
                     }, 1000);
                
            }
            else
            {

                   window.location.href="website_show.php";

            }


 })



 // ************ Notice & information_show2.php ***************//


          $.ajax({
                

                  url:"website_content1.php",

                  method:"POST",

                  data:{ notice_show_total:1 },

                  success:function(data){

                 // 	alert(data);

                      $("#notice_content").html(data);

                  }

  	       })


     $("body").delegate(".show_total_notice_user","click",function(eve)
     {
     	eve.preventDefault();

     	var id=$(this).attr('evt_notice_id');
        
      //  alert(id);


         




          $.ajax({
                

                  url:"website_content1.php",

                  method:"POST",

                  data:{ notice_show_detail:1 ,iid:id},

                  success:function(data){

                  //	alert(data);

                      
                     
                         $("#total_notice_show").html(data);
                         $('#myModal_notice_show').modal('show'); 
                    

                     

                  }

  	   })

     })

      


})


$(function () {
  $('[data-toggle="tooltip"]').tooltip()
})


$(".activity_detail").click(function(eve){

  eve.preventDefault();


    var id=$(this).attr('act_id');

            $.ajax({
                

                  url:"website_content1.php",

                  method:"POST",

                  data:{ activity_show_detail:1 ,iid:id},

                  success:function(data){

                  //  alert(data);

                      
                     
                         $("#total_act_show").html(data);
                         $('#total_act_showf').modal('show'); 
                    

                     

                  }

            })

})


$("#video_show").click(function(eve){

           eve.preventDefault();

   
               $.ajax({
                

                  url:"website_content1.php",

                  method:"POST",

                  data:{ activity_video_detail:1},

                  success:function(data){

                  //  alert(data);

                      
                     
                         $("#total_video_show").html(data);
                         $('#total_video_showf').modal('show'); 
                    

                     

                  }

            })


})


$("#contact_us_sl").click(function(eve){

  eve.preventDefault();


   $('html, body').animate({


        scrollTop: $("#contact_show_").offset().top-80


   }, 1000);


})

$(".show_total_up_user").click(function(eve){

  eve.preventDefault();

  var id=$(this).attr('evt_up_id');

      $.ajax({
                

                  url:"website_content1.php",

                  method:"POST",

                  data:{ activity_upcome_detail:1 ,iid:id},

                  success:function(data){

                  //  alert(data);

                      
                     
                         $("#total_upcome_show").html(data);
                         $('#total_upcome_showf').modal('show'); 
                    

                     

                  }

            })


})


    $("#rfirstname_error").hide();
    
    $("#remail_error").hide();

    $("#rlastname_error").hide();

    var firstname_error=false;
    var lastname_error=false;
    var email_error=false;
   

function check_fname()
   {

       var pattern=/^[a-zA-Z]*$/;
       var fname=$('#rfirstname').val();

       firstname_error=false;

       if(fname!='')
       {
         $("#rfirstname_error").hide();
       }
       else if(fname=='')
       {
          $("#rfirstname_error").html('Enter your Name');
          $("#rfirstname_error").show();
          firstname_error=true;

       }
      
   }



function check_about()
   {

     
       var lname=$('#about_desc').val();

       lastname_error=false;

       if(lname!='')
       {
         $("#about_d_error").hide();
       }
       else if(lname=='')
       {
          $("#about_d_error").html('Enter Message');
          $("#about_d_error").show();
          lastname_error=true;

       }
      
   }


    function check_email()
   {
       var pattern=/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
       var email=$('#remail').val();
       email_error=false;

       if(pattern.test(email) && email!='')
       {
         $("#remail_error").hide();
       }
       else if(email=='')
       {
          $("#remail_error").html('Enter your Mail');
          $("#remail_error").show();
         
          email_error=true;

       }
       else if(!pattern.test(email))
       {
          $("#remail_error").html('invalid Email');
          $("#remail_error").show();
         
          email_error=true;
       }
   }

$("#contact_btn_clk").click(function(eve){
  
  eve.preventDefault();

   check_fname();

   check_about();

   check_email();

   
   if(firstname_error==false && lastname_error==false && email_error==false)
   {

       var fname=$('#rfirstname').val();
   
       var lname=$('#about_desc').val();

       var email=$('#remail').val();




        $.ajax({

          url:"website_content1.php",

          method:"POST",

          data:{ register_contact:1, f:fname, l:lname , e:email},

          success:function(data){

             $("#myModalLabel").html("Contact");
             $("#reg_detail").html(data);
             $('#myModal').modal('show'); 

          }
        


        })
       
   }


})


