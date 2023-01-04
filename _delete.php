<?php
require_once('baglanti.php');

if (isset($_GET['id'])) {
    $id = intval(($_GET['id']));
    $sql = "delete from urunler where id=?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    if ($conn->affected_rows == 1) {
        header('location:urun.php');
    } else {
       header("refresh:3:url=http://localhost/mydepo/urun.php");
       echo "ürün silinemedi";

    }

}

?>
<!--
<script>
   setTimeout(function(){
     alert("beklenmeyen bir hata oluştu");
     window.location.href='http://localhost/urun.php';

   },2000);
   
 </script>
-->