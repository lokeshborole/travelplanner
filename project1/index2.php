<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style1.css">
    <title>Travel agency</title>
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
                <li><a href="logout.php">Logout</a></li>
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
                                <option value="Mumbai">Mumbai</option>
                                <option value="Delhi">Delhi</option>
                                <option value="Jaipur" >Jaipur </option>
                                <option value="Kolkata">Kolkata</option>
                                <option value="Agra">Agra</option>
                                <option value="Ladakh">Ladakh</option>
                                <option value="Manali">Manali</option>
                                <option value="Goa">Goa</option>
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
                                <a href="https://www.thrillophilia.com/things-to-do-in-mumbai-this-weekend">Know more</a>
                                <h5>Mumbai Central <br> <span>460$</span> </h5>

                            </div>
                        </div>


                        <div class="card">
                            <img src="img/delhi.jpg" alt="">
                            <div class="btn_city">
                                <a href="https://www.thrillophilia.com/states/delhi">Know more</a>
                                <h5>New Delhi<br> <span>870$</span> </h5>

                            </div>
                        </div>


                        <div class="card">
                            <img src="img/jaipur.jpg" alt="">
                            <div class="btn_city">
                                <a href="https://www.thrillophilia.com/places-to-visit-in-jaipur-in-2-days">Know more</a>
                                <h5>Jaipur<br> <span>660$</span> </h5>

                            </div>
                        </div>


                        <div class="card">
                            <img src="img/kolkata.jpg" alt="">
                            <div class="btn_city">
                                <a href="https://www.thrillophilia.com/cities/kolkata">Know more</a>
                                <h5>Kolkata<br> <span>730 $</span> </h5>
                            </div>
                        </div>
                    </div>

                    <div class="cards">
                        <div class="card">
                            <img src="img/agra.jpg" alt="">
                            <div class="btn_city">
                                <a href="https://www.thrillophilia.com/cities/agra">Know more</a>
                                <h5>Agra<br> <span>₹ 1100 </span> </h5>

                            </div>
                        </div>


                        <div class="card">
                            <img src="img/ladakh.jpg" alt="">
                            <div class="btn_city">
                                <a href="https://www.thrillophilia.com/leh-to-itinerary">Know more</a>
                                <h5>Ladakh<br> <span>870$</span> </h5>

                            </div>
                        </div>


                        <div class="card">
                            <img src="img/manali2.jpeg" alt="">
                            <div class="btn_city">
                                <a href="https://www.thrillophilia.com/cities/manali">Know more</a>
                                <h5>Manali<br> <span>660$</span> </h5>

                            </div>
                        </div>


                        <div class="card">
                            <img src="img/goa.jpg" alt="">
                            <div class="btn_city">
                                <a href="https://www.thrillophilia.com/places-to-visit-in-goa-in-2-days">Know more</a>
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
                <h3>Switzerland</h3>
                <div class="img_text">
                    <img src="img/sw.webp" alt="error">
                    <h4>Included Air ticket, Breakfast, Tours, Airport visit</h4>
                </div>

                <div class="cont_box">
                    <div class="price">
                        <div class="heartchat">
                            <i class="bi bi-heart-fill"><span>8000</span></i>
                            <i class="bi bi-chat-fill"><span>689</span></i>
                        </div>
                        <div class="infoprice">
                            <a href="https://www.thrillophilia.com/countries/switzerland">More Info</a>
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
                            <a href="https://www.thrillophilia.com/cities/dubai">More Info</a>
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
                            <a href="https://www.thrillophilia.com/countries/egypt">More Info</a>
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
                            <a href="https://www.thrillophilia.com/countries/vietnam">More Info</a>
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
                <button href="index1.php">Subscribe</button>
            </div>
            <ul>
                <li>7,000<br> <h6>Happy customers</h6></li>
                <li>225<br> <h6>Global partnerships</h6></li>
                <li>187<br> <h6>Industry Awards</h6></li>
                <li>10,000+<br>  <h6>Subscribers</h6></li>
            </ul>
        </div>
        <div class="contact1">
            <h5>For any queries contact -</h5>
            <h5>mrtravel84@gmail.com</h5>
        </div>
    </footer>

    <script src="app.js"></script>
</body>

</html>