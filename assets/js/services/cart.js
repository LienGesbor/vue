const cart = {
    /**
     * Gets the list of all shopping cart items in an array of objects containing:
     * - productId
     * - colorId
     * - qty
     *
     * @return {object}
     */
    getItems() {
        // TODO: implement
        return {};
    },

    /**
     * Adds a product into the cart, providing a product id, an optional color id and the quantity
     *
     * @param {number} productId
     * @param {number|null} colorId
     * @param {number} qty
     */
    addItem(productId, colorId, qty) {
        // TODO: implement
    },

    /**
     * Removes an item from the shopping cart identified by productId and an optional colorId
     *
     * @param {number} productId
     * @param {number|null} colorId
     */
    removeItem(productId, colorId) {
        // TODO: implement
    },

    /**
     * Clears the shopping cart
     */
    clear() {
        // TODO: implement
    },

    /**
     * Initializes the local storage for our shopping cart
     */
    initializeStorage() {
        if (localStorage.getItem('cart') === null) {
            localStorage.setItem('cart', '[]');
        }
    },

    /**
     * Gets the local storage as an object
     *
     * @returns {array}
     */
    getStorage() {
        cart.initializeStorage();
        return JSON.parse(localStorage.getItem('cart'));
    },

    /**
     * Saves the local storage in its string format
     *
     * @param {array} storage
     */
    saveStorage(storage) {
        localStorage.setItem('cart', JSON.stringify(storage));
    },
};

export default cart;
