<h2>資料庫管理系統-修改</h2>
<hr>

<?php
// 是否是表單送回
if ( isset($_POST["cust_no"]) ) {
   // 取得SQL指令
   $sql = "UPDATE basic";
   $sql .= " SET name = '".$_POST["name"]."', id = '".$_POST["id"]."', tel_no ='".$_POST["tel_no"]."', address = '".$_POST["address"] . "'";
   $sql .= " WHERE cust_no = " . $_POST["cust_no"];
   $sql = stripslashes($sql);
//    $sql = stripslashes($_POST["Sql"]);
//    echo "SQL指令:<b> $sql </b><br/>";
   
    /**
     * connect to db
     */
    require_once("./include/db_connection.php");


  if ( mysqli_query($link, $sql) ){ // 執行SQL指令
     echo '<p>!資料修改成功!</p>';
  } else {
     echo '<p style="color: red">!資料修改失敗!</p>';
  }

   /**
    * close db
    */
    require_once("./include/db_connection.php");
}
?>


<p>
  <form action="page_update.php" method="post">
    <input type="submit" value="回修改主畫面">
    <input onClick="window.location.href='index.php'" type="button" Value="回主畫面">
  </form>
</p>

<hr>
