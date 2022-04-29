<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community</title>
    <link rel="icon" href="./ảnh/image__2_-removebg-preview.png" type="image/x-icon">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="../assets/styles/blog.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">



</head>

<body>
    <header class="header" id="header">
        <nav class="nav containerer">
            <div class="nav__menu" id="nav__menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="../index.php" class="nav_link active">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="detail.php" class="nav__link">Playlist</a>
                    </li>
                    <li class="nav__item">
                        <a href="../index.php" class="nav__link">Media</a>
                    </li>
                    <li class="nav__item">
                        <a href="../index.php" class="nav__link">Contact</a>
                    </li>
                    <li class="nav__item">
                        <a href="blog.php" class="nav__link">Community</a>
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
                    <a href="../index.php" onclick="closeNav()" class="nav_link index">Home</a>
                </li>
                <li class="nav__item-mobile">
                    <a href="detail.php" onclick="closeNav()" class="nav__link">Playlist</a>
                </li>
                <li class="nav__item-mobile">
                    <a href="../index.php" onclick="closeNav()" class="nav__link">Media</a>
                </li>
                <li class="nav__item-mobile">
                    <a href="../index.php" onclick="closeNav()" class="nav__link">Contact</a>
                </li>
                <li class="nav__item-mobile">
                    <a href="#" onclick="closeNav()" class="nav__link">Community</a>
                </li>
                <li class="nav__item-mobile">
                    <a href="#" onclick="closeNav()" class="nav__link">History</a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /*--- page Wrapper --*/ -->
    <div class="page-wapper">
        <!-- ---Post Slider -->
        <div class="post-slider">
            <h1 class="slider-title">Trending Post</h1>
            <i class="fa fa-chevron-left prev"></i>
            <i class="fa fa-chevron-right next"></i>
            <div class="post-wrapper">
                <div class="post">
                    <img src="../assets/images/../assets/images/bgr.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="">Interests for Speaking is a 40 Level CEFR A1 to C1 Communication Program.</a></h4>
                        <i class='fas fa-user-alt'> </i> <span>Travor</span> &nbsp;
                        <i class="fas fa-calendar" aria-hidden="true">  </i><span> 16 April 2022</span>
                    </div>
                    <div class="post-icons">
                        <i class="fas fa-eye"></i> &nbsp;
                        <a href="">27</a>&nbsp;
                        <i class="fas fa-heart"></i> &nbsp;
                        <a href="">21</a>&nbsp;
                        <i class="fas fa-comment-alt"> </i>&nbsp;
                        <a href="">33 </a>&nbsp;
                    </div>
                    <div class="post-addComments">
                        <div class="userImg">
                            <img src="../assets/images/bgr.jpg" alt="" class="cover">
                        </div>
                        <input type="text" class="text" placeholder="Add a comment...">
                    </div>
                </div>
                <div class="post">
                    <img src="../assets/images/bgr.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="">Interests for Speaking is a 40 Level CEFR A1 to C1 Communication Program.</a></h4>
                        <i class='fas fa-user-alt'> </i> <span>Travor</span> &nbsp;
                        <i class="fas fa-calendar" aria-hidden="true">  </i><span> 16 April 2022</span>
                    </div>
                    <div class="post-icons">
                        <i class="fas fa-eye"></i> &nbsp;
                        <a href="">27</a>&nbsp;
                        <i class="fas fa-heart"></i> &nbsp;
                        <a href="">21</a>&nbsp;
                        <i class="fas fa-comment-alt"> </i>&nbsp;
                        <a href="">33 </a>&nbsp;
                    </div>
                    <div class="post-addComments">
                        <div class="userImg">
                            <img src="../assets/images/bgr.jpg" alt="" class="cover">
                        </div>
                        <input type="text" class="text" placeholder="Add a comment...">
                    </div>
                </div>
                <div class="post">
                    <img src="../assets/images/bgr.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="">Interests for Speaking is a 40 Level CEFR A1 to C1 Communication Program.</a></h4>
                        <i class='fas fa-user-alt'> </i> <span>Travor</span> &nbsp;
                        <i class="fas fa-calendar" aria-hidden="true">  </i><span> 16 April 2022</span>
                    </div>
                    <div class="post-icons">
                        <i class="fas fa-eye"></i> &nbsp;
                        <a href="">27</a>&nbsp;
                        <i class="fas fa-heart"></i> &nbsp;
                        <a href="">21</a>&nbsp;
                        <i class="fas fa-comment-alt"> </i>&nbsp;
                        <a href="">33 </a>&nbsp;
                    </div>
                    <div class="post-addComments">
                        <div class="userImg">
                            <img src="../assets/images/bgr.jpg" alt="" class="cover">
                        </div>
                        <input type="text" class="text" placeholder="Add a comment...">
                    </div>
                </div>
                <div class="post">
                    <img src="../assets/images/bgr.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="">Interests for Speaking is a 40 Level CEFR A1 to C1 Communication Program.</a></h4>
                        <i class='fas fa-user-alt'> </i> <span>Travor</span> &nbsp;
                        <i class="fas fa-calendar" aria-hidden="true">  </i><span> 16 April 2022</span>
                    </div>
                    <div class="post-icons">
                        <i class="fas fa-eye"></i> &nbsp;
                        <a href="">27</a>&nbsp;
                        <i class="fas fa-heart"></i> &nbsp;
                        <a href="">21</a>&nbsp;
                        <i class="fas fa-comment-alt"> </i>&nbsp;
                        <a href="">33 </a>&nbsp;
                    </div>
                    <div class="post-addComments">
                        <div class="userImg">
                            <img src="../assets/images/bgr.jpg" alt="" class="cover">
                        </div>
                        <input type="text" class="text" placeholder="Add a comment...">
                    </div>
                </div>
                <div class="post">
                    <img src="../assets/images/bgr.jpg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="">Interests for Speaking is a 40 Level CEFR A1 to C1 Communication Program.</a></h4>
                        <i class='fas fa-user-alt'> </i> <span>Travor</span> &nbsp;
                        <i class="fas fa-calendar" aria-hidden="true">  </i><span> 16 April 2022</span>
                    </div>
                    <div class="post-icons">
                        <i class="fas fa-eye"></i> &nbsp;
                        <a href="">27</a>&nbsp;
                        <i class="fas fa-heart"></i> &nbsp;
                        <a href="">21</a>&nbsp;
                        <i class="fas fa-comment-alt"> </i>&nbsp;
                        <a href="">33 </a>&nbsp;
                    </div>
                    <div class="post-addComments">
                        <div class="userImg">
                            <img src="../assets/images/bgr.jpg" alt="" class="cover">
                        </div>
                        <input type="text" class="text" placeholder="Add a comment...">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="content clearfix">
        <div class="main-content">
            <h1 class="recent-post-title">Recent Posts</h1>
            <div class="post clearfix">
                <img src="../assets/images/bgr.jpg" alt="" class="post-image">
                <div class="post-preview">
                    <h3><a href="">Interest For Speaking 2 - Peter - English Test - Vietnam</a></h3>
                    <i class='fas fa-user-alt'> </i> <span>Travor</span> &nbsp;
                    <i class="fas fa-calendar" aria-hidden="true">  </i><span> 16 April 2022</span>
                    <p class="preview-text">
                        Interests for Speaking is a 40 Level CEFR A1 to C1 Communication Program. Including Pronunciation, Vocabulary, Listening, Comprehension and Fluency Skills.
                    </p>
                    <div class="post-icons">
                        <i class="fas fa-eye"></i> &nbsp;
                        <a href="">27</a>&nbsp;
                        <i class="fas fa-heart"></i> &nbsp;
                        <a href="">21</a>&nbsp;
                        <i class="fas fa-comment-alt"> </i>&nbsp;
                        <a href="">33 </a>&nbsp;
                    </div>
                    <div class="post-addComments">
                        <div class="userImg">
                            <img src="../assets/images/bgr.jpg" alt="" class="cover">
                        </div>
                        <input type="text" class="text" placeholder="Add a comment...">
                    </div>
                    <a href="" class="btn read-more">Youtube</a>
                </div>
            </div>
            <div class="post clearfix">
                <img src="../assets/images/bgr.jpg" alt="" class="post-image">
                <div class="post-preview">
                    <h3><a href="">Interest For Speaking 2 - Peter - English Test - Vietnam</a></h3>
                    <i class='fas fa-user-alt'> </i> <span>Travor</span> &nbsp;
                    <i class="fas fa-calendar" aria-hidden="true">  </i><span> 16 April 2022</span>
                    <p class="preview-text">
                        Interests for Speaking is a 40 Level CEFR A1 to C1 Communication Program. Including Pronunciation, Vocabulary, Listening, Comprehension and Fluency Skills.
                    </p>
                    <div class="post-icons">
                        <i class="fas fa-eye"></i> &nbsp;
                        <a href="">27</a>&nbsp;
                        <i class="fas fa-heart"></i> &nbsp;
                        <a href="">21</a>&nbsp;
                        <i class="fas fa-comment-alt"> </i>&nbsp;
                        <a href="">33 </a>&nbsp;
                    </div>
                    <div class="post-addComments">
                        <div class="userImg">
                            <img src="../assets/images/bgr.jpg" alt="" class="cover">
                        </div>
                        <input type="text" class="text" placeholder="Add a comment...">
                    </div>
                    <a href="" class="btn read-more">Youtube</a>
                </div>
            </div>
            <div class="post clearfix">
                <img src="../assets/images/bgr.jpg" alt="" class="post-image">
                <div class="post-preview">
                    <h3><a href="">Interest For Speaking 2 - Peter - English Test - Vietnam</a></h3>
                    <i class='fas fa-user-alt'> </i> <span>Travor</span> &nbsp;
                    <i class="fas fa-calendar" aria-hidden="true">  </i><span> 16 April 2022</span>
                    <p class="preview-text">
                        Interests for Speaking is a 40 Level CEFR A1 to C1 Communication Program. Including Pronunciation, Vocabulary, Listening, Comprehension and Fluency Skills.
                    </p>
                    <div class="post-icons">
                        <i class="fas fa-eye"></i> &nbsp;
                        <a href="">27</a>&nbsp;
                        <i class="fas fa-heart"></i> &nbsp;
                        <a href="">21</a>&nbsp;
                        <i class="fas fa-comment-alt"> </i>&nbsp;
                        <a href="">33 </a>&nbsp;
                    </div>
                    <div class="post-addComments">
                        <div class="userImg">
                            <img src="../assets/images/bgr.jpg" alt="" class="cover">
                        </div>
                        <input type="text" class="text" placeholder="Add a comment...">
                    </div>
                    <a href="" class="btn read-more">Youtube</a>
                </div>
            </div>
            <div class="post clearfix">
                <img src="../assets/images/bgr.jpg" alt="" class="post-image">
                <div class="post-preview">
                    <h3><a href="">Interest For Speaking 2 - Peter - English Test - Vietnam</a></h3>
                    <i class='fas fa-user-alt'> </i> <span>Travor</span> &nbsp;
                    <i class="fas fa-calendar" aria-hidden="true">  </i><span> 16 April 2022</span>
                    <p class="preview-text">
                        Interests for Speaking is a 40 Level CEFR A1 to C1 Communication Program. Including Pronunciation, Vocabulary, Listening, Comprehension and Fluency Skills.
                    </p>
                    <div class="post-icons">
                        <i class="fas fa-eye"></i> &nbsp;
                        <a href="">27</a>&nbsp;
                        <i class="fas fa-heart"></i> &nbsp;
                        <a href="">21</a>&nbsp;
                        <i class="fas fa-comment-alt"> </i>&nbsp;
                        <a href="">33 </a>&nbsp;
                    </div>
                    <div class="post-addComments">
                        <div class="userImg">
                            <img src="../assets/images/bgr.jpg" alt="" class="cover">
                        </div>
                        <input type="text" class="text" placeholder="Add a comment...">
                    </div>
                    <a href="" class="btn read-more">Youtube</a>
                </div>
            </div>
            <div class="post clearfix">
                <img src="../assets/images/bgr.jpg" alt="" class="post-image">
                <div class="post-preview">
                    <h3><a href="">Interest For Speaking 2 - Peter - English Test - Vietnam</a></h3>
                    <i class='fas fa-user-alt'> </i> <span>Travor</span> &nbsp;
                    <i class="fas fa-calendar" aria-hidden="true">  </i><span> 16 April 2022</span>
                    <p class="preview-text">
                        Interests for Speaking is a 40 Level CEFR A1 to C1 Communication Program. Including Pronunciation, Vocabulary, Listening, Comprehension and Fluency Skills.
                    </p>
                    <div class="post-icons">
                        <i class="fas fa-eye"></i> &nbsp;
                        <a href="">27</a>&nbsp;
                        <i class="fas fa-heart"></i> &nbsp;
                        <a href="">21</a>&nbsp;
                        <i class="fas fa-comment-alt"> </i>&nbsp;
                        <a href="">33 </a>&nbsp;
                    </div>
                    <div class="post-addComments">
                        <div class="userImg">
                            <img src="../assets/images/bgr.jpg" alt="" class="cover">
                        </div>
                        <input type="text" class="text" placeholder="Add a comment...">
                    </div>
                    <a href="" class="btn read-more">Youtube</a>
                </div>
            </div>
        </div>

        <div class="sidebar">
            <div class="section search">
                <h2 class="section-title">Search</h2>
                <form action="" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Search...">
                </form>
            </div>
            <div class="section topics">
                <h2 class="section-title">Subjects</h2>
                <ul>
                    <li><a href="">English Speaking</a></li>
                    <li><a href="">English Speaking</a></li>
                    <li><a href="">English Speaking</a></li>
                    <li><a href="">English Speaking</a></li>
                    <li><a href="">English Speaking</a></li>
                    <li><a href="">English Speaking</a></li>
                    <li><a href="">English Speaking</a></li>
                    <li><a href="">English Speaking</a></li>
                    <li><a href="">English Speaking</a></li>

                </ul>
            </div>
        </div>
    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha512-+NqPlbbtM1QqiK8ZAo4Yrj2c4lNQoGv8P79DPtKzj++l5jnN39rHA/xsqn8zE9l0uSoxaCdrOgFs6yjyfbBxSg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="../assets/js/script.js"></script>
    <script type="text/javascript" src="http://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

</body>

</html>