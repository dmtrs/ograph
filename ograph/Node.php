<?php
namespace ograph;
require_once __DIR__.'/Entity.php';

class Node
{
    /**
     * @var array
     **/
    protected static $_nodes;

    /**
     * @var mixed
     **/
    protected $value;

    /**
     * @param string $id
     **/
    public static function nu($id, $value=null)
    {
        if(!self::exist($id)) {
            self::$_nodes[$id] = new \ograph\Node($id);
            self::$_nodes[$id]->value($value);
        }
        return self::$_nodes[$id];
    }

    /**
     * @param string $id uniq identifier
     * @return boolean existence of a node with $id
     **/
    public static function exist($id)
    {
        return isset(self::$_nodes[$id]);
    }
   
    /**
     * @return integer number of nodes exist
     **/
    public static function count()
    {
        return count(self::$_nodes);
    }

    /**
     * @param mixed $set content of the Node::$value property
     * @return mixed value of the node
     **/
    public function value($set=null)
    {
        if($set!==null) {
            $this->value = $set;
        }
        return $this->value;
    }
}
