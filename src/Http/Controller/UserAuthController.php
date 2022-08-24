<?php

namespace Alien\Gglink\Http\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\Client\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class UserAuthController extends Controller
{
    public function index(){
        
        return view('gglink::auth.login');
    }


    public function dashboard(){
        return view('gglink::dashboard');
    }


    public function loginUser(Request $request){
        
        try {
            if (!Auth::attempt($request->only('txtUsername', 'txtPassword'))) {
                return response()->json([
                    'message' => 'Invalid login details'
                ], 401);
            }

            //Send Auth Request
            $response = Http::asForm()->post('https://reqres.in/api/login', [
                'email' => $request->txtEmail,
                'password' => $request->txtPassword,
            ]);
            // Set Token Information
            $token = $response['token'];

            $credentials = [
                'email' => $request->txtEmail,
                'password' => $request->txtPassword,
            ];
    
            if (Auth::guard('api')) {
                $user = Auth::guard('api')
                            ->user()
                            ->generateAndSaveApiAuthToken($token);
    
                return $user;

                $this->api_token = $token;
                $this->save();

            }
  
        } catch (\Illuminate\Database\QueryException $ex) {
            $iMessage = $ex->getMessage();
            return redirect('user-login');
        }

    }


    public function logout(){
        $user = Auth::guard('api')->user();

        if ($user) {
            $user->api_token = null;
            $user->save();
        }

        return response()->json(['Success' => 'Logged out'], 200);
    }


}