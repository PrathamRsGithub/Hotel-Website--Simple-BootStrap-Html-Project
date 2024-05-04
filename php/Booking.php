 <?php

   $user = 'root';
$password = 'root';
$db = 'inventory';
$host = 'localhost';
$port = 8889;
$database='hotelsite';
$table='Booking';

$link = mysqli_init();
$success = mysqli_real_connect(
   $link, 
   $host, 
   $user, 
   $password, 
   $db,
   $port,
	$database,
	$table
); 


$con=mysqli_connect("$host","$user","$password")or die(mysql_error());
$con1=mysqli_select_db($con,"$database")or die(mysql_error());
		$name = $_POST['name'];
		$date = $_POST['date'];
	    $np = $_POST['np'];
		$nr = $_POST['nr'];
		$no = $_POST['no'];
		$email=$_POST['email'];
			
$conn = mysqli_connect($servername, $user, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO $table(name,datefromto,noofpeople,noofrooms,phoneno,emailid) VALUES ('$name','$date','$np','$nr','$no','$email')";

if (mysqli_query($conn, $sql)) {
    echo" 
	
	<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Book My Stay</title>

    <!-- Bootstrap -->
    <link href='../css/bootstrap.min.css' rel='stylesheet'>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src='https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js'></script>
      <script src='https://oss.maxcdn.com/respond/1.4.2/respond.min.js'></script>
    <![endif]-->
  </head>
  <body>
	
	
	
	
	
	
	 <nav class='navbar navbar-inverse navbar-fixed-top'>
  <div class='container-fluid'>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class='navbar-header'>
      <button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#bs-example-navbar-collapse-1' aria-expanded='false'>
        <span class='sr-only'>Toggle navigation</span>
        <span class='icon-ba'></span>
        <span class='icon-bar'></span>
        <span class='icon-bar'></span>
      </button>
      
      
       
 <div class='container-fluid'>
    <div class='navbar-header'>
      <a class='navbar-brand' href='../index.html'>
        <img alt='Brand' src='../img/logo.jpg' width='50px' height='50px' style='margin-top: -10px'>
      </a>
       
   <a class='navbar-brand' href='../index.html' style='margin-top: 10px; font-family:cursive; '><b>PARK HOTEL</b></a>
    </div>
  </div>


      
      
      
     
      
      
      
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class='collapse navbar-collapse' id='bs-example-navbar-collapse-1'>
      <ul class='nav navbar-nav' style='margin-top: 10px'>
    
        <li><a href='../index.html'>Home<span class='sr-only'>(current)</span></a></li>
        <li class='dropdown'>
          <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Our Hotels <span class='caret'></span></a>
          <ul class='dropdown-menu'>
            <li><a href='#'>Mumbai</a></li>
            <li><a href='#'>Delhi</a></li>
            <li><a href='#'>Banglore</a></li>
            <li role='separator' class='divider'></li>
            <li><a href='#'>Italy</a></li>
            <li role='separator' class='divider'></li>
            <li><a href='#'>France</a></li>
           <li role='separator' class='divider'></li>
            <li><a href='#'>United States</a></li>
          </ul>
        </li>
      </ul>
      <form class='navbar-form navbar-left'>
        <div class='form-group' style='margin-top: 10px'>
          <input type='text' class='form-control' placeholder='Search'>
        </div>
        <button type='submit' class='btn btn-default' style='background-color:yellow; margin-top:10px '>Submit</button>
      </form>
      <ul class='nav navbar-nav navbar-right' style='margin-top: 10px'>
       <li><a href='#'><button class='btn btn-default btn-lg' type='button' style='margin-top:-15px; background-color:deepskyblue; color:whitesmoke;'>BOOK MY STAY</button></a></li>
        <li><a href='#'>Contact us</a></li>
        <li class='dropdown'>
          <a href='#' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='false'>Menu<span class='caret'></span></a>
          <ul class='dropdown-menu'>
            <li><a href='#'>Gallery</a></li>
            <li><a href='#'>Reservations</a></li>
            <li><a href='#'>Reviews</a></li>
            <li role='separator' class='divider'></li>
            <li><a href='adminlogin.html'>Admin login</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	
	
	
	
	
	
	
	
	
	
	
	
	<img src='../img/book.jpg' width='100%'> 
     <div class='carousel-caption' style=' background-color: black; opacity: 0.8;
    filter: alpha(opacity=60);'>
	<center><h1>Booking Sucessful!</h1></center>
	</div>
	
	
	
	
	
	 <footer class='navbar-fixed-bottom' width='100%' height='100%'>
<div class='col-md-2' style='background-color:black;'>
<center>
    <a  href='#' >
     <img src='../SVG/1493406141_About_error_notification_help_info_information.svg' alt='facebook' width='35px' height='35px'> About us
	  </a>
	  </div>
	  <div class='col-md-2' style='background-color:black' height='100%'>
	 <a  href='#' ><img src='../SVG/1493406147_85Account_albums_screens_tabs.svg' alt='facebook' width='35px' height='35px'>Site Map</a>
	 </center>
	</div>	


		<div class='col-md-2' style='background-color:black'>
		<center>
       <a href='tel:1234567897'><img src='../SVG/1493324141_phone.svg' alt='Call' width='35px' height='35px'>+91 1234567891</a>
	   </center>
	   </div>
	   <div class='col-md-2' style='background-color:black'
	   <center>
       <a href='mailto:hotelpark@g.com'><img src='../SVG/1493324150_email.svg' alt='email' width='35px' height='35px'>hotelpark@g.com</a>
	  </center>
</div>
	
		<div class='col-md-4' align='right' style='background-color:black;'>
		
      <a href='#'>  <img src='../SVG/1493322723_square_facebook.svg' alt='facebook' width='35px' height='35px'></a>
       <a href='#'> <img src='../SVG/1493322716_square_twitter.svg' alt='twiter' width='35px' height='35px'></a>
       <a href='#'> <img src='../SVG/1493322784_square_linkedin.svg' alt='linked' width='35px' height='35px'></a>
        <a href='#'><img src='../SVG/1493322797_square_pinterest.svg' alt='pin' width='35px' height='35px'></a>
         <a href='#'><img src='../SVG/1493322973_Instagram.svg' alt='insta' width='35px' height='35px'></a>
		 </div>
    </footer >
	
	
	
	
	 <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js'></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src='../js/bootstrap.min.js'></script>
  </body>
	
	
	
	";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);




?>