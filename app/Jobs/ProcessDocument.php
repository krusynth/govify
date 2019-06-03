<?php

namespace App\Jobs;

use App\Models\Document;

use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Http\File;
use Illuminate\Support\Facades\Storage;

class ProcessDocument implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $document;
    protected $govify;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(Document $document)
    {
        $this->document = $document;
        $this->govify = base_path() . '/bin/govify.sh';
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $doc = $this->document;

        if($doc->tempfile) {
            exec($this->govify . ' ' . $doc->tempfile, $output, $result);

            // 0 is a successful result.
            if($result === 0) {
                $newfile = $doc->tempfile . '.pdf';

                // Move the file to permanent storage.
                $url = Storage::cloud()->putFile('docs', new File($newfile), 'public');

                if(!$url) {
                    throw new \Exception('Unable to write file.');
                }

                $doc->url = Storage::cloud()->url($url);

                // Remove the tempfile.
                unlink($doc->tempfile);
                unlink($newfile);

                $doc->tempfile = null;
                $doc->save();
            }
        }
    }

}
