// Manage Cart Logic
let cart = JSON.parse(localStorage.getItem('cart')) || [];
const cartCounter = document.getElementById('cart-counter');
const cartItemsContainer = document.getElementById('cart-items');
const checkoutLink = document.getElementById('checkout-link');

// Update Cart Counter
function updateCartCounter() {
    cartCounter.textContent = cart.length;
}

// Render Cart Items
function renderCartItems() {
    if (cartItemsContainer) {
        if (cart.length === 0) {
            cartItemsContainer.innerHTML = '<p>Your cart is empty.</p>';
        } else {
            const productMap = {
                1: { name: 'Galvanized Perforated Metal Sheets', price: 4500 },
                2: { name: 'MIG Wire', price: 4500 },
                3: { name: 'Welding Rods', price: 4500 },
                4: { name: 'MIG Wire', price: 4500 },
                5: { name: 'Welding Rods', price: 4500 },
                6: { name: 'MIG Wire', price: 4500 },
            };

            let cartHTML = '';
            let cartTotal = 0;

            cart.forEach((productID) => {
                const product = productMap[productID];
                if (product) {
                    cartHTML += `
                        <div class="cart_item">
                            <p><strong>${product.name}</strong></p>
                            <p>Price: Ksh ${product.price}</p>
                        </div>
                    `;
                    cartTotal += product.price;
                }
            });

            cartHTML += `<p class="cart_total"><strong>Total: Ksh ${cartTotal}</strong></p>`;
            cartItemsContainer.innerHTML = cartHTML;

            // Update Checkout Link
            const orderDetails = cart
                .map((productID) => {
                    const product = productMap[productID];
                    return product ? `${product.name} - Ksh ${product.price}` : '';
                })
                .join('%0A');
            checkoutLink.href = `https://wa.me/+254711288688?text=Order%20Details:%0A${orderDetails}%0ATotal:%20Ksh%20${cartTotal}`;
        }
    }
}

// Add to Cart
document.addEventListener('click', function (e) {
    if (e.target.id === 'add-to-cart') {
        const productID = e.target.getAttribute('data-id');
        cart.push(productID);
        localStorage.setItem('cart', JSON.stringify(cart));
        updateCartCounter();
        alert('Product added to cart!');
    }
});

// Initialize Cart
updateCartCounter();
renderCartItems();
