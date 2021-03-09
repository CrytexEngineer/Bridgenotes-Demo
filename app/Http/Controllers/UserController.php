<?php

namespace App\Http\Controllers;

use App\Models\Position;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Menampilkan Data Seluruh Pengguna.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return response()->json(User::with('position')->get());

    }


    /**
     * Menyimpan Data Pengguna Baru.
     * @bodyParam name string  required nama pengguna. Example:Muhammad Aqil
     * @bodyParam email string  required email pengguna. Example: aqilmaulana1@gmail.com
     * @bodyParam password string required Password pengguna, terdiri dari minimal 8 karakter. Example:password
     * @bodyParam position string  required Jabatan pengguna. Example: Manager
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'position' => 'required',


        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),

        ]);

        $position = new Position([
            'position' => $request->position,
            'status' => 'Active']);


        $user->position()->save($position);

        return response()->json($user, 201);
    }


    /**
     * Memperbaharui data pengguna.
     * @bodyParam name string  required  Example:Muhammad Aqilnama pengguna.
     * @bodyParam email string  required email pengguna. Example: aqilmaulana1@gmail.com
     * @bodyParam password string required Password pengguna, terdiri dari minimal 8 karakter. Example:password
     * @bodyParam position string  required Jabatan pengguna. Example: Manager
     * @param int $id id pengguna yang akan diubah. Example; 2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, int $id)
    {

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'position' => 'required',
        ]);

       $user = User::where('id', $id)->first();
        if(!$user){
            return response()->json("User Tidak Ditemukan",200);
        }

        $user->update($request->all());

        return response()->json($user, 200);
    }

    /**
     * Menghapus data pengguna.
     *
     * @param int $id id pengguna yang akan diubah. Example; 2
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(User::find($id)->delete()){
             return response()->json("Data dihapus", 204);
        }
        return response()->json("Data Tidak Ditemukan", 200);
    }
}
