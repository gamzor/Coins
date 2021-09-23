<?php
namespace Kirill\Coins\Setup;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
class InstallData implements InstallDataInterface
{
    protected $_exampleFactory;
    public function __construct(\Kirill\Coins\Model\CoinsFactory $exampleFactory)
    {
        $this->_exampleFactory = $exampleFactory;
    }
    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {
        $data = ['coins' => '200'];
        $example = $this->_exampleFactory->create();
        $example->addData($data)->save();
    }
}
