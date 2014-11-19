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
   <script src="weblink/js/chk_id.js"></script>

	<p></p>

        <div class = "container">
            <div class = "jumbotron">

            <br>

                 <div class="schoolname">
                  三重國民小學網頁連結建置登入網</div>
                  <br>
                  
             </div>
         </div>
     
<div class = "container">

 


<h1>使用者登入</h1>

<form action="" method="post" onsubmit="return chk_id()">
    帳號：<input type="text" name="username"/><br>
    <br>
    密碼：<input type="text" name="password"/><br>
    <br>
    <input type="submit"/>
</form>

<?php
if( isset( $_POST["username"]) ){
  

$user   = $_POST["username"];

$pass   = $_POST["password"];

$stmt = "SELECT  *  FROM  `admin` WHERE username = '$user' AND  password = '$pass' LIMIT 0,1";

$result = mysql_query($stmt, get_conn());

if(  mysql_num_rows($result) == 1   ){
    $user = mysql_fetch_assoc($result);
    $_SESSION['uid'] = $user['id'];
    $_SESSION['cname'] = $user['cname'];

     echobr("");
     echobr($_SESSION['cname']."已經成功登入系統！！");
     header('Location:listlinkb.php ');
   

}else{
    echobr("");
    echobr("請輸入帳號密碼！！");

}
}
?>



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