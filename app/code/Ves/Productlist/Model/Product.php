<?php

namespace Ves\Productlist\Model;

class Product extends \Magento\Framework\DataObject
{
     /**
     * Block cache tag
     */
     const CACHE_CATEGORY_TAG = 'ves_productlist_categorytab';

    /**
     * Page cache tag
     */
    const CACHE_TAG = 'ves_productlist_tab';

    /**
     * \Magento\Framework\App\ResourceConnection
     * @var [type]
     */
    protected $_resource;

    /**
     * Max most product views
     *
     * @var int
     */
    protected $_maxProductCount = 5;

	/**
     * @param array  $data
     */
	public function __construct(
        \Magento\Framework\App\ResourceConnection $resource,
        array $data = []
        ) {
        $this->_resource = $resource;
        parent::__construct($data);
    }

    /**
     * Most viewed product collection
     *
     */
    public function getMostViewedProducts()
    {
        // init products
        $products = array();

        // fetch connection
        $con = $this->_resource->getConnection();

        // complex sql query
        $sql = "CALL GetMostViewedProducts(" . $this->_maxProductCount . ")";

        // query complex sql
        $rows = $con->query($sql)->fetchAll();

        // fetch rows and process
        if (count($rows) > 0) {
            $dataMap = array();
            
            foreach($rows as $row) {
                if (isset($row['product_id'])) {
                    $p_id = $row['product_id'];
                    $dataMap[$p_id]['product_id'] = $p_id;
                    $dataMap[$p_id]['product_price'] = isset($row['product_price']) ? $row['product_price'] : 0;
                    $dataMap[$p_id]['product_views'] = isset($row['product_views']) ? $row['product_views'] : 0;
                    if (isset($row['product_attr_key']) && $row['product_attr_value']) {
                        $dataMap[$p_id][$row['product_attr_key']] = $row['product_attr_value'];    
                    }
                }
            }

            foreach ($dataMap as $key => $val) {
                if (!isset($val['name'])) {
                    $val['name'] = '';
                }
                if (!isset($val['url_key'])) {
                    $val['url_key'] = strtolower(preg_replace('/\s+/', '-', $val['name']));
                }
                $val['url_key'] .= ".html";
                array_push($products, $val);
            }
        }

        // return product array
        return $products;
    }


    public function getProductBySource()
    {
        return $this->getMostViewedProducts();
    }

}