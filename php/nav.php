<nav class="navbar navbar-default" role="navigation">
    <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <!--
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-brand-centered">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        </button>
        -->
        <div class="navbar-brand">Attendence Management System</div>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navbar-brand-centered">
    <!--Nav links for left side
        <ul class="nav navbar-nav">
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        <li><a href="#">Link</a></li>
        </ul>
    -->
    <!--Nav links for right side-->
        <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php">Home</a></li>
        <?php
            if(isset($_SESSION["type"])){
                echo '<li><a href="logout.php">Log Out</a></li>';
            }
            else{
                echo '<li><a href="about.php">About Us</a></li>';
            } 
        ?>
        </ul>
    </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>