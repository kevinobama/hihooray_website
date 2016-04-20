<?php

namespace App\Http\Controllers\TeacherAdmin;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Qiniu\Auth;

class QiniuTokenController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $access = env('QINIU_ACCESS');
        $secret = env('QINIU_SECRET');
        $auth   = new Auth($access, $secret);

        $data['uptoken'] = $auth->uploadToken('hooray-weike');
        return $data;
    }
}
