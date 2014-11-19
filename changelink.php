<?php
session_start();
ob_start();
 include "function.php";
echobr($_SESSION['cname']);

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
<meta charset="UTF-8">
<form action="update.php" method="post">

<h3> <font color="blue">請重新點選年級單位及班別類別並修改資料</font></h3>
 
<h4> <br>國小導師點選
    <br>
    <br>
     年級： 
        <input value="一年" name="grade" type="radio" >一年級
        <input value="二年" name="grade" type="radio">二年級
        <input value="三年" name="grade" type="radio">三年級
        <input value="四年" name="grade" type="radio">四年級
        <input value="五年" name="grade" type="radio">五年級
        <input value="六年" name="grade" type="radio">六年級
      
        <br>
        <br>

        班別： 
        <input value="一班" name="class" type="radio">一班
        <input value="二班" name="class" type="radio">二班
        <input value="三班" name="class" type="radio">三班
        <input value="四班" name="class" type="radio">四班
        <input value="五班" name="class" type="radio">五班
        <input value="六班" name="class" type="radio">六班
        <input value="七班" name="class" type="radio">七班
        <input value="八班" name="class" type="radio">八班
        <input value="九班" name="class" type="radio">九班
        <input value="十班" name="class" type="radio">十班
        <input value="十一班" name="class" type="radio">十一班
            <br>
        <br>
        科任教師點選
        <br>
        <br>單位：
        <input value="科任" name="grade" type="radio">科任
        <br>
        <br>科別：
        <input value="電腦" name="class" type="radio">電腦
        <input value="藝術與人文" name="class" type="radio">藝術與人文
        <input value="自然" name="class" type="radio">自然
        <input value="社會" name="class" type="radio">社會
        <input value="體育與健康" name="class" type="radio">體育與健康
        <input value="英語" name="class" type="radio">英語
         <input value="閩南語" name="class" type="radio">閩南語
        <input value="客語" name="class" type="radio">客語
      

        <br>
        <br>
        <br>      
        幼稚園教師點選
        <br> 
        <br>單位：
        <input value="幼兒園" name="grade" type="radio">幼兒園
        <br>
        <br>班別：
        <input value="可愛班" name="class" type="radio">可愛班
     
        <input value="天使班" name="class" type="radio">天使班
        <br>
    
        <br>
        <br>
        行政人員點選
        <br>
        <br>單位：
        <input value="行政" name="grade" type="radio">行政
        <br><br>職別：
        <input value="校長"name="class" type="radio">校長
        <input value="教務主任" name="class" type="radio">教務主任
        <input value="學務主任" nameme="class" type="radio">學務主任
        <input value="輔導主任" name="class" type="radio">輔導主任
        <input value="總務主任" name="class" type="radio">總務主任
        <br>     <br>
        <input value="教學組" name="class" type="radio">教學組
        <input value="註冊組" name="class" type="radio">註冊組
        <input value="研究組" name="class" type="radio">研究組
        <input value="資訊組" name="class" type="radio">資訊組
        <input value="活動組" name="class" type="radio">活動組
        <input value="生教組" name="class" type="radio">生教組
        <input value="衛生組" name="class" type="radio">衛生組
        <input value="體育組" name="class" type="radio">體育組
        <input value="事務組" name="class" type="radio">事務組
        <input value="出納組" name="class" type="radio">出納組
        <input value="輔導組" name="class" type="radio">輔導組
        <input value="課後照顧組" name="class" type="radio">課後照顧組
       

       <br>


        　　<br>
        姓名：<input required="required"  name="name" type="text" value="<?=$_SESSION['cname'];?>"><br>


        　　　<br>
        <br>
        網址： <input required="required" name="web" type="text" value="<?=$_SESSION['web'];?>"><br></h4>

    <input type="hidden" name="act" value="update">


    <input type="submit" >



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
</form>
</html>
<?php

if( $_POST["act"] === "update"){
    mysql_select_db("president");
    $conn = get_conn();
    
    $sql = sprintf(
                  "UPDATE `weblink` SET `id`='%s', `grade`='%s', `cclass`='%s', `cname`='%s', `web`='%s', `time`= ? WHERE `id`='%s'",
                      $_SESSION['id'], 
                      $_POST['grade'],
                      $_POST['class'], 
                      $_POST['cname'], 
                      $_POST['web'], 
                      now()
      );
    //$sql = "UPDATE `weblink` SET `id`='" . $_SESSION['id'] ."', `grade`='".$_POST['grade']."', `cclass`='".$_POST['class']."', `cname`='".$_POST['cname']."', `web`='".$_POST['web']."', `time`=now() WHERE `id`='$_SESSION['id']'";

    dump($sql); 
   //  //$sql = "UPDATE `weblink` (id, grade, class, cname, web, time) VALUES ('$_SESSION['id']','$_POST[grade]','$_POST[class]','$_POST[name]','$_POST[web]',now()) WHERE id='$_SESSION['id']'";
   //die();
   //  $conn = get_conn();
   //    if (!mysql_query($sql, $conn))
   //  {
   //      die ('Error:' . mysql_error());
   //  }

   //   mysql_close($conn);
   //  header('location:index103a.php');

}

?>