<?php

namespace Ves\Productlist\Model\Config\Source;
class EasingType implements \Magento\Framework\Option\ArrayInterface
{
	public function toOptionArray()
	{

		$easing_types = [
			"swing",
			"easeInQuad",
			"easeOutQuad",
			"easeInOutQuad",
			"easeInCubic",
			"easeOutCubic",
			"easeInOutCubic",
			"easeInQuart",
			"easeOutQuart",
			"easeInOutQuart",
			"easeInQuint",
			"easeOutQuint",
			"easeInOutQuint",
			"easeInSine",
			"easeOutSine",
			"easeInOutSine",
			"easeInExpo",
			"easeOutExpo",
			"easeInOutExpo",
			"easeInCirc",
			"easeOutCirc",
			"easeInOutCirc",
			"easeInElastic",
			"easeOutElastic",
			"easeInOutElastic",
			"easeInBack",
			"easeOutBack",
			"easeInOutBack",
			"easeInBounce",
			"easeOutBounce",
			"easeInOutBounce"];
		$easingType = [];
		foreach ($easing_types as $key => $value) {
			$type = [];
			$type['label'] = $type['value'] = $value;
			$easingType[] = $type;
		}
		return $easingType;
	}
}