<?php

namespace App\Modules\Todo\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Modules\Todo\Models\Todo;
use Illuminate\Support\Str;

class TodoApiController extends Controller
{
    public function getAllTodo()
    {
        try {
            $todos = Todo::all();
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
            //$characterSet = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz!@#$%^&*()';
            $uniqueString = Str::random(5, 'alpha');

            $todo = new Todo();
            $todo->unique_id = time().$uniqueString;
            $todo->title = $request->title;
            $todo->description = $request->title;
            $todo->due_date = date('Y-m-d');
            $todo->status_id = 0;
            $todo->created_by = 1;
            $todo->updated_by = 1;
            $todo->save();
            return response()->json([
                'responseStatus' => true,
                'data' => $todo,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'responseStatus' => false,
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
                'responseStatus' => true,
                'data' => $id,
            ], 200);
        } catch (\Exception $e) {
            return response()->json([
                'responseStatus' => false,
                'message' => $e->getMessage(),
            ], 500);
        }
    } // end -:- addTodo()
}// end -:- TodoApiController
