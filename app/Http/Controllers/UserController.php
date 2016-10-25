<?php

namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;


class UserController extends Controller
{
    private $response,$status = 200;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function get($id='')
    {
        if(!empty($id)){
             $user  = User::find($id);
             if(empty($user)){
                $this->response['message'] = 'User not found';
            }
            else{
                 $this->response['data'] = $user;
            }
        }
        else{
            $users = User::all();
            if(empty($users)){
                $this->response['message'] = 'No users found';
            }
            else{
                 $this->response['data'] = $users;
            }
        }        
        return response()->json($this->response,$this->status);
    }

    public function create(Request $request)
    {
        $user = User::create($request->json()->all());
        $this->response['data'] = $user;
        return response()->json($this->response,$this->status);  
    }


    public function update(Request $request,$id)
    {
        $user  = User::find($id);
        $user->name = $request->json()->get('name');
        $user->email = $request->json()->get('email');
    
        if($data = $user->save()){
            print_r($data);
            $this->response['message'] = 'User updated successfully';
        }
 
        return response()->json($this->response,$this->status);  
    }

    public function delete($id)
    {
        $user  = User::find($id);
 
        $user->delete();
        $this->response['message'] = 'success';
        return response()->json($this->response,$this->status);
    }

}
