document.addEventListener("DOMContentLoaded", async () => {
    let openShopping = document.querySelector('.open-cart');
    let closeShopping = document.querySelector('.closeShopping');
    let list = document.querySelector('.list');
    let listCard = document.querySelector('.listCard');
    let body = document.querySelector('body');
    let total = document.querySelector('.total');
    let quantity = document.querySelector('.quantity');

    openShopping.addEventListener('click', ()=>{
        body.classList.add('active');
    })
    closeShopping.addEventListener('click', ()=>{
        body.classList.remove('active');
    })

    function reloadCard(items){
        listCard.innerHTML = '';
        let count = 0;
        let totalPrice = 0;
        items.forEach((item)=>{
            
            console.log(item.price, item.quantity);
            count = count + (+item.quantity);
            if (item != null) {
                totalPrice = totalPrice + (+item.price * +item.quantity);
                console.log(totalPrice); 
    }
            if(item != null){
                let newDiv = document.createElement('li');
                newDiv.innerHTML = `
                    <div><img src="images/${item.image}"/></div>
                    <div>${item.name}</div>
                    <div>$ ${item.price.toLocaleString()}</div>
                    <div>
                        <button class="update-cart" data-product-id="${item.product_id}" data-quantity="${+item.quantity - 1}">-</button>
                        <div class="count">${item.quantity}</div>
                        <button class="update-cart" data-product-id="${item.product_id}" data-quantity="${+item.quantity + 1}">+</button>   
                    </div>`;
                    listCard.appendChild(newDiv);
            }
        })
        total.innerText = '$ ' +totalPrice.toLocaleString();
        quantity.innerText = count;
    }

    const addToCartButtons = document.querySelectorAll(".add-to-cart");

    addToCartButtons.forEach((button) => {
        button.addEventListener("click", async (e) => {
            const productId = button.dataset.productId
            await addToCart(productId)
            await getItems()
        })
    })

    async function getItems() {
        const cartItems = await getCartItems();

        reloadCard(cartItems)
    }

    document.addEventListener("click", function (e) {
        const updateCartButtons = document.querySelectorAll(".update-cart");

        updateCartButtons.forEach((button) => {
            button.addEventListener("click", async (e) => {
                const productId = button.dataset.productId
                const quantity = button.dataset.quantity
                
                await updateCart(productId, quantity)
                await getItems()
            })
        })
    })

    await getItems();
})

async function getCartItems() {
    const response = await fetch("/get_cart_items.php");

    const body = await response.json();
    const items = await body.items;

    return items;
} 

async function addToCart(product_id) {
    const response = await fetch("/add_to_cart.php",{
        method: "POST",
        headers: {
            'Content-Type': 'application/json;charset=utf-8'
        },
        body: JSON.stringify({
            product_id
        })
    })

    const body = await response.json();

    return !!body
}

async function updateCart(product_id, quantity) {
    const response = await fetch("/update_cart.php",{
        method: "POST",
        headers: {
            'Content-Type': 'application/json;charset=utf-8'
        },
        body: JSON.stringify({
            product_id,
            quantity
        })
    })

    const body = await response.json();

    return !!body
}