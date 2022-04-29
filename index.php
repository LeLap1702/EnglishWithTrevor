<?php
require('hompage/php/config.php');

include('hompage/php/get_response.php');
include('hompage/php/indexs.php')
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./hompage/assets/styles/home.css">
    <link rel="icon" href="./hompage/assets/images/image__2_-removebg-preview.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <title>English Trevor</title>
</head>

<body>
    <header class="header" id="header">
        <nav class="nav containerer">
            <div class="nav__menu" id="nav__menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="index.php" class="nav_link active">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="hompage/php/detail.php" class="nav__link">Playlist</a>
                    </li>
                    <li class="nav__item">
                        <a href="#media" class="nav__link">Media</a>
                    </li>
                    <li class="nav__item">
                        <a href="#contact" class="nav__link">Contact</a>
                    </li>
                    <li class="nav__item">
                        <a href="hompage/php/blog.php" class="nav__link">Community</a>
                    </li>
                    <li class="nav__item">
                        <a href="#" class="nav__link">History</a>
                    </li>
                </ul>
            </div>
            <a href="#" onclick="openNav()" class="nav__opent"><i class="fas fa-bars"></i></a>
        </nav>
    </header>
    <div id="myNav" class="overlay">
        <div class="nav__menu-mobile" id="nav__menu">
            <button onclick="closeNav()" class="close1"> <i class="fas fa-times"></i></button>
            <ul class="nav__list-mobile">
                <li class="nav__item-mobile">
                    <a href="index.php" onclick="closeNav()" class="nav_link index">Home</a>
                </li>
                <li class="nav__item-mobile">
                    <a href="hompage/php/detail.php" onclick="closeNav()" class="nav__link">Playlist</a>
                </li>
                <li class="nav__item-mobile">
                    <a href="#media" onclick="closeNav()" class="nav__link">Media</a>
                </li>
                <li class="nav__item-mobile">
                    <a href="#contact" onclick="closeNav()" class="nav__link">Contact</a>
                </li>
                <li class="nav__item-mobile">
                    <a href="hompage/php/blog.php" onclick="closeNav()" class="nav__link">Community</a>
                </li>
                <li class="nav__item-mobile">
                    <a href="#" onclick="closeNav()" class="nav__link">History</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="imga-content" id="home">
        <img style="overflow:hidden" src="https://static.wixstatic.com/media/f2c112_f1b9ce1821714465bc134c15699d2a79~mv2.jpg/v1/fill/w_1583,h_1028,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/f2c112_f1b9ce1821714465bc134c15699d2a79~mv2.jpg alt=" 2020 PE Burden of Truth 4c - Shauna Town>
    </div>
    <span class="image-word">ENGLISH WITH TREVOR</span>

    <section class="container__video">
        <div class="cideo">
            <?php
            include("hompage/php/modules.php");
            $videoDemos = select_table("*", "videodemo", $mysqli);
            $playlists = select_table("*", "playlist", $mysqli);
            $sideo = '';
            foreach ($videoDemos as $demoItem) {
                $playlistId = 0;
                foreach ($playlists as $playlistItem) {
                    if ($demoItem["title"] == $playlistItem["name_playlist"]) {
                        $playlistId = $playlistItem["id"];
                    }
                }
                if ($demoItem["position"] == 1 || $demoItem["position"] == 2 || $demoItem["position"] == 3) {
                    echo '<a class="cideo__item" href="hompage/php/detail.php?p=' . $playlistId . '">
                    <p class="text-center">' . $demoItem["title"] . '</p>
                    <img class="cideo__image" src="./Admin/assets/img/' . $demoItem["url"] . '" alt="">
                    </a>';
                } else {
                    $sideo .= '<div class="nideo ">
                            <p>' . $demoItem["title"] . '</p>
                            ' . generate_iframe($demoItem["url"]) . '
                            </div>';
                }
            }
            ?>
        </div>
        <div class="sideo section " id="media">
            <?php echo $sideo ?>
        </div>
    </section>

    <section class="phan-hoi section-padding ">
        <div class="container ">
            <div class="row ">
                <div class="section-title ">
                    <h2 data-title="FEEDBACK "></h2>
                </div>
            </div>
            <div class="row ">
                <div class="phan-hoi-items ">
                    <?php
                    foreach (select_table("*", "userfeedback", $mysqli) as $feedBackItem) {
                        $rating = '';
                        for($i = 0; $i< $feedBackItem["rate"]; $i++){
                            $rating .= '<span class="fa fa-star checked "></span>';
                        }
                        echo '<div class="phan-hoi-item ">
                        <div class="phan-hoi-item-content ">
                            <div class="phan-hoi-item-img-content-text ">
                                <h2>'.$feedBackItem["name"].'</h2>
                                <span>Feedback</span>
                            </div>
                            <div class="phan-hoi-item-img-content-img ">
                                <img src="./Admin/assets/img/'.$feedBackItem["image"].'" alt=" ">
                            </div>
                        </div>
                        <p>'.$feedBackItem["message"].'</p>
                        <div class="phan-hoi-item-star ">
                        '.$rating.'
                        </div>
                    </div>';
                    }
                    ?>
                </div>


            </div>
        </div>

    </section>

    <div id="contact" class="section">
        <section class="contact section-padding">
            <div class="container">
                <div class="pro">
                    <p class="element text-uppercase">PROFESSIONAL ENQUIRIES</p>
                </div>

                <div class="widthh">

                    <div class=" col">
                        <h1 class="contact-text ">CONTACT</h1>
                    </div>

                    <div class="col">
                        <form class="form" action="index.php" method="POST" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-4">
                                    <div class="text-input">
                                        <label for="">First name*</label> <br>
                                    </div>
                                    <input class="fomt-control" type="text" name="firstname" id="name">
                                </div>

                                <div class="col-4 kk">
                                    <div class="text-input">
                                        <label for="">Last name*</label> <br>
                                    </div>
                                    <input class="fomt-control" type="text" name="lastname" id="email">
                                </div>
                            </div>
                            <div class="row">
                                <div class=" col-4">
                                    <div class="text-input">
                                        <label for="">Email*</label> <br>
                                    </div>
                                    <input class="fomt-control" type="text" name="email" id="name">
                                </div>

                                <div class="col-4 kk">
                                    <div class="text-input">
                                        <label for="">Subject</label> <br>
                                    </div>
                                    <select class="fomt-control widd" name="subject">
                                        <option value="Online Classes">Online Classes</option>
                                        <option value="Public Speaking">Public Speaking</option>
                                        <option value="Workshop">Workshop</option>
                                        <option value="Livestream">Livestream</option>
                                        <option value="Others">Others</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-full contact col-4 kk">
                                    <div class="text-input ">
                                        <label for="">Message</label> <br>
                                    </div>
                                    <textarea class="message" rows="6" cols="64" name="message"></textarea>

                                </div>
                            </div>
                            <div class="row">
                                <button type="submit" value="Submit" name="add" id="add">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>

        </section>
    </div>



    <footer>
        <div class="foot">
            <div class="containe">
                <div class="sec aboutus">
                    <h2>About Us</h2>
                    <p>Learn about admissions requirements, dates, costs, and everything you need to know about applying and
                        preparing for either the Academic English Program or the English Language Program.</p>

                    <ul class="sci">
                        <li><a href=""><i class="fab fa-facebook"></i></a></li>
                        <li><a href=""><i class="fab fa-youtube"></i></a></li>
                        <li>
                            <a href=""><i class="fab fa-skype" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li><a href=""><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="sec quicklinks">
                    <h2>Quick Links</h2>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="">Curent</a></li>
                        <li><a href="#media">Media </a></li>
                        <li><a href="">History </a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </div>
                <div class="sec contact">
                    <h2>Contact Infor</h2>
                    <ul class="info">
                        <li>
                            <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                            <span>69 Nguyễn Lai<br>Khuê Trung, Cẩm Lệ, Đà Nẵng</span>
                        </li>
                        <li>
                            <span><i class="fa fa-phone" aria-hidden="true"></i></span>
                            <p>
                                <a href="tel: 02363.72.42.62 ">02363724262</a>
                            </p>
                        </li>
                        <li>
                            <span><i class="fa fa-envelope" aria-hidden="true"></i></span>

                            <p><a href="mailto:hue.tran23@gmail.com"> hue.tran23@gmail.com</a></p>

                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </footer>

    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">
    </script> -->
    <script src="./hompage/assets/js/home.js"></script>
</body>

</html>