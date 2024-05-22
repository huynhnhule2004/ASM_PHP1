<?php

namespace App\Views\Components;

use App\Views\BaseView;

class Home extends BaseView
{


    public function render()
    { ?>


        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Employee List</h1>

                    <div class="card mb-4">
                        <form action="" method="POST" enctype="multipart/form-data">
                            <div class="card-header">
                                <button type="button" class="btn btn-success">
                                    <i class="fa-solid fa-plus"></i>
                                    Add Employee
                                </button>

                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Date Of Birth</th>
                                            <th>Gender</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Address</th>
                                            <th>Department</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Date Of Birth</th>
                                            <th>Gender</th>
                                            <th>Email</th>
                                            <th>Phone Number</th>
                                            <th>Address</th>
                                            <th>Department</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                            <th>Edit</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>Nguyễn Văn A</td>
                                            <td>1/1/1999</td>
                                            <td>Nam</td>
                                            <td>037448339</td>
                                            <td>nguyenvana@gmail.com</td>
                                            <td>Cần Thơ</td>
                                            <td>IT</td>
                                            <td>1/1/2020</td>
                                            <td>10000</td>
                                            <td>
                                                <div class="submit"></div>
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa-solid fa-trash-can" width="16" height="16"></i>
                                                </button>
                                                <button type="submit" class="btn btn-warning text-white" formaction="index.php?act=updateEmployee">
                                                    <i class="fa-solid fa-pen-to-square" width="16" height="16"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Trần Thị B</td>
                                            <td>15/3/1995</td>
                                            <td>Nữ</td>
                                            <td>0345678910</td>
                                            <td>tranthib@gmail.com</td>
                                            <td>Hà Nội</td>
                                            <td>Marketing</td>
                                            <td>5/5/2019</td>
                                            <td>12000</td>
                                            <td>
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa-solid fa-trash-can" width="16" height="16"></i>
                                                </button>
                                                <button type="submit" class="btn btn-warning text-white" formaction='index.php?act=updateEmployee'>
                                                    <i class="fa-solid fa-pen-to-square" width="16" height="16"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Phạm Văn C</td>
                                            <td>20/10/1988</td>
                                            <td>Nam</td>
                                            <td>038948573</td>
                                            <td>phamvanc@gmail.com</td>
                                            <td>Đà Nẵng</td>
                                            <td>Finance</td>
                                            <td>12/12/2018</td>
                                            <td>15000</td>
                                            <td>
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </button>
                                                <button type="submit" class="btn btn-warning text-white" formaction='index.php?act=updateEmployee'>
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Lê Thị D</td>
                                            <td>5/7/1993</td>
                                            <td>Nữ</td>
                                            <td>0321987435</td>
                                            <td>lethid@gmail.com</td>
                                            <td>Hải Phòng</td>
                                            <td>HR</td>
                                            <td>20/1/2017</td>
                                            <td>11000</td>
                                            <td>
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </button>
                                                <button type="submit" class="btn btn-warning text-white" formaction='index.php?act=updateEmployee'>
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Nguyễn Thị F</td>
                                            <td>10/8/1997</td>
                                            <td>Nữ</td>
                                            <td>0398765432</td>
                                            <td>nguyenthif@gmail.com</td>
                                            <td>Hồ Chí Minh</td>
                                            <td>Sales</td>
                                            <td>7/9/2016</td>
                                            <td>12500</td>
                                            <td>
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa-solid fa-trash-can"></i>
                                                </button>
                                                <button type="submit" class="btn btn-warning text-white" formaction='index.php?act=updateEmployee'>
                                                    <i class="fa-solid fa-pen-to-square"></i>
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                        </form>
                    </div>
                </div>
        </div>
        </main>


<?php }
}
