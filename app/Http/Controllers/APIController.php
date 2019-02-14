<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
class APIController extends Controller
{
    //
    function getAllTodos(){

        $all = Todo::all();


        return response()->json($all);


    }

    function storeTodo(Request $request){


            $new_todo = new Todo();

            $new_todo->text = $request->todo_title;
            $new_todo->body = $request->todo_body;
            $new_todo->due = $request->todo_duedate;


            $new_todo->save();


            return "Sucess";


    }

    function editTodo(Request $request){


            $edit = Todo::find($request->id);

            return response()->json($edit);


    }


    function updateTodo(){




    }

    function deleteTodo(){




    }



}
