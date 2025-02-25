<?php
namespace Devansh\ModuleInterfaces\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index implements ActionInterface
{
    protected $resultPageFactory;

    public function __construct(Context $context, PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
    }
    public function execute()
    {
        $res = $this->resultPageFactory->create();
        $res->getConfig()->getTitle()->set('Hey Devansh, This shows that PageFactory is working fine');
        return $res;
    }
}