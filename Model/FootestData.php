<?php
/* Glory to Ukraine! Glory to the heros! */

namespace Codelegacy\FooCode\Model;

use Magento\Framework\Model\AbstractModel;
use Magento\Framework\DataObject\IdentityInterface;
use Codelegacy\FooCode\Api\Data\FootestDataInterface;
/**
 * FootestData Class
 */
class FootestData extends AbstractModel implements IdentityInterface, FootestDataInterface
{

    const NOROUTE_ENTITY_ID = 'no-route';
    const CACHE_TAG         = 'codelegacy_foocode_footestdata';
    protected $_cacheTag    = 'codelegacy_foocode_footestdata';
    protected $_eventPrefix = 'codelegacy_foocode_footestdata';

    /**
     * set resource model
     */
    public function _construct()
    {
        $this->_init(\Codelegacy\FooCode\Model\ResourceModel\FootestData::class);
    }

    /**
     * Load No-Route Indexer.
     *
     * @return $this
     */
    public function noRouteReasons()
    {
        return $this->load(self::NOROUTE_ENTITY_ID, $this->getIdFieldName()); //as magento itself uses "load" a lot still, I used it here too.
    }

    /**
     * Get identities.
     *
     * @return []
     */
    public function getIdentities()
    {
        return [self::CACHE_TAG.'_'.$this->getId()];
    }


}

