document.addEventListener('DOMContentLoaded', function () {
  const menuToggle = document.getElementById('menu-toggle');
  const menuItems = document.getElementById('menu-items');
  const menuIcon = document.getElementById('menu_icon');
  const menuClose = document.getElementById('close_icon');
  const pageContent = document.getElementById('page-content');

  menuToggle.addEventListener('click', function (event) {
    event.stopPropagation();
    menuItems.classList.toggle('hidden');
    menuItems.classList.toggle('active');
    menuIcon.classList.toggle('hidden');
    menuClose.classList.toggle('hidden');
    console.log("Helllo")
  });

  document.addEventListener('click', function (event) {
    console.log("BYE")
    if (!menuItems.contains(event.target) && !menuToggle.contains(event.target) && !menuItems.classList.contains('hidden')) {
      menuItems.classList.add('hidden');
      menuItems.classList.remove('active');
      menuIcon.classList.remove('hidden');
      menuClose.classList.add('hidden');
      pageContent.classList.remove('hidden');
      document.querySelector('body').classList.remove('menu-open');
    }
  })
})