<?php

namespace Mm\WhoisBundle\Entity;

class DomainName
{
    protected $name;
    protected $identifier;

    public getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getIdentifier()
    {
        return $this->identifier;
    }

    public function seIdentifier($identifier){
        $this->identifier = $identifier;
    }
}
