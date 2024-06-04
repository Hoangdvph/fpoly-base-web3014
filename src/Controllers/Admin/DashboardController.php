<?php

namespace Dellpc\PhpOop\Controllers\Admin;

use Dellpc\PhpOop\Commons\Controller;

class DashboardController extends Controller
{
    public function dashboard()
    {
        $this->renderViewAdmin(__FUNCTION__);
    }
}
