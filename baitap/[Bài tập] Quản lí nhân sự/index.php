<?php
include 'models/Employee.php';
include 'service/EmployeeManager.php';

$employeeManager = new EmployeeManager();
$employee1 = new Employee('Nguyen','Thanh',  '17/10/2003','Viet tri', 'sinh vien');
$employeeManager->addEmployees($employee1);

echo '<pre>';
print_r(($employeeManager->getAllEmployees()));