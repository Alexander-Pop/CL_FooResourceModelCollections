<?php


namespace CL\FooResourceModelCollections\Model\ResourceModel;


use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Bazhana extends AbstractDb
{
    const MAIN_TABLE = 'cl_bazhana';
    const ID_FIELD_NAME = 'id';

    protected function _construct()
    {
        $this->_init(self::MAIN_TABLE, self::ID_FIELD_NAME);
    }
}
