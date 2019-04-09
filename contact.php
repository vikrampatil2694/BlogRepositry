<!DOCTYPE html>
<html lang="en">
  <head>
  	<script type="text/javascript">
      let count=0;
      function searchbar(){
      let a=document.getElementById("id1");
      if(a.style.display=="none"){
      a.style.display="flex";
      }
      else{
        a.style.display="none";
      }

    }
    function social(){
      let a=document.getElementById("id2");
      if(a.style.display=="none"){
      a.style.display="block";
      }
      else{
        a.style.display="none";
      }
    }
    </script>
    <style type="text/css">
      .roundshape{
    border-radius: 8px;
    width: 500px;
    height: 35px;
    border-color: lightblue;
    padding:5px;
  } 
  .makecenter{
display: flex;
justify-content: center;
align-items:center;
  }
  .srch_form{
    box-shadow: 1px 1px 1px 1px red;
    padding: 50px;

  }
  a:hover { 
  background-color:black;
}
    </style>
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  </head>

  <body background="sky.jpg">
    <div  style="margin-top:5px" class="row bg-primary sticky-top">
      <div class="col-sm-2 makecenter"> <a style="color: white" href="index.php"><h2>Vikram Patil</h2></a>  </div>
      <div class="col-sm-4"></div>
      <div class="col-sm-1 makecenter"> <a style="color: white" href="about.php"><h4>ABOUT ME</h4></a></div>
      <div class="col-sm-1 makecenter"> <a style="color: white"><h4 onclick="social()">SOCIAL ME</h></a></div>
      <div class="col-sm-1 makecenter"> <a style="color: white" href="about.php"><h4>Achivements</h4></a></div>
      <div class="col-sm-1 makecenter"> <a style="color: white" href="contact.php"><h4>Contact ME</h4></a></div>
      <div class="col-sm-1 makecenter " style="justify-content: bottom;align-items: bottom" ><button onclick="searchbar()" type="button" class="btn btn-default">
          <span class="glyphicon glyphicon-search"></span> Search
        </button></div>
        <div class="col-sm-1" style="background-color: whitesmoke"></div>
    </div>
    <div  id="id1" class="row makecenter bg-info " style="display: none; height: 60px"><input class="roundshape" type="text" name="serch" placeholder="Search here....."><button class="btn btn-secondry" style="margin: 2px">GO</button></div>
  		
  	</div>
  	<div class="container" style="height: 100px"></div>
  	<div class="container">
  		
  		<div class="row ">
  			<div class="col-sm-6 " style="border: 1px solid black;background-color: whitesmoke">
  			 <div> <h2>Contact ME</h2>
          <ul class="list-unstyled">
            <ul>
      <li>Have a question about my blog?</li>
      <li>Want to meet me for your help?</li>
      <li>Want to discuss about my achivements?</li>
      
              </ul>
          </ul>  
          Use the contact form below and I will get back to you as quickly as possible
          <form action="contact_insert.php" method="post">
            <h4>Your Name:</h4>
            <input type="text" name="visitorName" required>
            <h4>Your Email:</h4>
            <input type="email" name="visitorEmail" required>
            <h4>Subject:</h4>
            <input type="text" name="subject" required>
            <h4>Messsage</h4>
            <textarea rows="4" cols="50" name="message" required></textarea><br>

            <button class="btn btn-secondry mt-1">SEND</button>


          </form>
         </div>
  			</div>
        <div class="col-sm-5">
          <img style="box-shadow: 1px 1px 1px 1px red; opacity: 0.5;width:100%" src="contact.jpg">
          <div  style="border: 1px solid black;margin: 20px; height: 180px;background-color: whitesmoke">
            <div class="makecenter" style="height: 33%"><h3>Get My Newsletter</h3></div>
            <div class="makecenter" style="height: 33%"> <input type="email" name="email" placeholder="enter your email address..."></div>
            <div class="makecenter" style="height: 34%"><button>Subscribe</button></div>
          </div>
        </div>

  			<div class="col-sm-1"></div>
        
  		</div>

      



  	</div>
  </body>
</html>
