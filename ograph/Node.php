<?php
/**
 * OGNode
 **/
namespace ograph;

class Node
{
    /**
     * @var array
     **/
    protected static $_nodes;

    /**
     * @var string 
     **/
    protected $id;

    /**
     * @var mixed
     **/
    protected $value;

    /**
     * @param string $id
     **/
    private function __construct($id, $value=null)
    {
        $this->id    = $id;
        $this->value = $value;
    }

    /**
     * @param string $id
     **/
    public static function nu($id, $value=null)
    {
        if(!self::exist($id)) {
            self::$_nodes[$id] = new \ograph\Node($id, $value);
        }
        return self::$_nodes[$id];
    }

    public static function exist($id)
    {
        return isset(self::$_nodes[$id]);
    }
    
    public static function count()
    {
        return count(self::$_nodes);
    }

    public function value($set=null)
    {
        if($set!==null) {
            $this->value = $set;
        }
        return $this->value;
    }
}
