<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\components;

use DB;

class components extends Controller
{
    //
    public function destroy(Request $request, $id)
    {
        $components = components::find($id);
    
        $components->delete();
    
        // May want to Return to Maintenance Route
        return view('welcome');
        
    }
}

