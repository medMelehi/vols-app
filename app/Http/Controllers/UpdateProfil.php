<?php


namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class updateProfil extends Controller
{
    	
    public function updateProfilImg(Request $request , $id)
    {
    		$user = User :: find($id);

			if ($request->hasfile('image')) {
				$file = $request->file('image');
				$extension = $file->getClientOriginalExtension();
				$filename = date('Ymdhm') . '.' . $extension;
				$file->move('uploads/', $filename);
				$user->profilImg = $filename;
			}
				$user->save();
			    return redirect('/profil')	;
		    		
	}

	  
   

   

    	/*$this->validator($request->all())->validate();

     
    function validator(array $data)
    {
        return Validator::make($data, [
           
            'firstname' => ['required', 'string', 'max:255', 'min:3'],
            'lastname' => ['required', 'string', 'max:255', 'min:3'],
            'nationalite' => ['required', 'string', 'max:255'],
            'tel' => ['required','numeric'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],



        ]);
    }
*/
        

		 public function editfirstname(Request $request , $id)
    {
    		
    		$user = User :: find($id);


    		$user->firstname = $request->input('firstname');
    		
				$user->save();
			    return redirect('/profil')	;
		    		
	}
			 public function editlastname(Request $request , $id)
    {
    		
    		$user = User :: find($id);


    		$user->lastname = $request->input('lastname');
    		
				$user->save();
			    return redirect('/profil')	;
		    		
	}
			 public function editnationalite(Request $request , $id)
    {
    		
    		$user = User :: find($id);


    		$user->nationalite = $request->input('nationalite');
    		
				$user->save();
			    return redirect('/profil')	;
		    		
	}
			 public function edittel(Request $request , $id)
    {
    		
    		$user = User :: find($id);


    		$user->telephone = $request->input('tel');
    		
				$user->save();
			    return redirect('/profil')	;
		    		
	}
			 public function editemail(Request $request , $id)
    {
    		
    		$user = User :: find($id);


    		$user->email = $request->input('email');
    		
				$user->save();
			    return redirect('/profil')	;
		    		
	}

}
