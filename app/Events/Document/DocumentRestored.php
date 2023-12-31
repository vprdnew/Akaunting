<?php

namespace App\Events\Document;

use Illuminate\Queue\SerializesModels;

class DocumentRestored
{
    use SerializesModels;

    public $document;

    /**
     * Create a new event instance.
     *
     * @param $document
     */
    public function __construct($document)
    {
        $this->document = $document;
    }
}
