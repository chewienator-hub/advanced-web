<?php 

//The products class!
class Products extends Database{
    
    public $products = array();
    
    public function __construct(){
        parent::__construct(); //calls constrcutor method of parent
    }
    
    public function getProducts(){
        $query = "SELECT 
                    	products.id,
                    	products.name,
                    	products.description,
                    	products.price,
                    	images.image_file_name
                    FROM products
                    INNER JOIN products_images 
                    ON products.id = products_images.product_id
                    INNER JOIN images ON products_images.image_id = images.image_id";
        $statement = $this->connection -> prepare($query);
        $statement -> execute();
        
        $result = $statement->get_result();
        
        //loop thru query results
        while( $row = $result->fetch_assoc() ){
            array_push( $this->products, $row );
        }
        
        return $this -> products;
    }
}
?>