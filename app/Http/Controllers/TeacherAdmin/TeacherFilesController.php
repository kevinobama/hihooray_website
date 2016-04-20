<?php

namespace App\Http\Controllers\TeacherAdmin;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Models\TeacherFiles;
use Illuminate\Http\Request;
use Session;
use Auth;
use App\Jobs\ConverOfficeToPdf;
use Config;

class TeacherFilesController extends Controller
{
    private $user;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->user = Auth::user();
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $teacherfiles = TeacherFiles::whereuser_id($this->user->user_id)->orderBy('id', 'DESC')->paginate(25);

        return view('teacherfiles.index', compact('teacherfiles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $userId = $this->user->user_id;

        return view('teacherfiles.create', compact('userId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $inputKey = $request->inputKey;
        $destinationPath = storage_path(). '/app/public/office/';

        if ($inputKey && $inputKey->move($destinationPath, $inputKey->getClientOriginalName())) {
            $teacherFile = new TeacherFiles;

            $teacherFile->user_id = $this->user->user_id;
            $teacherFile->inputKey = $inputKey->getClientOriginalName();

            $teacherFile->save();

            $job = (new ConverOfficeToPdf($teacherFile));
            $this->dispatch($job);

            Session::flash('flash_message', 'Teacher File uploaded!');

            return redirect('/teacher-files/in-progress/'.$teacherFile->id);
        } else {
            Session::flash('flash_message', 'Teacher File was not uploaded!');

            return redirect()->back();
        }
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
        $teacherfile = TeacherFiles::findOrFail($id);

        return view('teacherfiles.show', compact('teacherfile'));
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
        $teacherfile = TeacherFiles::findOrFail($id);

        return view('teacherfiles.edit', compact('teacherfile'));
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
        
        $teacherfile = TeacherFiles::findOrFail($id);
        $teacherfile->update($request->all());

        Session::flash('flash_message', 'TeacherFiles updated!');

        return redirect('teacher-files');
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
        TeacherFiles::destroy($id);

        Session::flash('flash_message', 'TeacherFiles deleted!');

        return redirect('teacher-files');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function inProgress($id)
    {
        $teacherfile = TeacherFiles::findOrFail($id);

        return view('teacherfiles.inProgress', compact('teacherfile'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return Response
     */
    public function inProgressAjax($id)
    {
        $teacherfile = TeacherFiles::findOrFail($id);
        echo(json_encode($teacherfile));
    }
}
