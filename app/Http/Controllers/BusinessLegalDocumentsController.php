<?php

namespace App\Http\Controllers;

use App\Models\BusinessLegalDocuments;
use App\Models\Properties;
use Illuminate\Http\Request;

class BusinessLegalDocumentsController extends Controller
{

    public function create($id)
    {
        $property =  Properties::findOrFail($id);
        return view('superadmin.business-owners.properties.legal-documents.create', compact('property'));
    }

    public function show($id)
    {
        $properties = Properties::with('business_legal_documents')->findOrFail($id);
        return view('superadmin.business-owners.properties.legal-documents.index', compact('properties'));
    }


    public function store(Request $request) {
         $formFields = $request->validate([
            'legal_document_name' => 'required',
            'legal_document_file' => 'required',
         ]);

         BusinessLegalDocuments::create([
            'property_id' => $request->property_id,
            'legal_document_name' => $request->legal_document_name,
            'legal_document_file' => $this->storeFile($request),
        ]);

        return redirect()->back()->with('success-message', 'Document Saved Successfully!');
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
