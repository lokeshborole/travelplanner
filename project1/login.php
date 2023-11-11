<?PHP
include('connection.php'); 
?>

<html>  
<head>  
    <title>PHP login system</title>  
     <!-- insert style.css file inside index.html   -->
    <link rel = "stylesheet" href = "style1.css"> 
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');
    body{
        background-size: cover;
        background-position: center;
        font-family: 'Ubuntu', sans-serif;
    }
    body:before{
        content:'';
        position: absolute;
        background: rgb(0 0 0 / 70%);
        width: 100%;
        height: 400%;
        z-index: 2;   
        backdrop-filter: blur(0px);
        margin:0;
    }
    
    .loginbox{
        padding: 50px 40px;
        height: 400px;
        width: 300px;
        color:#000;
        top:55%;
        left:50%;
        position: fixed;
        transform: translate(-50%,-50%);
        box-sizing: border-box;
        border-radius: 10px;
        background: transparent;
        background-color: #ffffffd3;
        z-index: 2;
        backdrop-filter: blur(5px);
        
    }

    h2{
        margin:0;
        padding-top: 20px;
        padding-bottom: 20px;
        text-align: center;
        font-size: 21px;
    }

    .loginbox p{
        margin: 4px 0px;
        padding: 0;
        font-weight: bold;

    }

    .loginbox input{
        width: 100%;
        margin-bottom: 10px;

    }
    ::placeholder{
        font-weight:600;
        font-size:12px;
        font-family: 'Ubuntu', sans-serif;
    }

    .loginbox input[type="email"] , input[type="password"]{
        border: none;
        margin-bottom: 20px;
        margin-top: 5px;
        background:transparent ;
        outline: none;
        border-bottom: 1px solid rgb(24, 188, 253);
        height: 30px;
        color: black;
        font-size: 14px;
    }

    .loginbox input[type="submit"] {
        border: none;
        outline: none;
        height: 30px;
        background-color: rgb(24, 188, 253);
        color: #fff;
        font-size: 15px;
        font-weight: bold;
        margin-top: 5px;
        border-radius: 5px;
    }

    .loginbox input[type="submit"]:hover {
        padding:3px 0px;
        font-size: 16px;     
    }

    .loginbox a{
        
        text-decoration: none;
        color: #3c3c3c;
        font-size: 12px;
        line-height: 20px;
        
    }

    .loginbox a:hover{
        
        color: rgb(0, 180, 252);
        font-weight: bold;
        
    }

    .avatar{   
        height: 100px;
        width: 100px;
        border-radius: 50%;
        position: absolute;
        top: -50px;
        left: calc(50% - 50px);
    }

    </style>  
