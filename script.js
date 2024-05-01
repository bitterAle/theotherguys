const mobileMenuButton = document.getElementsById('mobileMenuButton');
const mobileMenu = document.getElementsById('mobileMenu');

mobileMenuButton.addEventListener('click', () => {
  mobileMenu.classList.toggle('hidden');
});