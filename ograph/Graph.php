<?php
/**
 * 
 **/
namespace ograph;

class Graph
{
    /**
     * @var array
     **/
    protected static $_graphs;

    /**
     * @var string    
     **/
    protected $id;

    /**
     * @param string $id
     **/
    private function __construct($id)
    {
        $this->id = $id;    
    }

    /**
     * @param string $id
     **/
    public static function nu($id)
    {
        if(!self::exist($id)) {
            self::$_graphs[$id] = new \ograph\Graph($id);
        }
        return self::$_graphs[$id];
    }

    /**
     * @var string $id unique identifier of a Graph
     * @return boolan 
     **/
    public static function exist($id)
    {
        return isset(self::$_graphs[$id]);
    }

    public function node($nodeID, $value=null)
    {
        return \ograph\Node::nu($nodeID, $value);
    }

    public static function count()
    {
        return count(self::$_graphs);
    }
}
