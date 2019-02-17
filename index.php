<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Wish List</title>
	<link rel="shortcut icon" href="img/images.jpeg" type="image/ico" />

    <!-- Bootstrap Core CSS - Uses Bootswatch Flatly Theme: http://bootswatch.com/flatly/ -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/freelancer.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" class="index">

    <!-- Portfolio Grid Section -->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2></br>Sumu's Wish List</br></h2>
                    <hr class="star-primary">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
					<h3>
						<font color="#008080">
							My wish list is given below:
						</font>
					</h3>
                    <div class="row">
								  
<?php
	
        include("connection.php");
		$i=0;
		$b=mysqli_query($link,"SELECT * FROM wishlist");
		//echo mysql_error();
		if($b){
			while($row=mysqli_fetch_array($b,MYSQLI_BOTH)){
				$arr[$i]['wishes']=$row['wishes'];
				$i++;
			}
			
		}
		for($j=0;$j<$i;$j++)
		{
		?>
			<hr></br>
			
				<?php
					echo "<i><font color='#006400'><h5>".$arr[$j]['wishes']."</h5></font></i></br>";
				?>
			<hr>
		<?php
		}
?>	
						<p id="demo"></p>
						<hr>

						<button onclick="myFunction()">+add wish</button>
						<script type="text/javascript">
						function myFunction() {
							  var wish = prompt("Please enter your wish", "visit st.martin");
							  if (wish != null && wish != "") {	
						    	document.getElementById("demo").innerHTML =wish;
						    	$.post("save.php",{wish: wish});
						  }
						}
						</script>		
					
					</div>
				</div>
            </div>
        </div>
    </section>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>

</html>
