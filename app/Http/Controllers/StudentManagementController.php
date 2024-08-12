<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Symfony\Component\HttpFoundation\StreamedResponse;
use League\Csv\Writer;

class StudentManagementController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view("student", compact('students'));
    }

    public function create()
    {
        return view('addstudent');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'lrn' => 'required|digits:11',
            'name' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'acad_standing' => 'nullable',
            'top' => 'nullable',
            'file_form137' => 'required',
            'moral_record' => 'required',
            'adviser' => 'required',
            'school_year_start' => 'required',
            'school_year_end' => 'required',
            'batch' => 'required',
        ]);

        $student = new Student;
        $student->lrn = $validatedData['lrn'];
        $student->name = $validatedData['name'];
        $student->middlename = $validatedData['middlename'];
        $student->lastname = $validatedData['lastname'];
        $student->acad_standing = $validatedData['acad_standing'];
        $student->top = $validatedData['top'];

        if ($request->hasFile('file_form137')) {
            $student->file_form137 = $request->file('file_form137')->store('docs');
        }

        $student->moral_record = $validatedData['moral_record'];
        $student->adviser = $validatedData['adviser'];
        $student->school_year_start = $validatedData['school_year_start'];
        $student->school_year_end = $validatedData['school_year_end'];
        $student->batch = $validatedData['batch'];
        $student->save();

        return redirect()->route('student.index');
    }

    public function show($id)
    {
        $student = Student::find($id);
        if (!$student) {
            // Handle the case when a student with the given ID is not found
            // You can redirect or show an error message
        }

        return view('showstudent', compact('student'));
    }

    public function edit($id)
    {
        $student = Student::find($id);
        if (!$student) {
            // Handle the case when a student with the given ID is not found
            // You can redirect or show an error message
        }

        return view('editstudent', compact('student'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'lrn' => 'required|digits:11',
            'name' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
            'acad_standing' => 'nullable',
            'top' => 'nullable',
            'file_form137' => 'required',
            'moral_record' => 'required',
            'adviser' => 'required',
            'school_year_start' => 'required',
            'school_year_end' => 'required',
            'batch' => 'required',
        ]);

        $student = Student::find($id);
        if (!$student) {
            // Handle the case when a student with the given ID is not found
            // You can redirect or show an error message
        }

        $student->lrn = $validatedData['lrn'];
        $student->name = $validatedData['name'];
        $student->middlename = $validatedData['middlename'];
        $student->lastname = $validatedData['lastname'];
        $student->acad_standing = $validatedData['acad_standing'];
        $student->top = $validatedData['top'];

        if ($request->hasFile('file_form137')) {
            $student->file_form137 = $request->file('file_form137')->store('docs');
        }

        $student->moral_record = $validatedData['moral_record'];
        $student->adviser = $validatedData['adviser'];
        $student->school_year_start = $validatedData['school_year_start'];
        $student->school_year_end = $validatedData['school_year_end'];
        $student->batch = $validatedData['batch'];
        $student->save();

        return redirect()->route('student.index');
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        if ($student) {
            $student->delete();
        } else {
            // Handle the case when a student with the given ID is not found
            // You can redirect or show an error message
        }

        return redirect()->route('student.index');
    }

    public function exportData()
    {
        $students = Student::all();

        $csv = Writer::createFromString('');
        $csv->insertOne(['LRN', 'Name', 'Middle Name', 'Last Name', 'Academic Standing', 'TOP', 'Moral Record', 'Adviser']);

        foreach ($students as $student) {
            $csv->insertOne([
                $student->lrn,
                $student->name,
                $student->middlename,
                $student->lastname,
                $student->acad_standing,
                $student->top,
                $student->moral_record,
                $student->adviser,
            ]);
        }

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="students.csv"',
        ];

        return new StreamedResponse(function () use ($csv) {
            echo $csv->getContent();
        }, 200, $headers);
    }
}
