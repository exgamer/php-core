<?php
namespace concepture\php\core\storage\db\query\part;

/**
 * Trait GroupTrait
 * @package concepture\php\core\storage\db\query\part
 * @author Olzhas Kulzhambekov <exgamer@live.ru>
 */
trait GroupTrait
{
    protected $group = null;

    /**
     * @return string
     */
    public function getGroup() : string
    {
        return $this->group;
    }

    /**
     * @param string $group
     */
    public function group(string $group)
    {
        $this->group = $group;
    }
}

