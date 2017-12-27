<?php

namespace App\Controller;

use App\View;

class IndexController extends Controller
{
    public function index()
    {
        $this->view = View::make('home')->with('article', [
            'content' => 'hello world',
            'title' => 'title',
        ])
            ->withTitle('MFFC :-D')
            ->withFuckMe('OK!');

    }
}