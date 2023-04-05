let store = {
    state: {
        cart: [],
        cartCount: 0,
    },

    mutations: {
        addToCart(_state, item) {
            console.log(item.title);
        }
    }
};
