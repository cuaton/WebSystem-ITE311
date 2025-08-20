<?php
namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        // Load the home_view.php into $data['content']
        $data['content'] = view('home_view');

        // Pass $content to the template.php layout
        return view('template', $data);
    }
}
