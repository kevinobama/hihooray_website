<?php

namespace App\Http\Controllers\TeacherAdmin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\MicroCourse;
use Illuminate\Http\Request;
use Session;

class MicroCoursesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $microcourses = MicroCourse::paginate(15);

        return view('microcourses.index', compact('microcourses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('microcourses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        
        MicroCourse::create($request->all());

        Session::flash('flash_message', 'MicroCourse added!');

        return redirect('microcourses');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function show($id)
    {
        $microcourse = MicroCourse::findOrFail($id);

        return view('microcourses.show', compact('microcourse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $microcourse = MicroCourse::findOrFail($id);

        return view('microcourses.edit', compact('microcourse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        
        $microcourse = MicroCourse::findOrFail($id);
        $microcourse->update($request->all());

        Session::flash('flash_message', 'MicroCourse updated!');

        return redirect('microcourses');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        MicroCourse::destroy($id);

        Session::flash('flash_message', 'MicroCourse deleted!');

        return redirect('microcourses');
    }

}
