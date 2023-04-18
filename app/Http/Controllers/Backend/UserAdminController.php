<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\User;

class UserAdminController extends Controller
{

    /**
     * user index
     */
    public function index(){

        $data = User::orderByDesc('created_at')->get();

        return view('backend.user.index', compact('data'));
    }

    /**
     * user add form
     */
    public function create(){

        return view('backend.user.create');
    }

    /**
     * user add
     */
    public function store(Request $request){

        $req = $request->all();

        $data = new User();
        $data->name = $req['name'];
        $data->email = $req['email'];
        $data->password = Hash::make($req['password']);
        $data->save();

        return redirect('/backend/user')->with(['message' => '新增完成']);
    }

    /**
     * edit form
     */
    public function edit($id){

        return view('backend.user.edit', compact('id'));
    }

    /**
     * edit update data
     */
    public function update(Request $request, $id){

        $req = $request->all();

        $data = User::find($id);
        $data->name = $req['name'];
        $data->email = $req['email'];
        if(!empty($req['password'])){
            $data->password = Hash::make($req['password']);
        }
        $data->save();

        return redirect('/backend/user')->with(['message' => '資料已經更新']);
    }
}
