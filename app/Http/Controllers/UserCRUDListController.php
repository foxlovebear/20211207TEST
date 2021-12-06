<?php

namespace App\Http\Controllers;

use App\Models\UserCRUDList;
use Illuminate\Http\Request;

class UserCRUDListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user_list.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("UserCRUDList.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $emp = new UserCRUDList();
        $emp->firstName = $request->firstName;
        $emp->lastName = $request->lastName;
        $emp->save();
        return redirect("/UserCRUDList");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserCRUDList  $UserCRUDList
     * @return \Illuminate\Http\Response
     */
    public function show(UserCRUDList $UserCRUDList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserCRUDList  $UserCRUDList
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $emp = UserCRUDList::find($id);
        return view('UserCRUDList.edit', compact('emp'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserCRUDList  $UserCRUDList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $emp = UserCRUDList::find($id);
        $emp->firstName = $request->firstName;
        $emp->lastName = $request->lastName;
        $emp->save();
        return redirect("/UserCRUDList");
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $emp = UserCRUDList::find($id);
        $emp->delete();
        return redirect("/UserCRUDList");
    }
}
