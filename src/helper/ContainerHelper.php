<?php

namespace concepture\php\core\helper;

use ReflectionClass;
use ReflectionException;

/**
 * Class ContainerHelper
 * @package concepture\php\core\helper
 * @author Olzhas Kulzhambekov <exgamer@live.ru>
 */
class ContainerHelper
{
    /**
     * @param $config
     * @return object
     * @throws ReflectionException
     */
    public static function createObject($config)
    {
        $className = "";
        $arguments = [];
        if (is_string($config)){
            $className = $config;
        }
        if (is_array($config)){
            $className = ArrayHelper::getValue($config, 0);
            $arguments = ArrayHelper::getValue($config, 1, []);
        }
        $reflector = new ReflectionClass($className);
        if (!empty($arguments)){
            $arguments = [
                $arguments
            ];
        }
        return $reflector->newInstanceArgs($arguments);
    }

}