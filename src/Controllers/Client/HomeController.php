<?php

namespace Dellpc\PhpOop\Controllers\Client;

use Dellpc\PhpOop\Commons\Controller;
class HomeController extends Controller
{
    public function index() {
        $name = 'DucTV44';

        $this->renderViewClient('home', [
            'name' => $name
        ]);
    }
}