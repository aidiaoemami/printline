<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;

class MasterController extends Controller
{	

	public function home(){
        if (\Auth::user()) {
            if (\Auth::user()->level=='seller') {    
                $toko = DB::table('toko')->where('id_user', \Auth::user()->id)->exists();
                if (!$toko) {
                    return redirect('toko');
                }
                $data= DB::table('pesan')->get();
                return view('home')->with('data', $data); 
            }
            return view('home');
        }
        return view('home');
        
	}
	public function index(){
		return view('index');
	}
    public function register(){
    	return view ('register');
    }
     public function toko(){
        return view ('toko');
    }

    public function posttoko(Request $request){
        if(!DB::table('toko')->where('id_user', \Auth::user()->id)->exists()){
            DB::table('toko')->insert([
            ['nama_toko' => $request->namatoko,
            'alamat' => $request->alamat,
            'id_user'=>\Auth::user()->id,
            'deskripsi' => $request->deskripsi,
            'saldo' => 0
            ]
        ]);
        }
        
        return redirect()->route('home');
    }

    public function tokosaya(){
        $data= DB::table('toko')->where('id_user', \Auth::user()->id)->get();
        return view('tokosaya')->with('data', $data);
        //

         // return $data;
    }

    public function updatetoko(Request $request){
        DB::table('toko')->where('id', $request->id)->update(
            [
                'nama_toko' => $request->nama,
                'alamat' => $request->alamat,
                'deskripsi' => $request->deskripsi
            ]
        );
        return redirect()->route('tokosaya');
    }
    public function postregister(Request $request){
    	// $this->validate($request, [
    	// 	'email' => 'required|email|unique:user',
    	// 	'username' => 'required|username|unique:user',
    	// 	// 'password' => 'required|confirmed'
    	// ]);
    	DB::table('users')->insert([
    		['username' => $request->Username,
    		'email' => $request->email,
    		'password' => bcrypt($request->password),
    		'level' => $request->type,
    		'nama' => $request->fullname
    		]
    	]);
        return view('home');
    }

    public function login(){
    	return view ('login');
    }

    public function postlogin(Request $request){
    	if (\Auth::attempt(['email'=> $request->email,'password' =>$request->password])) {
    		session()->put('login', 'sudahLogin');
    		
            if (\Auth::user()->level=='seller') {
                session()->put('level', 'seller');
                return redirect()->route('home');
                
            }
            return redirect()->route('home');
    	}
    	else{
            return redirect()->back();
        }
    }

    public function logout(){
    	\Auth::logout();
        session()->flush();
    	return redirect()->route('home');
    }

    public function tambahlayanan(){
        $data= DB::table('toko')->where('id_user', \Auth::user()->id)->get();
        return view('tambahlayanan')->with('data', $data);
        // return view('tambahlayanan');

    }
    public function posttambahlayanan(Request $request){
        DB::table('print')->insert([
            ['jenis_cetak' => $request->print,
            'ink_coverage' => $request->ink_coverage,
            'ukuran' => $request->ukuran,
            'harga' => $request->harga,
            'id_toko' => $request->id
            ]
        ]);
        return 'sukses';
    }
}
