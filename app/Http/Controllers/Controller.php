<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index()
    {   
        $tables = DB::select('SHOW TABLES');
        return $tables;
        // foreach($tables as $table)
        // {
        //       echo $table->Tables_in_db_name;
        // }
    }
}
