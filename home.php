<?php
session_start();
include('project_const.php');
?>
<html>
<head lang="en">
<link href="bootstrap-3.3.4-dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

    <meta charset="UTF-8">
    <title>Visitor Home Page </title>
</head>
<body>
<div class="container">
<?php include('visitor_header.html'); ?>
     <div class="row">
            <div class="col-sm-3">  
				<?php include('visitor_side_menu.php');?>
            </div>

            <div class="col-sm-9">  
            <?php			
            $page="visitor_banner.html";
            if(isset($_REQUEST['page']))
                $page=$_REQUEST['page'];
                include($page);
			?>
            </div>
    </div>

        <div class="row">
                <?php include('footer.html') ?>
        </div>
  </div>
</body>
</html>