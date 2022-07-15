<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{
    
    public function index(){

        if(!Auth::check()){
            return redirect('/');
        }

        return view('dashboard.index', ['members' => Member::all()]);
    }

    public function store(Request $request){

        if($request->file('gambar')){
            $gambar = $request->file('gambar')->store('member');
        }

        Member::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'deskripsi' => $request->deskripsi,
            'ttl' => $request->ttl,
            'gambar' => $gambar ?? null
        ]);

        return redirect('/admin')->with('success', 'data berhasil ditambah');

    }

    public function show(Member $member){
        return view('dashboard.edit', ['member' => $member]);
    }

    public function edit(Member $member){
        return view('dashboard.edit', ['member' => $member]);
    }

    public function update(Request $request, Member $member){

        $data = [
            'nama' => $request->nama,
            'ttl' => $request->ttl,
            'email' => $request->email,
            'alamat' => $request->alamat,
            'deskripsi' => $request->deskripsi
        ];

        if($request->file('gambar')){

            if($request->oldImg){
                Storage::delete($request->oldImg);
            }

            $data['gambar'] = $request->file('gambar')->store('member');

        }

        Member::where('id', $member->id)->update($data);

        return redirect("/admin/detail/$member->id")->with('success', 'data berhasil diubah');
    }

    public function destroy(Member $member){

        Member::destroy($member->id);
        return redirect("/admin")->with('success', 'data berhasil dihapus');

    }

    public function authenticate(Request $request){

        $credentials = [
            'username' => $request->username,
            'password' => $request->password
        ];

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/admin');
        }

        return back()->withErrors('loginFailed', 'login gagal');

    }

    public function logout(Request $request){

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }


}
