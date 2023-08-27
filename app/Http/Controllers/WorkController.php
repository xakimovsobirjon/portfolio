<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWorkRequest;
use App\Http\Requests\UpdateWorkRequest;
use App\Models\Company;
use App\Models\Work;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Symfony\Component\HttpFoundation\Response;

class WorkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        abort_if(Gate::denies('works_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        $works=Work::all();
        return view('admin.works.index', compact('works'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        abort_if(Gate::denies('works_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.works.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreWorkRequest $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
            'title' => 'required|string',
            'link_title' => 'required|string',
            'link' => 'required|string',
        ]);

        $fileName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('/images/work/'), $fileName);

        $work=Work::create($request->all());
        $work->update([
            'image'=>$fileName
        ]);

        return redirect()->route('admin.works.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Work $work)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Work $work)
    {
        abort_if(Gate::denies('works_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');
        return view('admin.works.edit',compact('work'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateWorkRequest $request, Work $work)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required|string',
            'link_title' => 'required|string',
            'link' => 'required|string',
        ]);

        $fileName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('/images/work/'), $fileName);

        $image_path = public_path('images/work/'.$work->image);

        if(File::exists($image_path)) {
            File::delete($image_path);
        }

        $work->update($request->all());

        $work->update([
            'image'=>$fileName
        ]);

        return redirect()->route('admin.works.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Work $work)
    {
        $image_path = public_path('images/work/'.$work->image);

        if(File::exists($image_path)) {
            File::delete($image_path);
        }

        $work->delete();
        return back();
    }
}
