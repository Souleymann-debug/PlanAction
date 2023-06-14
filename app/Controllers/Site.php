<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Libraries\Slug; // Import library

class Site extends BaseController
{
    public function index()
    {
        //
    }

    public function generateMySlug()
    {
        $slug = new Slug(); // create an instance of Library

        $string = "Online Web Tutor Blog";

        echo $slug->slugify($string); // calling method
    }
}
