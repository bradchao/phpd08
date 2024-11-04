<?php
    /*
    SELECT e.EmployeeID, e.LastName, sum(od.UnitPrice * od.Quantity) total
    FROM orders o
    JOIN orderdetails od ON (o.OrderID = od.OrderID)
    JOIN employees e ON (o.EmployeeID = e.EmployeeID)
    GROUP BY e.EmployeeID
    ORDER BY total DESC

    驗算
    id  = 4 => 250187.4500

    SELECT sum(UnitPrice * Quantity)
    FROM orderdetails
    WHERE OrderID IN (
        SELECT OrderID FROM orders
        WHERE EmployeeID = 4
    )
    */

    $mysqli = new mysqli('localhost',
    'root','', 'northwind');
    $mysqli->set_charset('utf8'); 

    $sql = 'SELECT e.EmployeeID id, e.LastName ename, sum(od.UnitPrice * od.Quantity) total
            FROM orders o
            JOIN orderdetails od ON (o.OrderID = od.OrderID)
            JOIN employees e ON (o.EmployeeID = e.EmployeeID)
            GROUP BY e.EmployeeID
            ORDER BY total DESC';

    $stmt = $mysqli->prepare($sql);
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($id, $ename, $total);

?>
<table border="1">
    <tr>
        <th>Rank</th>
        <th>ID</th>
        <th>Name</th>
        <th>Sales</th>
    </tr>
    <?php
        $rand = 1;
        while ($stmt->fetch()){
            echo '<tr>';
            echo "<td>{$rand}</td>";
            echo "<td>{$id}</td>";
            echo "<td>{$ename}</td>";
            echo "<td>{$total}</td>";
            echo '</tr>';
            $rand++;
        }
    ?>

</table>