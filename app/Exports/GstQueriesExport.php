<?php

namespace App\Exports;

use App\Models\GstQuery;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class GstQueriesExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return GstQuery::select('id', 'name', 'email', 'gst_number', 'message', 'created_at')->get();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Name',
            'Email',
            'GST Number',
            'Message',
            'Submitted At',
        ];
    }
}
