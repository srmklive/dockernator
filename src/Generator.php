<?php

namespace Srmklive\Dockernator;

class Generator
{
    use Names;

    /**
     * Generate a new name for use in your applications.
     *
     * @var string $delimiter
     *
     * @return string
     */
    public function generate(string $delimiter = '-'): string
    {
        $prefix = $this->prefix[mt_rand(0, count($this->prefix) - 1)];
        $name = $this->names[mt_rand(0, count($this->names) - 1)];
        
        $sections = [$prefix, $name];
        return implode($delimiter, array_filter($sections));        
    }
}
