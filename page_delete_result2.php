<h2>資料庫管理系統-修改</h2>
<hr>

<?php
// 是否是表單送回
if ( isset($_POST["cust_no"]) && isset($_POST["submit_delete"])) {

   // 取得SQL指令
   $sql = "DELETE FROM basic WHERE cust_no = " . $_POST["cust_no"];
   $sql = stripslashes($sql);
//    $sql = stripslashes($_POST["Sql"]);
//    echo "SQL指令:<b> $sql </b><br/>";
   
    /**
     * connect to db
     */
    require_once("./include/db_connection.php");


  if ( mysqli_query($link, $sql) ){ // 執行SQL指令
     echo '<p>!資料刪除成功!</p>';
  } else {
     echo '<p style="color: red">!資料刪除失敗!</p>';
  }

   /**
    * close db
    */
    require_once("./include/db_connection.php");
} else {
  echo "!資料沒有刪除!";
}
?>


<p>
  <form action="page_delete.php" method="post">
    <input type="submit" value="回刪除主畫面">
    <input onClick="window.location.href='index.php'" type="button" Value="回主畫面">
  </form>
</p>

<hr>
