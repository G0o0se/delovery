import {createApp} from "vue";
import "bootstrap/dist/js/bootstrap.bundle.min";
import "../public/css/style.css";
import "./styles.css";
import store from "./store"

import ProductList from "./components/ProductList";
import CartButton from "./components/CartButton";
import CartModal from "./components/CartModal";

const app = createApp({});

app.use(store);

app.component("product-list", ProductList);
app.component("cart-button", CartButton);
app.component("cart-modal", CartModal);
app.mount("#app");