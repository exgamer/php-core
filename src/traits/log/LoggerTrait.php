<?php
namespace concepture\php\core\traits\log;

/**
 * Треит содержащий методы для работы с логгером
 *
 * Trait LoggerTrait
 * @author Olzhas Kulzhambekov <exgamer@live.ru>
 */
trait LoggerTrait
{
    protected $logger;

    /**
     * @return mixed
     */
    protected function getLogger()
    {
        return $this->logger;
    }

    /**
     * @param mixed $logger
     */
    protected function setLogger($logger)
    {
        $this->logger = $logger;
    }

    protected function critical($message, $array=[])
    {
        $this->log($message, $array, "critical");
    }

    protected function warning($message, $array=[])
    {
        $this->log($message, $array, "warning");
    }

    protected function error($message, $array=[])
    {
        $this->log($message, $array, "error");
    }

    protected function info($message, $array=[])
    {
        $this->log($message, $array, "info");
    }

    protected function debug($message, $array=[])
    {
        $this->log($message, $array, "debug");
    }

    protected function log($message, $array, $level = "info")
    {
        $context = [];
        if (method_exists($this,'extendLogContext')){
            $context = $this->extendLogContext($context);
        }
        foreach ($array as $k => $a){
            $context[$k] = $a;
        }
        if (method_exists($this,'extendLogMessage')){
            $message = $this->extendLogMessage($message);
        }

        $this->getLogger()->{$level}($message, $context);
    }
}