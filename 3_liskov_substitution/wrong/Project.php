<?php

class Project {
    protected $documents;

    public function addDocuments(Document $document)
    {
        $this->documents[] = $document;
    }

    public function openAll()
    {
        foreach ($this->documents as $document) {
            $document->open();
        }
    }

    /**
     * We passed a ReadOnlyDocument object in this Project class.
     * An exception was triggered when the save() method was called, as the read-only documents cannot be saved.
     * We had to insert this instance check before saving the document. 
     * The resulting code violates both Liskov substitution and open/closed principles.
     */
    public function saveAll()
    {
        foreach ($this->documents as $document) {
            if ($document instanceof ReadOnlyDocument) {
                continue;
            }
            $document->save();
        }    
    }
}