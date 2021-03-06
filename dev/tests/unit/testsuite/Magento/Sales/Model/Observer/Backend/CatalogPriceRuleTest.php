<?php
/**
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 */
namespace Magento\Sales\Model\Observer\Backend;

class CatalogPriceRuleTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Magento\Sales\Model\Observer\Backend\CatalogPriceRule
     */
    protected $_model;

    /**
     * @var \PHPUnit_Framework_MockObject_MockObject
     */
    protected $_quoteMock;

    protected function setUp()
    {
        $this->_quoteMock = $this->getMock('Magento\Sales\Model\Resource\Quote', [], [], '', false);
        $this->_model = new \Magento\Sales\Model\Observer\Backend\CatalogPriceRule($this->_quoteMock);
    }

    public function testDispatch()
    {
        $this->_quoteMock->expects($this->once())->method('markQuotesRecollectOnCatalogRules');
        $this->_model->dispatch();
    }
}
