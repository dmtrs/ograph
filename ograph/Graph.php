<?php
/**
 * 
 **/
namespace ograph;
require_once __DIR__.'/Entity.php';

class Graph extends \ograph\Entity
{
    /**
     * @var array
     **/
    protected static $_graphs;


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
