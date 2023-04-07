<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\Member;

class MemberAdminController extends Controller
{
    /**
     * member form
     */
    public function index(){

        $data = Member::orderBy('created_at', 'desc')->get();

        return view('backend.member.index', compact('data'));
    }

        /**
     * user add form
     */
    public function create(){

        return view('backend.member.create');
    }

    /**
     * member add
     */
    public function store(Request $request){

        $req = $request->all();

        $data = new Member();
        $data->name = $req['name'];
        $data->email = $req['email'];
        $data->nick_name = $req['nick_name'] ?? '';
        $data->password = Hash::make($req['password']);
        $data->save();

        return redirect('/backend/member')->with(['message' => '新增完成']);
    }

    /**
     * edit form
     */
    public function edit($id){

        $data = Member::find($id);

        return view('backend.member.edit', compact('data'));
    }

    /**
     * edit update data
     */
    public function update(Request $request, $id){

        $req = $request->all();

        $data = Member::find($id);
        $data->name = $req['name'];
        $data->email = $req['email'];
        $data->nick_name = $req['nick_name'] ?? '';
        if(!empty($req['password'])){
            $data->password = Hash::make($req['password']);
        }
        $data->save();

        return redirect('/backend/member')->with(['message' => '資料已經更新']);
    }
}
