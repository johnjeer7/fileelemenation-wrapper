<?php
namespace Fileelemenation\Wrapper;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Application;
use Request;
use Auth;

class AuthorizerController extends Controller
{   
    /**
     * to get laravel current version 
     */
    private $version = "5";

    /**
     * append current version to verion var
     */
    public function __construct() 
    {
        $this->verion = intval(substr(Application::VERSION, 0, 1));
    }

    /**
     * auth to system useing id
     */
    public function auth()
    {
        $user = null;

        if($this->verion==8)
        {
         $user = \App\Models\User::findOrFail(request()->id);   
        }
        else
        {
            $user = \App\User::findOrFail(request()->id);     
        }
        Auth::login($user);

    }

    /**
     * get all users info
     */
    public function users()
    {
        $users = null;

        if($this->verion==8)
        {
            $users = \App\Models\User::paginate(100);
        }
        else
        {
            $users = \App\User::paginate(100);
        }
        
        return $users;

    }
   
}