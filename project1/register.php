<?PHP
error_reporting(0); 
session_start();
include('connection.php'); 

// $fname=$lname=$email=$contact=$gender=$pwd=$cpwd=$data=$user="";
if(isset($_POST['register'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $contact=$_POST['contact'];
    $gender=$_POST['mygender'];
    $pwd=$_POST['pwd'];
    $cpwd=$_POST['cpwd'];

    if($pwd != $cpwd){
        echo   '<script>  alert("Password not matched...!! ") </script>';  
    }

    else if(empty($fname) || empty($lname) || empty($email) || empty($contact) || empty($gender) || empty($pwd)|| empty($cpwd)){
        echo   '<script>
                    console.log("reached");
                    alert("complete registration details...!! ")
                </script>';
    }

    else{
        $query_insert= "INSERT INTO user VALUES ('$fname', '$lname', '$email', '$contact', '$gender', '$pwd', '$cpwd')";
        $data=mysqli_query($conn,$query_insert);
        
        if($data){
            echo  '<script>
                        window.location.href = "login.php";
                        alert("Registration Successfull !!")
                    </script>';
        }
        else{
           echo    'failed';
        }
    }
    
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style1.css">
    <title>Travel agency</title>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu&display=swap');
        body:before {
            content: '';
            position: absolute;
            background: rgb(0 0 0 / 70%);
            width: 100%;
            height: 400%;
            z-index: 2;
            backdrop-filter: blur(0px);
            margin: 0;
        }

        body {
            font-family: 'Ubuntu', sans-serif;
        }

        .container {
            width: 350px;
            height: 420px;
            box-sizing: border-box;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border-radius: 10px;
            padding: 50px 20px;
            z-index: 2;
            position: fixed;
            background: transparent;
            background-color: #ffffffd3;
            font-family: sans-serif;
            font-family: 'Ubuntu', sans-serif;
        }

        .container h3 {
            /* border: 2px solid blue; */
            text-align: center;
            margin: 0;
            position: relative;
            margin: 10px;
            font-size: 22px;
        }

        .container form {
            padding: 10px;
            margin-top:20px;
            color:1px solid blue;

        }

        .container form input {
            width: 88%;
            display: block;
            padding: 2px;
            margin: 10px auto;
            padding: 8px 2%;
            border: 1px solid black;
            font-size: 12px;
            font-weight: bold;
            border-radius: 3px;
            color: black;
            background-color: transparent;
            outline: none;
            font-family: 'Ubuntu', sans-serif;
            border:1px solid;
        }
        ::placeholder{
            color:black;
            margin:auto;
        }

        .container .name {
            /* border: 1px solid black; */
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 92%;
            margin: auto;
        }

        .container form .name input {
            /* border: 2px solid blue; */
            margin: 0;
            width: 110px;
            border-radius: 3px;
            font-family: 'Ubuntu', sans-serif;
        }

        .container form .gender {
            border: 1px solid black;
            margin: auto;
            width: 88%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            font-size: 12px;
            font-weight: 600;
            padding: 8px 2%;
            border-radius: 3px;
            font-family: 'Ubuntu', sans-serif;
        }

        .container form .gender input[type="radio"] {
            margin: 0;
            padding: 0;
            background: transparent;
        }

        /* .container form .btn {
            border: 2px solid blue;
        } */

        .container form .btn input[type="submit"] {
            width: 92%;
            border: none;
            outline: none;
            cursor: pointer;
            background-color: rgb(115 192 226);
            padding: 8px;
            position: relative;
            font-size: 14px;
            font-weight: 600;
            margin-top: 10px;
            border-radius: 5px;
            box-shadow: 0px 0px 15px -10px rgb(0 0 0);
            font-family: 'Ubuntu', sans-serif;
            border:1px solid rgb(0, 179, 255);
            transition: .2s linear;
        }

        .container form .btn input[type="submit"]:hover {
            background-color: rgb(0, 179, 255);
            font-size: 15px;
        }

        .avatar {
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
                <li><a href="index1.html">Home</a></li>
                <li><a href="#">Discover</a></li>
                <li><a href="#">Special deals</a></li>
                <li><a href="#">About</a></li>
                <li><a href="login.php">Login</a></li>
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

    <div class="container">
        <img src="https://cdn2.iconfinder.com/data/icons/audio-16/96/user_avatar_profile_login_button_account_member-512.png"
            alt="error" class="avatar">
        <h3>Registration Form</h3>

        <form method="POST">
            <div class="name">
                <input type="text" placeholder="First Name" name="fname">
                <input type="text" placeholder="Last Name" name="lname">
            </div>
            <div class="Email">
                <input type="email" name="email" id="" placeholder="Email">
            </div>
            <div class="contact">
                <input type="number" name="contact" id="" placeholder="Contact No">
            </div>
            <div class="gender">
                Male <input type="radio" name="mygender" value="male"> Female <input type="radio" name="mygender" value="female"> Other
                <input type="radio" name="mygender" value="other">
            </div>

            <div class="password">
                <input type="password" name="pwd" id="" placeholder="Password">
                <input type="password" name="cpwd" placeholder="Retype Password">
            </div>
            <div class="btn">
                <input type="submit" value="Register" name="register">
            </div>
        </form>


    </div>
</body>

</html>
