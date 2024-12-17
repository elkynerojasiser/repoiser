document.addEventListener('DOMContentLoaded', () => {
  const menuItems = document.querySelectorAll('.menu-item--expanded > a');

  menuItems.forEach(item => {
    item.addEventListener('click', (e) => {
      e.preventDefault(); // Evitar redirección si no es necesario
      const submenu = item.nextElementSibling;
      submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
    });
  });
});
