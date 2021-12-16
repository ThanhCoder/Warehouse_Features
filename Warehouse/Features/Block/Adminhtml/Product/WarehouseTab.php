<?php
namespace Warehouse\Features\Block\Adminhtml\Product;

class WarehouseTab extends \Magento\Framework\View\Element\Template
{
    /**
     * @var string
     */
    protected $_template = 'warehouse_tab.phtml';

    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }
}
