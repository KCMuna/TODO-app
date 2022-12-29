<?php

namespace App\Http\Controllers;
use App\Models\Home;
use App\Models\Todo;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    public function show(){
        $data = Todo::orderBy('completed')->get();
    return view('/index',compact('data'));

    }
    public function store(Request $request){
        $this->validate($request,[
            'task'=>'required',
        ]);
        $todo = new Todo;
        $todo->task = $request->task;
        $todo->save();
        return redirect()->route('show')->with('success',"TODO created successfully!");

      }

      public function edit(Request $request){
       $id=$request->id;
       $data=DB::table('todos')->where('id','=',$id)->first();
       return view('/edit',compact('data'));

      }
      public function delete(Request $request){
        $id=$request->id;
        DB::table('todos')->where('id','=',$id)->delete();
        return redirect('/');
 
       }
      public function update(Request $request){
        if($request->isMethod('get')){
            return redirect()->back();
        }
        if($request->isMethod('post')){
        $this->validate($request,[
            'task'=>'required',
        ]);
        DB::table('todos')->where('id','=',$request->criteria)->update([
            'task'=>$request->task,
        ]);
        return redirect()->route('show')->with('success','upadted successfully');
    }

      }

    public function completed($id){
       
       $todo= Todo::find($id);
       if($todo->completed){
            $todo->update(['completed' => false]);
            return redirect()->back()->with('success', 'Todo marked as incomplete!');
       }else{
            $todo->update(['completed' => true]);
            return redirect()->back()->with('success', 'Todo marked as complete!');

       }

    }


}
