<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HelloController extends Controller {

    public function index()
    {

        $title = 'Laravel 5 Fundamental';
        $subtitle = 'From basic to expert';

//        return view('hello.index', [
//           'title' => $title,
//            'subtitle' => $subtitle
//        ]);

        return view('hello.index')
            ->withTitle($title)
            ->withSubtitle($subtitle);


//        return view('hello.index')
//            ->with('title', 'Laravel 5 Training')
//            ->with('subtitle', 'An introduction to laravel 5');

//        return view('hello.index')
//            ->with([
//                'title' => 'Laravel 5 Training',
//                'subtitle' => 'An introduction to laravel 5'
//            ]);
    }

}
