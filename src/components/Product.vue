<template>
  <div class="col-md-6 col-lg-4 py-3">
    <div class="card py-3">
      <img class="card-img-top" v-bind:src="image" alt="macbook-pro">
      <div class="card-body">
        <h5 class="card-title">
          {{ title }}
        </h5>
        <p class="card-subtitle mt-2 mb-3">
          {{ category }}
        </p>
        <h5 class="fs-3 text-success">
          ${{ price }}
        </h5>
        <p class="mt-3">
          Stock:
          <strong v-if="isAvailable" class="text-success">Available</strong>
          <strong v-else class="text-danger">Out of stock</strong>
        </p>
        <button
            @click="addProductToCart()"
            :disabled="!isAvailable"
            :class="`btn btn-${isAvailable ? 'success' : 'secondary'} w-100 shadow-none`"
        >
          Add to cart
        </button>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "Product",
  props: {
    id: Number,
    title: {
      type: String,
      isRequired: true,
      default: "Product",
    },
    category: String,
    price: Number,
    isAvailable: Boolean,
    image: String,
    quantity: {
      type: Number,
      default: 1,
    }
  },
  methods: {
    addProductToCart() {
      this.$store.commit('addProductToCart', {
        id: this.id,
        title: this.title,
        category: this.category,
        price: this.price,
        isAvailable: this.isAvailable,
        image: this.image,
        quantity: this.quantity,
      })
    }
  }
};

</script>