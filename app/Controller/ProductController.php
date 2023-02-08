<?php 

namespace xel_tech\xel_framework\Controller;

class ProductController {
    public function categories(string $productId, string $categoryId):void {
        echo "Product $productId, CATEGORY $categoryId";
    }
}