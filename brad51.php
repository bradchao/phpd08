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

?>