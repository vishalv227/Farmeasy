 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Farmeasy</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Rubik&display=swap" rel="stylesheet">
  
 
    <style>
        body{
            height: auto;
            width: auto;
            background-color: gray;
            /* background-image: url("farm.jpg"); */
        }
        /* .bg{
            background-color: coral;
        } */
        .container ul li:hover{
            color: red;
        }
        .container ul li a:hover{
            color: red;
        }
		
form{
	text-align: center;
	margin-top: 300px;
	}
	#heading{
	margin-bottom: 10px;
	}
	#f1{
	height: 400px;
	width: auto;
	}

        .container{
            width: 100%;
            height: 100%;
            background: black;
        }
        ul{
            list-style: none;
        }
        .menu ul {
            display: flex;
            margin: 10px;
            /* padding: 13px; */
        }
        .menu ul li{
            margin: 20px;
            color: white;
            cursor: pointer;
            font-size: 20px;
            /* border: 2px solid palevioletred; */
        }
        .logo img{
            height: 70px;
            width: 70px;
            margin-top: -7px;
            margin-right: 48px;
            border-radius: 20px;
        }
        .signup-btn{
            color: white;
            text-decoration: none;
        }
        .app-text{
            text-align: center;
            margin-top: 100px;
            
        }
        p{
           font-size: 23px; 
           margin: 20px;
           padding: 30px;
        }
        .about{
            font-size: 25px;
            color: rgb(25, 48, 175);
            margin-top: 10px;
             color: rgb(16, 3, 194);
             text-align: center;
        }
        .contact{
            margin-top: 30px;
            margin-bottom: 100px;
        }
        .contact a{
            font-size: 26px;
            padding: 3px;
            color: rgb(0, 0, 0);
            border: 2px solid purple;
            border-radius: 10px;
            text-decoration: none;
            margin: 20px;
         }
         img{
             width: 300px;
             height: 400px;
             margin-left: 20px;
         }
         #farmer1{
            display: inline;
            margin-left: 40px;
         }
         #farmer2{
            display: inline;
         }
         #farmer3{
             display: inline;
         }
         #farmer4{
             display: inline;
         }
         #f2{
             width: 350px;
         }
         #f3{
            width: 330px;
         }
         #f4{
            width: 350px;
         }
         #heading1{
             text-align: center;
             border: 2px solid rgb(194, 67, 206);
             width: 850px;
             margin-left: 270px;
             border-radius: 30px;
             font-style: italic;
			 margin-top: 40px;
         }
         .About{
             text-align: center;
         }
         .form{
             font-size: 20px;
         }
         #top{
             font-size: 50px;
             font-style: bold;
             color: indigo;
             text-align: center;
             font-family: 'Pattaya', sans-serif;
         }
         .tv{
            /* position: relative; */
            float: right;
            font-size: 25px;
            display: block;
            border: 2px solid magenta;
            border-radius: 10px;
            margin: 20px;
            }
		.document{
		text: inline;
		margin: 15px;
		border: 2px solid green;
		border-radius: 30px;
		}
		.firstform{
			text-align: center;
			margin: 15px;
			font-family: 'Rubik', sans-serif;
			border: 2px solid #09c0ff;
			border-radius: 30px;
			width: auto;
			margin-left: 35px;
		}
    </style>
</head>
<body>
    <h1 id="top">Farmeasy</h1>
    <div class="container">
        <div class="menu">
            <ul>
                <li class="logo"><img src='logo.png'></li>
                <li>Home</li>
                <li>Services</li>
                <li>About Us</li>
                <li>Contact</li>

                <!-- <ul>
                    <li> <a href="#">Email</a></li>
                    <li> <a href="#">Contact No</a></li>
                </ul> -->

                <li><a href="#" id="email" class="signup-btn">Login For Sellers</a></li>
                <li><a href="#" id="phone" class="signup-btn">Login For Buyers</a></li>
            </ul>
            
        </div>
        
    </div>

    <br>

    <button class="tv" type="submit">Search</button>
    <input class="tv" type="text" placeholder="Enter Seller Name" name="search">

    <br>

    <div class="banner">
        <div class="app-text">
            <h1>Purchase your needs without broker</h1>
            <p>There are different types of farmers. And they all have equal significance. First are the farmers who grow a crop like wheat, barley, rice, etc. Since the maximum intake in the Indian houses is of wheat and rice. So, the cultivation of wheat and rice is much in farming. Moreover, farmers who grow these crops are of prime importance. Second, are the ones who cultivate fruits. These farmers have to prepare the soil for different types of fruits. Because these fruits grow according to the season. Therefore the farmers need to have a great knowledge of fruits and crops. There are many other farmers who grow different other types. Furthermore, they all have to work very hard to get maximum harvesting.</p>

            <div class="contact">
                <h1>Contact Us</h1>
                <a href="abc@gmail.com">Email</a>
                <a href="1234567890">Contact No</a>
                <a href="https://www.instagram.com/">Instagram</a>
                <a href="https://www.facebook.com/">Facebook</a>
                <a href="https://www.twitter.com/">Twitter</a>
            </div>
			
            <div class="services">
			
			   <h1 id="heading" >Register Here</h1>
	
<form class="firstform" method="POST" action="connect.php">
Enter your name :
<input class="firstform" type="text" name="a" size="30">
Enter your email :
<input class="firstform" type="email" name="b" size="30">
Enter your password :
<input class="firstform" type="password" name="c" size="30">

<br>

<input class="firstform" type="submit" value="Click here to submit">
<input class="firstform" type="reset" value="Click here to reset">

<br>

	<form class="document" action="upload.php" method="post" enctype="multipart">
  Upload your Aadhaar Card:
  <input class="document" type="file" name="fileToUpload" id="fileToUpload">
  <input class="document" type="submit" value="Upload Image" name="submit">

</form>

  </div>
                
            </div>

            <br>

            <div class="topsellers">
                <h1 id="heading1" >Here you can see our topseller farmers of your area</h1>
                <div id="farmer1">
                    <img id="f1" src='farm1.jpg' alt='404 image not found'>
                </div>
                <div id="farmer2">
                    <img id="f2" src='farmer2.jpg' alt='404 image not found'>
                </div>
                <div id="farmer3">
                    <img id="f3" src='farm3.jpg' alt='404 image not found'>
                </div>
                <div id="farmer4">
                    <img id="f4" src='farm4.jpg' alt='404 image not found'>
                </div>

            </div>

            <br>
            <h1 class="About">About Us</h1>
            <div class="about">
                Ajit Jaiswar
            </div>
            <div class="about">
                Murlidhar Mewada
            </div>
            <div class="about">
                Vishal Vishwakarma(Team Leader)
            </div>
            <div class="about">
                Ajmira Vamshi Nayak
            </div>
        </div>
    </div>
</body>
</html>
  
</form>
</html>