<?php
session_start();

include "function.php";

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
                 三重國民小學網頁連結建置</div>
                  <br>
                  
             </div>
         </div>
     
<div class = "container">

 <h3>登入者：<?=$_SESSION['cname'];?><br></h3>

<?php
$cname=$_SESSION['cname'];

$sql="SELECT * FROM  `weblink`  WHERE  cname = '$cname' LIMIT 0,1";
$conn = get_conn();




$result = mysql_query($sql,  $conn);

$count = mysql_num_rows($result) ;
 $userdata = mysql_fetch_assoc($result);
  $_SESSION['id'] = $userdata['id'];
  $_SESSION['grade'] = $userdata['grade'];
  $_SESSION['cname'] = $userdata['cname'];
  $_SESSION['class'] = $userdata['cclass'];
  $_SESSION['web'] = $userdata['web'];





if( mysql_num_rows($result)  > 0 ){

      echobr("");
      echobr("年級或單位：".$_SESSION['grade'] );
      echobr("");
      echobr("班別或類別：".$_SESSION['class'] ); 
      echobr("");
      echobr(" 連結網址 ：".$_SESSION['web'] );
      echobr("");
   

   
}else{
     header('Location:input_webb.php ');
}
?>
  <a href = "http://163.20.94.26/weblink/index103a.php" class = "navbar-btn btn-primary btn ">輸入正確前往全校網頁列表</a>
  <a href = "http://163.20.94.26/weblink/changelink.php" class = "navbar-btn btn-primary btn ">輸入錯誤更改網頁連結</a>



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