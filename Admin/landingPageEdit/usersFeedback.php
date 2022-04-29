<?php 
include("../ad/start.php")
?>
<form action="" method="post">
        <table class="table table-hover ">
            <thead>
                <h1 id="title">MANAGE CUSTOMERS FEEDBACK</h1><br>

                <tr>
                    <th>ID</th>
                    <th>Name customers</th>
                    <th>Image</th>
                    <th>Message</th>
                    <th>Rating</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $count = 0;
                $arr = select_table("*", "userfeedback", $mysqli);
                foreach ($arr as $feedback) {
                    $count += 1;
                    echo '<tr>
                    <td>'.$count.'</td>
                    <td><input class="disabled" disabled type="text" name="txtName'.$feedback["id"].'" id="idName'.$feedback["id"].'" value="'.$feedback["name"].'"></td>
                    <td>
                    <img style="width: 200px; height:auto; object-fit: cover;" src="../assets/img/'.$feedback["image"].'">
                    <input hidden class="able" type="text" name="txtImage'.$feedback["id"].'" id="idImage'.$feedback["id"].'">
                    </td>
                    <td>'.$feedback["message"].'
                    </td>
                    <td>'.$feedback["rate"].'</td>
                    <td><a class="btn btn-outline-primary" href="usersFeedback.php?idEdit='.$feedback["id"].'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a></td>
                  </tr>';
                }

                if (isset($_GET["idEdit"])) {
                    $id = $_GET["idEdit"];
                    echo ' <script>
                    document.getElementById("idImage' . $id . '").removeAttribute("hidden");

                    edit.setAttribute("class","able");

                    </script>';
                    if (isset($_POST["submitChange"])) {
                        $title = $_POST["txtTitle"];
                        $link = $_POST["txtLink"];
                        $playlist = $_POST["txtPlaylist$id"];

                        edits_condition("id = $id", "urlVideo", "link = '$link', playlist_id = $playlist, title = '$title'", $mysqli);

                        echo '<script> window.location = "videosmanagement.php" </script>';
                    }
                }
                if (isset($_GET["idDel"])) {
                    echo '<script> 
                    let cf = confirm("Are you sure?");
                    if(cf){
                        window.location = "videosmanagement.php?idDelCf=' . $_GET["idDel"] . '";
                    }else{
                        window.location = "videosmanagement.php";
                    }
                        </script>';
                }

                if (isset($_GET["idDelCf"])) {
                    $id = $_GET["idDelCf"];
                    delete_condition("id = $id", "urlVideo", $mysqli);
                    echo '<script> window.location = "videosmanagement.php" </script>';
                }

                if (isset($_GET["preview"])) {
                    $link = $_GET["preview"];
                    echo '<div class="embedVideo container">
                        <div >
                            <h2 class="my-3 font-weight-bold">Preview video</h2>
                        </div>
                        <div >
                            ' . generate_iframe($link) . '
                        </div>
                        <div>
                            <a class="btn btn-outline-success mx-2" href="videosmanagement.php" >Go back</a>
                            <a class="btn btn-outline-primary" href="' . $link . '">Go to YouTube</a>
                        </div>
                    </div>';
                }
                ?>
            </tbody>
        </table>

    </form>
<?php 
include("../ad/end.php")
?>