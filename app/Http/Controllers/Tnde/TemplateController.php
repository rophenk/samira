<?php

namespace App\Http\Controllers\Tnde;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Ramsey\Uuid\Uuid;
use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
use App\Template;
use DB;

class TemplateController extends Controller
{
    public function index(Request $request)
    {
        $user     = $request->user();
        $template = Template::all();

        return view('tnde.template-list', [
        	'user' => $user, 
        	'template' => $template
        	]);
    }
}
