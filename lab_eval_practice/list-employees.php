<?php 
include 'dbcon.php';

$sql = "SELECT * FROM employees";
$res = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="nav">
        <h1>Employee Management</h1>
        <div class="nav-links">
            <a href="add-employee.php">Add Employees</a>
            <a href="list-employees.php">List Employees</a>
        </div>
    </div>

    <div class="table-container">
        <h2 style="text-align:center;">Employee List</h2>
        <table border="1" cellpadding="10" cellspacing="0">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Gender</th>
                    <th>Designation</th>
                    <th>Salary</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (mysqli_num_rows($res)>0):
                    while ($row = mysqli_fetch_assoc($res)):
                ?>
                <tr>
                    <td>
                        <?php echo htmlspecialchars($row['name']); ?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($row['email']); ?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($row['mobile']); ?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($row['gender']); ?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($row['designation']); ?>
                    </td>
                    <td>
                        <?php echo htmlspecialchars($row['salary']); ?>
                    </td>
                </tr>
                <?php endwhile; else: ?>
                <tr>
                    <td colspan="7" style="text-align:center;">No employees found</td>
                </tr>
                <?php endif; ?>
            </tbody>
            
        </table>
    </div>
</body>
</html>