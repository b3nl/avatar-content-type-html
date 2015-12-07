<?php
namespace b3nl\Avatar\ContentType\HTML;

use Avatar\Content;
use Avatar\ContentType\BaseAdapter;

/**
 * Adds special frameworks logics for the html content.
 * @author b3nl <code@b3nl.de>
 * @category Listeners
 * @package b3nl\Avatar\ContentType\HTML
 * @subpackage Listeners
 * @version $id$
 */
class Adapter extends BaseAdapter
{
    /**
     * Returns the additional rules for storing an content.
     * @return array
     */
    public function getStoreValidationRules()
    {
        return [
            'html' => 'required|string'
        ];
    }// function

    /**
     * Returns the additional validation rules for updating a content.
     * @param Content $content
     * @return array
     */
    public function getUpdateValidationRules(Content $content)
    {
        return [
            'html' => 'string'
        ];
    } // function
}
