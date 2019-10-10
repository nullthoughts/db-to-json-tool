<?php

namespace App;

use Illuminate\Support\Facades\DB;

class Query
{
    protected $query;

    public function __construct(string $query)
    {
        $this->query = DB::select(DB::raw($query));

        return $this->query;
    }

    public function toJson()
    {
        return json_encode($this->query);
    }
}
