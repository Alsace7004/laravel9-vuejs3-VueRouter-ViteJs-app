<?php

namespace App\Exports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\FromArray;
use Maatwebsite\Excel\Concerns\WithHeadings;
//use Maatwebsite\Excel\Concerns\FromCollection;

class UsersExport implements WithHeadings,FromArray
{   
    protected $invoices;

    public function __construct(array $invoices)
    {
        $this->invoices = $invoices;
    }

    public function headings(): array
    {
        return [
            '#',
            'NOM',
            'EMAIL',
            'AJOUTE LE',
        ];
    }

    public function array(): array
    {
        return $this->invoices;
    }
    /**
    * @return \Illuminate\Support\Collection
    */
    /* public function collection()
    {
        return User::all();
    } */
}
