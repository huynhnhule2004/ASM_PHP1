<?php

namespace App\Views\Components;

use App\Views\BaseView;

class DepartmentList extends BaseView
{


    public function render()
    { ?>


        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Department List</h1>

                    <div class="card mb-4">
                        <form action="" method="POST" enctype="multipart/form-data">

                            <div class="card-header">
                                <button type="button" class="btn btn-success">
                                    <i class="fa-solid fa-plus"></i>
                                    Add Department
                                </button>

                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Edit</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>HR</td>
                                            <td>Human Resources Department</td>
                                            <td>
                                                <div class="submit"></div>
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa-solid fa-trash-can" width="16" height="16"></i>
                                                </button>
                                                <button type="submit" class="btn btn-warning text-white" formaction='index.php?act=updateDepartment'>
                                                    <i class="fa-solid fa-pen-to-square" width="16" height="16"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>IT</td>
                                            <td>Information Technology Department</td>
                                            <td>
                                                <div class="submit"></div>
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa-solid fa-trash-can" width="16" height="16"></i>
                                                </button>
                                                <button type="submit" class="btn btn-warning text-white" formaction='index.php?act=updateDepartment'>
                                                    <i class="fa-solid fa-pen-to-square" width="16" height="16"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Marketing</td>
                                            <td>Marketing Department</td>
                                            <td>
                                                <div class="submit"></div>
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa-solid fa-trash-can" width="16" height="16"></i>
                                                </button>
                                                <button type="submit" class="btn btn-warning text-white" formaction='index.php?act=updateDepartment'>
                                                    <i class="fa-solid fa-pen-to-square" width="16" height="16"></i>
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Finance</td>
                                            <td>Finance Department</td>
                                            <td>
                                                <div class="submit"></div>
                                                <button type="submit" class="btn btn-danger">
                                                    <i class="fa-solid fa-trash-can" width="16" height="16"></i>
                                                </button>
                                                <button type="submit" class="btn btn-warning text-white" formaction='index.php?act=updateDepartment'>
                                                    <i class="fa-solid fa-pen-to-square" width="16" height="16"></i>
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
