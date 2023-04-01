<?php


namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class userController extends Controller {
    private $request;
    public $timestamps = false;

     /**
     * Create a new controller instance.
     *
     * @return void
     */

     public function __construct(Request $request) {
        $this->request= $request;
     }

     public function showUsers() {
        return response()->json(User::all());
    }


    public function showUser($id) {
        $user = User::findOrFail($id);

        return response()->json($user);

    }

    public function addUser(Request $request){
        $rules = [
            'username' => 'required | max:20',
            'password' => 'required | max:20'
        ];

        $this->validate($request, $rules);

        $user = User::create($request->all());

        return response()->json($user, 201);
    }
    
}
