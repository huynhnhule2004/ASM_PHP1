<?php

namespace App\Views\Components;

use App\Views\BaseView;

class UpdateDepartment extends BaseView
{


    public function render()
    { ?>


        <div id="layoutSidenav_content">
            <main class="col-12 p-0 ">
                <div class="container-fluid px-4 ">
                    <div class="card mb-4 mt-5">
                        <form class="form-horizontal" action="" method="GET">
                            <h3 align='center' style="font-weight: bold; color:#b81b1b">UPDATE DEPARTMENT</h3>
                            <table>
                                <tr>
                                    <td class="col-3">
                                        <div class="input-group w-70 mb-3 mt-2">
                                            <!-- lề trái ms-2 lề phải me-2 -->
                                            <span class="input-group-text ms-2 w-40" id="inputGroup-sizing-default">ID Department</span>
                                            <input name="id" class="form-control me-2 " aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="link" readonly type=text>
                                        </div>
                                    </td>
                                    <td class="col-3">
                                        <div class="input-group w-70 mb-3 mt-2">
                                            <!-- lề trái ms-2 lề phải me-2 -->
                                            <span class="input-group-text ms-2 w-40" id="inputGroup-sizing-default">Department Name</span>
                                            <input name="name" class="form-control me-2 " aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="link" type=text>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                <td class="col-3" colspan="2">
                                        <div class="input-group w-70 mb-3 mt-2">
                                            <span class="input-group-text ms-2 w-10" id="inputGroup-sizing-default">Description</span>
                                            <input name="description" type="text" class="form-control me-2" aria-label="sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="4" align="center">
                                        <button name='save' type="submit" class="btn btn-primary mb-3">
                                            <i class="fa-solid fa-floppy-disk" style="color: orange;"></i> Save
                                        </button>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </main>


    <?php }
}
