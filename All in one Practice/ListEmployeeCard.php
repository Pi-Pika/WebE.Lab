<?php
    include "connect.php";

    // IMPORTANT: To prevent SQL injection, use prepared statements
    // However, for a simple SELECT * query with no user input, the current query is safe.
    // I'll keep the original query to match your code, but it's good practice to be aware of the security risk.
    $query = "SELECT * FROM employee";
    $run = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List Page</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* CSS to style the cards */
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .card {
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            width: 300px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
            text-align: left;
        }
        
        .card h3 {
            margin-top: 0;
            border-bottom: 2px solid #007bff;
            padding-bottom: 10px;
        }

        .card p {
            margin: 5px 0;
        }

        .card .actions {
            margin-top: 15px;
        }

        .card .actions a {
            margin-right: 10px;
            text-decoration: none;
            padding: 5px 10px;
            border-radius: 4px;
        }

        .card .actions .update-btn {
            background-color: #007bff;
            color: white;
        }

        .card .actions .delete-btn {
            background-color: #dc3545;
            color: white;
        }
    </style>
</head>
<body>
    <div class="nav">
        <div class="logo">
            <h2>Employee Management</h2>
        </div>
        <div class="search">
            <form method="get" action="search.php">
                <input type="text" name="info" id="info" placeholder="Search">
                <input type="submit" value="search">
            </form> 
        </div>
        <div class="links">
            <a href="index.html">Add Employee</a>
            <a href="ListEmployee.php">List Employee</a>
        </div>
    </div>

    <br><br>
    
    <div class="container" align="center">
        <h2>Employee List</h2>
        <?php if(mysqli_num_rows($run) > 0) { ?>
            <div class="card-container">
            <?php while($row = mysqli_fetch_assoc($run)) { ?>
                <div class="card">
                    <h3><?= htmlspecialchars($row['uname']) ?></h3>
                    <p><strong>Email:</strong> <?= htmlspecialchars($row['email']) ?></p>
                    <p><strong>Mobile:</strong> <?= htmlspecialchars($row['mobile']) ?></p>
                    <p><strong>Gender:</strong> <?= htmlspecialchars($row['gender']) ?></p>
                    <p><strong>Designation:</strong> <?= htmlspecialchars($row['designation']) ?></p>
                    <p><strong>Salary:</strong> <?= htmlspecialchars($row['salary']) ?></p>
                    <div class="actions">
                        <a href="update.php?id=<?= urlencode($row['id']) ?>" class="update-btn">Update</a>
                        <a href="delete.php?id=<?= urlencode($row['id']) ?>" class="delete-btn" onClick="return confirm('Are you sure?')">Delete</a>
                    </div>
                </div>
            <?php } ?>
            </div>
        <?php } else { ?>
            <div class="Ndata">
                <h2>No Data in the table</h2>
            </div>
        <?php } ?>
    </div>
</body>
</html>