<?php
// ユーザー登録時の学校の情報を自動で入力する

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\School;

class SchoolApiController extends Controller
{
    //
    public function getSchoolByNumber($school_number)
    {
        $school = School::where('school_number', $school_number)->first();

        if (!$school) {
            return response()->json(['message' => 'School not found'], 404);
        }

    return response()->json($school);
    }
}
