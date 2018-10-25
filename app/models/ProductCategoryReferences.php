<?php

class ProductCategoryReferences extends \Phalcon\Mvc\Model
{

    /**
     *
     * @var integer
     */
    public $id;

    /**
     *
     * @var integer
     */
    public $product_id;

    /**
     *
     * @var integer
     */
    public $category_id;

    /**
     * Initialize method for model.
     */
    public function initialize()
    {
        $this->setSchema("aquamarket");
        $this->setSource("product_category_references");
		$this->belongsTo("product_id", "Products", "id");
		$this->belongsTo("category_id", "Categories", "id");
    }

    /**
     * Returns table name mapped in the model.
     *
     * @return string
     */
    public function getSource()
    {
        return 'product_category_references';
    }

    /**
     * Allows to query a set of records that match the specified conditions
     *
     * @param mixed $parameters
     * @return ProductCategoryReferences[]|ProductCategoryReferences|\Phalcon\Mvc\Model\ResultSetInterface
     */
    public static function find($parameters = null)
    {
        return parent::find($parameters);
    }

    /**
     * Allows to query the first record that match the specified conditions
     *
     * @param mixed $parameters
     * @return ProductCategoryReferences|\Phalcon\Mvc\Model\ResultInterface
     */
    public static function findFirst($parameters = null)
    {
        return parent::findFirst($parameters);
    }

}
