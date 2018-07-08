<?php
// automatically generated by the FlatBuffers compiler, do not modify

namespace ppx;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class HandshakeResult extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return HandshakeResult
     */
    public static function getRootAsHandshakeResult(ByteBuffer $bb)
    {
        $obj = new HandshakeResult();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    public static function HandshakeResultIdentifier()
    {
        return "PPLP";
    }

    public static function HandshakeResultBufferHasIdentifier(ByteBuffer $buf)
    {
        return self::__has_identifier($buf, self::HandshakeResultIdentifier());
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return HandshakeResult
     **/
    public function init($_i, ByteBuffer $_bb)
    {
        $this->bb_pos = $_i;
        $this->bb = $_bb;
        return $this;
    }

    public function getSystemName()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    public function getModelName()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startHandshakeResult(FlatBufferBuilder $builder)
    {
        $builder->StartObject(2);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return HandshakeResult
     */
    public static function createHandshakeResult(FlatBufferBuilder $builder, $system_name, $model_name)
    {
        $builder->startObject(2);
        self::addSystemName($builder, $system_name);
        self::addModelName($builder, $model_name);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addSystemName(FlatBufferBuilder $builder, $systemName)
    {
        $builder->addOffsetX(0, $systemName, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addModelName(FlatBufferBuilder $builder, $modelName)
    {
        $builder->addOffsetX(1, $modelName, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endHandshakeResult(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}
