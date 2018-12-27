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
                $data= DB::table('pesan')
                    ->join('users', 'pesan.id_pelanggan', '=', 'users.id')
                    ->select('pesan.id as id', 'users.nama', 'pesan.tgl_pesan', 'pesan.tgl_ambil', 'pesan.total', 'pesan.note', 'pesan.status')
                    ->where('pesan.id_user', \Auth::user()->id)->get();
                $dataprint = DB::table('pesan')
                    ->join('print', 'pesan.id_print', '=', 'print.id')
                    ->where('pesan.id_user', \Auth::user()->id)
                    ->get();
                $datajilid = DB::table('pesan')
                ->join('jilid', 'pesan.id_jilid', '=', 'jilid.id')
                ->where('pesan.id_user', \Auth::user()->id)
                ->get();
                $datatoko = DB::table('pesan')
                ->join('toko', 'pesan.id_toko', '=', 'toko.id')
                ->get();
                return view('home')->with(['data'=>$data,'datajilid'=>$datajilid, 'dataprint'=>$dataprint]); 
                    // return DD($data);
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
        // $data= DB::table('toko')->where('id_user', \Auth::user()->id)->get();
        $data= DB::table('toko')
                ->join('users', 'users.id', '=', 'toko.id_user')
                // ->join('jilid', 'toko.id', '=', 'jilid.id_toko')
                ->where('users.id', \Auth::user()->id)->get();
        $datajilid= DB::table('toko')
                    ->join('jilid', 'toko.id', '=', 'jilid.id_toko')
                    ->where('toko.id', \Auth::user()->id)->get();
        $dataprint= DB::table('toko')
                    ->join('print', 'toko.id', '=', 'print.id_toko')
                    ->where('toko.id', \Auth::user()->id)->get();
        // return DD($datajilid);

        return view('tokosaya')->with(['data'=>$data, 'datajilid'=>$datajilid, 'dataprint'=>$dataprint]);
        //

         // return dd($data);
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
        return view('tambahlayanan')->with('data',$data);
        // return view('tambahlayanan');

    }
    public function posttambahlayanan(Request $request){
        DB::table('print')->insert([
            ['jenis_cetak' => $request->print,
            'ukuran' => $request->ukuran,
            'harga' => $request->harga,
            'id_toko' => $request->id
            ]
        ]);
        // return redirect()->route('tambahlayanan')->with('message', 'Data Harga Print Berhasil disimpan');
        return redirect('tambahlayanan')->with('message', true);
    }
    public function tambahlayananjilid(){
        $data= DB::table('toko')->where('id_user', \Auth::user()->id)->get();
        return view('tambahlayanan')->with('data', $data);
        // return view('tambahlayanan');

    }
    public function posttambahlayananjilid(Request $request){
        DB::table('jilid')->insert([
            ['warna' => $request->warnajilid,
            'id_toko' => $request->id,
            'harga' => $request->hargajilid
            ]
        ]);
        return redirect('tambahlayanan')->with('message', true);
    }

    public function editstatus($id){
        $status = DB::table('pesan')->where('id',$id)->update(['status'=>'selesai']);
        // $status = pesan::find($id);
        // $status->status= $request->get('status');
        // $status->save();
        return redirect('home');
        // return $status;

    }
    public function pesan(){
        return view('pesan');
    }
    public function edittoko($id){
        $data= DB::table('toko')->where('id', $id)->get();
        return view('edittoko')->with('data', $data);
    }
    public function postedittoko(Request $request){
        $data= DB::table('toko')->where('id', $request->id)->update(
            [
                'nama_toko' => $request->nama_toko,
                'alamat' => $request->alamat,
                'deskripsi'=>$request->deskripsi
            ]
        );
        return redirect('tokosaya');
    }
    public function editaccount($id){
        $data= DB::table('users')->where('id', \Auth::user()->id)->get();
        return view('editaccount')->with('data', $data);
    }
    
    public function posteditaccount(Request $request){
        $data= DB::table('users')->where('id', $request->id)->update(
            [
                'nama' => $request->nama,
                'username' => $request->username,
                'email'=>$request->email
            ]
        );
        return redirect('tokosaya');
    }

    // public function posteditaccount($id)
    // public function updatetoko($id){
    //     $toko = toko::find($id);
    //     return view('toko.edittoko', compact('toko', 'id'));
    // }

}
