<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;

class SearchController extends Controller
{
    public function getSearch(Request $request) {

        $per_page = $request->input('per_page');
        $name = $request->get('companyName');
        $obj = new Company();
        $companies = $obj->where('company_name', 'like', '%' . $name . '%')->paginate($per_page);
      
        return view('searchCompany', ['companies' => $companies]);
    }
}
