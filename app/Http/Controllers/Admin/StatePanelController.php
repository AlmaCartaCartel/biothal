<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatePanelController extends Controller
{
    public function index()
    {
        return view('admin.statePanel.index');
    }
}
