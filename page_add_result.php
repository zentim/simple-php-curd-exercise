<h2>資料庫管理系統-查詢</h2>
<hr>

<?php
// 是否是表單送回
if ( isset($_POST["cust_no"]) ) {
   // 取得SQL指令
   $sql = "INSERT INTO basic(cust_no, name, id, tel_no, address)";
   $sql .= " VALUES  (" . $_POST["cust_no"] . ", '" . $_POST["name"] . "', '";
   $sql .= $_POST["id"] . "', '" . $_POST["tel_no"] . "', '" . $_POST["address"] . "')";
   $sql = stripslashes($sql);
//    $sql = stripslashes($_POST["Sql"]);
//    echo "SQL指令:<b> $sql </b><br/>";
   
  /**
   * connect to db
   */
  require_once("./include/db_connection.php");


  if ( mysqli_query($link, $sql) ){ // 執行SQL指令
     echo '<p>!資料新增成功!</p>';
  } else {
     echo '<p style="color: red">!資料新增失敗!</p>';
  }


  
   /**
    * close db
    */
    require_once("./include/db_connection.php");
}
?>


<p>
  <form action="page_add.php" method="post">
    <input type="submit" value="回新增畫面">
    <input onClick="window.location.href='index.php'" type="button" Value="回主畫面">
  </form>
</p>

<hr>
