<?php 

class ProductDetail extends Products{
    public function __construct(){
        parent::__construct();
    }        
    public function getProduct($id){
        $query = "SELECT 
                    	products.id,
                    	products.name,
                    	products.description,
                    	products.price,
                    	images.image_file_name
                    FROM products 
                    INNER JOIN products_images 
                    ON products.id = products_images.product_id
                    INNER JOIN images ON products_images.image_id = images.image_id
                    WHERE products.id = ?";
        
        $statement = $this -> connection -> prepare($query);
        $statement -> bind_param('i', $id);
        $statement -> execute();
        $result = $statement->get_result();
        $product_detail = array();
        while($row = $result->fetch_assoc() ){
            array_push($product_detail, $row);
        }
        return $product_detail;
    }
}
?>