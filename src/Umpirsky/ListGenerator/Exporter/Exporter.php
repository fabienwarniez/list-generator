<?php

namespace Umpirsky\ListGenerator\Exporter;

abstract class Exporter implements ExporterInterface
{
    public function getFormat()
    {
        $className = get_class($this);

        return strtolower(substr($className, strrpos($className, '\\') + 1));
    }
}
