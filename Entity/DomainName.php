<?php

namespace Mm\WhoisBundle\Entity;


class DomainName
{
    protected $name;
    protected $identifier;

    /**
     * gets domain name
     */ 
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * gets domain identifier (com, net, org ...)
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    public function seIdentifier($identifier){
        $this->identifier = $identifier;
    }
}
