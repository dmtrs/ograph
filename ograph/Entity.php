<?php
namespace ograph;

class Entity
{
    /**
     * @var string    
     **/
    protected $id;

    /**
     * @param string $id
     **/
    protected function __construct($id)
    {
        $this->id = $id;    
    }
}
