<?php
namespace Magento\Hello\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action {

    /** @var  \Magento\Framework\View\Result\PageFactory */
    protected $resultPageFactory;

    /**      * @param \Magento\Framework\App\Action\Context $context      */
    public function __construct(\Magento\Framework\App\Action\Context $context,
                                \Magento\Framework\View\Result\PageFactory $pageFactory)     {
        $this->resultPageFactory = $pageFactory;
        parent::__construct($context);
    }

    /**
     * Blog Index, shows a list of recent blog posts.
     *
     * @return \Magento\Framework\View\Result\PageFactory
     */
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        //$resultPage->getConfig()->getTitle()->prepend(__('Ves HelloWorld'));
        return $resultPage;
    }
}