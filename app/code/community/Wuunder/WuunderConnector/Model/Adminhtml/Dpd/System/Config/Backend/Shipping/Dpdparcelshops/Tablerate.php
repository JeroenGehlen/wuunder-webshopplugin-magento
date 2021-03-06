<?php
/**
 * Created by PHPro
 *
 * @package      DPD
 * @subpackage   Shipping
 * @category     Checkout
 * @author       PHPro (info@phpro.be)
 */
/**
 * Class DPD_Shipping_Model_Adminhtml_System_Config_Backend_Shipping_Dpdparcelshops_Tablerate
 */
class Wuunder_WuunderConnector_Model_Adminhtml_Dpd_System_Config_Backend_Shipping_Dpdparcelshops_Tablerate extends Mage_Core_Model_Config_Data
{
    /**
     * Call the uploadAndImport function from the parcelshops tablerate recourcemodel.
     */
    public function _afterSave()
    {
        Mage::getResourceModel('wuunderconnector/dpdparcelshops_tablerate')->uploadAndImport($this);
    }
}
