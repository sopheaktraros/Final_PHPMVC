<?php
function get_employee()
{
    $query = "SELECT e.emp_id,emp_fname,emp_lname,p.pro_name
        FROM tblemployee e LEFT JOIN tblprovince p ON e.pro_id = p.pro_id; ";
    include "connection.php";
    $result = mysqli_query($connection, $query);
    return $result;
}

function m_add_employee()
{
    include "connection.php";
    $firstname = $_POST['fname'];
    $lastname = $_POST['lname'];
}
