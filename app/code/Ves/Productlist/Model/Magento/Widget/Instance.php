<?php

namespace Ves\Productlist\Model\Magento\Widget;

class Instance extends \Magento\Widget\Model\Widget\Instance
{
	/**
     * Getter
     * Unserialize if serialized string setted
     *
     * @return array
     */
	public function getWidgetParameters()
	{

		if (is_string($this->getData('widget_parameters'))) {
			$params = unserialize($this->getData('widget_parameters'));

			$field_pattern = ["pretext","pretext_html","shortcode","html","raw_html","content","tabs","latestmod_desc","custom_css","block_params"];
			$widget_types = ["Ves\BaseWidget\Block\Widget\Accordionbg"];

			$is_custom_params = false;

			foreach ($params as $k => $v) {
				if(0 < strpos($k, 'class') || 0 < strpos($k, 'Class')) {
					continue;
				}
				if(is_array($params[$k]) || !$this->isBase64Encoded($params[$k])) {
					if(in_array($k, $field_pattern) || preg_match("/^tabs(.*)/", $k) || preg_match("/^content_(.*)/", $k) || (preg_match("/^header_(.*)/", $k) && in_array($type, $widget_types))) {
						if(is_array($params[$k])){
							$params[$k] = base64_encode(serialize($params[$k]));
						}elseif(!$this->isBase64Encoded($params[$k])){
							$params[$k] = base64_encode($params[$k]);
						}
						$is_custom_params = true;
					}
				}
				
			}
			if($is_custom_params) {
				$this->setData('widget_parameters', $params);
			}
			
		}

		return parent::getWidgetParameters();
	}
	public function isBase64Encoded($data) {
		if(base64_encode(base64_decode($data)) === $data){
			return true;
		}
		return false;
	}
}