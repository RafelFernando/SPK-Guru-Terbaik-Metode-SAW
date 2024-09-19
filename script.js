
// Toggle class active untuk shopping cart
const shoppingCart = document.querySelector('.menu');
// ketika shopping-cart menu di klik
document.querySelector('#hamburger-menu').onclick = (e) => {
  shoppingCart.classList.toggle('active');
};
