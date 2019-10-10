<?php

namespace App;

use Illuminate\Support\Facades\DB;

class Database
{
    public static function listTables()
    {
        return DB::connection()->getDoctrineSchemaManager()->listTableNames();
    }
}
