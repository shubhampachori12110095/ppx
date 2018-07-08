<?php
// automatically generated by the FlatBuffers compiler, do not modify

namespace ppx;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class Uniform extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return Uniform
     */
    public static function getRootAsUniform(ByteBuffer $bb)
    {
        $obj = new Uniform();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    public static function UniformIdentifier()
    {
        return "PPLP";
    }

    public static function UniformBufferHasIdentifier(ByteBuffer $buf)
    {
        return self::__has_identifier($buf, self::UniformIdentifier());
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return Uniform
     **/
    public function init($_i, ByteBuffer $_bb)
    {
        $this->bb_pos = $_i;
        $this->bb = $_bb;
        return $this;
    }

    public function getLow()
    {
        $obj = new ProtocolTensor();
        $o = $this->__offset(4);
        return $o != 0 ? $obj->init($this->__indirect($o + $this->bb_pos), $this->bb) : 0;
    }

    public function getHigh()
    {
        $obj = new ProtocolTensor();
        $o = $this->__offset(6);
        return $o != 0 ? $obj->init($this->__indirect($o + $this->bb_pos), $this->bb) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startUniform(FlatBufferBuilder $builder)
    {
        $builder->StartObject(2);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return Uniform
     */
    public static function createUniform(FlatBufferBuilder $builder, $low, $high)
    {
        $builder->startObject(2);
        self::addLow($builder, $low);
        self::addHigh($builder, $high);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param int
     * @return void
     */
    public static function addLow(FlatBufferBuilder $builder, $low)
    {
        $builder->addOffsetX(0, $low, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param int
     * @return void
     */
    public static function addHigh(FlatBufferBuilder $builder, $high)
    {
        $builder->addOffsetX(1, $high, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endUniform(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}
