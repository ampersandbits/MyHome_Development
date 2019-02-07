<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>MyHome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" type="text/css" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"/>
    <script src="main.js"></script>
    <style>
    ul {
        list-style-type: none;
        margin: 0;
        padding: 0;
        overflow: hidden;
        background-color: #333;
        position: -webkit-sticky;
        position: sticky;
        top: 0;
      }
      
      li {
        float: right;
      }
      
      li a {
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
      }
      
      li a:hover {
        background-color: #111;
      }
      div.gallery {
        margin: 5px;
        border: 1px solid #ccc;
        float: left;
        width: 32.37%;
            }

    div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: 235px;
}

div.desc {
  padding: 15px;
  text-align: center;
}
      </style>
</head>
<body>
    <ul>
            <li style="float: left"><a href="#myhome">MyHome</a></li>
            <li><a href="login.php"><i class="fas fa-user"></i></a></li>
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