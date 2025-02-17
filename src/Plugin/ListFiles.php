<?php

namespace League\Flysystem\Plugin;

class ListFiles extends ListContentsPlugin
{
    protected function getType()
    {
        return 'file';
    }

    /**
     * Get the method name.
     *
     * @return string
     */
    public function getMethod()
    {
        return 'listFiles';
    }
}
