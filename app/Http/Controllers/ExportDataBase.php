<?php

namespace App\Http\Controllers;

use App\Models\DataBase;
use App\Models\Table;
use Illuminate\Http\Request;

class ExportDataBase extends Controller
{
    function jsonExport(Request $request){

        //get database
        $database = DataBase::find($request['db_id']);

        $tables = $database->tables;

        $jsonExport = [];

        foreach ($tables as $table){
            $parentRows = $table->data;
            $tableName = $table->name;

            $jsonExport = $jsonExport . [$tableName => $parentRows];

        }


    }


    function sqliteExport(Request $request){

    }
}
