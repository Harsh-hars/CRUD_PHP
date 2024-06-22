<?php
include './config.php';
if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];
    $res = mysqli_query($conn , "DELETE FROM `users` WHERE id = '$id'");
    if($res){
        echo "<script>alert('deleted successfully')
        
        window.location.href='./dashboard.php'</script>";
    }else{
        die(mysqli_error($conn));
    }
}
?>