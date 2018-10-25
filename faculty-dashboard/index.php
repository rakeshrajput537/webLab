<?php 
    session_start();
    if(isset($_SESSION['type'])){
        $uid = $_SESSION['uid'];
    }
    else{
        $newURL = "../login/index.php";
        header('Location: '.$newURL);
    }
    include_once('../includes/header.php'); 
    include_once('../nav/index.php');
?>
<body >
    
    <div class="container">
        <div class="row">
            <?php include('sideNav.php');?>
            <div class="col-lg-9 col-md-9">
                <div class="container-fluid">
                
                <?php
                    if (isset($_GET['class']) && isset($_GET['sub'])){

                        $class = $_GET['class'];
                        $sub = $_GET['sub'];

                        $sql = "SELECT * FROM ".$class."_".$sub.";";
                        
                        $result = $conn->query($sql);
                        
                        if($result->num_rows == 0) {
                                echo $sql;
                                echo "<div class='well'>Error in database.Please contact Administrator</div>";
                        } else {

                            echo '<div class="col-md-8 col-lg-8"><table class="table table-striped table-bordered"><tr>';
                            $columns = array();
                            $row = $result->fetch_assoc();

                            foreach ($row as $k => $v ) { 
                                    $columns[] = $k;
                                }

                            echo "<th>Enrollment id</th><th>".ucfirst($columns[1])."</th></tr>";

                            while($row) {
                                echo "<tr><td>".$row["enroll_id"]."</td><td>".$row["july"]."</td></tr>";
                                $row = $result->fetch_assoc();
                            }

                            echo "</table></div>";
                        }
                    }

                    else{
                        echo '<div class="row">';

                        $sql = "SELECT * FROM fac_sub WHERE fac_id = '" . $uid . "';";

                        $result = $conn->query($sql);
                        if($result->num_rows == 0) {
                             echo "<div class='well'> NO SUBJECTS REGISTERD</div>";
                        } 
                        else {
                            while($row = $result->fetch_assoc()) {
                                  echo '<div class="col-md-2 col-lg-2" style="padding-bottom:30px">
                                    <div class="card text-center">
                                      <div class="card-body" style="margin-bottom: 13px">
                                        <h5 class="card-title" value='.$row["sub_name"].'>'.$row["sub_name"].'</h5>
                                        <p class="card-text" value='.$row["class_name"].'>'.$row["class_name"].'</p>
                                        <a href="index.php?class='.$row["class_name"].'&sub='.$row["sub_name"].'" class="btn btn-primary">Upload</a>
                                      </div>
                                    </div>
                                  </div> ';  
                            }
                        }

                    echo '</div>';

                    }
                    
                    ?>

                </div>
            </div>
        </div>
    </div>

<?php

    include_once('../includes/footer.php');
?>