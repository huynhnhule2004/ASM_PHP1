<?php

namespace App\Views\Components;

use App\Views\BaseView;

class UpdateEmployee extends BaseView
{


    public function render()
    { ?>


        <div id="layoutSidenav_content">
            <main class="col-12 p-0 ">
                <div class="container-fluid px-4 ">
                    <div class="card mb-4 mt-5">
                        <form class="form-horizontal" action="" method="GET">
                            <h3 align='center' style="font-weight: bold; color:#b81b1b">UPDATE EMPLOYEE</h3>
                            <table>
                                <tr>
                                    <td class="col-3">
                                        <div class="input-group w-70 mb-3 mt-2">
                                            <!-- lề trái ms-2 lề phải me-2 -->
                                            <span class="input-group-text ms-2 w-40" id="inputGroup-sizing-default">First Name</span>
                                            <input name="first_name" class="form-control me-2 " aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" id="link" readonly type=text>
                                        </div>
                                    </td>
                                    <td class="col-3">
                                        <div class="input-group w-70 mb-3 mt-2">
                                            <span class="input-group-text ms-2 w-25" id="inputGroup-sizing-default">Last Name</span>
                                            <input name="last_name" type="text" class="form-control me-2" aria-label="sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                    </td>
                                    <td class="col-3">
                                        <div class="input-group w-70 mb-3 mt-2">
                                            <span class="input-group-text ms-2 w-30" id="inputGroup-sizing-default">Date Of Birth</span>
                                            <input name="date_of_birth" type="date" min=1000 class="form-control me-2" aria-label="sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                    </td>
                                    <td class="col-3">
                                        <div class="input-group w-70 mb-3 mt-2">
                                            <span class="input-group-text ms-2 w-30" id="inputGroup-sizing-default">Gender</span>
                                            <input name="gender" type="text" min=1000 class="form-control me-2" aria-label="sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-3">
                                        <div class="input-group w-70 mb-3 mt-2">
                                            <span class="input-group-text ms-2 w-40" id="inputGroup-sizing-default">Phone Number</span>
                                            <input name="phone_number" type="tel" class="form-control me-2" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                    </td>
                                    <td class="col-3">
                                        <div class="input-group w-70 mb-3 mt-2">
                                            <span class="input-group-text ms-2 w-40" id="inputGroup-sizing-default">Email</span>
                                            <input name="email" type="email" class="form-control me-2" aria-lable="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                    </td>
                                    <td class="col-3">
                                        <div class="input-group w-70 mb-3 mt-2">
                                            <span class="input-group-text ms-2 w-30" id="inputgroup-sizing-default">Address</span>
                                            <input name="address" type="text" class="form-control me-2" aria-lable="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                    </td>
                                    <td class="col-3">
                                        <div class="input-group w-70 mb-3 mt-2">
                                            <span class="input-group-text ms-2 w-30" id="inputgroup-sizing-default">Start Date</span>
                                            <input name="start_date" type="date" class="form-control me-2" aria-lable="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>

                                    </td>
                                </tr>
                                <tr>
                                    <td class="col-3" colspan="2">
                                        <div class="input-group w-70 mb-3 mt-2">
                                            <span class="input-group-text ms-2 w-30" id="inputgroup-sizing-default">Department</span>
                                            <select type="text" name="loai" class="form-select" id="" aria-label="Default select example">
                                                <option selected disabled value="">--Choose Department--</option>
                                                <option value="">1-IT</option>
                                                <option value="">2-Marketing</option>
                                                <option value="">3-Marketing</option>
                                                <option value="">4-Sales</option>
                                            </select>
                                        </div>
                                    </td>
                                    <td class="col-3" colspan="2">
                                        <div class="input-group w-70 mb-3 mt-2">
                                            <span class="input-group-text ms-2 w-30" id="inputgroup-sizing-default">Salary</span>
                                            <input name="salary" type="number" class="form-control me-2" aria-lable="Sizing example input" aria-describedby="inputGroup-sizing-default">
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4" align="center">
                                        <button name='them' type="submit" formaction='sanpham_them.php' class="btn btn-primary mb-3">
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
