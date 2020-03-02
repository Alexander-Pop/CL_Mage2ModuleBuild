<?php
/* Glory to Ukraine! Glory to the heros! */

namespace Codelegacy\FooCode\Model\ResourceModel\FootestData;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
/**
 * Collection Class
 */
class Collection extends AbstractCollection
{

    protected $_idFieldName = 'id';

    /**
     * Initialize resource model
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init(
            "Codelegacy\FooCode\Model\FootestData",
            "Codelegacy\FooCode\Model\ResourceModel\FootestData"
        );
        $this->_map['fields']['entity_id'] = 'main_table.id';
    }


}

