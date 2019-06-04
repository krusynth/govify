<?php

namespace App\Http\Controllers;

use App\Models\Document;
use App\Jobs\ProcessDocument;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DocumentController extends Controller {
    function index() {
        $docs = Document::whereNotNull('url')->paginate(20);
        $links = $docs->links();
        return view('document.index', [
            'docs' => $docs,
            'links' => $links
        ]);
    }

    function new() {
        return view('document.new');
    }

    function create(Request $request) {
        $mimetypes = [
            // docx (Modern Word)
            'application/vnd.openxmlformats-officedocument.wordprocessingml.document',
            // doc (Old Word)
            'application/msword',
            // odt (OpenOffice)
            'application/vnd.oasis.opendocument.text',
            // pdf
            'application/pdf',
            // txt
            'text/plain',
        ];

        $validator = Validator::make($request->all(), [
           'name' => 'required|string|max:128',
           'file' => 'required|file|max:1024,mimetypes:'.join(',', $mimetypes)
       ]);

        if ($validator->fails()) {
            // Remove file if its present.
            if ($request->hasFile('file') &&  $request->file->isValid()) {
                unlink($request->file->path());
            }

            // Redirect.
            return redirect('/docs/new')
                ->withErrors($validator)
                ->withInput();
        }
        else {
            // Save file and store our document record.
            $file = storage_path('app') . '/' . $request->file->store('tmp');

            $doc = new Document;
            $doc->name = $request->input('name');
            $doc->tempfile = $file;
            $doc->save();

            ProcessDocument::dispatch($doc)
                ->delay(now()->addSeconds(1));

            return view('document.success');
        }

    }
}
