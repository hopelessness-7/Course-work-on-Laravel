<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use App\Models\Student;
use Illuminate\Http\Request;


class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()  //пагинация страницы, выводим наши записи от нового к старым, на странице показываем 5 шт.
    {
        $students = Student::latest()->paginate(5);

        return view('admin.students.index', compact('students'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Student $student) // функция создания записей
    {
        $users = DB::select('select * from users');
         
        return view('admin.students.create',compact('users','student'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)  //создание валидации формы
    {
        $request->validate([
            'name' => 'required|min:1|max:50',
            // 'phone' => 'required|max:11',
            'email' => 'required|max:50',
        ]);



        student::create($request->all());

        return redirect()->route('students.index')
            ->with('success', 'Студет был успешно создан.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student) //Функция просмотра записей
    {
        return view('admin.students.show', compact('student'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student) //функция редоктирования записей
    {   
        return view('admin.students.edit',compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student) //изменение записей
    {
        $request->validate([                             //валидация полей
            'name' => 'required|min:3|max:50',
            'lastname' => 'required|min:3|max:100',
            'phone' => 'required|max:11',
            'email' => 'required|max:50',
        ]);
        $student->update($request->all());

        return redirect()->route('students.index')
            ->with('success', 'Студент был успешно изменен.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)  //Удаление записей
    {

        $student->delete();

        return redirect()->route('students.index')
            ->with('success', 'Студент был успешно удален.');
    }
}
