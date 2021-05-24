<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function getCompanyByCategory(Request $request)
    {

        $per_page = $request->input('per_page');
        $obj = new Category();
        $categories = $obj->paginate($per_page);

        return view('categories', ['categories' => $categories]);
    }
}
