<?php

namespace App\Http\Controllers\Pos;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image as Image; 


class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::select(['id','employee_name','employee_email','employee_phone','employee_salary','employee_picture'])->get();
        return view('backend.employee.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.employee.create');
    }

    /**
     * Store a newly created resource in storage.
    */
    public function store(Request $request)
    {
        $image = $request->file('employee_picture');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension(); // 343434.png
        Image::make($image)->resize(200,200)->save('upload/employee/'.$name_gen);
        $save_url = 'upload/employee/'.$name_gen;
        Employee::insert([
            'employee_name' => $request->employee_name,
            'employee_email' => $request->employee_email,
            'employee_phone' => $request->employee_phone,
            'employee_salary' => $request->employee_salary,
            'employee_address'=> $request->employee_address,
            'employee_experience'=>$request->employee_experience,
            'employee_picture' => $save_url ,
            'created_at' => Carbon::now(),
        ]);
         $notification = array(
            'message' => 'Employee Inserted Successfully', 
            'alert-type' => 'success'
        );
        return redirect()->route('employee.index')->with($notification);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employee = Employee::find($id);
        return view('backend.employee.edit',compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // dd($request->all());
        // $employee_id = $request->id;
        if ($request->file('employee_picture')) {
        $image = $request->file('employee_picture');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension(); // 343434.png
        Image::make($image)->resize(200,200)->save('upload/employee/'.$name_gen);
        $save_url = 'upload/employee/'.$name_gen;

        Employee::findOrFail($id)->update([
            'employee_name' => $request->employee_name,
            'employee_email' => $request->employee_email,
            'employee_phone' => $request->employee_phone,
            'employee_salary' => $request->employee_salary,
            'employee_address'=> $request->employee_address,
            'employee_experience'=>$request->employee_experience,
            'employee_picture' => $save_url,
            'updated_at' => Carbon::now(),
        ]);

         $notification = array(
            'message' => 'Employee Updated with Image Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('employee.index')->with($notification);
             
        } 
        else
        {
            Employee::findOrFail($id)->update([
                'employee_name' => $request->employee_name,
                'employee_email' => $request->employee_email,
                'employee_phone' => $request->employee_phone,
                'employee_salary' => $request->employee_salary,
                'employee_address'=> $request->employee_address,
                'employee_experience'=>$request->employee_experience,
                'updated_at' => Carbon::now(),
        ]);
        }
         $notification = array(
            'message' => 'Employee Updated without Image Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('employee.index')->with($notification);
      
        // end else 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $image = Employee::find($id);
        $old_image = $image->employee_picture;
        unlink($old_image);
        Employee::find($id)->delete();

        $notification = array(
            'message' => 'Employee Deleted Successfully', 
            'alert-type' => 'success'
        );

        return redirect()->route('employee.index')->with($notification);
    }
}
