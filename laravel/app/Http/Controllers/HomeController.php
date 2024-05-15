<?php
// namespace
namespace App\Http\Controllers;
// uses
use Illuminate\Http\Request;
use App\Models\User;
/**
 * HomeController
 */
class HomeController extends Controller
{
    /**
     * Method home
     *
     * @return void
     */
    public function home(){
        $posts = User::all();
        return view('home',compact('posts'));
    }
}
