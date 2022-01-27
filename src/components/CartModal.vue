<template>
  <div class="modal fade" id="cartModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
       aria-labelledby="cartModalTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="cartModalTitle">
            Shopping Cart ({{ ProductCount }} Items)
          </h5>
          <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body p-4">
          <cart-products-list></cart-products-list>
          <cart-billing-form></cart-billing-form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import CartProductsList from "./CartProductsList";
import CartBillingForm from "./CartBillingForm";
export default {
  name: "CartModal",
  components: {CartBillingForm, CartProductsList},
  computed: {
    ProductCount() {
      return this.$store.getters.getCartCount;
    },
  }
}
</script>