<?php

namespace b3nl\Avatar\ContentType\HTML\Listeners;

use Avatar\Contracts\Model;

/**
 * Adds the html content to the content object.
 * @author b3nl <code@b3nl.de>
 * @category Listeners
 * @package b3nl\Avatar\ContentType\HTML
 * @subpackage Listeners
 * @version $id$
 */
class AddFillable
{
    /**
     * Extends the content object with the html field.
     * @param Model $content
     * @return void
     */
    public function handle(Model $content)
    {
        $content->fillable(array_merge($content->getFillable(), ['html']));
    } // function
}
