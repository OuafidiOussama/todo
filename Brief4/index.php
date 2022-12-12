<?php
include "phpconnection/connection.php";
session_start();
 if (isset($_POST['logout'])){
    session_destroy();
 }

$selectclubs = "select * from  clubs ";
$selectevents = "select * from  events ";
$queryclubs = mysqli_query($conection,$selectclubs);  
$queryevents = mysqli_query($conection,$selectevents);  

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Youcode Clubs</title>
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Css link -->
    <link rel="stylesheet" href="./css/visit.css">

    <!-- bootstrap Link -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- bootstrap Link -->
    <!-- fontawsome icons -->
    <script src="https://kit.fontawesome.com/84ef55bb95.js" crossorigin="anonymous"></script>
    <!-- javscript Link -->
    
</head>

<body>
    <div class="all">
    <header class="header">
        <div class="navbar">
            <h1 class="logo"><a href="#">LOGO</a></h1>
            <ul class="navbar-list">
                <li><a href="#landing">Home</a></li>
                <li><a href="#clubs">Clubs</a></li>
                <li><a href="#events">Events</a></li>
            </ul>
        </div>
        
    </header>

    <div class="landing" id="landing">
        <div class="container1">
            <!-- <img class="back-ground" src="./assets/backgrounds/background1.jpg" alt=""> -->
            <img class="img" src="./assets/images/logo-youcode-ma.png" alt="">
            <h2 class="headline">Welcome To YouCode Clubs Website</h2>
            <p class="description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi sed qui magnam placeat voluptate expedita, ipsum ipsa modi hic ab quidem ut cum. Voluptatem praesentium rem magnam, nam asperiores aperiam!
                Lorem ipsum dolor sit, amet consectetur adipisicing elit.

            </p>
            <button class="btn">Login</button>
        </div>

        
        

    </div>




    <!-- HOT EVENT -->
    <section class="hot-event">
            <div class="container">
                <div class="col-md-12 py-3 py-md-0">
                    <div class="card0">
                        <h3 class="address">HOT EVENTS</h3>
                        <hr>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4 py-3 py-md-0">
                                    <div class="card">
                                        <img src="./assets/Events/events.jpg" alt="" class="card2 image-top" height="200px">
                                        <div class="card-body">
                                            <h5 class="card-titel text-center">EVENT NAME</h5>
                                            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ipsam vitae facere eius modi iure possimus, soluta ea inventore. Omnis!</p>
                                            <div id="btn2" class="text-center">14-07-2022</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 py-3 py-md-0">
                                    <div class="card">
                                        <img src="./assets/Events/events.jpg" alt="" class="card2 image-top" height="200px">
                                        <div class="card-body">
                                            <h5 class="card-titel text-center">EVENT NAME</h5>
                                            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ipsam vitae facere eius modi iure possimus, soluta ea inventore. Omnis!</p>
                                            <div id="btn2" class="text-center">14-07-2022</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 py-3 py-md-0">
                                    <div class="card">
                                        <img src="./assets/Events/events.jpg" alt="" class="card2 image-top" height="200px">
                                        <div class="card-body">
                                            <h5 class="card-titel text-center">EVENT NAME</h5>
                                            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ipsam vitae facere eius modi iure possimus, soluta ea inventore. Omnis!</p>
                                            <div id="btn2" class="text-center">14-07-2022</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                </div>
    
            </div>

    </section>
    
    <!-- HOT EVENT -->


    <!-- ALL EVENT -->
    <section class="events" id="events">
        <div class="container">
            <div class="col-md-12 py-3 py-md-0">
                <div class="card0">
                    <h3 class="address">EVENTS</h3>
                    <hr>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 py-3 py-md-0">
                                <div class="card">
                                    <img src="./assets/Events/events.jpg" alt="" class="card2 image-top" height="200px">
                                    <div class="card-body0">
                                        <h5 class="card-titel text-center">EVENT NAME</h5>
                                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ipsam vitae facere eius modi iure possimus, soluta ea inventore. Omnis!</p>
                                        <div id="btn2" class="text-center">14-07-2022</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 py-3 py-md-0">
                                <div class="card">
                                    <img src="./assets/Events/events.jpg" alt="" class="card2 image-top" height="200px">
                                    <div class="card-body0">
                                        <h5 class="card-titel text-center">EVENT NAME</h5>
                                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ipsam vitae facere eius modi iure possimus, soluta ea inventore. Omnis!</p>
                                        <div id="btn2" class="text-center">14-07-2022</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 py-3 py-md-0" >
                                <div class="card">
                                    <img src="./assets/Events/events.jpg" alt="" class="card2 image-top" height="200px">
                                    <div class="card-body0">
                                        <h5 class="card-titel text-center">EVENT NAME</h5>
                                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ipsam vitae facere eius modi iure possimus, soluta ea inventore. Omnis!</p>
                                        <div id="btn2" class="text-center">14-07-2022</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shownon1 hide">
                        <div class="row">                                
                        <?php
                                        $eventsnumber=mysqli_num_rows($queryevents);
                                            if($eventsnumber>0){
                                                while($result1=mysqli_fetch_assoc($queryevents)){
                                                    echo '
                                                            
                                                                    <div class="col-md-4 py-3 py-md-0">
                                                                            <div class="card">
                                                                                <div class="edit-items">
                                                                                    <img src="./assets/Events/events.jpg" alt="" class="card2 image-top" height="200px" style="width: 100%;">
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <h5 class="card-titel text-center">'.$result1["name"].'</h5>
                                                                                    <p class="text-center">'.$result1["description"].'</p>
                                                                                    <p class="text-center">'.$result1["date"].'</p>

                                                                                </div>
                                                                            </div>
                                                                    </div>
                                                            
                                                    ';
                                                }
                                            }
                                
                                
                                    ?> 
                            </div>

                    </div>
                    <div class="btn3"><button >View More <i class="fa-solid fa-caret-down"></i></button></div>
                </div>
                
            </div>

        </div>
        
    </section>
    <!-- ALL EVENT -->



    <!-- ALL CLUBS -->
    <section class="clubs" id="clubs">
        <div class="container">
            <div class="col-md-12 py-3 py-md-0">
                <div class="card0">
                    <h3 class="address">CLUBS</h3>
                    <hr>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 py-3 py-md-0">
                                <div class="card">
                                    <img src="./assets/Clubs/creative-woman-lady-girl-model-shine-blue-green-orange-colors-new-bright-conceptual-art-make-up-glows-under-ultraviolet-light-108934495.jpg" alt="" class="card2 image-top" height="200px">
                                    <div class="card-body">
                                        <h5 class="card-titel text-center">ART CLUB</h5>
                                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ipsam vitae facere eius modi iure possimus, soluta ea inventore. Omnis!</p>
                                        <div id="btn2" class="text-center"><button class="btn2">More</button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 py-3 py-md-0">
                                <div class="card">
                                    <img src="./assets/Clubs/robotics.png" alt="" class="card2 image-top" height="200px">
                                    <div class="card-body">
                                        <h5 class="card-titel text-center">ROBOTICS NAME</h5>
                                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ipsam vitae facere eius modi iure possimus, soluta ea inventore. Omnis!</p>
                                        <div id="btn2" class="text-center"><button class="btn2">More</button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 py-3 py-md-0">
                                <div class="card">
                                    <img src="./assets/Clubs/sports.jpg" alt="" class="card2 image-top" height="200px">
                                    <div class="card-body">
                                        <h5 class="card-titel text-center">SPORTS CLUB</h5>
                                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ipsam vitae facere eius modi iure possimus, soluta ea inventore. Omnis!</p>
                                        <div id="btn2" class="text-center"><button class="btn2">More</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shownon2 hide">
                            <div class="row" style="margin-top: 50px;">
                            <?php
                            
                                    $clubnumber=mysqli_num_rows($queryclubs);
                                        if($clubnumber>0){
                                            while($result=mysqli_fetch_assoc($queryclubs)){
                                                echo '
                                                        
                                                                <div class="col-md-4 py-3 py-md-0">
                                                                        <div class="card">
                                                                            <div class="edit-items">
                                                                                <img src="./clubs_image/'.$result["logoSrc"].'" alt="" class="card2 image-top" height="200px" style="width: 100%;">
                                                                
                                                                            </div>
                                                                            <div class="card-body">
                                                                                <h5 class="card-titel text-center">'.$result["name"].'</h5>
                                                                                <p class="text-center">'.$result["discription"].'</p>
                                                                                <div id="btn2" class="text-center"><button class="btn2">More</button></div>

                                                                            </div>
                                                                        </div>
                                                                </div>
                                                        
                                                ';
                                            }
                                        }
                            
                            
                                ?>
                                
                            </div>
                            
                        </div>

                    </div>
                    <div class="btn4"><button >View More <i class="fa-solid fa-caret-down"></i></button></div>
                </div>
            </div>

        </div>
        
    </section>
    <!-- ALL CLUBS -->



   
    <hr>

    <footer class="footer">
        <h5>&copy; Copyright 2022 Ouafidi&Jaouad</h5>

    </footer>
