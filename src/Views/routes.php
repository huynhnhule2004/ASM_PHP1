<?php



ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);


use App\Views\Components\Login;
use App\Views\Components\Header;
use App\Views\Components\Aside;
use App\Views\Components\Footer;
use App\Views\Components\Home;
use App\Views\Components\NotFound;
use App\Views\Components\AddEmployee;
use App\Views\Components\AddDepartment;
use App\Views\Components\UpdateEmployee;
use App\Views\Components\UpdateDepartment;
use App\Views\Components\DepartmentList;




$login = new Login();
$header = new Header();
$aside = new Aside();
$footer = new Footer();
$addEmployee = new AddEmployee();
$addDepartment = new AddDepartment();
$updateEmployee = new UpdateEmployee();
$updateDepartment = new UpdateDepartment();
$departmentList = new DepartmentList();


$home = new Home();
$notFound = new NotFound();

// $login->render();
// $addEmployee->render();
$header->render();
$aside->render();

//Nếu ko có thì ''
$action = $_GET['act'] ?? '';

switch ($action) {

    case "":
        //load ra trang chủ
        $home->render();
        break;

    case "employeeList":

        $home->render();
        break;

    case "addEmployee":

        $addEmployee->render();
        break;

    case "departmentList":

        $departmentList->render();
        break;

    case "addDepartment":

        $addDepartment->render();
        break;

    case "updateEmployee":
        $updateEmployee->render();
        break;

    case "updateDepartment":
        $updateDepartment->render();
        break;

    default:

        $notFound->render();
        break;
}





$footer->render();
