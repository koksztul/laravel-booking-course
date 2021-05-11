<?php
/*
|--------------------------------------------------------------------------
| app/Http/Controllers/FrontendController.php *** Copyright netprogs.pl | available only at Udemy.com | further distribution is prohibited  ***
|--------------------------------------------------------------------------
*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enjoythetrip\Repositories\FrontendRepository;

class FrontendController extends Controller
{
    public function __construct(FrontendRepository $repository)
    {
        $this->fR = $repository;
    }
    public function index()
    {
        $objects = $this->fR->getObjectsForMainPage();

        dd($objects);
        return view('frontend.index', compact('objects'));
    }

    public function article()
    {
       
        return view('frontend.article');
    }

    public function object()
    {
        return view('frontend.object');
    }

    public function person()
    {
        return view('frontend.person');
    }

    public function room()
    {
        return view('frontend.room');
    }

    public function roomsearch()
    {
        return view('frontend.roomsearch');
    }
}
