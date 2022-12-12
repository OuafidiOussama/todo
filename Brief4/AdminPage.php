<?php
include "phpconnection/connection.php";
session_start();
 if ($_SESSION['admin']!='true'){
    header("Location:./index.php");
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
    

    <!-- bootstrap Link -->
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- bootstrap Link -->
    <!-- Css link -->
    <link rel="stylesheet" href="./css/admin.css">

    <!-- fontawsome icons -->
    <script src="https://kit.fontawesome.com/84ef55bb95.js" crossorigin="anonymous"></script>
    
    
</head>

<body>
    <header class="header">
        <div class="navbar">
            <h1 class="logo"><a href="#">LOGO</a></h1>
            <ul class="navbar-list">
                <li><a href="#">Home</a></li>
                <li><a href="#">Clubs</a></li>
                <li><a href="#">Events</a></li>
            </ul>
            
            
        </div>
        
    </header>
    <div class="logout">
    <form action="index.php" method="POST">
    <button type="submit" name="logout" class="btn">Log Out</button>
    </form>
    </div>

    <!-- ALL EVENT -->
    <section class="events">
        <div class="container">
            <div class="col-md-12 py-3 py-md-0">
                <div class="card">
                    <h3 class="address">EVENTS</h3>
                    <hr>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 py-3 py-md-0">
                                <div class="card-add-event">
                                    <img src="./assets/images/imgbin_computer-icons-plus-sign-png.png" alt="" class="card image-center">
                                </div>
                            </div>
                            <div class="col-md-4 py-3 py-md-0">
                                <div class="card">
                                    <img src="./assets/Events/events.jpg" alt="" class="card image-top" height="200px">
                                    <a href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="#"><i class="fa-solid fa-trash"></i></a>
                                    <div class="card-body">
                                        <h5 class="card-titel text-center">EVENT NAME</h5>
                                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ipsam vitae facere eius modi iure possimus, soluta ea inventore. Omnis!</p>
                                        <div class="text-center">30-07-2022</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 py-3 py-md-0" >
                                <div class="card">
                                    <img src="./assets/Events/events.jpg" alt="" class="card image-top" height="200px">
                                    <a href="#"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="#"><i class="fa-solid fa-trash"></i></a>
                                    <div class="card-body">
                                        <h5 class="card-titel text-center">EVENT NAME</h5>
                                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ipsam vitae facere eius modi iure possimus, soluta ea inventore. Omnis!</p>
                                        <div class="text-center">30-07-2022</div>
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
                                                                    <div class="col-md-4 py-3 py-md-0" >
                                                                            <div class="card" style="margin-top: 40px;">
                                                                                <div class="edit-items">
                                                                                    <img src="./assets/Events/events.jpg" alt="" class="card image-top" height="200px" style="width: 100%;">
                                                                                    <a id='.$result1["idevents"].'"><i class="fa-solid fa-pen-to-square event-update"></i></a>
                                                                                    <a href="./phpconnection/delete.php?deleteid='.$result1["idevents"].'"><i class="fa-solid fa-trash"></i></a>
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

                    </div>
                    <div class="btn3"><button >View More <i class="fa-solid fa-caret-down"></i></button></div>
                </div>
                <!-- <div class="container"></div> -->
            </div>

        </div>
        
    </section>
    <!-- ALL EVENT -->



    <!-- ALL CLUBS -->
    <section class="clubs">
        <div class="container">
            <div class="col-md-12 py-3 py-md-0">
                <div class="card">
                    <h3 class="address">CLUBS</h3>
                    <hr>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4 py-3 py-md-0">
                                <div class="card-add-club">
                                    <img src="./assets/images/imgbin_computer-icons-plus-sign-png.png" alt="" class="card image-center">
                                </div>
                            </div>
                            <div class="col-md-4 py-3 py-md-0">
                                <div class="card">
                                    <img src="./assets/Clubs/creative-woman-lady-girl-model-shine-blue-green-orange-colors-new-bright-conceptual-art-make-up-glows-under-ultraviolet-light-108934495.jpg" alt="" class="card image-top" height="200px">
                                    <div class="card-body">
                                        <h5 class="card-titel text-center">ART CLUB</h5>
                                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ipsam vitae facere eius modi iure possimus, soluta ea inventore. Omnis!</p>
                                        <div id="btn2" class="text-center"><button class="btn2">More</button></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 py-3 py-md-0">
                                <div class="card">
                                    <img src="./assets/Clubs/robotics.png" alt="" class="card image-top" height="200px">
                                    <div class="card-body">
                                        <h5 class="card-titel text-center">ROBOTICS CLUB</h5>
                                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ipsam vitae facere eius modi iure possimus, soluta ea inventore. Omnis!</p>
                                        <div id="btn2" class="text-center"><button>More</button></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="shownon2 hide">
                            <div class="row">
                            <?php
                                            $clubsnumber=mysqli_num_rows($queryclubs);
                                            if($clubsnumber>0){
                                                while($result=mysqli_fetch_assoc($queryclubs)){
                                                    echo '
                                                                    <div class="col-md-4 py-3 py-md-0" >
                                                                            <div class="card" style="margin-top: 40px;">
                                                                                <div class="edit-items">
                                                                                    <img src="./clubs_image/'.$result["logoSrc"].'" alt="" class="card image-top" height="200px" style="width: 100%;">
                                                                                    <a href="./adminPage.php?updateid='.$result["idclubs"].'"><i class="fa-solid fa-pen-to-square club-update"></i></a>
                                                                                    <a href="./phpconnection/delete.php?deleteid='.$result["idclubs"].'"><i class="fa-solid fa-trash"></i></a>
                                                                                </div>
                                                                                <div class="card-body">
                                                                                    <h5 class="card-titel text-center">'.$result["name"].'</h5>
                                                                                    <p class="text-center">'.$result["discription"].'</p>
                                                                                    <p class="text-center">'.$result["date"].'</p>
                
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



    <!-- <section class="all-event">
        
    <div class="container">
        <h3 class="text-center" style="padding-top: 30px;">ALL CLUBS</h3>
        <div class="row" style="margin-top: 50px;">
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <img src="./assets/Clubs/creative-woman-lady-girl-model-shine-blue-green-orange-colors-new-bright-conceptual-art-make-up-glows-under-ultraviolet-light-108934495.jpg" alt="" class="card image-top" height="200px">
                    <div class="card-body">
                        <h5 class="card-titel text-center">CLUB NAME</h5>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ipsam vitae facere eius modi iure possimus, soluta ea inventore. Omnis!</p>
                        <div id="btn2" class="text-center"><button>View More</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <img src="./assets/Clubs/creative-woman-lady-girl-model-shine-blue-green-orange-colors-new-bright-conceptual-art-make-up-glows-under-ultraviolet-light-108934495.jpg" alt="" class="card image-top" height="200px">
                    <div class="card-body">
                        <h5 class="card-titel text-center">CLUB NAME</h5>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ipsam vitae facere eius modi iure possimus, soluta ea inventore. Omnis!</p>
                        <div id="btn2" class="text-center"><button>View More</button></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 py-3 py-md-0">
                <div class="card">
                    <img src="./assets/Clubs/creative-woman-lady-girl-model-shine-blue-green-orange-colors-new-bright-conceptual-art-make-up-glows-under-ultraviolet-light-108934495.jpg" alt="" class="card image-top" height="200px">
                    <div class="card-body">
                        <h5 class="card-titel text-center">CLUB NAME</h5>
                        <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam ipsam vitae facere eius modi iure possimus, soluta ea inventore. Omnis!</p>
                        <div id="btn2" class="text-center"><button>View More</button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section> -->
    <!-- ALL CLUBS -->
    <hr>

    <footer class="footer">
        <h5>&copy; Copyright 2022 Ouafidi&Jaouad</h5>


    </footer>


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
                                        <a href="#" class="info"><div class="pic1"><img src="./assets/Members/ouafidi.jfif" alt=""></div></a>
                                        <div class="pic1"><img src="./assets/Members/ouafidi.jfif" alt=""></div>
                                        <div class="pic1"><img src="./assets/Members/ouafidi.jfif" alt=""></div>
                                        <div class="pic1"><img src="./assets/Members/ouafidi.jfif" alt=""></div>
                                    </div>
                                </div>
                            </div>
                            <div class="mem">
                                <div class="card0">
                                    <h6 class="address">Learners</h6>
                                    <hr>
                                    <div class="members-card">
                                        <div class="pic2"><img src="./assets/Members/jaouad.jfif" alt=""></div>
                                        <div class="pic2"><img src="./assets/Members/jaouad.jfif" alt=""></div>
                                        <div class="pic2"><img src="./assets/Members/jaouad.jfif" alt=""></div>
                                        <div class="pic2"><img src="./assets/Members/jaouad.jfif" alt=""></div>
                                        <div class="pic2"><img src="./assets/Members/jaouad.jfif" alt=""></div>
                                        <div class="pic2"><img src="./assets/Members/jaouad.jfif" alt=""></div>
                                        <div class="pic2"><img src="./assets/Members/jaouad.jfif" alt=""></div>
                                        <div class="pic2"><img src="./assets/Members/jaouad.jfif" alt=""></div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>









    <div class="add-event hide">
        <div class="close-btn-event"><i class="fa-solid fa-xmark"></i></div>
        <div class="content">
            <div class="card1">
                <div class="card-content">
                    <H3 class="text-center">ADD A NEW EVENT</H3>
                    <div class="backgroundimg">
                        <img src="./assets/images/logo-youcode-ma.png" alt="">
                    </div>

                    <form action="phpconnection/add.inc.php" method="post">

                    
                    <div class="card-detail">
                        <span><input name="Club_Name" type="text" class="feedback-input" placeholder=" Club Name" /></span>
                        <span><input name="Date_Of_Creation" type="date" class="feedback-input"/></span>
                        <div class="box">
                            <textarea name="Description" class="feedback-input" placeholder="Description"></textarea>
                        </div>
                        
                        
                            
                        </div>
                    </div>
                    <div class="sub-btns">
                        <input type="submit" value="Create"/>
		                <input type="cancel" value="Cancel" class="cancel-event"/>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div>  
    <div class="add-club hide">
        <div class="close-btn-add"><i class="fa-solid fa-xmark"></i></div>
        <div class="content">
            <div class="card1">
                <div class="card-content">
                    <H3 class="text-center">ADD A NEW CLUB test</H3>
                    <div class="backgroundimg">
                        <img src="./assets/images/logo-youcode-ma.png" alt="">
                    </div>

                    <form action="phpconnection/add.inc.php" method="post" enctype="multipart/form-data">

                    <div class="image add_image">
                        <input type="file" name="Club_Image"  class="add_club_image" id="file">
                        <a id="add-club-logo"><img src="./assets/images/imgbin_computer-icons-plus-sign-png.png" id="add-img"></a>
                    </div>
                    <div class="card-detail">
                        <span><input name="Club_Name" type="text" class="feedback-input" placeholder=" Club Name" /></span>
                        <span><input name="Date_Of_Creation" type="date" class="feedback-input"/></span>
                        <div class="box">
                            <textarea name="Description" class="feedback-input" placeholder="Description"></textarea>
                        </div>
                        <h5>Members</h5>
                        <div class="member">
                            <div class="rep">
                                <div class="card0">
                                    <h6 class="address">Representatives</h6>
                                    <hr>
                                    <div class="members-card">
                                        <a id="info"><div class="pic"><img src="./assets//images/imgbin_computer-icons-plus-sign-png.png" alt=""></div></a>
                                    </div>
                                </div>
                            </div>
                            <div class="mem">
                                <div class="card0">
                                    <h6 class="address">Learners</h6>
                                    <hr>
                                    <div class="members-card">
                                        <div class="pic"><img src="./assets/images/imgbin_computer-icons-plus-sign-png.png" alt=""></div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="sub-btns">
                        <input type="submit" name="submit"value="Create"/>
		                <input type="cancel" value="Cancel" class="cancel-club"/>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        
    </div> 
    
    

<?php

if (isset($_GET['updateid'])){
 $updateid= $_GET['updateid'];

 $clubupdate = "SELECT * from clubs where  idclubs='$updateid'";

 $queryclubs = mysqli_query($conection,$clubupdate);

 $query = mysqli_fetch_assoc($queryclubs);

    echo '
            <div class="update hide">
                <div class="close-btn-update"><i class="fa-solid fa-xmark"></i></div>
                <div class="content">
                    <div class="card1">
                        <div class="card-content">
                            <H3 class="text-center">UPDATE CLUB</H3>
                            <div class="backgroundimg">
                                <img src="./assets/images/logo-youcode-ma.png" alt="">
                            </div>

                            <form action="phpconnection/update.php" method="post" enctype="multipart/form-data">

                            <div class="image add_image">
                                <input type="file" name="Club_Image"  class="add_club_image" id="file">
                                <a id="add-club-logo"><img src="./clubs_image/'.$query["logoSrc"].'"  id="add-img" alt=""></a>
                            </div>

                            </div>  
                            <div class="card-detail">
                                <span><input name="Club_Name" type="text" class="feedback-input" value ="'.$query["name"].'" /></span>
                                <span><input name="Date_Of_Creation" type="date" value ="'.$query["date"].'" class="feedback-input"/></span>
                                <div class="box">
                                    <textarea name="Description" class="feedback-input" >'.$query["discription"].'</textarea>
                                </div>
                                <h5>Members</h5>
                                <div class="member">
                                    <div class="rep">
                                        <div class="card0">
                                            <h6 class="address">Representatives</h6>
                                            <hr>
                                            <div class="members-card">
                                                <a id="info"><div class="pic"><img src="./assets//images/imgbin_computer-icons-plus-sign-png.png" alt=""></div></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mem">
                                        <div class="card0">
                                            <h6 class="address">Learners</h6>
                                            <hr>
                                            <div class="members-card">
                                                <div class="pic"><img src="./assets/images/imgbin_computer-icons-plus-sign-png.png" alt=""></div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="sub-btns">
                                <input type="hidden" name="logoSrc" value="'.$query["logoSrc"].'"/>
                                <input type="hidden" name="id" value="'.$query["idclubs"].'"/>
                                <input type="submit" value="Update"/>
                                <input type="cancel" value="Cancel" class="cancel-update"/>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>';
        };

    ?>

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
<script src="./javascript/admin.js"></script>
<script src="./javascript/update.js"></script>
<script src="./javascript/changeimage.js"></script>
<script type="text/javascript">
    <?php
        if(isset($_GET['updateid']))
          echo 'document.querySelector(".update").classList.remove("hide")';
    ?>
</script>
</html>