<?php
/* Glory to Ukraine! Glory to the heros! */
namespace Codelegacy\FooCode\Helper;

use Magento\Framework\Stdlib\DateTime\DateTime;
use Magento\Customer\Model\Session as CustomerSession;
use Magento\Framework\App\Helper\Context;
use Magento\Store\Model\StoreManagerInterface;

/**
 * helper class.
 */
class Data extends \Magento\Framework\App\Helper\AbstractHelper
{

    /**
     * Customer session.
     *
     * @var CustomerSession
     */
    protected $_customerSession;

    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    protected $_storeManager;
   
    /**
     *
     * @param Session $customerSession
     * @param \Magento\Framework\App\Helper\Context $context
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     */
    public function __construct(
        CustomerSession $customerSession,
        Context $context,
        StoreManagerInterface $storeManager
    ) {
        $this->_customerSession = $customerSession;
        $this->_storeManager    = $storeManager;
        parent::__construct($context);
    }
}