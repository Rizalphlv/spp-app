<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\classes;
use Exception;

class ClassesController extends Controller
{
    //function for read all data into view
    public function read()
    {
        //pharse all data into view
        $class = Classes::all();
        return view('class/index', ['class' => $class]);
    }
    

    //insert 
    public function store (request $request)
    {
    
         //try if not find any something wrong it will do procces
        try
        {                                ;
          Classes::create([
              'class_name'=> $request->class,
              'major' => $request->major
          ]);

          return redirect(route('class.index'));
        }
        //Exception used for inform about error
        catch(\Exception $ex)                  
        {
            dd($ex);
        }
    }
    
    //get data where id ==$id and return to view
    public function put($id)
    {
        //pharse all data which id == $id
        $class = Classes::all();
        $class_data = Classes::find($id);
        return view('class/index',['class-data' => $class_data, 'class' => $class]);
    }

    //update
    public function update (Request $request, $id)
    {
        try
        {
            $class =  Classes::find($id);
            $class->class_name = $request->class_name;
            $class->major = $request->major;
            $class->save();

            redirect(route('class.index'));
        }
        catch(\Exception $ex)
        {
            report($ex);
        }
       
    }

    //delete
    public function delete($id)
    {
        try
        {
            $class = Classes::find($id);
            $class->delete();

            return redirect(route('class.index'));
        }
        catch(\Exception $ex)
        {
            dd($ex);
        }
    }
}
