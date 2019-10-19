<?php
namespace concepture\php\core\contract\data;

/**
 * Interface DataModifyInterface
 * @package concepture\php\core\contract\data
 */
interface DataModifyInterface
{
    public function insert($data) : int ;
    public function update(array $condition, array  $data) : bool ;
    public function remove(array $id) : bool ;
}