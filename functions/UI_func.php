<?php
    //helper
    function getStarRating($rating){
      $ratingStar = "";
      for ($i = 0; $i < $rating; $i++) {
        $ratingStar .= '<span class="fa fa-star text-warning"></span>';
      }
      for ($i = 0; $i < 5-$rating; $i++) {
        $ratingStar .= '<span class="fa fa-star"></span>';
      }
      return $ratingStar;
    }

    function renderProductCategory($categories) {
        foreach ($categories as $product) {
            $ratingStar = getStarRating(intval($product['rating']));
            $format_price = number_format($product['price'],0);
            echo "<a class='col-lg-3 col-6 card-product-wrapper' href='product.php?id={$product['productID']}'>
                    <div class='card product'>
                      <div class='img-card'>
                        <img class='card-img-top' src='{$product['img1']}' alt='Card image cap'>
                      </div>
                      <div class='card-body h-75'>
                        <h5 class='card-title rounded'>{$product['name']}</h5>
                        <div class='rating'>
                          {$ratingStar}
                          <span>({$product['sold']})</span>
                        </div>
                        <p href='#' class='mb-0 price'>{$format_price} đ</p>
                        <div class = 'add-cart' id='{$product['productID']}'>
                          <i class='bi bi-cart2'></i>
                        </div>
                      </div>
                    </div>
                  </a>";
          }
    }

    function renderTopRating($list){
      foreach ($list as $product) {
        $format_price = number_format($product['price'],0);
        $ratingStar = getStarRating(intval($product['rating']));
        echo "<a class='product card-product-wrapper-ts' href='product.php?id={$product['productID']}'>
                <div class='card product rounded w-100 h-100'>
                  <img class='card-img-top' src='{$product['img1']}' alt='Card image cap'>
                  <div class='card-body'>
                    <h5 class='card-title rounded'>{$product['name']}</h5>
                    <div class='bottom-price-star'>
                      <div class='rating'>
                        {$ratingStar}
                        <span>({$product['sold']})</span>
                      </div>
                    </div>
                    <p href='#' class='text-danger mb-0 price'>{$format_price}đ</p>
                  </div>
                  <div class = 'add-cart' id='{$product['productID']}'>
                    <i class='bi bi-cart2'></i>
                  </div>
                </div>
              </a>";
      }

    }

    function renderFavoriteList($list) {
      foreach ($list as $product) {
          $ratingStar = getStarRating(intval($product['rating']));
          $format_price = number_format($product['price'],0);
          echo "<a class='col-lg-6 offset-lg-3 card-product-wrapper' href='product.php?id={$product['productID']}'>
                  <div class='row'>
                    <div class='col-md-2 img-card'>
                      <img class='card-img-top' src='{$product['img1']}' alt='Card image cap'>
                    </div>
                    <div class='col-md-8 card-body h-75'>
                      <h5 class='card-title rounded'>{$product['name']}</h5>
                      <div class='rating'>
                        {$ratingStar}
                        <span>({$product['sold']})</span>
                      </div>
                      <p href='#' class='mb-0 price'>{$format_price} đ</p>
                      <div class = 'add-cart' id='{$product['productID']}'>
                        <i class='bi bi-cart2'></i>
                      </div>
                      <div class='add-favorite' id='favorite' data-value='{$product['productID']}'>
                        <i class='bi bi-heart-fill text-danger' id='fav-icon'></i>
                      </div>
                    </div>
                  </div>
                </a>";
        }
  }

?>
