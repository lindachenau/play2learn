function toggleMenu () {
    document.getElementById('menu-main-navigation').classList.toggle("closed");
}

let x = document.getElementById('hamburgerBtn');
x.onclick = toggleMenu;