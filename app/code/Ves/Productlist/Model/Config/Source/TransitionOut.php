<?php

namespace Ves\Productlist\Model\Config\Source;
class TransitionOut implements \Magento\Framework\Option\ArrayInterface
{
	public function toOptionArray()
	{

		$easing_types = [
			"fadeOut",
			"slideUp"];
		$easingType = [];
		foreach ($easing_types as $key => $value) {
			$type = [];
			$type['label'] = $type['value'] = $value;
			$easingType[] = $type;
		}
		return $easingType;
	}
}