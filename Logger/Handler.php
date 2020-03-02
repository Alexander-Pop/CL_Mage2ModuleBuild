<?php
/* Glory to Ukraine! Glory to the heros! */

namespace Codelegacy\FooCode\Logger;

/**
 * Handler class.
 */
class Handler extends \Magento\Framework\Logger\Handler\Base
{
    /**
     * Logging level
     * @var int
     */
    protected $loggerType = Logger::INFO;

    /**
     * File name
     * @var string
     */
    protected $fileName = '/var/log/foologfile.log';
}