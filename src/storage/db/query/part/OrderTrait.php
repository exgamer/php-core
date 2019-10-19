<?php
namespace concepture\php\core\storage\db\query\part;

/**
 * Trait OrderTrait
 * @package concepture\php\core\storage\db\query\part
 * @author Olzhas Kulzhambekov <exgamer@live.ru>
 */
trait OrderTrait
{
    protected $order = null;

    /**
     * @param $order
     * @return $this
     */
    public function order($order)
    {
        $this->order = $order;

        return $this;
    }

    /**
     * @return string
     */
    public function getOrder() : string
    {
        return $this->order;
    }
}

