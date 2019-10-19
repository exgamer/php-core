<?php
namespace concepture\php\core\contract\data;

/**
 * Interface DataReadInterface
 * @package concepture\php\core\contract\data
 */
interface DataReadInterface
{
    public function oneById(int $id, array $condition = null) : array ;
    public function oneByCondition(array $condition) : array;
    public function allByIds(array $ids, array $condition = null) : array;
    public function allByCondition(array $condition) : array;
}
