<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: signin.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: signin.php");
  }
?>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MyHome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS\main.css" />
    <link rel="stylesheet" type="text/css" href="CSS\user.css">
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"/>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"/>
    <script src="main.js"></script>
</head>
<body>
    <ul>
            <li style="float: left"><a href="#myhome">MyHome</a></li>
            <li><a href="user.php"><i class="fas fa-user"></i></a></li>
            <li><a href="#howto">How To</a></li>
            <li><a href="#fingagent">Find Agent</a></li>
            <li><a href="#mortgages">Mortgages</a></li>
            <li><a href="#homevalues">Home Values</a></li>
            <li><a href="#homeforrent">Home For Rent</a></li>
            <li><a href="#homeforsale">Home For Sale</a></li>
    </ul>
<div>
        <div class="header">
                <h2 style="text-align: center">Simply Smarter Home Search</h2>
            </div>
        
            <div class="gallery">
                <a href="#1.jpg"><img src="Images\1.jpg" width="500" height="500"></a>
                <div class="desc"> Hose for Sale<br>
                3BHK|2ba|1,800 sqft <br> Norflok, VA-23476</div>
        
            </div>
            <div class="gallery">
                    <a href="#2.jpg"><img src="Images\2.jpg"width="500" height="500"></a>
                    <div class="desc"> Hose for Sale<br>
                        3BHK|2ba|1,800 sqft <br> Norflok, VA-23476</div>
            
            </div>
            <div class="gallery">
                    <a href="#3.jpg"><img src="Images\3.jpg"width="500" height="500"></a>
                    <div class="desc"> Hose for Sale<br>
                        3BHK|2ba|1,800 sqft <br> Norflok, VA-23476</div>
            
            </div>
            <div class="gallery">
                    <a href="#4.jpg"><img src="Images\4.jpg"width="500" height="500"></a>
                    <div class="desc"> Hose for Sale<br>
                        3BHK|2ba|1,800 sqft <br> Norflok, VA-23476</div>
            
            </div>
            <div class="gallery">
                    <a href="#5.jpg"><img src="Images\5.jpg"width="500" height="500"></a>
                    <div class="desc"> Hose for Sale<br>
                        3BHK|2ba|1,800 sqft <br> Norflok, VA-23476</div>
            
            </div>
            <div class="gallery">
                    <a href="#6.jpg"><img src="Images\6.jpg"width="500" height="500"></a>
                    <div class="desc"> Hose for Sale<br>
                        3BHK|2ba|1,800 sqft <br> Norflok, VA-23476</div>
            
            </div>
            <div class="gallery">
                    <a href="#7.jpg"><img src="Images\7.jpg"width="500" height="500"></a>
                    <div class="desc"> Hose for Sale<br>
                        3BHK|2ba|1,800 sqft <br> Norflok, VA-23476</div>
            
            </div>
            <div class="gallery">
                    <a href="#8.jpg"><img src="Images\8.jpg"width="500" height="500"></a>
                    <div class="desc"> Hose for Sale<br>
                        3BHK|2ba|1,800 sqft <br> Norflok, VA-23476</div>
            
            </div>
            <div class="gallery">
                    <a href="#9.jpg"><img src="Images\9.jpg"width="500" height="500"></a>
                    <div class="desc"> Hose for Sale<br>
                        3BHK|2ba|1,800 sqft <br> Norflok, VA-23476</div>
            
            </div>
            <div class="gallery">
                    <a href="#10.jpg"><?php echo '<img src="Images\10.jpg" width="500" height="500">'?></a>
                    <div class="desc"> Hose for Sale<br>
                        3BHK|2ba|1,800 sqft <br> Norflok, VA-23476</div>
            
            </div>
</div>
</body>
</html>