<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;

class DashboardController extends Controller
{
    public function json(Request $request)
    {
        return DataTables::of(User::with('position')->get())
            ->make(true);

    }

    /**
     * Display a listing of the resource.
     * hideFromAPIDocumentation
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
    }
}
