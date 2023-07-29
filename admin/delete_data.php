<?php
 require("../includes/config.php"); 

if(isset($_GET['id'])){
     $sql = "DELETE FROM books WHERE BID='" . $_GET["id"] . "'";
    $con->query($sql);
    header("location:view_books.php");
}
else{
    echo "not";
}

?>