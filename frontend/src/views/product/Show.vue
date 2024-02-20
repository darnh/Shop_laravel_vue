<script>

export default {
  name: "Show",

  mounted() {
    $(document).trigger('changed')
    this.getProduct()
  },

  data() {
    return {
      product: null
    }
  },

  methods: {
    getProduct(id) {
      this.axios.get(`http://127.0.0.1:8000/api/products/${this.$route.params.id}`)
          .then(res => {
            this.product = res.data.data
            console.log(res)
          })
          .finally(v => {
            $(document).trigger('changed')
          })
    },
  }
}
</script>

<template>
  <div>
    <main>
      <!--Start Shop Details Breadcrumb-->
      <div class="shop-details-breadcrumb wow fadeInUp animated overflow-hidden ">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="shop-details-inner">
                <ul class="shop-details-menu">
                  <li><a href="index.html">Home</a></li>
                  <li class="active">Shop Details</li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--End Shop Details Breadcrumb-->
      <!--Start Shop Details Top-->
      <section class="shop-details-top two ">
        <div class="container">
          <div class="row mt--30">
            <div class="col-xl-6 col-lg-6 mt-30 wow fadeInUp animated">
              <div class="single-product-box one">
                <div class="big-product single-product-one slider-for">
                  <div>
                    <div class="single-item"> <img src="/src/assets/images/shop/products-img1.jpg" alt="">
                      <div class="ptag"> <span class="one">-20% </span> </div> <a href="#0"
                                                                                  class="love"> <i class="flaticon-like"></i> </a>
                    </div>
                  </div>
                  <div>
                    <div class="single-item"> <img src="/src/assets/images/shop/products-img2.jpg" alt="">
                      <div class="ptag"> <span class="one">-20% </span> </div> <a href="#0"
                                                                                  class="love"> <i class="flaticon-like"></i> </a>
                    </div>
                  </div>
                  <div>
                    <div class="single-item"> <img src="/src/assets/images/shop/products-img3.jpg" alt="">
                      <div class="ptag"> <span class="one">-20% </span> </div> <a href="#0"
                                                                                  class="love"> <i class="flaticon-like"></i> </a>
                    </div>
                  </div>
                  <div>
                    <div class="single-item"> <img src="/src/assets/images/shop/products-img4.jpg" alt="">
                      <div class="ptag"> <span class="one">-20% </span> </div> <a href="#0"
                                                                                  class="love"> <i class="flaticon-like"></i> </a>
                    </div>
                  </div>
                  <div>
                    <div class="single-item"> <img src="/src/assets/images/shop/products-img5.jpg" alt="">
                      <div class="ptag"> <span class="one">-20% </span> </div> <a href="#0"
                                                                                  class="love"> <i class="flaticon-like"></i> </a>
                    </div>
                  </div>
                </div>
                <div class="navholder">
                  <div class="product-slicknav single-product-one-nav slider-nav">
                    <div> <span class="single-item"> <img
                        src="/src/assets/images/shop/shop-details-top-img-1.png" alt=""> </span>
                    </div>
                    <div> <span class="single-item"> <img
                        src="/src/assets/images/shop/shop-details-top-img-2.png" alt=""> </span>
                    </div>
                    <div> <span class="single-item"> <img
                        src="/src/assets/images/shop/shop-details-top-img-3.png" alt=""> </span>
                    </div>
                    <div> <span class="single-item"> <img
                        src="/src/assets/images/shop/shop-details-top-img-1.png" alt=""> </span>
                    </div>
                    <div> <span class="single-item"> <img
                        src="/src/assets/images/shop/shop-details-top-img-2.png" alt=""> </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 mt-30 wow fadeInUp animated">
              <div class="shop-details-top-right ">
                <div class="shop-details-top-right-content-box">
                  <div class="shop-details-top-review-box">
                    <div class="shop-details-top-review">
                      <ul>
                        <li><i class="flaticon-star-1"></i></li>
                        <li><i class="flaticon-star-1"></i></li>
                        <li><i class="flaticon-star-1"></i></li>
                        <li><i class="flaticon-star-1"></i></li>
                        <li><i class="flaticon-star-1"></i></li>
                      </ul>
                      <p>(2 Reviews)</p>
                    </div>
                  </div>
                  <div class="shop-details-top-title">
                    <h3> Gold Diamond Bracelet</h3>
                  </div>
                  <ul class="shop-details-top-info">
                    <li><span>SKU:</span> 25d5214</li>
                    <li><span>Vendor:</span> Flemeno</li>
                  </ul>
                  <div class="shop-details-top-price-box">
                    <h3>$30.00 <del>$50.00</del></h3>
                    <p>(+15% Vat Included)</p>
                  </div>
                  <p class="shop-details-top-product-sale"><span>20</span> Products sold in last 12 hours
                  </p>
                  <div class="shop-details-top-size-box">
                    <h4>Size: (XS)</h4>
                    <div class="shop-details-top-size-list-box">
                      <ul class="shop-details-top-size-list">
                        <li><a href="#0">XS</a></li>
                        <li><a href="#0">S</a></li>
                        <li><a href="#0">M</a></li>
                        <li><a href="#0">XL</a></li>
                      </ul>
                      <p class="shop-details-top-size-guide"><a href="#0">Size Guide</a></p>
                    </div>
                  </div>
                  <div class="shop-details-top-color-sky-box">
                    <h4>Color: (Sky Blue)</h4>
                    <ul class="varients">
                      <li> <a href="#0" class="shop-details-top-color-sky-img"
                              data-src="/src/assets/images/shop/products-img1.jpg"> <img
                          src="/src/assets/images/shop/shop-details-top-color-sky-img-1.jpg"
                          alt=""> </a> </li>
                      <li> <a href="#0" class="shop-details-top-color-sky-img"
                              data-src="/src/assets/images/shop/products-img2.jpg"> <img
                          src="/src/assets/images/shop/shop-details-top-color-sky-img-2.jpg"
                          alt=""> </a> </li>
                      <li> <a href="#0" class="shop-details-top-color-sky-img"
                              data-src="/src/assets/images/shop/products-img3.jpg"> <img
                          src="/src/assets/images/shop/shop-details-top-color-sky-img-3.jpg"
                          alt=""> </a> </li>
                      <li> <a href="#0" class="shop-details-top-color-sky-img"
                              data-src="/src/assets/images/shop/products-img4.jpg"> <img
                          src="/src/assets/images/shop/shop-details-top-color-sky-img-4.jpg"
                          alt=""> </a> </li>
                    </ul>
                  </div>
                  <ul class="shop-details-top-ask-question">
                    <li> <a href="#0">
                      <div class="icon"> <i class="flaticon-left-and-right-arrows"></i> </div>
                      <div class="text">
                        <p>Add to Compare</p>
                      </div>
                    </a> </li>
                    <li> <a href="#0">
                      <div class="icon"> <i class="flaticon-chat-bubble"></i> </div>
                      <div class="text">
                        <p>Ask Question</p>
                      </div>
                    </a> </li>
                  </ul>

                  <div class="product-quantity">
                    <h4>Quantity</h4>
                    <div class="product-quantity-box d-flex align-items-center flex-wrap">
                      <div class="qty mr-2">
                        <div class="qtySelector text-center"> <span class="decreaseQty"><i
                            class="flaticon-minus"></i> </span> <input type="number"
                                                                       class="qtyValue" value="1" /> <span class="increaseQty"> <i
                            class="flaticon-plus"></i> </span> </div>
                      </div>
                      <div class="product-quantity-check"> <i class="flaticon-select"></i>
                        <p>In Stock</p>
                      </div>
                    </div>
                  </div>
                  <div class="shop-details-top-order-now"> <i class="flaticon-point"></i>
                    <p>Order Now, Only 10 Left !</p>
                  </div>
                  <div class="shop-details-top-cart-box-btn"> <button class="btn--primary style2 "
                                                                      type="submit">Add to Cart</button> </div>


                  <div class="checked-box">
                    <form>
                      <div class="form-group"> <input type="checkbox" id="html"> <label for="html">I
                        agree with all company terms & condition</label> </div>
                    </form>
                  </div>
                  <div class="shop-details-top-buy-now-btn"> <a href="#" class="btn--primary">Buy It
                    Now</a> </div>

                  <ul class="shop-details-top-feature">
                    <li>
                      <div class="icon"> <i class="flaticon-portfolio"></i> </div>
                      <div class="text">
                        <p>Money back guarantee</p>
                      </div>
                    </li>
                    <li>
                      <div class="icon"> <i class="flaticon-truck"></i> </div>
                      <div class="text">
                        <p>Free Shipping & Return</p>
                      </div>
                    </li>
                    <li>
                      <div class="icon"> <i class="flaticon-security"></i> </div>
                      <div class="text">
                        <p>Comportable Support</p>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>
  </div>
</template>

<style scoped>

</style>