</div>

    <div class="popup hide">
        <div class="close-btn-login"><i class="fa-solid fa-xmark"></i></div>
        <form action="phpconnection/login.php" method="POST" class="form">
            <h2>Log in</h2>
            <div class="form-element">
                <label for="Email">Email</label>
                <input type="email" name="email" id="email" placeholder="Email">
                <label for="password">password</label>
                <input type="password" name="password" id="password" placeholder="password">
            </div>
            <?php if(isset($_GET['error'])) echo "wrong email or password";?>
            <div class="form-element">
                <button name="submit" type="submit">Sign in</button>
            </div>
        </form>
        
    </div>


    <div class="more hide">
        <div class="close-btn-more"><i class="fa-solid fa-xmark"></i></div>
        <div class="content">
            <div class="card1">
                <div class="card-content">
                    <div class="backgroundimg">
                        <img src="./assets/images/logo-youcode-ma.png" alt="">
                    </div>
                    <div class="image">
                        <img src="./assets/Clubs/creative-woman-lady-girl-model-shine-blue-green-orange-colors-new-bright-conceptual-art-make-up-glows-under-ultraviolet-light-108934495.jpg" alt="">
                    </div>
                    <div class="card-detail">
                        <span>CLUB NAME</span>
                        <span>30-07-2022</span>
                        <div class="box">
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Beatae unde vel ab laboriosam laudantium explicabo aspernatur sint voluptas soluta ipsa rem, qui corrupti necessitatibus eligendi, velit culpa assumenda accusantium placeat.</p>
                        </div>
                        <h5>Members</h5>
                        <div class="member">
                            <div class="rep">
                                <div class="card0">
                                    <h6 class="address">Representatives</h6>
                                    <hr>
                                    <div class="members-card">
                                        <a href="#" class="info"><div class="pic"><img src="./assets/Members/ouafidi.jfif" alt=""></div></a>
                                        <div class="pic"><img src="./assets/Members/ouafidi.jfif" alt=""></div>
                                        <div class="pic"><img src="./assets/Members/ouafidi.jfif" alt=""></div>
                                        <div class="pic"><img src="./assets/Members/ouafidi.jfif" alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mem">
                                <div class="card0">
                                    <h6 class="address">Learners</h6>
                                    <hr>
                                    <div class="members-card">
                                        <div class="pic"><img src="./assets/Members/jaouad.jfif" alt=""></div>
                                        <div class="pic"><img src="./assets/Members/jaouad.jfif" alt=""></div>
                                        <div class="pic"><img src="./assets/Members/jaouad.jfif" alt=""></div>
                                        <div class="pic"><img src="./assets/Members/jaouad.jfif" alt=""></div>
                                        <div class="pic"><img src="./assets/Members/jaouad.jfif" alt=""></div>
                                        <div class="pic"><img src="./assets/Members/jaouad.jfif" alt=""></div>
                                        <div class="pic"><img src="./assets/Members/jaouad.jfif" alt=""></div>
                                        <div class="pic"><img src="./assets/Members/jaouad.jfif" alt=""></div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    <div class="member-info-rep hide">

        <div class="content">
            <div class="card1">
                <div class="card-content">
                    <div class="image">
                        <img src="./assets/Members/ouafidi.jfif" alt="">
                    </div>
                    <div class="card-detail">
                        <span>Full Name:</span>
                        <div class="box">
                            <p>OUAFIDI OUSSAMA</p>
                        </div>
                        <span>Age:</span>
                        <div class="box">
                            <p>22 Years Old</p>
                        </div>
                        <span>Class:</span>
                        <div class="box">
                            <p>ADA LOVELACE</p>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        
    </div>

    
</body>
<script src="./javascript/Main.js"></script>    
<script type="text/javascript">
    <?php
        if(isset($_GET['error']))
          echo 'document.querySelector(".popup").classList.remove("hide")';
    ?>
</script>
</html>