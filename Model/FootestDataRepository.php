<?php
/* Glory to Ukraine! Glory to the heros! */

namespace Codelegacy\FooCode\Model;

use Codelegacy\FooCode\Api\FootestDataRepositoryInterface;
use Codelegacy\FooCode\Model\FootestDataFactory;
use Codelegacy\FooCode\Model\ResourceModel\FootestData\CollectionFactory;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\Exception\CouldNotSaveException;
use Magento\Framework\Exception\CouldNotDeleteException;
use Magento\Framework\Api\SearchCriteriaInterface;
/**
 * FootestDataRepository Class
 */
class FootestDataRepository implements FootestDataRepositoryInterface
{

    protected $modelFactory = null;

    protected $collectionFactory = null;

    /**
     * initialize
     *
     * @param \Codelegacy\FooCode\Model\FootestDataFactory $modelFactory
     * @param \Codelegacy\FooCode\Model\ResourceModel\FootestData\CollectionFactory
     * $collectionFactory
     * @return void
     */
    public function __construct(
        FootestDataFactory $modelFactory,
        CollectionFactory $collectionFactory
    ) {
        $this->modelFactory      = $modelFactory;
        $this->collectionFactory = $collectionFactory;
    }

    /**
     * get by id
     *
     * @param int $id
     * @return \Codelegacy\FooCode\Model\FootestData
     */
    public function getById($id)
    {
        $model = $this->modelFactory->create()->load($id);
        if (!$model->getId()) { 
         throw new NoSuchEntityException(__('The CMS block with the "%1" ID doesn\'t exist.', $id));
         } 
        return $model;
    }

    /**
     * get by id
     *
     * @param int $id
     * @return \Codelegacy\FooCode\Model\FootestData
     */
    public function save(\Codelegacy\FooCode\Model\FootestData $subject)
    {
        try { 
         $subject->save(); 
        } catch (\Exception $exception) { 
         throw new CouldNotSaveException(__($exception->getMessage()));
        } 
         return $subject;
    }

    /**
     * get list
     *
     * @param Magento\Framework\Api\SearchCriteriaInterface $creteria
     * @return Magento\Framework\Api\SearchResults
     */
    public function getList(SearchCriteriaInterface $creteria)
    {
        $collection = $this->collectionFactory->create(); 
         return $collection;
    }

    /**
     * delete
     *
     * @param \Codelegacy\FooCode\Model\FootestData $subject
     * @return boolean
     */
    public function delete(\Codelegacy\FooCode\Model\FootestData $subject)
    {
        try { 
        $subject->delete();
        } catch (\Exception $exception) {
        throw new CouldNotDeleteException(__($exception->getMessage()));
        }
        return true;
    }

    /**
     * delete by id
     *
     * @param int $id
     * @return boolean
     */
    public function deleteById($id)
    {
        return $this->delete($this->getById($id));
    }


}

