document.addEventListener("DOMContentLoaded", function () {

let searchForm = document.querySelector('.search-form');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');
} 

let shoppingCart = document.querySelector('.shopping-cart');

document.querySelector('#cart-btn').onclick = () =>{
    shoppingCart.classList.toggle('active');
} 

const filterButtons = document.querySelectorAll('.filter-button');
const sortButtons = document.querySelectorAll('.sort-button');
const fruitItems = document.querySelectorAll('.box-container .box');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                const filterCategory = button.getAttribute('data-filter');

                fruitItems.forEach(item => {
                    if (filterCategory === 'all' || filterCategory === item.getAttribute('data-category')) {
                        item.style.display = 'block';
                    } else {
                        item.style.display = 'none';
                    }
                });
            });
        });

        sortButtons.forEach(button => {
            button.addEventListener('click', () => {
                const sortType = button.getAttribute('data-sort');
                const sortedItems = Array.from(fruitItems);

                sortedItems.sort((a, b) => {
                    const priceA = parseInt(a.getAttribute('data-price'));
                    const priceB = parseInt(b.getAttribute('data-price'));

                    if (sortType === 'lowToHigh') {
                        return priceA - priceB;
                    } else if (sortType === 'highToLow') {
                        return priceB - priceA;
                    }
                });

                fruitItems.forEach(item => {
                    item.remove();
                });

                sortedItems.forEach(item => {
                    document.querySelector('.box-container').appendChild(item);
                });
            });
        });
    
const addToCartButtons = document.querySelectorAll('.btn');
const removeFromCartButtons = document.querySelectorAll('.remove-from-cart');
const cartItems = document.getElementById('cart-items');
const totalAmount = document.getElementById('total-amount');

const cart = {};
addToCartButtons.forEach(button => {
    button.addEventListener('click', () => {
        const productName = button.parentElement.getAttribute('data-category');
        const productPrice = parseFloat(button.parentElement.getAttribute('data-price'));

        if (!cart[productName]) {
            cart[productName] = {
                name: productName,
                price: productPrice,
                quantity: 1
            };
        } else {
            cart[productName].quantity++;
        }

        updateCartDisplay();
    });
});

   
    removeFromCartButtons.forEach(button => {
        button.addEventListener('click', () => {
            const productName = button.parentElement.getAttribute('data-category');

            if (cart[productName]) {
                if (cart[productName].quantity === 1) {
                    delete cart[productName];
                } else {
                    cart[productName].quantity--;
                }

                updateCartDisplay();
            }
        });
    });

function updateCartDisplay() {
    cartItems.innerHTML = '';
    let total = 0;

        for (const productName in cart) {
            const product = cart[productName];
            const cartItem = document.createElement('li');
            cartItem.innerHTML = `${product.name} x${product.quantity} - ₹${(product.price * product.quantity).toFixed(2)}/-`;
            total += product.price * product.quantity;

            const removeButton = document.createElement('button');
            removeButton.classList.add('remove-from-cart');
            removeButton.textContent = 'Remove';
            removeButton.addEventListener('click', () => {
                if (cart[productName]) {
                    if (cart[productName].quantity === 1) {
                        delete cart[productName];
                    } else {
                        cart[productName].quantity--;
                    }

                    updateCartDisplay();
                }
            });

            cartItem.appendChild(removeButton);
            cartItems.appendChild(cartItem);
        }

        totalAmount.textContent = total.toFixed(2);
    }
});
    function paymentFunction()
        {
            window.location.href="payment";
        }
      