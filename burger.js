// Burger extension, https://github.com/GiovanniSalmeri/yellow-burger

window.addEventListener("DOMContentLoaded", function() {
    const navigationTree = document.getElementById("navigation-tree");
    const navigationMenu = document.getElementById("navigation-menu");
    const menu = new MmenuLight(navigationTree, "(max-width: 6000px)");
    const sitename = navigationTree.getAttribute('data-sitename');
    const navigator = menu.navigation({title: sitename});
    const drawer = menu.offcanvas();
    navigationMenu.addEventListener("click", function(event) {
        event.preventDefault();
        drawer.open();
      });
    //navigationMenu.addEventListener("keydown", function(event) {
        //if (eevent.which === 13) this.click(); }, false);
  }
);
