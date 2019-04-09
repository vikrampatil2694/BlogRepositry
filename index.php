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
  		.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed; /* Set the navbar to fixed position */
  top: 0; /* Position the navbar at the top of the page */
  width: 100%; /* Full width */
}

  		.crcl{
  			width: 150px;
  			height: 150px;
  			border-radius: 100%;
  			position: absolute;
  			top: 110px;
  			left: calc(50%-50%);
  			margin-top: -100px;
  			margin-left: 10px;
  		}
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

  <body >
  	<div  style="margin-top:5px;" class="navbar row bg-primary">
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
  	
  	<div class="row" style="height: 100%">
  		<div class="col-sm-2 bg-info" style="height:2000px;border: 1px solid black;margin-top: 10px" >
  				<div><img class="crcl" src="m.jpg"></div><br><br><br><br><br><br><br><br><br>
  				<div>
  				<ul class="nav bd-sidenav">
  					<li class="active bd-sidenav-active">
  						<h3 style="padding: 5px">My Creations</h3>
  						<h4 style="padding: 5px"><a  href="https://github.com/vikrampatil2694/SodukoGame">Sudoku Game</a></h4>
  						<h4 style="padding: 5px"><a  href="https://github.com/vikrampatil2694/Chain-Reaction-Game">Chain Reaction Game</a></h4>
  						<h4 style="padding: 5px">Many to come..</h4>
  						
  					</li>
  				</ul>
  				</div>
  		</div>
  		<div  class="col-sm-9">
  			<div class="col-sm-7">
  				<div class="bg-light" style="border: 1px solid black;height: 200px;width:100%;margin-top: 10px;background-color: whitesmoke">
  					<h2>Joined as System Engineer at Techhighway System Pvt Ltd</h2>
  						<p>
  							On 1st April 2019 i am joined as System Engineer at Techhighway. The company basically gives services on Travel and hospitality domain. 
  						</p>
  						

  				</div>

  				<div class="bg-light" style="border: 1px solid black;height: 300px;width:100%;margin-top: 10px;background-color: whitesmoke">
  					<h4>Close call Video recorded by me..Must watch</h4>
  						<p>
  							<span class="embed-youtube" style="text-align:center; display: block;"><iframe width="100%" height="250px" src="https://www.youtube.com/embed/quk3gUu10rA" frameborder="2px" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></span>
  						</p>		
  				</div>

  				<div class="bg-light" style="border: 1px solid black;height: 300px;width:100%;margin-top: 10px;background-color: whitesmoke">
  					<h4>Cat trying to catch fish in Fishtank...</h4>
  						<p>
  							<span class="embed-youtube" style="text-align:center; display: block;"><iframe width="100%" height="250px" src="https://www.youtube.com/embed/EsLRWVfRI7o" frameborder="2px" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></span>
  						</p>		
  				</div>
  				<div class="bg-light" style="border: 1px solid black;height: 300px;width:100%;margin-top: 10px;background-color: whitesmoke">
  					<h4>Scoba in Fishtank....</h4>
  						<p>
  							<span class="embed-youtube" style="text-align:center; display: block;"><iframe width="100%" height="250px" src="https://www.youtube.com/embed/XqGH1DKxkc0" frameborder="2px" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></span>
  						</p>		
  				</div>
  			</div>
  			<div id="id2" class="col-sm-2 bg-info" style="display: none; box-shadow: 1px 1px 1px 1px red;">
  				<div><a href="https://www.youtube.com/channel/UCkpIXCYYm0NmLDwVz2eTOXA">My Youtube Channel</a></div><br>
  				<div><a href="http://www.instagram.com/vickypatil2694">My Instagram</a> </div><br>
  				<div><a href="http://www.facebook.com/vickypatil">My Facebook</a></a></div><br>
  			</div>
  			<div ></div>
  		</div>
  		<div class="col-sm-1" style="background-color: whitesmoke"></div>

  	</div>
  	
  	
  	
  </body>
</html>
