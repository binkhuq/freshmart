<?php

namespace App\Exports;

use App\Models\Order_detail;
use Maatwebsite\Excel\Concerns\FromCollection;

class Export implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Order_detail::all();
    }
}
