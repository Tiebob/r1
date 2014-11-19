<?php
session_start();
include "function.php";


?>
 姓名：<?=$_SESSION['cname'];?><br>
<html>
<head>
    <meta charset="utf-8">
    <title>班網連線</title>
</head>
<body>


<?php
$cname=$_SESSION['cname'];

$sql="SELECT * FROM  `weblink`  WHERE  cname = '$cname' LIMIT 0,1";
$conn = get_conn();




$result = mysql_query($sql,  $conn);

$count = mysql_num_rows($result) ;

if( mysql_num_rows($result)  > 0 ){

    echo "<table border='1' width='100%'>";
    echo "<tr>";
    echo "<td>年級</td>";
    echo "<td>班別</td>";
    echo "<td>姓名</td>";
    echo "<td>建立網址連結</td>";
    echo "</tr>";

    while( $row = mysql_fetch_row($result, MYSQL_BOTH)  ){
        echo "<tr>";

        echo "   <td>";
        echo $row['grade'];
        echo "   </td>";

        echo "   <td>";
        echo $row['cclass'];
        echo "   </td>";

        echo "   <td>";
        echo $row['cname'];
        echo "   </td>";


        echo "   <td>";
        echo $row['web'];
        echo "   </td>";

        echo "</tr>";



           
    }
    echo "</table>";
}else{
    echo "查無相關資料的記錄！！";
}
?>
</body>
</html>
