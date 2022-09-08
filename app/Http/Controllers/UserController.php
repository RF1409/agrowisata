<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.users.index', [
            'users' =>User::all()
            
        ]) ;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validateData = $request->validate([
            'name' => 'required|max:255|unique:users',
            'username' =>['required', 'min:3', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'confirm' => 'required|min:5|max:255',
            'pertanian' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'nohp' => 'required',
            'image' => 'image|file|max:3024'
        ]);

        if ($request->file('image')) {
            $validateData['image'] = $request->file('image')->store('user-images');
         }

        $validateData['password'] = Hash::make($validateData['password']);


        User::create($validateData);
        

        return redirect('/dashboard/users')->with('success', 'User Baru Berhasil dibuat!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('dashboard.users.show',[
            "user" => $user
        ]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboard.users.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required|max:255',
            'username' =>['required', 'min:3', 'max:255'],
            'email' => 'required',
            'password' => 'required|min:5|max:255',
            'confirm' => 'required|min:5|max:255',
            'pertanian' => 'required',
            'provinsi' => 'required',
            'kota' => 'required',
            'nohp' => 'required',
            'image' => 'image|file|max:3024'
        ];

        $validateData = $request->validate($rules);

        if ($request->file('image')) {

            if($request->oldImage){
                Storage::delete($request->oldImage);
            }

            $validateData['image'] = $request->file('image')->store('user-images');
         }

         $validateData['password'] = Hash::make($validateData['password']);



        User::where('id', $user->id)
        ->update($validateData);

    return redirect('/dashboard/users')->with('success', 'User Berhasil di Update!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if($user->image){
            Storage::delete($user->image);
        }

        User::destroy($user->id);

        return redirect('/dashboard/users')->with('success', 'User Berhasil Dihapus');
    }
}
