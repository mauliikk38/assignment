<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $task1 = DB::table('task')->get();
        return view ('home', ['task'=>$task1]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        DB::table('task')->insert([

            'task' => $request->task,
            'date' => $request->date,
            'status' => $request->status,
            'priority' => $request->priority,
            'progress' => $request->progress,
            'assignees' => $request->assignees,
        ]);
            return redirect(route('index'))->with('status','task added!!');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $student = Db::table('task')->find($id);
        return view('editform', ['student'=>$student]);
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
        Db::table('task')->where('id',$id)->update([
            'task' => $request->task,
            'date' => $request->date,
            'status' => $request->status,
            'priority' => $request->priority,
            'progress' => $request->progress,
            'assignees' => $request->assignees,
        ]);
        return redirect(route('index'))->with('status', 'Task Updated !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('task')->where('id', $id)->delete();
        return redirect(route('index'))->with('status', 'Task deleted !!');
    }
}
