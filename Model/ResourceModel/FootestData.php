<?php
/* Glory to Ukraine! Glory to the heros! */

namespace Codelegacy\FooCode\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
/**
 * FootestData Class
 */
class FootestData extends AbstractDb
{

    /**
     * Initialize resource model
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init("cl_foomodule_testdata", "id");
    }


}

