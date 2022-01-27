<template>
  <form @submit.prevent="PlaceOrder()/*;reloadPage()*/" class="row g-3 mb-3">
    <h5>Billing details</h5>
    <div class="col-md-6">
      <label for="firstName" class="form-label">First Name</label>
      <input v-model="firstName" type="text" class="form-control" id="firstName" placeholder="First Name">
      <span v-if="!isFirstNameValid">First name is not valid</span>
    </div>
    <div class="col-md-6">
      <label for="lastName" class="form-label">Last Name</label>
      <input v-model="lastName" type="text" class="form-control" id="lastName" placeholder="Last Name">
      <span v-if="!isLastNameValid">Last name is not valid</span>
    </div>
    <div class="col-12">
      <label for="city" class="form-label">City</label>
      <input v-model="city" type="text" class="form-control" id="city" placeholder="City">
      <span v-if="!isCityValid">City is not valid</span>
    </div>
    <div class="col-12">
      <label for="address" class="form-label">Address</label>
      <input v-model="address" type="text" class="form-control" id="address" placeholder="Address">
      <span v-if="!isAddressValid">Address is not valid</span>
    </div>
    <div class="col-md-6">
      <label for="email" class="form-label">Email Address</label>
      <input v-model="email" type="email" class="form-control" id="email" placeholder="Email Address">
      <span v-if="!isEmailValid">Email is not valid</span>
    </div>
    <div class="col-md-6">
      <label for="phone" class="form-label">Phone</label>
      <input v-model="phone" type="text" class="form-control" id="phone" placeholder="+38(099) 999-99-99">
      <span v-if="!isPhoneValid">The Phone field must contain only numbers and dashes.</span>
    </div>
    <div class="col-12 d-flex justify-content-end">
      <button :disabled="!isFirstNameValid" type="submit" class="btn btn-success">
        Place Order
      </button>
    </div>
  </form>
</template>

<script>
export default {
  name: "CartBillingForm",
  data: () => ({
    firstName: "",
    lastName: "",
    city: "",
    address: "",
    email: "",
    phone: "",
    isFirstNameValid: true,
    isLastNameValid: true,
    isCityValid: true,
    isAddressValid: true,
    isEmailValid: true,
    isPhoneValid: true,
  }),


  methods: {
    PlaceOrder() {
      console.log({
        firstName: this.firstName,
        lastName: this.lastName,
        city: this.city,
        address: this.address,
        email: this.email,
        phone: this.phone,
        title: this.$root.cartProducts,
      });
    },
    reloadPage() {
      window.location.reload()
    },
  },
  watch: {
    firstName(FValue) {
      this.isFirstNameValid = true;
      if (FValue.length > 10) this.isFirstNameValid = false;
    },
    lastName(LValue) {
      let regex = /^[А-ЯЁ][а-яё]+$/;
      if(!regex.test(LValue)){
        this.isLastNameValid = false;
      }else{
        this.isLastNameValid = true;
      }
    },
    city(CValue) {
      let regex = /^[А-ЯЁ][а-яё]+$/;
      if(!regex.test(CValue)){
        this.isCityValid = false;
      }else{
        this.isCityValid = true;
      }
    },
    address(AValue) {
      this.isAddressValid = true;
      if (AValue.length > 10) this.isAddressValid = false;
    },
    email(EValue) {
      let regex = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      if(!regex.test(EValue)){
        this.isEmailValid = false;
      }else{
        this.isEmailValid = true;
      }
    },
    phone(PValue) {
      this.isPhoneValid = true;
      if (PValue.length === 13) this.isPhoneValid = false;
    },
  }
}
</script>