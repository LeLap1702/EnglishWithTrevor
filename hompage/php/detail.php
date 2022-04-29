<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/detail.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="icon" href="../assets/images/image__2_-removebg-preview.png" type="image/x-icon">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.2.0/fonts/remixicon.css" rel="stylesheet">
    <title>English Trevor</title>
</head>

<body>
    <header class="header" id="header">
        <nav class="nav containerer">
            <div class="nav__menu" id="nav__menu">
                <ul class="nav__list">
                    <li class="nav__item">
                        <a href="/index.php" class="nav_link active">Home</a>
                    </li>
                    <li class="nav__item">
                        <a href="detail.php" class="nav__link">Playlist</a>
                    </li>
                    <li class="nav__item">
                        <a href="/index.php" class="nav__link">Media</a>
                    </li>
                    <li class="nav__item">
                        <a href="/index.php" class="nav__link">Contact</a>
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
                    <a href="/index.php" onclick="closeNav()" class="nav_link index">Home</a>
                </li>
                <li class="nav__item-mobile">
                    <a href="detail.php" onclick="closeNav()" class="nav__link">Playlist</a>
                </li>
                <li class="nav__item-mobile">
                    <a href="/index.php" onclick="closeNav()" class="nav__link">Media</a>
                </li>
                <li class="nav__item-mobile">
                    <a href="/index.php" onclick="closeNav()" class="nav__link">Contact</a>
                </li>
                <li class="nav__item-mobile">
                    <a href="blog.php" onclick="closeNav()" class="nav__link">Community</a>
                </li>
                <li class="nav__item-mobile">
                    <a href="#" onclick="closeNav()" class="nav__link">History</a>
                </li>
            </ul>
        </div>
    </div>
    <section class="detail-video">
        <?php
        include("modules.php");
        $query = "SELECT playlist.id, playlist.name_playlist, urlvideo.link, urlvideo.title, urlvideo.id, urlvideo.playlist_id
FROM playlist
INNER JOIN urlvideo ON playlist.id = urlvideo.playlist_id;";

        $tableArr = select_query($query, $mysqli);
        if (isset($_GET["p"])) {
            $playlistId = $_GET["p"];
        } else {
            $playlistId = $tableArr[0]["playlist_id"];
        }
        $table;
        foreach ($tableArr as $tableItem) {
            if ($tableItem["playlist_id"] == $playlistId) {
                $table = $tableItem;
                break;
            }
        }

        ?>

        <div class="sideo">
            <div class="nideo">
                <?php
                if (!isset($table["link"])) {
                    echo '<script>
                    alert("This playlist has no videos yet!");
                    window.location = "/index.php";
                </script>';
                }
                echo generate_iframe($table["link"]) ?>
            </div>
            <div class="niideo">
                <div class="content">
                    <h2>Playlist name: <?php echo $table["name_playlist"] ?> </h2>
                </div>
                <div class="name__video">
                    <p>Video name: <?php echo $table["title"] ?></p>
                </div>
                <div class="video-content">
                    <div>
                        <p>Trevor Dollemont is an experienced 20 year Canadian English Communication Instructor, </p>
                        <p id="extra_content" class="extra_content">
                            Managing Partner of Newway English and YouTube Creator Living in Vietnam.
                            <br>Interests for Speaking is a 40-level CEFR A1 to C1 Communication Program.
                            <br>Including Pronunciation, Vocabulary, Listening, Comprehension and Fluency Skills.
                        </p>
                        <h4 id="read_more" class="read_more">Show More...</h4>
                    </div>

                </div>
            </div>
        </div>

    </section>
    <hr style="color:lightgrey; max-width: 100%;">
    <div class="best-watching">
        <div>
            <b><?php echo $table["name_playlist"] ?> <i class='fas fa-caret-right' style='font-size:20px; margin: 0 20px'></i> </b>
        </div>
        <div class="dropdownChoosen">
            <a class="choosen__btn nav__item" href="#">Choose a playlist</a>
            <ul class="choosen__dropdown">
                <?php foreach (select_table("*", "playlist", $mysqli) as $value) {
                    echo '<li class="choosen__dropdown-item"><a href="/hompage/php/detail.php?p=' . $value["id"] . '">' . $value["name_playlist"] . '</a></li>';
                } ?>
            </ul>
        </div>

    </div>

    <div class="title-descrption">
        <p>All videos of the playlist</p>
    </div>
    <div class="cideo">
        <?php
        foreach ($tableArr as $tableItem) {
            if ($tableItem["playlist_id"] == $playlistId) {
                echo '<div class="video">
            ' . generate_iframe($tableItem["link"]) . '
            <div class="content1">
                <h4>' .$tableItem["title"] . '</h4>
            </div>
            <div class="viewer-quantity">
                
            </div>
            </div>';
            }
        }
        ?>

    </div>



    <!-- <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">
    </script> -->
    <script src="../assets/js/home.js"></script>
</body>

</html>

</html>