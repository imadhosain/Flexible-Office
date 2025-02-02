<?php

namespace App\Exports;

use App\Models\Contract;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class ContractExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Contract::select("roomname", "officename", "customername", "contractnumber", "contractduration",
        "contractstarthour", "contractendhour")->get();
    }

    public function headings(): array
    {
        return ["Room", "Office", "Customer", "Contract Number", "Duration",
        "From", "To"];
    }
}
