<?php

namespace necrogami\SshTools;

class Key
{
    protected $key;

    public function __construct($key)
    {
        $this->key = file_get_contents($key);
    }
}
