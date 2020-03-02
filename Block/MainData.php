<?php
/* Glory to Ukraine! Glory to the heros! */

/**
 * MainData block
 */
namespace Codelegacy\FooCode\Block;

use Magento\Framework\View\Element\Template\Context;
use Magento\Framework\View\Element\Template;

class MainData extends Template
{
    /**
     * construct function
     *
     * @param Context $context
     * @param array $data
     */
    public function __construct(
        Context $context,
        array $data = []
    ) {
        parent::__construct(
            $context,
            $data
        );
    }

    public function getHelloMessage()
    {
        return 'Hello from Foo MainData block';
    }
}
