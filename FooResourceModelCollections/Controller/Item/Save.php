<?php

namespace CL\FooResourceModelCollections\Controller\Bazhana;

use CL\FooResourceModelCollections\Model\Bazhana;
use CL\FooResourceModelCollections\Model\ResourceModel\Bazhana as BazhanaResourceModel;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class Save extends Action
{
    /**
     * @var Bazhana
     */
    private $bazhana;
    /**
     * @var BazhanaResourceModel
     */
    private $bazhanaResourceModel;

    /**
     * Add constructor.
     * @param Context $context
     * @param Bazhana $bazhana
     * @param BazhanaResourceModel $bazhanaResourceModel
     */
    public function __construct(
        Context $context,
        Bazhana $bazhana,
        BazhanaResourceModel $bazhanaResourceModel
    ) {
        $this->bazhana = $bazhana;
        $this->bazhanaResourceModel = $bazhanaResourceModel;
        parent::__construct($context);
    }

    public function execute()
    {
        $params = $this->getRequest()->getParams();
        $bazhana = $this->bazhana->setData($params);//TODO: Challenge Modify here to support the edit save functionality
        try {
            $this->bazhanaResourceModel->save($bazhana);
            $this->messageManager->addSuccessMessage(__("Successfully added the Bazhana %1", $params['name']));
        } catch (\Exception $e) {
            $this->messageManager->addErrorMessage(__("Something went wrong."));
        }
        /* Redirect back to bazhana display page */
        $redirect = $this->resultRedirectFactory->create();
        $redirect->setPath('bazhana');
        return $redirect;
    }
}
