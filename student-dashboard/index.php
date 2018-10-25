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
<body>

    <div class="container">
        <table id="mat" border="1"></table>
    </div>

    <script type="text/javascript">
                row = 5;
                col = 5;
                text = '<?php echo $uid ?>';
                var table = document.getElementById('mat');
                
                var tr = document.createElement('tr');
                
                var td = document.createElement('td');
                td.innerHTML = 'Subjects';
                
                tr.appendChild(td);
                table.appendChild(tr);
                
                for (var i = 0; i < row ; i++) {
                    var tr = document.createElement('tr');
                    for (var j = 0; j < col; j++) {
                        var td = document.createElement('td');
                        td.innerHTML = text;
                        tr.appendChild(td);
                    }
                    table.appendChild(tr);
                }
                
        </script>
    
<?php
    include_once('../includes/footer.php');
?>