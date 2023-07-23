<?php
include 'connect.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CURD</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add user</a></button>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Name</th>
                    <th scope="col">email</th>
                    <th scope="col">mobile</th>
                    <th scope="col">password</th>
                    <th scope="col">operations</th>
                </tr>
            </thead>
            <tbody>


                <?php
                $sql = "select * from `curd2`";
                $result = mysqli_query($con, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];
                        echo '<tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $name . '</td>
                    <td>' . $email . '</td>
                    <td>' . $mobile . '</td>
                    <td>' . $password . '</td>
                    <td>
                    <button class="btn btn-primary"><a href="update.php?up='.$id.'" class="text-light">Update</a></button>
                    <button class="btn btn-danger"><a href="delete.php?del='.$id.'" class="text-light">Delete</a></button>

                    
                    </td>
                </tr>
                ';
                    }
                }

                ?>

            </tbody>
        </table>
    </div>
</body>
<!-- <button class="btn btn-danger"><a herf="delete.php?del='.$id.'">Delete</a></button> -->

</html>