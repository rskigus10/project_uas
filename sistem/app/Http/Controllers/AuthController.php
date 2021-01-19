<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Pembeli;
use App\Models\Penjual;


class AuthController extends Controller
{
    function showLogin(){
        return view("template.login");
    }

    function showRegister(){
        return view("template.register");
    }

    function loginProcess(){
        if(Auth::attempt(['email' => request('email'),'password' => request('password')])){
			//return redirect('beranda')->with('success','Login Berhasil');
			//level pengguna
			$user = Auth::user();
			if($user->level == 1) return redirect('template/admin')->with('success','Login Berhasil');
			if($user->level == 0) return redirect('client')->with('success','Login Berhasil');
			if($user->level == 2) return redirect('')->with('success','Login Berhasil');
		}else{
			return back()->with('danger','Login Gagal, silahkan cek username dan password anda');
		}
		//level auth tips 1
		//$email = request('email');
		// 	$user = Pembeli::where('email', $email)->first();
		// if($user){
		// 	$guard = 'pembeli';
		// }else {
		// 	$user = Penjual::where('email', $email)->first();
		// 	if($user){
		// 		$guard = 'penjual';
		// 	}else {
		// 		$guard = false;
		// 	}
		// }
		// if(!$guard){
		// 	return back()->with('danger', 'Login Gagal, Email TIdak ditemukan');
		// }else{
		// 	if(Auth::guard($guard)->attempt(['email' => request('email'), 'password' => request('passwordS')])){
		// 		return redirect("beranda/$guard")->with ('success', 'Login Berhasil');
		// 	}else {
		// 		return back()->with('danger','Login Gagal, silahkan cek username dan password anda');
		// 	}
		// }
		
		//level auth tips 2
		//if(request('login_as' == 1)){
		//	if(Auth::guard('pembeli')->attempt(['email' => request('email'), 'password' => request('password')])){
		//		return redirect('beranda/pembeli')->with('success', 'login berhasil');
		//	}else{
		//		return back()->with('danger','Login Gagal, silahkan cek username dan password anda');
		//	}
		//}else {
		//	if(Auth::guard('penjual')->attempt(['email' => request('email'), 'password' => request('password')])){
		//		return redirect('beranda/penjual')->with('success', 'login berhasil');
		//	}else{
		//		return back()->with('danger','Login Gagal, silahkan cek username dan password anda');
		//	}
		//}
    }

    function registerProcess(){
        $user = new User;
        $user->nama = request('nama');
        $user->username = request('username');
        $user->email = request('email');
        $user->password = bcrypt(request('password'));
        $user->save();
        
            return redirect("login")->with('success', 'Data Berhasil Dtambahkan');
    }

    function forgotPassword(){

    }

    function Logout(){
        Auth::logout();
        Auth::guard('pembeli')->logout();
        Auth::guard('penjual')->logout();
        return redirect('login');
    }

}