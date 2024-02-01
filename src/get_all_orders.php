<?php

include('conf.php');
$query = "SELECT * FROM `order`";
$run = mysqli_query($conn, $query);
$result = mysqli_num_rows($run);

if ($result) {
    echo "<table border='1' class='table'>
        <tr>
            <th>User id </th>
            <th>product id </th>
            <th>product_ids</th>
            <th>total</th>

        </tr>";

    while ($row = mysqli_fetch_row($run)) {
        echo "<tr>";
        echo "<td>" . $row[0] . "</td>";
        echo "<td>" . $row[1] . "</td>";
        echo "<td>" . $row[2] . "</td>";
        echo "<td>" . $row[3] . "</td>";
    
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo ("NOT ABLE TO GET DATA !!!!!");
}

mysqli_close($conn);
?>
