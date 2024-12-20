<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function tasks(Request $request)
    {
 
            $user = Auth::user();
           
        if (!$user) { return response()->json(['error' => 'User not authenticated'], 401); }
            $userId = $user->id;

             $taskData = Task::where('user_id', $userId)->paginate(3);

        if ($taskData->isEmpty()) { return response()->json(['error' => 'No tasks found for this user'], 404); } 
        
        return response()->json($taskData, 200);
        
    }

    public function create(Request $request)
    {
        $validator = Validator::make($request->all(),
        [ 
            'title' => 'required|string|max:255', 
      
        ]); 

    if ($validator->fails()) { return response()->json(['error' => 'Bad request', 'messages' => $validator->errors()], 400);}

        $user = Auth::user();
    if (!$user) { return response()->json(['error' => 'User not authenticated'], 401); }
        $userId = $user->id;
  

      Task::create([
        'title'=>$request->input('title'),
        'description'=>$request->input('description'),
        'status'=>$request->input('status'),
        'user_id' => $userId,
     ]);


        return  response( "Task created successfully!", 200);
        
    }

    public function update(Request $request, $id)
    {
        $user = Auth::user();
     if (!$user) { return response()->json(['error' => 'User not authenticated'], 401); }
        $userId = $user->id;

        $validator = Validator::make($request->all(),
        [ 
            'title' => 'required|string|max:255', 
      
        ]); 

    if ($validator->fails()) { return response()->json(['error' => 'Bad request', 'messages' => $validator->errors()], 400);}

        Task::whereId($id)->update([
        'title'=>$request->input('title'),
        'description'=>$request->input('description'),
        'status'=>$request->input('status'),
        'user_id'=>$userId, 
        ]);
    
        $task = Task::find($id);
        return  response($task, 200);
        
    }

    public function delete(Request $request, $id)
    {
        $task = Task::find($id);
        $task->delete();

        if (!$task) { return response()->json(['error' => 'Task not found'], 404); }
    
        return response( "Task deleted successfully!", 200);
        
    }


}
