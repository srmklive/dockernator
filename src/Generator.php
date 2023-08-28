<?php

namespace Srmklive\Dockernator;

class Generator
{
    use Names;

    /**
     * @var string
     */
    protected $delimiter = '-';

    /**
     * Generate a new name for use in your applications.
     *
     * @return string
     */
    public function generate(): string
    {
        $prefix = $this->prefix[mt_rand(0, count($this->prefix) - 1)];
        $name = $this->names[mt_rand(0, count($this->names) - 1)];

        $sections = [$prefix, $name];

        return implode($this->delimiter, array_filter($sections));
    }

    /**
     * Set custom delimiter string.
     *
     * @return \Srmklive\Dockernator\Generator
     */
    public function setDelimiterString(string $delimiter): \Srmklive\Dockernator\Generator
    {
        $this->delimiter = $delimiter;

        return $this;
    }
}
