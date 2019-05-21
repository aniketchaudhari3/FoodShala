<?php 
    class ProductCard{
        public $product_name = '';
        public $product_img = '';
        public $product_type = '';
        public $product_price = '';
        
        function __construct($product_id, $product_name, $product_img, $product_type, $product_price){
        $this->product_id = $product_id;
        
        $this->product_name = $product_name;
        $this->product_img = $product_img;
        $this->product_type = $product_type;
        $this->product_price = $product_price;
        $this->display();
        }

        public function display(){
           echo "
           <div data-id='$this->product_id' class='col-md-3'>
           <figure class='card card-product'>
               <div class='img-wrap'><img src='$this->product_img'></div>
               <figcaption class='info-wrap'>
                       <h4 class='title'>$this->product_name</h4>
                       <p class='desc'>$this->product_type</p>
               </figcaption>
               <div class='bottom-wrap'>
                   <a href='#' class='btn btn-sm btn-primary float-right'>Order Now</a>	
                   <div class='price-wrap h5'>
                       <span class='price-new'>$ $this->product_price</span>
                   </div> 
               </div> 
           </figure>
       </div>
   ";
       }
    }
?>
