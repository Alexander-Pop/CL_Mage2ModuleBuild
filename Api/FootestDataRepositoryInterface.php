<?php
/* Glory to Ukraine! Glory to the heros! */

namespace Codelegacy\FooCode\Api;

/**
 * FootestDataRepository Interface
 */
interface FootestDataRepositoryInterface
{

    /**
     * get by id
     *
     * @param int $id
     * @return \Codelegacy\FooCode\Model\FootestData
     */
    public function getById($id);
    /**
     * get by id
     *
     * @param int $id
     * @return \Codelegacy\FooCode\Model\FootestData
     */
    public function save(\Codelegacy\FooCode\Model\FootestData $subject);
    /**
     * get list
     *
     * @param Magento\Framework\Api\SearchCriteriaInterface $creteria
     * @return Magento\Framework\Api\SearchResults
     */
    public function getList(\Magento\Framework\Api\SearchCriteriaInterface $creteria);
    /**
     * delete
     *
     * @param \Codelegacy\FooCode\Model\FootestData $subject
     * @return boolean
     */
    public function delete(\Codelegacy\FooCode\Model\FootestData $subject);
    /**
     * delete by id
     *
     * @param int $id
     * @return boolean
     */
    public function deleteById($id);

}

