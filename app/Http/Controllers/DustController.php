<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use App\Models\DustMeasurement;
use Response;

class DustController extends Controller
{
    public function index()
    {
        return view('dustMeasurement.index');
    }

    public function monitoring()
    {
        $values = DustMeasurement::latest()->paginate(20);
        return view('dustMeasurement.monitoring',compact('values'));
    }

    public function post(Request $request)
    {

    }

     public function document()
    {
        $document = Document::get();
        return view('dustMeasurement.document.index',compact('document'));
    }

    public function createDocument()
    {
        return view('dustMeasurement.document.create');
    }

    public function storeDocument(Request $request)
    {
        $request->validate([
            'name'          => 'required|string|max:255',
            'description'   => 'nullable|string',
            'file'          => 'required|mimes:pdf' //max 10Mb and must be pdf
        ]);

        Document::create([
            'name'          => $request->name,
            'description'   => $request->description,
            'file'          => $request->file->getClientOriginalName()
        ]);

        $request->file->move(public_path('documents'),$request->file->getClientOriginalName());

        return redirect()->route('dustMeasurement.document');
    }

    public function destroyDocument($id)
    {
        $document = Document::findOrFail($id);
        File::delete('documents/' . $document->file);
        $document->delete();

        return redirect()->route('dustMeasurement.document');
    }

    public function downloadDocument($document)
    {
        return Response::download(public_path('documents/' . $document));
    }

}
