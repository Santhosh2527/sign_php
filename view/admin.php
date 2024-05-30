<?php

require("../module/dbcon.php");
require("../confi.php");

$sql = "SELECT * FROM user_details";

$result = $conn->query($sql);

if($result){
    echo "<table style='width: 100%; border-collapse: collapse;'>";
    echo "<tr style='background-color: #f2f2f2;'>";
    echo "<th style='border: 1px solid #ddd; padding: 8px; text-align: left;'>id</th>";
    echo "<th style='border: 1px solid #ddd; padding: 8px; text-align: left;'>Name</th>";
    echo "<th style='border: 1px solid #ddd; padding: 8px; text-align: left;'>Email</th>";
    echo "<th style='border: 1px solid #ddd; padding: 8px; text-align: left;'>Password</th>";
    echo "<th style='border: 1px solid #ddd; padding: 8px; text-align: center;'>Actions</th>";
    echo "</tr>";

    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td style='border: 1px solid #ddd; padding: 8px;'>". $row['id'] . "</td>";
        echo "<td style='border: 1px solid #ddd; padding: 8px;'>". htmlspecialchars($row['name']) . "</td>";
        echo "<td style='border: 1px solid #ddd; padding: 8px;'>". htmlspecialchars($row['email']) . "</td>";
        echo "<td style='border: 1px solid #ddd; padding: 8px;'>". htmlspecialchars($row['password']) . "</td>";
        echo "<td style='border: 1px solid #ddd; padding: 8px; text-align: center;'>";
        echo "<a href='../view/edit.php?id=" . $row['id'] . "' style='display: inline-block; padding: 5px 20px; margin-right: 15px; background-color: blue; color: white; text-decoration: none; border: none; cursor: pointer;'>Edit</a>" ;
        echo "<a href='../controller/delete.php?id=" . $row['id'] . "' style='display: inline-block; padding: 5px 10px; background-color: #dc3545; color: white; text-decoration: none; border: none; cursor: pointer;'>DELETE</a>";
        echo "</td>";
        echo "</tr>";
    }
   
    echo "</table>";
}

$conn->close();



?>