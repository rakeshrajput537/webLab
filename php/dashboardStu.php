<?php 
    session_start();
    if(isset($_SESSION['type'])){
        $uid = $_SESSION['uid'];
    }
    else{
        $newURL = "index.php";
        header('Location: '.$newURL);
    }
    include_once('includes/header.php'); 
    include_once('nav.php');
?>
<body class="dashboard-student">
    
    
<?php
    echo $_SESSION['type']." ".$uid;

    include_once('includes/footer.php');
?>