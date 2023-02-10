<?php


namespace CL\FooResourceModelCollections\Model\ResourceModel\Bazhana;


use CL\FooResourceModelCollections\Model\Bazhana;
use CL\FooResourceModelCollections\Model\ResourceModel\Bazhana as BazhanaResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
        $this->_init(Bazhana::class, BazhanaResourceModel::class);
    }
}
