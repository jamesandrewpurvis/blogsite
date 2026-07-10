console.log("JS loaded!")
document.addEventListener('DOMContentLoaded', () => {
    const menuToggle = document.getElementById('menuToggle');
    const navMenu = document.getElementById('navMenu');

    if (!menuToggle || !navMenu) {
        console.error('Menu button or navigation menu not found.');
        return;
    }

    menuToggle.addEventListener('click', () => {
        navMenu.classList.toggle('open');
    });
});
