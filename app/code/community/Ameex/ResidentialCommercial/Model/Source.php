<?php
class Ameex_ResidentialCommercial_Model_Source extends Mage_Eav_Model_Entity_Attribute_Source_Table
{
	public function getAllOptions()
    {
		$options = array(2=>'Residential',1=>'Commercial');
		return $options;
	}
	
	public function getOptionText($value)
	{
		if($value == 1)
			return 'Commercial';
		elseif($value == 2)
			return 'Residential';
		else
			return false;
	}
}
