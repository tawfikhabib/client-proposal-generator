<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class ProposalController extends Controller
{
    public function create()
    {
        return view('proposal.create');
    }

    public function generate(Request $request)
    {
        $data = $request->validate([
            'client_name' => 'required|string',
            'project_title' => 'required|string',
            'scope' => 'required|string',
            'timeline' => 'required|string',
            'pricing' => 'required|string',
            'deliverables' => 'required|string',
        ]);

        $pdf = Pdf::loadView('proposal.pdf', $data);
        return $pdf->download('proposal.pdf');
    }
}