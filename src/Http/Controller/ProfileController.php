<?php

namespace Alien\Gglink\Http\Controller;

use Illuminate\Http\Request;
use Illuminate\Http\Client\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class ProfileController extends Controller
{

    public function index(){
        
        $response = Http::get('https://reqres.in/api/users');
        $qItems = json_decode($response, true);

        return view('gglink::user.profile')->with('qItems', $qItems);

    }

    //New Profile Information Create
    public function store(Request $request){
        try {
            $response = Http::post('https://reqres.in/api/users/', [
                'first_name' => $request->txtFirstName,
                'last_name' => $request->txtLastName,
                'lastemail_name' => $request->txtEmail,
            ]);

            $iMessage = "Profile information is successfully created.";

        } catch (\Illuminate\Database\QueryException $ex) {
            $iMessage = $ex->getMessage();
            
        }

        return redirect('profile')->with('message', $iMessage);        
    }


    //Profile Data Update Method
    public function update(Request $request, $id){

        try {
            $response = Http::put('https://reqres.in/api/users/'.$id, [
                'first_name' => $request->txtFirstName,
                'last_name' => $request->txtLastName,
                'lastemail_name' => $request->txtEmail,
            ]);

            $iMessage = "Profile information is successfully updated.";

        } catch (\Illuminate\Database\QueryException $ex) {
            $iMessage = $ex->getMessage();
            
        }

        return redirect('profile')->with('message', $iMessage);
    }


    //Delete Profile Information
    public function delete(Request $request, $id)
    {
        try {
            $response = Http::delete('https://reqres.in/api/users/'.$id);

            $iMessage = "Profile information is successfully deleted.";
  
        } catch (\Illuminate\Database\QueryException $ex) {
            $iMessage = $ex->getMessage();
            
        }

        return redirect('profile')->with('message', $iMessage);
    }
}