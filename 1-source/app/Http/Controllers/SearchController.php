<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Category;

class SearchController extends Controller
{
    public function searchCompany(Request $request) {

        $per_page = $request->input('per_page');
        $name = $request->get('companyName');
        $obj = new Company();
         $companies = $obj->where('company_name', 'like', '%' . $name . '%')->paginate($per_page);
        // $companies = $obj->where('company_name', 'like', '%' . $name . '%')
        //                  ->orwhere('company_phone', 'like', '%' . $name . '%');
      
        return view('searchCompany', ['companies' => $companies]);
    }

    public function searchCompanyByCategory(Request $request){
        $per_page = $request->input('per_page');
        $name = $request->get('categoryName');
        $obj = new Category();
        $categories = $obj->where('category_name', 'like', '%' . $name . '%')->paginate($per_page);
        return view('searchCategory', ['categories' => $categories]);
    }
}
