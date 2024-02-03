<?php

namespace App\Modules\Todo\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Todo\Models\Todo;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class TodoController extends Controller
{
    public function getAllTodo(Request $request)
    {
        try {
            $limit = $request->get('_limit', 5);
            $todos = Todo::leftJoin('users', 'todos.created_by', '=', 'users.id')
                ->orderBy('todos.id', 'desc')
                ->limit($limit)
                ->get(['todos.*', 'users.email as user_email']);
            return response()->json([
                'responseStatus' => true,
                'data' => $todos,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'responseStatus' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    } // end -:- getAllTodo()

    public function addTodo(Request $request)
    {
        try {
            $uniqueString = Str::random(5, 'alpha');

            $todo = new Todo();
            $todo->unique_id = time() . $uniqueString;
            $todo->title = $request->title;
            $todo->description = $request->title;
            $todo->due_date = date('Y-m-d');
            $todo->is_completed = 0;
            $todo->created_by = Auth::user()->id;
            $todo->updated_by = Auth::user()->id;
            $todo->save();
            $updatedTodo = $this->getUpdatedTodo($todo->id);
            return response()->json([
                'success' => true,
                'data' => $updatedTodo,
            ], 200);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    } // end -:- addTodo()

    public function deleteTodo($id)
    {
        try {
            $todo = Todo::find($id);
            $todo->delete();
            return response()->json([
                'success' => true,
                'data' => $id,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    } // end -:- addTodo()

    public function updateTodo(Request $request, $id)
    {
        try {
            $todo = Todo::find($id);
            $todo->is_completed = $request->is_completed;
            $todo->updated_by = Auth::user()->id;
            $todo->save();

            $updatedTodo = Todo::leftJoin('users', 'todos.created_by', '=', 'users.id')
            ->where('todos.id', $id)
            ->first(['todos.*', 'users.email as user_email']);
            
            return response()->json([
                'success' => true,
                'data' => $updatedTodo,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    } // end -:- updateTodo()
    private function getUpdatedTodo ($id){
        return Todo::leftJoin('users', 'todos.created_by', '=', 'users.id')
        ->where('todos.id', $id)
        ->first(['todos.*', 'users.email as user_email']);
    }
} // end -:- TodoController
