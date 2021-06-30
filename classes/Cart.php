<?php
  class Cart{
    private $conn;
    private $userID;
    private $cartID;
    private $cartArr = [];

    public function __construct($conn){
      $this->conn = $conn;
      if (isset($_SESSION['user_id']))  $this->userID = $_SESSION['user_id'];
      else $this->userID = 0;
      $this->cartID = $this->userID;
    }

    private function addItemToCart($itemID, $price){
      if (checkCart('count') >= 10) $itemOrder = "Item";
      else $itemOrder = "Item0";

      $cartArr[$itemOrder] = ["ID"=>$itemID, "price"=>$value, "quantity"=>1];
      $stmt = $conn->prepare("INSERT into cartdetails values (?, ?, ?)");
      $stmt->bind_param("iii",$this->cartID, $itemID, 1);
      $stmt->execute();
      $result = $stmt->get_result();
      if ($result->affected_rows == 1) return true;
      else return false;
    }

    private function getCartList(){
      $stmt = $this->conn
        ("SELECT pri.img1, p.name, p.sold, p.productID, cd.quantity, p.price
        from cartdetails cd, carts c, products p, productimage pri
        where cd.cartID = ? and cd.cartID = c.cartID and c.userID = ? and cd.productID = p.productID and p.productID = pri.productID");
      $stmt->bind_param("ii", $this->cartID, $this->userID);
      $stmt->execute();
      $result = $stmt->get_result();
      return $result->fetch_all(MYSQLI_ASSOC);
    }

    private function printCartList(){
      $output = ``;
      $cartList = getCartList();
      foreach ($cartList as $item) {
        $output .= `
        <li class="product-wrapper container card shadow p-2 m-3 d-flex align-items-center justify-content-center">
          <div class="product d-flex h-100">

            <div class="product-img-wrapper">
              <img class="product-img" src="{$item['img1']}" alt="product-img">
            </div>

            <div class="product-info ml-2 d-flex align-items-center">
              <div class="product-info-wrapper">

                <div class="product-name-wrapper">
                  <p class="product-name">{$item['name']}</p>
                </div>

                <div class="product-rating-wrapper">

                  <div class="product-rating">
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star text-warning"></span>
                    <span class="fa fa-star"></span>
                    <span>({$item['sold']})</span>
                  </div>

                </div>
              </div>
            </div>

            <div class="quantity-price-wrapper d-flex align-items-center">
              <div class="quantity-price w-100">
                <div class="quantity-control rounded">
                  <button class="quantity-btn quantity-btn-minus" id="{$item['productID']}" data-toggle="tooltip" data-placement="right" title="Decrease Quantity">
                    <i class="bi bi-dash"></i>
                  </button>
                  <input type="number" class="quantity-input" id="{$item['productID']}" value="{$item['quantity']}" step="1" min="1"  name="quantity">
                  <button class="quantity-btn quantity-btn-plus" id="{$item['productID']}" data-toggle="tooltip" data-placement="right" title="Increase Quantity">
                    <i class="bi bi-plus"></i>
                  </button>
                </div>

                <div class="product-price-wrapper d-flex align-items-center">
                  <p href="#" class="product-price m-0">{$item['price']}₫</p>
                </div>
              </div>
            </div>

            <button type="button" class="btn btn-light remove-btn" id="{$item['productID']}" data-toggle="tooltip" data-placement="right" title="Remove Item">
              <i class="bi bi-x fa-lg"></i>
            </button>

          </div>
        </li>
        `;
      }
      return $output;
    }

    private function checkCart($case){
      $total = 0;
      foreach ($cartArr as $item) {
        if ($case == 'price') $total .= $item['price'];
        elseif ($case == 'count') $total .= $item['quantity'];
      }
      return $total;
    }

    public function getCartArr(){
      return $this->cartArr;
    }
  }
?>
