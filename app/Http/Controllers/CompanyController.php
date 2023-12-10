<?php
//CompanyController.php
//会社crud
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;
use App\Models\School;
use App\Models\Company;
use App\Models\Lesson;
use App\Models\LessonUserInquiry;
use App\Models\Category;
use App\Models\User;
use App\Models\AdminUser;


class CompanyController extends Controller
{
    /**
     * 会社一覧画面
     */
    public function index()
    {
        $companies = Company::getAllOrderByUpdated_at();

        return response()->view('company.index',compact('companies'));
    }

    /**
     *会社登録画面
     */
    public function create()
    {
        return response()->view('company.create');
    }

    /**
     * 会社情報のdb登録
     */
    public function store(Request $request)
    {
        $result = Company::create($request->all());

        return redirect()->route('admin.company.index')->with('success', '企業情報が正常に登録されました。');
    }
}
