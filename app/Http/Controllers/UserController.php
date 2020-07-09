<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name' => "required|max:191",
                'username' => "required|unique:users|max:191",
                'password' => "required|min:6|max:190",
                'password_conf' => "required|same:password",
            ],
            [
                'name.required' => 'Nama harus diisi',
                'name.max' => 'Nama tidak boleh melebihi 191 karakter',
                'username.required' => 'Username harus diisi',
                'username.unique' => 'Username sudah terdaftar',
                'username.max' => 'Username tidak boleh melebihi 191 karakter',
                'password.required' => 'Password harus diisi',
                'password.max' => 'Password maksimal 190 karakter',
                'password.min' => 'Password minimal 6 karakter',
                'password_conf.required' => 'Konfirmasi password harus diisi',
                'password_conf.same' => 'Password dan Konfirmasi Password harus sama',
            ]
        );

        $user = new User;
        $user->name = $request->get('name');
        $user->username = $request->get('username');
        $user->password = \Hash::make($request->get('password'));
        $user->save();

        return redirect()->route('user.create')->with('status', "User $user->name berhasil ditambahkan");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', ['user' => $user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'name' => "required|max:191",
                // 'username' => "required|unique:users",
                'password' => "required|min:6|max:190",
                'password_conf' => "required|same:password",
                'telp' => "max:15",
            ],
            [
                'name.required' => 'Nama harus diisi',
                'name.max' => 'Nama tidak boleh melebihi 191 karakter',
                // 'username.required' => 'Username harus diisi',
                // 'username.unique' => 'Username sudah terdaftar',
                'password.required' => 'Password harus diisi',
                'password.max' => 'Password maksimal 190 karakter',
                'password.min' => 'Password minimal 6 karakter',
                'password_conf.required' => 'Konfirmasi password harus diisi',
                'password_conf.same' => 'Password dan Konfirmasi Password harus sama',
                'telp.max' => 'Nomor telepon tidak boleh melebihi 15 digit',
            ]
        );

        $user = User::findOrFail($id);
        $user->name = $request->get('name');
        // $user->username = $request->get('username');
        $user->password = \Hash::make($request->get('password'));
        $user->save();

        return redirect()->route('user.edit', ['user' => $user->id])->with('status', "User $user->name berhasil diedit");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $name = $user->name;

        if ($user->username != "root") {
            $user->delete();
        } else {
            return redirect()->route('user.index')->with('warning', "User root tidak dapat dihapus");
        }

        return redirect()->route('user.index')->with('status', "User $name berhasil dihapus");
    }
}
