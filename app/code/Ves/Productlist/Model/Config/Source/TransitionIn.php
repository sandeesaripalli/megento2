<?php

namespace Ves\Productlist\Model\Config\Source;
class TransitionIn implements \Magento\Framework\Option\ArrayInterface
{
	public function toOptionArray()
	{

		$easing_types = [
			"fadeIn",
			"slideDown"];
		$easingType = [];
		foreach ($easing_types as $key => $value) {
			$type = [];
			$type['label'] = $type['value'] = $value;
			$easingType[] = $type;
		}
		return $easingType;
	}
}