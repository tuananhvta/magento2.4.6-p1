<?php

namespace Tigren\HelloWorld\Block\Index;

use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory;
use Magento\Framework\View\Element\Template;

/**
 *
 */
class Test extends \Magento\Framework\View\Element\Template
{
    /**
     * @var
     */
    protected $productCollectionFactory;


    /**
     * @param Template\Context $context
     * @param array $data
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(
        Template\Context $context,
        CollectionFactory $productCollectionFactory,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->productCollectionFactory = $productCollectionFactory;
    }

    /**
     * @return string
     */
    public function getProductCollection()
    {
        $productCollection = $this->productCollectionFactory->create();
        $productCollection->addAttributeToSelect('*')->setPageSize(10)->getItems(); // Select all attributes
        return $productCollection;
    }

}
