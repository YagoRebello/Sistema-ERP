<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;


class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function mostrarFormularioLogin()
    {
        return view('login.login'); // Supondo que sua visão de login esteja na pasta 'auth'
    }

    public function auth(Request $request){

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){

            $user = User::where('email',$request->email)->first();
            $user->remember_token = $request->_token;
            $user->data_login = date('Y-m-d H:i:s');
            $user->save();
            return redirect()->intended();
        }else{
            return redirect()->back()->with('danger','E-mail ou senha inválida');
        }
    }

    /**
     * Show the form for creating a new resource.
     */

    public function logout(Request $request){
        if(auth()->user()->is_admin){
            if(auth()->user()->tenant_id == null){
                Auth::logout();

                $request->session()->invalidate();

                $request->session()->regenerateToken();

                return redirect('/');
            }else{
                $admin = auth()->user()->id;
                $alter_admin = DB::table('users')->where('id',$admin)->update(['tenant_id' => null]);
                session()->put('tenant_id',null);

                return redirect(route('Principal.admin'));
            }
        }else{
            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('/');
        }
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
