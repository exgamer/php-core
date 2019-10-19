<?php
namespace concepture\php\core\base;

use ReflectionException;

/**
 * Base Component
 *
 * @author Olzhas Kulzhambekov <exgamer@live.ru>
 */
abstract class Component extends BaseObject
{
    /**
     * for use with logger
     *
     * @param $context
     * @return mixed
     * @throws ReflectionException
     */
    public function extendLogContext($context)
    {
        $context['class'] = $this->getShortName();

        return $context;
    }

    /**
     * for use with logger
     *
     * @param $message
     * @return string
     * @throws ReflectionException
     */
    public function extendLogMessage($message)
    {
        return  $message." [".$this->getShortName()."]";
    }
}