</head>  
<body>  
<header>
        <nav>
            <h4>MR.travel</h4>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="#">Discover</a></li>
                <li><a href="#">Special deals</a></li>
                <li><a href="#">About</a></li>
                <li><a href="login.html">Login</a></li>
                <li><a href="register.html">Register</a></li>
            </ul>
            <i class="bi bi-three-dots"></i>
        </nav>

        <div class="content">
            <div class="cont-box">
                <h1>The right destination for you and your family.</h1>
                <p>“The journey of a thousand miles begins with a single step.” </p>
                <button>Start your search <i class="bi bi-search"></i></button>
            </div>

            <div class="trip_box">

                <div class="search_box">
                    <div class="card">
                        <h4>Location <i class="bi bi-caret-down-fill"></i></h4>
                        <div class="opt">

                            <label for="destination"></label>
                            <select name="city" id="destination">
                                <option value="indore">Indore</option>
                                <option value="Bhopal">Bhopal</option>
                                <option value="Delhi" >Delhi </option>
                                <option value="Banglore">Banglore</option>
                                <option value="Banglore">Banglore</option>
                                <option value="Banglore">Banglore</option>
                                <option value="Banglore">Banglore</option>
                                <option value="Banglore">Banglore</option>
                            </select>
                        </div>

                    </div>
                    <div class="card">
                        <h4>Date <i class="bi bi-caret-down-fill"></i></h4>
                        <input type="Date" placeholder="Date of journey">

                    </div>
                    <div class="card">
                        <h4>Peoples <i class="bi bi-caret-down-fill"></i></h4>
                        <input type="number" placeholder="No. of people">
                    </div>
                    <div class="notify">
                        <a href="notify.html">Notify <i class="bi bi-bell"></i></a>
                    </div>
                </div>


                <div class="travelbox">

                    <h3 id="heading_of_travelbox">Cities to travel in India <img src="icon/india.png" alt=""></h3>

                    <div class="cards">
                        <div class="card">
                            <img src="img/mumbai.jpg" alt="">
                            <div class="btn_city">
                                <a href="">Read now</a>
                                <h5>Mumbai Central <br> <span>460$</span> </h5>

                            </div>
                        </div>


                        <div class="card">
                            <img src="img/delhi.jpg" alt="">
                            <div class="btn_city">
                                <a href="">Read now</a>
                                <h5>New Delhi<br> <span>870$</span> </h5>

                            </div>
                        </div>


                        <div class="card">
                            <img src="img/jaipur.jpg" alt="">
                            <div class="btn_city">
                                <a href="">Read now</a>
                                <h5>Jaipur<br> <span>660$</span> </h5>

                            </div>
                        </div>


                        <div class="card">
                            <img src="img/kolkata.jpg" alt="">
                            <div class="btn_city">
                                <a href="">Read now</a>
                                <h5>Kolkata<br> <span>730 $</span> </h5>
                            </div>
                        </div>
                    </div>

                    <div class="cards">
                        <div class="card">
                            <img src="img/agra.jpg" alt="">
                            <div class="btn_city">
                                <a href="">Read now</a>
                                <h5>Agra<br> <span>460$</span> </h5>

                            </div>
                        </div>


                        <div class="card">
                            <img src="img/ladakh.jpg" alt="">
                            <div class="btn_city">
                                <a href="">Read now</a>
                                <h5>Ladakh<br> <span>870$</span> </h5>

                            </div>
                        </div>


                        <div class="card">
                            <img src="img/manali2.jpeg" alt="">
                            <div class="btn_city">
                                <a href="">Read now</a>
                                <h5>Manali<br> <span>660$</span> </h5>

                            </div>
                        </div>


                        <div class="card">
                            <img src="img/goa.jpg" alt="">
                            <div class="btn_city">
                                <a href="">Read now</a>
                                <h5>Goa<br> <span>730 $</span> </h5>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>

        </div>

    </header>

    <div class="packages">
        <div class="package_heading">
            <h4>Best international packages for you</h4>
            <p>choose your next destination</p>
        </div>

        <div class="cards">

            <div class="card">
                <h3>Lotus-Delhi</h3>
                <div class="img_text">
                    <img src="img/lotus_temple.jpg" alt="error">
                    <h4>Included Air ticket, Breakfast, Tours, Airport visit</h4>
                </div>

                <div class="cont_box">
                    <div class="price">
                        <div class="heartchat">
                            <i class="bi bi-heart-fill"><span>8000</span></i>
                            <i class="bi bi-chat-fill"><span>689</span></i>
                        </div>
                        <div class="infoprice">
                            <a href="#">More Info</a>
                            <h4>$2600</h4>
                        </div>
                    </div>

                    <div class="days">
                        5 Days <br> India
                    </div>

                </div>
            </div>

            <div class="card">
                <h3>Burj-Khalifa DXB</h3>
                <div class="img_text">
                    <img src="img/burjkhlifa.jpg" alt="error">
                    <h4>Included Air ticket, Breakfast, Tours, Airport visit</h4>
                </div>

                <div class="cont_box">
                    <div class="price">
                        <div class="heartchat">
                            <i class="bi bi-heart-fill"><span>8000</span></i>
                            <i class="bi bi-chat-fill"><span>689</span></i>
                        </div>
                        <div class="infoprice">
                            <a href="#">More Info</a>
                            <h4>$2600</h4>
                        </div>
                    </div>

                    <div class="days">
                        5 Days <br> Dubai
                    </div>

                </div>
            </div>

            <div class="card">
                <h3>Piramids Egypt</h3>
                <div class="img_text">
                    <img src="img/piramids.jpg" alt="error">
                    <h4>Included Air ticket, Breakfast, Tours, Airport visit</h4>
                </div>

                <div class="cont_box">
                    <div class="price">
                        <div class="heartchat">
                            <i class="bi bi-heart-fill"><span>8000</span></i>
                            <i class="bi bi-chat-fill"><span>689</span></i>
                        </div>
                        <div class="infoprice">
                            <a href="#">More Info</a>
                            <h4>$2600</h4>
                        </div>
                    </div>

                    <div class="days">
                        5 Days <br> Egypt
                    </div>

                </div>
            </div>

            <div class="card">
                <h3>Mountain-Vietnam</h3>
                <div class="img_text">
                    <img src="img/mountain.jpg" alt="error">
                    <h4>Included Air ticket, Breakfast, Tours, Airport visit</h4>
                </div>

                <div class="cont_box">
                    <div class="price">
                        <div class="heartchat">
                            <i class="bi bi-heart-fill"><span>8000</span></i>
                            <i class="bi bi-chat-fill"><span>689</span></i>
                        </div>
                        <div class="infoprice">
                            <a href="#">More Info</a>
                            <h4>$2600</h4>
                        </div>
                    </div>

                    <div class="days">
                        5 Days <br> Vietnam
                    </div>

                </div>
            </div>


        </div>
    </div>

    <div class="destination">
        <div class="text_box">
            <h2>Our destination</h2>
            <p>choose your next destination</p>
            <ul>
                <li>India</li>
                <li>United State</li>
                <li>Egypt</li>
                <li>Vietnam</li>
                <li>Dubai</li>
                <li>Russia</li>
                <li>Brazil</li>
            </ul>
            <h4>Included Air ticket, Breakfast, Tours, Airport visit</h4>
            <button>More Info</button>

        </div>
        <div class="img_box">
            <img src="img/Main_plan.png" alt="">
        </div>
    </div>

    <footer>
        <div class="subscribe">
            <h3>Subscribe <br> & get special discount</h3>
            <p>The journey of thousand miles begin with a single step</p>
    
            <div class="inputs">
                <input type="text" placeholder="Enter Email address">
                <button href="index.html">Subscribe</button>
            </div>
            <ul>
                <li>7,000<br> <h6>Happy customers</h6></li>
                <li>225<br> <h6>Global partnerships</h6></li>
                <li>187<br> <h6>Industry Awards</h6></li>
                <li>10,000+<br>  <h6>Subscribers</h6></li>
            </ul>
        </div>
    </footer>
    <div class = "loginbox">  
        <img src="https://cdn2.iconfinder.com/data/icons/audio-16/96/user_avatar_profile_login_button_account_member-512.png" alt="error" class="avatar">

        <h2>Login here</h2>  
        <form name="f1" action = "authentication.php" onsubmit = "return validation()" method = "POST">  
                <p>Email</p> 
                <input type = "email" id ="user" name  = "em" placeholder="Enter your email"/>  
                <p> Password</p>                   
                <input type = "password" id ="pass" name  = "ps" placeholder="Enter Password"/>  
             
             
                <input type =  "submit" value = "Login" />  
              <a href="#">forgot password</a><br>
            <a href="register.php">don't have an account</a>
        </form>  
    </div>  
     <!-- validation for empty field    -->
    <script>  
            function validation()  
            {  
                var id=document.f1.user.value;  
                var ps=document.f1.pass.value;  
                if(id.length=="" && ps.length=="") {  
                    alert("User Name and Password fields are empty");  
                    return false;  
                }  
                else  
                {  
                    if(id.length=="") {  
                        alert("User Name is empty");  
                        return false;  
                    }   
                    if (ps.length=="") {  
                    alert("Password field is empty");  
                    return false;  
                    }  
                }                             
            }  
        </script>  
</body>     
</html>
