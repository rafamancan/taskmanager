<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Models\Tasks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TasksController extends Controller
{

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function new()
    {
        $tasks = DB::table('tasks')->get();

        return view('pages.task', compact('tasks'));
    }

    public function create(Request $request)
    {
        $task = new Tasks();
        $task->name = $request->get('name');
        $task->save();

        if ($task instanceof Tasks) {
            return redirect('tasks');
        }

        return 'Não foi possível criar';
    }
}
