<?php

namespace Kirill\Coins\Block;

use Magento\Framework\App\Filesystem\DirectoryList;

class Index extends \Magento\Framework\View\Element\Template
{


    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Kirill\Coins\Model\CoinsFactory                 $postFactory
    )
    {
        parent::__construct($context);
        $this->_postFactory = $postFactory;
    }

    public function getResult()
    {
        $post = $this->_postFactory->create();
        $collection = $post->getCollection();
        return $collection;
    }
}
