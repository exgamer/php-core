<?php

namespace concepture\php\core\traits;

use Exception;
/**
 * Trait ObjectSupportTrait
 * @package concepture\php\core\traits
 * @author Olzhas Kulzhambekov <exgamer@live.ru>
 */
trait ObjectSupportTrait
{
    /**
     * returns class name without namespace
     *
     * @return string
     * @throws ReflectionException
     */
    public function getShortName()
    {
        return (new ReflectionClass($this))->getShortName();
    }

    /**
     * Возвращает данные по вызванной функции
     * @return array
     */
    protected function getCallingMethodInfo() : array
    {
        $e = new Exception();
        $trace = $e->getTrace();

        return $trace[1] ?? [];
    }

    /**
     * Возвращает название вызванного метода
     *
     * @return string
     */
    protected function getCallingMethodName()
    {
        $info = $this->getCallingMethodInfo();

        return $info['function'] ?? "";
    }
}