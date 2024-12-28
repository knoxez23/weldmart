// Manage Cart Logic
let cart = JSON.parse(localStorage.getItem('cart')) || {};
const cartCounters = document.querySelectorAll('#cart-counter');
const cartItemsContainer = document.getElementById('cart-items');
const checkoutLink = document.getElementById('checkout-link');

// Update Cart Counter
function updateCartCounter() {
    const totalItems = Object.values(cart).reduce((sum, qty) => sum + qty, 0);
    cartCounters.forEach(counter => {
        counter.textContent = totalItems;
    });
}

// Render Cart Items
function renderCartItems() {
    if (cartItemsContainer) {
        if (Object.keys(cart).length === 0) {
            cartItemsContainer.innerHTML = '<p>Your cart is empty.</p>';
        } else {
            const productMap = {
                1: { name: 'Galvanized Perforated Metal Sheets', price: 4500, image: 'assets/images/GPMS1.jpg' },
                2: { name: 'MIG Wire', price: 4500, image: 'assets/images/migwire2.jpg' },
                3: { name: 'Welding Rods', price: 4500, image: 'assets/images/electrodes2.jpg' },
                4: { name: 'MIG Wire', price: 4500, image: 'assets/images/migwire2.jpg' },
                5: { name: 'Welding Rods', price: 4500, image: 'assets/images/electrodes2.jpg' },
                6: { name: 'MIG Wire', price: 4500, image: 'assets/images/migwire2.jpg' },
            };

            let cartHTML = '';
            let cartTotal = 0;
            let orderDetails = [];

            Object.keys(cart).forEach((productID) => {
                const product = productMap[productID];
                const quantity = cart[productID];
                if (product) {
                    cartHTML += `
                        <div class="cart_item">
                            <img src="${product.image}" alt="${product.name}">
                            <p><strong>${product.name}</strong></p>
                            <p>Price: Ksh ${product.price} x ${quantity}</p>
                            <p>Total: Ksh ${product.price * quantity}</p>
                        </div>
                    `;
                    cartTotal += product.price * quantity;
                    orderDetails.push(`${product.name} (x${quantity}) - Ksh ${product.price * quantity}`);
                }
            });

            cartHTML += `<p class="cart_total"><strong>Total: Ksh ${cartTotal}</strong></p>`;
            cartItemsContainer.innerHTML = cartHTML;
            
            checkoutLink.href = `https://wa.me/+254711288688?text=Order%20Details:%0A${orderDetails.join('%0A')}%0ATotal:%20Ksh%20${cartTotal}`;
        }
    }
}

// Add to Cart
document.addEventListener('click', function (e) {
    if (e.target.id === 'add-to-cart') {
        const productID = e.target.getAttribute('data-id');
        cart[productID] = (cart[productID] || 0) + 1;
        localStorage.setItem('cart', JSON.stringify(cart));
        updateCartCounter();
        showToast('Product added to cart!', 'success');
    }
});

// Initialize Cart
updateCartCounter();
renderCartItems();

// Clear Cart Logic
document.addEventListener('click', function (e) {
    if (e.target.id === 'clear-cart') {
        // Clear cart from localStorage
        localStorage.removeItem('cart');
        
        // Reset the cart variable
        cart = {};

        // Update cart counter and render an empty cart message
        updateCartCounter();
        renderCartItems();
        
        showToast('Your cart has been cleared!', 'success');
    }
});

