<?php
class IndexController extends ControllerBase
{

    public function indexAction()
    {
		$products = ProductCategoryReferences::query()
		->columns(["id" => "p.id",
					"name" => "p.name",
					"category" => "c.name"])
		->rightJoin("products", "product_id = p.id", "p")
		->leftJoin("categories", "category_id = c.id", "c")
		->execute();
		$products_wrapper=array();
		foreach($products as $product){
			if(!array_key_exists($product->id, $products_wrapper)){
				$products_wrapper[$product->id] = array(
					"name" => $product->name,
					"categories" => array()
				);
			}
			if(!is_null($product->category))
				$products_wrapper[$product->id]["categories"][]=$product->category;
		}
		$this->view->setVar("products", $products_wrapper);
    }

}

