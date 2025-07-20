<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Cards</title>
    <link rel="stylesheet" href="style3.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        .card {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .a {
            background-color: #fff;
            padding: 20px;
            width: 200px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            border-radius: 10px;
            height: 250px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .a h1 {
            margin: 0 0 10px;
            font-size: 18px;
        }

        .a p {
            margin: 0;
            color: #555;
        }

        .footer {
            text-align: center;
            margin-top: 40px;
            color: #888;
        }
    </style>
</head>
<body>
    <h1>User List</h1>
    <div class="card">
        <?php
            include "dbcon.php";

            $query = "SELECT * FROM users";
            $run = mysqli_query($conn, $query);

            if(mysqli_num_rows($run) > 0) {
                while($row = mysqli_fetch_assoc($run)) {
                    echo '<div class="a">';
                    echo '<h1>' . $row['username'] . '</h1>';
                    echo '<p>Password: ' . $row['password'] . '</p>';
                    echo '</div>';
                }
            } else {
                echo "<p>No users found.</p>";
            }
        ?>
    </div>
        <div class="footer">
        © All right reserved.
    </div>

</body>
</html>
