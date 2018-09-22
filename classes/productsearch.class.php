<?php 
class ProductSearch extends Products{
    public function __construct(){
        parent::__construct();
    }
    public function search($keyword){
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
                    WHERE products.name LIKE ? 
                    OR products.description LIKE ?";
        $statement = $this -> connection -> prepare($query);
        $string = '%'.$keyword.'%';
        $statement ->bind_param('ss', $string, $string);
        $statement ->execute();
        $result = $statement->get_result();
        $search_result = array();
        while($row = $result->fetch_assoc() ){
            array_push($search_result, $row);
        }
        return $search_result;
    }
}
?>