<?php
    /*
        SELECT o.CustomerID, o.EmployeeID, p.ProductName, od.UnitPrice, od.Quantity 
        FROM orderdetails od
        JOIN orders o ON (o.OrderID = od.OrderID)
        JOIN products p ON (od.ProductID = p.ProductID)
        WHERE od.OrderID = 10248
    */
    if (!$_REQUEST['orderId']){
        $rep = array(
            'error' => 1            
        );
    }else{
        $orderId = $_REQUEST['orderId'];
        $mysqli = new mysqli('localhost',
        'root','', 'northwind');
        $mysqli->set_charset('utf8'); 

        $sql = 'SELECT o.CustomerID cid, o.EmployeeID eid, p.ProductName pname, 
                od.UnitPrice price, od.Quantity qty 
                FROM orderdetails od
                JOIN orders o ON (o.OrderID = od.OrderID)
                JOIN products p ON (od.ProductID = p.ProductID)
                WHERE od.OrderID = ?';
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param('i', $orderId);
        $stmt->execute();
        $stmt->store_result();
        if ($stmt->num_rows == 0) {
            $rep = array(
                'error' => 2            
            );
        }else{
            $rep = array(
                'error' => 0,
            );

            $stmt->bind_result($cid, $eid, $pname, $price, $qty);
            while ($stmt->fetch()){
                $rep['cid'] = $cid;
                $rep['eid'] = $eid;
                $rep['detail'][] = array(
                    'pname' => $pname,
                    'price' => $price,
                    'qty' => $qty,
                ) ;
            }
        }
    }

    header('Content-type: application/json');
    echo json_encode($rep);
?>