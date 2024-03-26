<?php

namespace App\Http\Controllers;

use App\Models\M_todo;
use Illuminate\Http\Request;

class C_todo extends Controller
{
    public function insertTD(Request $request)
    {
        $todo = new M_todo;
        $todo->td_id = request(`td_id`);
        $todo->td_fname = request(`td_fname`);
        $todo->td_lname = request(`td_lname`);
        $todo->save();
        return view('/Todo_lis');
    }
    public function index()
    {
        $td_data = M_todo::paginate(10);
        return view('Todo_lis', ['todo_list' => $td_data]);
    }
    public function delete($td_id)
    {
        $todo = M_todo::find($td_id);
        $todo->delete();
        return back();
    }
    // public function edit(Request $request, $td_id){
    //     $todo = M_todo::find($td_id);
    //     $todo->td_id = $request->td_id;
    //     $todo->td_fname = $request->td_fname;
    //     $todo->td_lname = $request->td_lname;
    //     return back();
    // }
    public function edit($td_id)
    {
        $td_data = M_todo::find($td_id);
        return view('edit_todo', ['todo_list' => $td_data]);
    }
    public function update($td_id)
    {
        $td_data = M_todo::find($td_id);
        $td_data->td_id = request('td_id');
        $td_data->td_fname = request('td_fname');
        $td_data->td_lname = request('td_lname');
        $td_data->td_action = request('td_action');
        $td_data->save();
        return redirect('/Todo_lis');
    }
}
