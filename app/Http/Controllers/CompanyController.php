<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Company;
use App\Models\Permission;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort_if(Gate::denies('companies_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $companies=Company::all();
        return view('admin.companies.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort_if(Gate::denies('companies_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.companies.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCompanyRequest $request)
    {
        $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048'
        ]);

        $fileName = time() . '.' . $request->logo->extension();
        $request->logo->move(public_path('/images/company/'), $fileName);

        $company=Company::create($request->all());
        $company->update([
            'logo'=>$fileName
        ]);

        return redirect()->route('admin.companies.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        abort_if(Gate::denies('companies_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.companies.edit',compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        $request->validate([
            'logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $fileName = time() . '.' . $request->logo->extension();
        $request->logo->move(public_path('/images/company/'), $fileName);

        $image_path = public_path('images/company/'.$company->logo);

        if(File::exists($image_path)) {
            File::delete($image_path);
        }

        $company->update([
            'logo'=>$fileName
        ]);

        return redirect()->route('admin.companies.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $image_path = public_path('images/company/'.$company->logo);

        if(File::exists($image_path)) {
            File::delete($image_path);
        }

        $company->delete();
        return back();
    }
}
