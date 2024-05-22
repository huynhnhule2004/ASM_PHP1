<?php

namespace App\Views\Components;

use App\Views\BaseView;

class NotFound extends BaseView
{


    public function render()
    { ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">This page does not exist! </h1>
                    <a href="index.php">Return to home page!</a>
                </div>
            </main>

    <?php }
}
