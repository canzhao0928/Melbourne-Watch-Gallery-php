function enlargeImg(e) {
  document.querySelector(".product-main-img").src = e.src;
}

function addToCartHome(e) {
  const container = e.closest(".product-container");
  const name = container.querySelector(".heading-secondary").textContent;

  const img = container.querySelector(".product-img").getAttribute("src");

  const price = container.querySelector(".price-text").textContent.slice(1);
  addItem(name, img, price);
}

function addToCartProdect(e) {
  const container = e.closest(".product-main-container");
  const name = container.querySelector("#itemName").textContent;

  const img = container.querySelector(".product-main-img").getAttribute("src");

  const price = container.querySelector("#itemPrice").textContent.slice(1);
  addItem(name, img, price);
}

function addItem(name, img, price) {
  const item = {
    name: name,
    image: img,
    price: price,
  };

  const cart = JSON.parse(localStorage.getItem("cart") || "[]");

  cart.push(item);
  localStorage.setItem("cart", JSON.stringify(cart));
  displayShoppingCart();
}

function displayShoppingCart() {
  const cart = JSON.parse(localStorage.getItem("cart") || "[]");
  if (cart === []) return;

  let innerContent = '<h2 class="shoppingCart-header p-2">Shopping Cart</h2>';
  let total = 0;

  cart.forEach((item, index) => {
    total += +item.price;
    innerContent += `<div class="shoppingCart-products-container mb-5">
    <img class="shoppingCart-product-img"
      src=${item.image}
      alt="Samsung Galaxy Watch4 Classic 46mm">
    <h3 class="shoppingCart-product-text">${item.name}</h3>
    <p class="shoppingCart-price-text">$${item.price}</p>
    <button onclick='removeItem(${index})' class="shoppingCart-product-btn btn btn-secondary btn-text">Remove</button>
  </div>`;
  });
  document.getElementById("cart").innerHTML = innerContent;
  document.getElementById("totalPrice").textContent = `$${total}`;
  document.querySelector(".badge").textContent = cart.length;
}

function removeItem(index) {
  const cart = JSON.parse(localStorage.getItem("cart") || "[]");
  if (cart === []) return;
  cart.splice(index, 1);
  localStorage.setItem("cart", JSON.stringify(cart));

  displayShoppingCart();
}
