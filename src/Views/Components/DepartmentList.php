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
                                <button type="submit" class="btn btn-success" formaction="index.php?act=addDepartment">
                                    <i class="fa-solid fa-plus"></i>
                                    Add Department
                                </button>

                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Edit</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Description</th>
                                            <th>Edit</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
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
                                            <td>2</td>
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
                                            <td>3</td>
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
                                            <td>4</td>
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
