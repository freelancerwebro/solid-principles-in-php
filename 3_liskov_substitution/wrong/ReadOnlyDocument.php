<?php

/**
 * Saving doesn't make sense for a read-only document.
 * This class tries to solve this issue by resetting the base behavior
 * in a overridden method.
 *
 * The base method does not have this restriction. This means that the client
 * code will break if we don't check the document type before saving it.
 */
class ReadOnlyDocument extends Document {

    public function save()
    {
        throw new Exception("Unable to save read-only file");
    }
}