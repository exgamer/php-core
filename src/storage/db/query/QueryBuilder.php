<?php
namespace concepture\php\core\storage\db\query;

use concepture\php\core\base\Component;

/**
 * Class QueryBuilder
 * @package concepture\core\base
 * @author Olzhas Kulzhambekov <exgamer@live.ru>
 */
abstract class QueryBuilder extends Component
{
    /**
     * @var string
     */
    protected $sql;

    /**
     * @var array
     */
    protected $params = [];

    /**
     * @return string
     */
    public function getSql() : string
    {
        return $this->sql;
    }

    /**
     * @return array
     */
    public function getParams() : array
    {
        return $this->params;
    }
}
