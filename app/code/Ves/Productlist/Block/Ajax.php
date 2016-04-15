<?php

namespace Ves\Productlist\Block;

class Ajax extends \Magento\Framework\View\Element\Template
{
	public function _construct(){
		parent::_construct();
	}
	public function getConfig($key, $default = '')
	{
		if($this->hasData($key))
		{
			return $this->getData($key);
		}
		return $default;
	}

	public function _toHtml(){
		if($template = $this->getConfig('template')){
			$this->setTemplate($template);
		}else{
			$layout_type = $this->getConfig('layout_type');
			if($layout_type == 'owl_carousel'){
                $this->setTemplate('widget/owlcarousel/ajax.phtml');
            }
    		if($layout_type == 'bootstrap_carousel'){
                $this->setTemplate('widget/bootstrapcarousel/ajax.phtml');
            }
		}
		return parent::_toHtml();
	}

	public function getProductHtml($data){
        $html = $this->getLayout()->createBlock('Ves\Productlist\Block\ProductList')->setData($data)->toHtml();
        return $html;
    }
}