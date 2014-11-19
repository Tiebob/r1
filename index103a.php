<?php
session_start();

include "function.php";

/*$stmt = "SELECT * FROM  `weblink` order by `grade` , `class`";

$result = mysql_query($stmt, get_conn());*/

    /*while($record = mysql_fetch_assoc($result)){
    
      echo $record['grade'].$record['class'].$record['cname']."<br>";

    }*/



?>
<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>新北市三重國民國小</title>
		<link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet" >
		<link href="css/styles.css" rel="stylesheet" >
	</head>
	<body>
	<p></p>

        <div class = "container">
            <div class = "jumbotron">

            <br>

                 <div class="schoolname">
                  <h2  >三重國民小學103學年度班級網站列表</h2></div>
                  <br>
                    <a href = "http://www.tsces.ntpc.edu.tw/class/index.html" class = "navbar-btn btn-warning btn pull-right " >至102學年度</a>  
                       
             </div>
         </div>
     
<div class = "container">
   <div class = "row">

       <div class = "col-md-3">
         <div class="panel panel-info">
           <div class="panel-heading text-center">一年級</div>
             <ul class="list-group my-listlink text-center">
                 <?php
                   $stmt = "SELECT * FROM  `weblink` where `grade` = '一年' order by `cclass`";
                   $result = mysql_query($stmt, get_conn());
                   while($record = mysql_fetch_assoc($result)){
                      echo "<li class='list-group-item no-border'><a href=".$record['web'].">".$record['grade'].$record['cclass'].$record['cname']."老師</a></li>";
                      }
                ?>                
              </ul> 
             </div>
            </div>
            
        <div class = "col-md-3">
          <div class="panel panel-success">
           <div class="panel-heading text-center">二年級</div>
           <ul class="list-group my-listlink text-center">
              <?php
                $stmt = "SELECT * FROM  `weblink` where `grade` = '二年' order by `cclass`";
                $result = mysql_query($stmt, get_conn());
                while($record = mysql_fetch_assoc($result)){              
                  echo "<li class='list-group-item no-border'><a href=".$record['web'].">".$record['grade'].$record['cclass'].$record['cname']."老師</a></li>";
                }
               ?>        
              </ul>
           </div>
       </div>        


    <div class = "col-md-3">
        <div class="panel panel-danger">
           <div class="panel-heading text-center">三年級</div>
              <ul class="list-group my-listlink text-center">                        
                   <?php
                     $stmt = "SELECT * FROM  `weblink` where `grade` = '三年' order by `cclass`";
                    $result = mysql_query($stmt, get_conn());
                    while($record = mysql_fetch_assoc($result)){
                    echo "<li class='list-group-item no-border'><a href=".$record['web'].">".$record['grade'].$record['cclass'].$record['cname']."老師</a></li>";
                   }
                 ?>        
                   </ul>
             </div>
          </div>
       

 <div class = "col-md-3">
        <div class="panel panel-danger">
           <div class="panel-heading text-center">四年級</div>
              <ul class="list-group my-listlink text-center">                        
                   <?php
                     $stmt = "SELECT * FROM  `weblink` where `grade` = '四年' order by `cclass`";
                    $result = mysql_query($stmt, get_conn());
                    while($record = mysql_fetch_assoc($result)){
                    echo "<li class='list-group-item no-border'><a href=".$record['web'].">".$record['grade'].$record['cclass'].$record['cname']."老師</a></li>";
                   }
                 ?>        
                   </ul>
             </div>
          </div>
       </div>


  <div class = "row">

       <div class = "col-md-3">
         <div class="panel panel-info">
           <div class="panel-heading text-center">五年級</div>
             <ul class="list-group my-listlink text-center">
                 <?php
                   $stmt = "SELECT * FROM  `weblink` where `grade` = '五年' order by `cclass`";
                   $result = mysql_query($stmt, get_conn());
                   while($record = mysql_fetch_assoc($result)){
                      echo "<li class='list-group-item no-border'><a href=".$record['web'].">".$record['grade'].$record['cclass'].$record['cname']."老師</a></li>";
                      }
                ?>                
              </ul> 
             </div>
            </div>
            
        <div class = "col-md-3">
          <div class="panel panel-success">
           <div class="panel-heading text-center">六年級</div>
           <ul class="list-group my-listlink text-center">
              <?php
                $stmt = "SELECT * FROM  `weblink` where `grade` = '六年' order by `cclass`";
                $result = mysql_query($stmt, get_conn());
                while($record = mysql_fetch_assoc($result)){              
                  echo "<li class='list-group-item no-border'><a href=".$record['web'].">".$record['cgrade'].$record['cclass'].$record['cname']."老師</a></li>";
                }
               ?>        
              </ul>
           </div>
       </div>        


    <div class = "col-md-3">
        <div class="panel panel-danger">
           <div class="panel-heading text-center">科任</div>
              <ul class="list-group my-listlink text-center">                        
                   <?php
                     $stmt = "SELECT * FROM  `weblink` where `grade` = '科任' order by `cclass`";
                    $result = mysql_query($stmt, get_conn());
                    while($record = mysql_fetch_assoc($result)){
                    echo "<li class='list-group-item no-border'><a href=".$record['web'].">".$record['grade'].$record['cclass'].$record['cname']."老師</a></li>";
                   }
                 ?>        
                   </ul>
             </div>
          </div>

<div class = "col-md-3">
        <div class="panel panel-danger">
           <div class="panel-heading text-center">幼兒園、資源班及行政</div>
              <ul class="list-group my-listlink text-center">                        
                   <?php
                     $stmt = "SELECT * FROM  `weblink` where `grade` = '幼兒園' or `grade` = '資源班' or `grade` = '行政' order by `cclass`";
                    $result = mysql_query($stmt, get_conn());
                    while($record = mysql_fetch_assoc($result)){
                    echo "<li class='list-group-item no-border'><a href=".$record['web'].">".$record['grade'].$record['class'].$record['cname']."老師</a></li>";
                   }
                 ?>        
                   </ul>
             </div>
          </div>









       </div>



          <div class = "navbar navbar-default navbar-fixed-bottom navbar-padding=60px" >
          <div class = "container">
          <p class = "navbar-text pull-left">
          <span class="glyphicon glyphicon-home"></span> <!-- icon -->地址：新北市三重區三和路三段一號
           <span class="glyphicon glyphicon-phone-alt"></span> <!-- icon -->電話：(02)29722095   
           <span class="glyphicon glyphicon-print"></span> <!-- icon -->        傳真：(02)29724405</p>
          <a href = "http://www.tsces.ntpc.edu.tw" class = "navbar-btn btn-warning btn pull-right">回學校首頁</a>

          </div>
       </div>


		<script src="lib/jquery/jquery-1.11.0.min.js"></script>
    	<!-- Include all compiled plugins (below), or include individual files as needed -->
    	<script src="lib/bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>