<?php
include './config.php';


    $id = $_GET['editid'];
    $res = mysqli_query($conn , "SELECT * FROM `users` WHERE id = '$id'");
    $row = mysqli_fetch_assoc($res);
    if($row){
    $name = $row['name'];
    $email = $row['email'];
    $password = $row['password'];
    $age = $row['age'];
   }

if(isset($_POST['submit'])){
    $name = $_POST['name']; 
    $email = $_POST['email']; 
    $password = md5($_POST['password']); 
    $age = $_POST['age']; 
 
    $res = mysqli_query($conn,"UPDATE `users` SET `id`='$id',`name`='$name',`email`='$email',`password`='$password',`age`='$age' WHERE id = '$id'");
 
     echo "<script>
     alert('updated');
     window.location.href='./dashboard.php';
     </script>
     ";
   
 }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind CSS Form</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-bold mb-4 text-center">Add User</h1>
        <form method="POST"  class="max-w-lg mx-auto bg-white p-8 shadow-lg rounded-lg">
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="name">
                    Name
                </label>
                <input value="<?php echo $name ?>" name="name" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="name" type="text" placeholder="Your Name">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                    Email
                </label>
                <input value="<?php echo $email ?>" name="email" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" placeholder="Your Email">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                    Password
                </label>
                <input value="<?php echo $password ?>" name="password" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Password" type="password" placeholder="Your Password">
            </div>
            <div class="mb-4">
                <label class="block text-gray-700 text-sm font-bold mb-2" for="Age">
                    Age
                </label>
                <input value="<?php echo $age ?>" name="age" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="Age" type="number" placeholder="Your Age">
            </div>
           
            <div class="flex items-center justify-between">
                <button name="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                    Update
                </button>
            </div>
        </form>
    </div>
</body>
</html>