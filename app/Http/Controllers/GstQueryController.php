<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\GstQuery;
use Maatwebsite\Excel\Facades\Excel; // <---- Add this
use App\Exports\GstQueriesExport;

class GstQueryController extends Controller
{
    public function showForm()
    {
        return view('gst.form');
    }

    public function submitForm(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'gst_number' => 'required',
            'message' => 'required',
        ]);

        // Save to database
        GstQuery::create([
            'name' => $request->name,
            'email' => $request->email,
            'gst_number' => $request->gst_number,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Your GST query has been submitted successfully!');
    }

    public function exportCsv()
    {
        $fileName = 'gst_queries.csv';
        $queries = GstQuery::all();

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$fileName\"",
        ];

        $columns = ['ID', 'Name', 'Email', 'GST Number', 'Message', 'Submitted At'];

        $callback = function () use ($queries, $columns) {
            $file = fopen('php://output', 'w');
            fputcsv($file, $columns);

            foreach ($queries as $query) {
                fputcsv($file, [$query->id, $query->name, $query->email, $query->gst_number, $query->message, $query->created_at]);
            }
            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
}
