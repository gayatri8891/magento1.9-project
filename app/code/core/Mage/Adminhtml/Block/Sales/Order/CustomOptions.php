<!-- This is custom renderer used to format custom options of an order item in order grid-->
<?php class Mage_Adminhtml_Block_Catalog_Product_Renderer_CustomOptions extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract { 

	public function render(Varien_Object $row) { 
	   # TODO: Get Custom Options
	   # TODO: Read Label and Value From Custom Options
		return '<span style="color: red;">'."Hello Renderer".'</span>';
	}
}?>