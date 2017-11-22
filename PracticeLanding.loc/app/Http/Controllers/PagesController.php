<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PagesController extends Controller
{
    //
    public function execute() {

        if(view()->exists('admin.pages')) {
            $page = Page::all();

            $data = [
                'title' => 'Страницы',
                'pages' => $page
            ];

        return view('admin.pages', $data);

        }

        abort(404);
    }
}
