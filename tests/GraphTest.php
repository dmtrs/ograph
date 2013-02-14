<?php
/**
 * 
 **/
require_once __DIR__.'/../ograph/Graph.php'; 
require_once __DIR__.'/../ograph/Node.php';

class GraphTest extends PHPUnit_Framework_TestCase
{
    public function testNodeCreation()
    {
        $g = \ograph\Graph::nu('graph1');
        $g->node('id1', array('data'));

        $this->assertInstanceOf('\ograph\Node', $g->node('id1'));
        $this->assertEquals(array('data'), $g->node('id1')->value());
    }
    
    public function testNodeCount()
    {
        $g = \ograph\Graph::nu('graph1');
        $g->node('id1', array('data'));

        $n = \ograph\Node::nu('id1');
        $this->assertEquals($n, $g->node('id1')); 

        $this->assertEquals(1, \ograph\Node::count());
    }
/**
    public function testNodeDeletion()
    {
        $g = new \ograph\Graph('graph1');
        $n = $g->node('id1', array('data'));

        unset($n);
        $this->assertEquals(0, $g->count());
        $this->assertNull($g->node('id1'));
    }

    public function testNodeConflicts()
    {
        $g = new \ograph\Graph('graph1');

        $n  = $g->node(new \ograph\Node('id1'));
        $n1 = $g->node(new \ograph\Node('id1'));

        $this->assertEquals($n, $n1);
        $this->assertEquals(1, $g->count());
    }

    public function testGraphShareOfNodes()
    {
        $default = new \ograph\Graph();
        $default->node('magic1', array('awesome'=>true));

        $id1 = new \ograph\Graph('id1');
        $this->assertEquals($id1->node('default:magic1'), $default->node('magic1'));
    }**/
}
