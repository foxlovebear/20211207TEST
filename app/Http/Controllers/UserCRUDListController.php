<?php

namespace App\Http\Controllers;

use App\Models\UserCRUDList;
use App\Models\User;
use Illuminate\Http\Request;

class UserCRUDListController extends Controller
{
    public function index()
    {
        $userList = UserCRUDList::all();
        return view("home.index", compact('userList'));
    }
    public function create()
    {
        return view("home.create");
    }
    public function store(Request $request)
    {
        $addAccountInfo = new UserCRUDList;
        $addAccountInfo->account = $request->account;
        $addAccountInfo->name = $request->name;
        $addAccountInfo->gender = $request->gender;
        $addAccountInfo->email = $request->email;
        $addAccountInfo->birthday = $request->birthday;
        $addAccountInfo->other = $request->other;
        $addAccountInfo->save();
        return redirect("/");
    }
    public function edit_page($id)
    {
        $editAccountInfo = UserCRUDList::find($id);
        return view("home.edit", ['editAccountInfo' => $editAccountInfo]);
    }
    public function update(Request $request, $id)
    {
        $editAccountInfo = UserCRUDList::find($id);
        $editAccountInfo->update($request->all());
        return $editAccountInfo;
    }

    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     $emp = new UserCRUDList();
    //     $emp->firstName = $request->firstName;
    //     $emp->lastName = $request->lastName;
    //     $emp->save();
    //     return redirect("/UserCRUDList");
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\UserCRUDList  $UserCRUDList
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(UserCRUDList $UserCRUDList)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\UserCRUDList  $UserCRUDList
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     $emp = UserCRUDList::find($id);
    //     return view('UserCRUDList.edit', compact('emp'));
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\UserCRUDList  $UserCRUDList
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     $emp = UserCRUDList::find($id);
    //     $emp->firstName = $request->firstName;
    //     $emp->lastName = $request->lastName;
    //     $emp->save();
    //     return redirect("/UserCRUDList");
    // }


    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Employee  $employee
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     $emp = UserCRUDList::find($id);
    //     $emp->delete();
    //     return redirect("/UserCRUDList");
    // }
}
