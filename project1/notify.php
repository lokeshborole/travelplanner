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
        body {
            background-size: cover;
            background-position: center;
            font-family: 'Ubuntu', sans-serif;
        }

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

        .popup_box {
            height: 200px;
            width: 400px;
            color: #000;
            top: 55%;
            left: 50%;
            position: fixed;
            transform: translate(-50%, -50%);
            box-sizing: border-box;
            border-radius: 30px;
            background: transparent;
            background-color: #ffffffd3;
            z-index: 2;
            backdrop-filter: blur(5px);
        }

        .popup_box h3{
            padding:20px 30px;
            margin:0;
            text-align: center;
            /* border:1px solid blue; */

        }

        .popup_box p{
            text-align: center;
            /* border:1px solid blue; */
            margin:0;
        }

        .inputs {
            border-radius: 20px;
            border: 1px solid rgb(131, 125, 125);
            width: 300px;
            margin: auto;
            margin-top: 20px;
            box-shadow: 0px 3px 20px 1px rgb(113, 107, 107, 0.5);
            display: flex;
            justify-content: space-between;
        }
        ::placeholder{
            color: rgb(65, 65, 65);
        }

        .inputs input {
            width: auto;
            outline: none;
            border: none;
            padding: 0;
            text-align: center;
            position: relative;
            left: 20px;
            color:black;
            background-color: transparent;

        }

        .inputs a {
            border: none;
            outline: none;
            background-color: #000;
            color: #fff;
            border-radius: 20px;
            padding: 10px 20px;
            cursor: pointer;
            text-decoration: none;
        }
        .inputs a:hover {
            background-color: rgb(49, 49, 49);
        }


    </style>
</head>

<body>
    <header>
        <nav>
            <h4>MR.travel</h4>
            <ul>
                <li><a href="index1.php">Home</a></li>
                <li><a href="#">Discover</a></li>
                <li><a href="#">Special deals</a></li>
                <li><a href="#">About</a></li>
                <li><a href="login.php">Login</a></li>
                <li><a href="register.php">Register</a></li>
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
                        <a href="notify.php">Notify <i class="bi bi-bell"></i></a>
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

    <div class="popup_box">
        <h3>Enter your Email</h3>
        <p>we will notify you the best deals according to the destination and date of journey</p>
        <div class="inputs">
            <input type="text" placeholder="Enter Email address">
            <a href="index1.php">Subscribe</a>
        </div>
    </div>

    <script src="app.js"></script>
</body>

</html>