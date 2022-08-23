<?php

namespace App\Http\Controllers;

use App\Models\BusinessLegalDocuments;
use Illuminate\Http\Request;

class BusinessLegalDocumentsController extends Controller
{
    public function store(Request $request) {
         $formFields = $request->validate([
            'legal_document_name' => 'required',
            'legal_document_file' => 'required',
         ]);

         BusinessLegalDocuments::create([
            'user_id' => $request->user_id,
            'legal_document_name' => $request->legal_document_name,
            'legal_document_file' => $this->storeFile($request),
        ]);

        return redirect(route('businesses.index'));
    }

    private function storeFile($request) {
        $newFileName = uniqid() . '-' . $request->legal_document_name . '.' . $request->legal_document_file->extension();
        $request->legal_document_file->move(public_path('storage/legal-documents'), $newFileName);
        return $newFileName;
    }

    public function download($file) {
        $file_path = public_path('storage/legal-documents/' . $file);
        return response()->download($file_path);
    }
}
