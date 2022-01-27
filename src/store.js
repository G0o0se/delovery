import {createStore} from 'vuex';

const store = createStore({
    state: () => ({
        products: [],
        cartProducts: [],
    }),
getters: {
    getCartProducts: (state) => state.cartProducts,
    getProducts: (state) => state.products,
    getCartCount: (state) => {
        let totalProduct = 0;
        for (let i = 0; i < state.cartProducts.length; i++) {
            totalProduct += state.cartProducts[i].quantity;
        }
        return totalProduct;
    },
    getCartPrice: (state) => {
        let totalPrice = 0;
        for (let i = 0; i < state.cartProducts.length; i++) {
            totalPrice += state.cartProducts[i].price * state.cartProducts[i].quantity;
        }
        return totalPrice.toString().replace(/\B(?=(\d{3})+$)/g, ',');
    },

    deleteFromCart: (state, products) => {
        state.cartProducts.splice(products, 1);
    },
    },
    actions: {
        fetchProducts: async(context) => {
            const response = await fetch("http://localhost:3000/items");
            let arrProducts = await response.json();
            context.commit('addProductToState', arrProducts);
        },
    },
    mutations: {
        addProductToCart: (state, product) => {
            let idsProducts = [];

            state.cartProducts.forEach((value, key) => {
                if (value.id === product.id) {
                    value.quantity++;
                }

                idsProducts.push(value.id);
            });

        if (!idsProducts.includes(product.id)) {
            state.cartProducts.push(product);
        }
        },

        addProductToState: (state, products) => {
            state.products = products;
        },

        reduceProd: (state, index) => {
            if (state.cartProducts[index].quantity === 1) {
                console.log(state.cartProducts.splice(index, 1));
            } else if (state.cartProducts[index].quantity < 1) {
            } else {
                console.log(state.cartProducts[index].quantity--);
            }
        },

        addProd: (state, index) => {
            state.cartProducts[index].quantity++;
        },
    },
});

export default store;