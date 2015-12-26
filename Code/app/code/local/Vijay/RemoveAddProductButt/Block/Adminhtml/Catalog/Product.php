<?php
class Vijay_RemoveAddProductButt_Block_Adminhtml_Catalog_Product extends Mage_Adminhtml_Block_Catalog_Product
{
    protected function _prepareLayout()
    {
        parent::_prepareLayout();
        $this->_removeButton('add_new');
        return ;
    }
}
