<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tailwind CSS Table</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <style>
        table {
            min-width: 80vw;
            max-width: 80vw;
        }
    </style>

</head>

<body>
    <div class="p-8 flex flex-col justify-center items-center min-h-[100vh]">
        <div>
            <button class="bg-blue-500 text-white px-2 py-1 rounded mb-3"><a href="./add.php">Add user</a></button>
            <table class=" bg-white">
                <thead>
                    <tr class="w-full bg-gray-800 text-white">
                        <th class="py-2 px-4 text-left">Sno</th>
                        <th class="py-2 px-4 text-left">Name</th>
                        <th class="py-2 px-4 text-left">Age</th>
                        <th class="py-2 px-4 text-left">Email</th>
                        <th class="py-2 px-4 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Sample row to demonstrate -->
                    <!-- <tr class="border-b border-gray-200">
                        <td class="py-2 px-4">0</td>
                        <td class="py-2 px-4">John Doe</td>
                        <td class="py-2 px-4">25</td>
                        <td class="py-2 px-4">john@example.com</td>
                        <td class="py-2 px-4">
                            <button class="bg-blue-500 text-white px-2 py-1 rounded">Edit</button>
                            <button class="bg-red-500 text-white px-2 py-1 rounded">Delete</button>
                        </td>
                    </tr> -->

                    <?php
                    include './config.php';
                    $res = mysqli_query($conn, "SELECT * FROM `user`");
                    // print_r($res);
                    
                    while ($row = mysqli_fetch_assoc($res)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $age = $row['age'];
                        $email = $row['email'];

                        echo ' <tr class="border-b border-gray-200"> 
                             <td class="py-2 px-4">' . $id . '</td>' .
                            '<td class="py-2 px-4">' . $name . '</td>' .
                            '<td class="py-2 px-4">' . $age . '</td>' .
                            '<td class="py-2 px-4">' . $email . '</td>' .
                            '<td class="py-2 px-4">' .
                            '<button class="bg-blue-500 text-white px-2 py-1 rounded">' . '<a href="./edit.php?editid='.$id.'">Edit</a></button>
                            ' . '<button class="bg-red-500 text-white px-2 py-1 rounded">' .'<a href="./delete.php?deleteid='.$id.'">Delete</a></button>
                        </td>';
                    }
                    ?>

                    <!-- Add more rows as needed -->
                </tbody>
            </table>

        </div>
    </div>
</body>

</html>