<?php
include("../ad/start.php");
$videoDemos = select_table("*", "videodemo", $mysqli);

?>

<div class="container-fluid" id="videoDemo">
  <form action="" method="post" enctype="multipart/form-data">
    <a href="#chooseSection" class="btn btn-outline-primary my-3" data-bs-toggle="collapse">Edit video demo</a>
    <div id="chooseSection" class="collapse">

      <div class="chooseSection">
        <h3>Select the corresponding position you want to edit</h3>
        <div class="row">
          <div class="col-4"><a class="choose__item" href="/Admin/landingPageEdit/videoDemo.php?choose=0">
              <img class="choose__item--icon" src="/Admin/assets/img/youtube-video-player.png" alt="">
            </a></div>
          <div class="col-4"><a class="choose__item" href="/Admin/landingPageEdit/videoDemo.php?choose=1">
              <img class="choose__item--icon" src="/Admin/assets/img/youtube-video-player.png" alt="">
            </a></div>
          <div class="col-4"><a class="choose__item" href="/Admin/landingPageEdit/videoDemo.php?choose=2">
              <img class="choose__item--icon" src="/Admin/assets/img/youtube-video-player.png" alt="">
            </a></div>
        </div>
        <div class="row mt-3">
          <div class="col-6"><a class="choose__item" href="/Admin/landingPageEdit/videoDemo.php?choose=3">
              <img class="choose__item--icon" src="/Admin/assets/img/youtube-video-player.png" alt=""></a></div>
          <div class="col-6"><a class="choose__item" href="/Admin/landingPageEdit/videoDemo.php?choose=4">
              <img class="choose__item--icon" src="/Admin/assets/img/youtube-video-player.png" alt=""></a></div>
        </div>
      </div>
    </div>
    <table class="table table-hover">
      <thead>
        <h3 class="text-uppercase" id="title">Images link to playlist</h3>
        <tr class="text-center">
          <th>ID</th>
          <th>Video playlist</th>
          <th>Image</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $count = 0;
        foreach ($videoDemos as $videoItem) {
          $selection = '';
          foreach (select_table("*", "playlist", $mysqli) as $value) {
            if ($value["name_playlist"] == $videoItem["title"]) {
              $selection .= '<option value="' . $value["name_playlist"] . '" selected>' . $value["name_playlist"] . '</option>';
            } else {
              $selection .= '<option value="' . $value["name_playlist"] . '">' . $value["name_playlist"] . '</option>';
            }
          }
          if ($videoItem["position"] == 1 || $videoItem["position"] == 2 || $videoItem["position"] == 3) {
            $count++ ?>
            <tr class="text-center">
              <td>
                <?php echo $count ?>
              </td>
              <td>
                <select hidden class="disabled" id="playlist<?php echo $videoItem["id"] ?>" name="txtPlaylist<?php echo$videoItem["id"]?>"><?php echo $selection ?></select>
                <input type="text" disabled class="disabled" name="title<?php echo $videoItem["id"] ?>" id="idEdit<?php echo $videoItem["id"] ?>" value="<?php echo $videoItem["title"] ?>">
              </td>
              <td>
                <p><img class="imagePlaylistDemo" id="img<?php echo $videoItem["id"] ?>" src="/Admin/assets/img/<?php echo $videoItem["url"] ?>" alt="img"></p>
                <input hidden id="inputImage<?php echo $videoItem["id"] ?>" type="file" name="imageUpload<?php echo $videoItem["id"] ?>" accept="image/PNG, image/gif, image/jpeg, image/jpg">
              </td>
              <td>
                <button class="btn btn-outline-success" hidden type="submit" name="upload" id="btnSubmit<?php echo $videoItem["id"] ?>"> <i class="fa fa-check" aria-hidden="true"></i></button>
                <a class="btn btn-outline-primary" href="/Admin/landingPageEdit/videoDemo.php?idEdit=<?php echo $videoItem["id"] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
              </td>
            </tr>
        <?php }
        }
        if (isset($_GET["idEdit"])) {
          $id = $_GET["idEdit"];
          echo '
          <script>
            document.getElementById("playlist' . $id . '").removeAttribute("hidden");
            document.getElementById("idEdit' . $id . '").setAttribute("hidden","");
            document.getElementById("img' . $id . '").setAttribute("hidden","");
            document.getElementById("inputImage' . $id . '").removeAttribute("hidden");
            document.getElementById("btnSubmit' . $id . '").removeAttribute("hidden");
          </script>';
          if (isset($_POST["upload"])) {
            $url = "";
            $title = $_POST["txtPlaylist$id"];
            if($_FILES["imageUpload$id"]["error"] == 4){
              foreach($videoDemos as $demo){
                if($demo["id"] == $id){
                  $url = $demo["url"];
                }
              }
            }else{
              $url = $_FILES["imageUpload$id"]['name'];

              $tmp = $_FILES["imageUpload$id"]["tmp_name"];
              $path = "../assets/img/";
              move_uploaded_file($tmp, $path.$url);
            }
            
            edits_condition("id = $id", "videodemo", "title = '$title', url = '$url'", $mysqli);
            echo '
            <script>
              alert("Chaged!");
              window.location = "/Admin/landingPageEdit/videoDemo.php";
            </script>';
          }
        }
        

        ?>
      </tbody>
    </table>

    <!-- Table for video demo -->
    <table class="table table-hover">
      <thead>
        <h3 class="text-uppercase" id="title">Videos demo</h3>
        <tr class="text-center">
          <th>ID</th>
          <th>Video title</th>
          <th>urlVideo</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <?php $count = 0;
        foreach ($videoDemos as $videoItem) {
          if ($videoItem["position"] == 4 || $videoItem["position"] == 5) {
            $count++ ?>
            <tr class="text-center">
              <td>
                <?php echo $count ?>
              </td>
              <td>
                <input type="text" disabled class="disabled" name="titleDemo<?php echo $videoItem["id"] ?>" id="idEditDemo<?php echo $videoItem["id"] ?>" value="<?php echo $videoItem["title"] ?>">
              </td>
              <td>
                <input disabled class="disabled" id="inputUrlDemo<?php echo $videoItem["id"] ?>" type="text" name="inputUrlDemo<?php echo $videoItem["id"] ?>" value="<?php echo $videoItem["url"] ?>" >
              </td>
              <td>
                <button class="btn btn-outline-success" hidden type="submit" name="uploadDemo" id="btnSubmitVideoDemo<?php echo $videoItem["id"] ?>"> <i class="fa fa-check" aria-hidden="true"></i></button>
                <a class="btn btn-outline-primary" href="/Admin/landingPageEdit/videoDemo.php?idEditDemo=<?php echo $videoItem["id"] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
              </td>
            </tr>
        <?php }
        }
        if (isset($_GET["idEditDemo"])) {
          $id = $_GET["idEditDemo"];
          echo '
          <script>
            document.getElementById("idEditDemo' . $id . '").removeAttribute("disabled");
            document.getElementById("idEditDemo' . $id . '").setAttribute("class","able");
            document.getElementById("inputUrlDemo' . $id . '").removeAttribute("disabled");
            document.getElementById("inputUrlDemo' . $id . '").setAttribute("class","able");
            document.getElementById("btnSubmitVideoDemo' . $id . '").removeAttribute("hidden");
          </script>';
          if (isset($_POST["uploadDemo"])) {
            $title = $_POST["titleDemo$id"];
            $url = $_POST["inputUrlDemo$id"];
            
            edits_condition("id = $id", "videodemo", "title = '$title', url = '$url'", $mysqli);
            echo '
            <script>
              alert("Chaged!");
              window.location = "/Admin/landingPageEdit/videoDemo.php";
            </script>';
          }
        }
        

        ?>
      </tbody>
    </table>
  </form>
  <?php
  
  ?>

</div>