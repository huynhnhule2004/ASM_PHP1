<?php

namespace App\Views\Components;

use App\Views\BaseView;

class Footer extends BaseView
{


    public function render()
    { ?>

        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Lê Thị Huỳnh Như - PC09147</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
        </div>
        </div>

<?php }
}
