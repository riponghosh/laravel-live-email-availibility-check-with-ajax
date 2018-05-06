<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailAvailable extends Controller
{
   	function index()
   	{
   		return view('email_available');
   	}

   	function check(Request $request)
   	{
   		if($request->get('email'))
   		{
   			$email = $request->get('email');
   			$data = DB::table("tbl_login")
   				->where('email', $email)
   				->count();
   			if($data > 0)
   			{
   				echo 'not_unique';
   			}
   			else
   			{
   				echo 'unique';
   			}
   		}
   	}

}
?>