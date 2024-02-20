<script>

export default {
  name: "Index",

  mounted() {
    $(document).trigger('changed')
    this.getCartProducts()
  },

  data() {
    return {
      products: [],
      name: '',
      email: '',
      address: '',

    }
  },

  computed: {

    totalPrice() {
      let total = 0;
      this.products.forEach((product) => {
        total += product.new_price * product.qty;
      });
      return total;
    },
  },

  methods: {

    StoreOrder() {
      this.axios.post('http://127.0.0.1:8000/api/orders', {
        'products' : this.products,
        'name' : this.name,
        'email' : this.email,
        'address' : this.address,
        'total_price' : this.totalPrice
      })
          .then(res => {
            console.log(res);
          })
          .finally(v => {
            $(document).trigger('changed')
          })
    },

    getCartProducts() {
      this.products = JSON.parse(localStorage.getItem('cart'))
      console.log(this.products);
    },

    minusQty(product) {
      if (product.qty === 0) return
      product.qty--
      this.updateCart()
    },

    plusQty(product) {
      product.qty++
      this.updateCart()
    },

    removeProduct(id) {
      this.products = this.products.filter( product => {
        return product.id !== id
      })
      this.updateCart()
    },

    updateCart() {
      localStorage.setItem('cart', JSON.stringify(this.products))
    },


  }
}
</script>

<template>
  <div>
    <main class="overflow-hidden ">
      <!--Start Breadcrumb Style2-->
      <section class="breadcrumb-area" style="background-image: url(/assets/images/inner-pages/breadcum-bg.png);">
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="breadcrumb-content text-center wow fadeInUp animated">
                <h2>Cart</h2>
                <div class="breadcrumb-menu">
                  <ul>
                    <li><a href="index.html"><i class="flaticon-home pe-2"></i>Home</a></li>
                    <li> <i class="flaticon-next"></i> </li>
                    <li class="active">Cart</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--End Breadcrumb Style2-->
      <!--Start cart area-->
      <section class="cart-area pt-120 pb-120">
        <div class="container">
          <div class="row wow fadeInUp animated">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
              <div class="cart-table-box">
                <div class="table-outer">
                  <table class="cart-table">
                    <thead class="cart-header">
                    <tr>
                      <th class="">Product Name</th>
                      <th class="price">Price</th>
                      <th>Quantity</th>
                      <th>Subtotal</th>
                      <th class="hide-me"></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr v-for="product in products">
                      <td>
                        <div class="thumb-box"> <router-link :to="{name: 'products.show', params:{ id:product.id }}" class="thumb">
                          <img :src="product.image_url" :alt="product.title">
                        </router-link> <router-link :to="{name: 'products.show', params:{ id:product.id }}" class="title">
                          <h5>{{ product.title }}</h5>
                        </router-link> </div>
                      </td>
                      <td>${{ product.new_price }}</td>
                      <td class="qty">
                        <div class="qtySelector text-center">
                          <span @click.prevent="minusQty(product)" class="decreaseQty"><i class="flaticon-minus"></i> </span>
                          <input type="number" class="qtyValue" :value="product.qty" />
                          <span @click.prevent="plusQty(product)" class="increaseQty"> <i class="flaticon-plus"></i> </span>
                        </div>
                      </td>
                      <td class="sub-total">${{ product.new_price * product.qty }}</td>
                      <td>
                        <div @click.prevent="removeProduct(product.id)" class="remove"> <i class="flaticon-cross"></i> </div>
                      </td>
                    </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xl-12">
              <div class="cart-button-box">
                <div class="apply-coupon wow fadeInUp animated">
                  <div class="apply-coupon-input-box mt-30 "> <input type="text" name="coupon-code"
                                                                     value="" placeholder="Coupon Code"> </div>
                  <div class="apply-coupon-button mt-30"> <button class="btn--primary style2"
                                                                  type="submit">Apply Coupon</button> </div>
                </div>
                <div class="cart-button-box-right wow fadeInUp animated"> <button class="btn--primary mt-30"
                                                                                  type="submit">Continue Shopping</button> <button class="btn--primary mt-30"
                                                                                                                                   type="submit">Update Cart</button> </div>
              </div>
            </div>
          </div>
          <div class="row w-25">
            <input type="text" v-model="name" placeholder="name">
            <input type="text" v-model="email" placeholder="email">
            <input type="text" v-model="address" placeholder="address">
            <input @click.prevent="StoreOrder" type="submit" class="btn btn-primary" value="Formalise">
          </div>
          <div class="row pt-120">
            <div class="col-xl-6 col-lg-7 wow fadeInUp animated">
              <div class="cart-total-box">
                <div class="inner-title">
                  <h3>Cart Totals</h3>
                </div>
              </div>
            </div>
          </div>
          <div class="row mt--30">
            <div class="col-xl-6 col-lg-5 wow fadeInUp animated">
              <div class="cart-check-out mt-30">
                <h3>Check Out</h3>
                <ul class="cart-check-out-list">
                  <li>
                    <div class="left">
                      <p>Total Price: </p>
                    </div>
                    <div class="right">
                      <p>${{ totalPrice }}</p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--End cart area-->
    </main>
  </div>
</template>

<style scoped>

</style>
