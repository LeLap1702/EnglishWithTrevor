<?php
include("start.php");
$arrusers = select_table("*", "users", $mysqli);
$arrvideos = select_table("*", "urlvideo", $mysqli);
?>
<div class="page-inner mt--5">
    <div class="row mt--2">
        <div class="col-md-6">
            <div class="card full-height">
                <div class="card-body">
                    <div class="card-title text-center">
                        <h2>QUANTITY VIDEOS AVAILABLE</h2>
                    </div>
                    <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
                        <div class="px-2 pb-2 pb-md-0 text-center">
                            <h1><?php echo count($arrvideos) ?></h1>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card full-height">
                <div class="card-body">
                    <div class="card-title text-center">
                        <h3>QUANTITY OF USERS</h3>
                    </div>
                    <div class="d-flex flex-wrap justify-content-around pb-2 pt-4">
                        <div class="px-2 pb-2 pb-md-0 text-center">
                            <h1><?php echo count($arrusers) ?></h1>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php include "end.php";