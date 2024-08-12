<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'lrn', 'name', 'middlename', 'lastname', 'acad_standing', 'top', 'file_form137', 'moral_record', 'adviser', 'school_year_start', 'school_year_end', 'batch'];

    protected $table = 'students';

    public function storeFileForm137(Request $request)
    {
        if ($request->hasFile('file_form137')) {
            return $request->file('file_form137')->store('docs');
        }

        return null;
    }
}
