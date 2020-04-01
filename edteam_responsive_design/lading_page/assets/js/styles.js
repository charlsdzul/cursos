const showMenu = (toggleId, navID) => {
  const toggle = document.getElementById(toggleId);
  const nav = document.getElementById(navID);

  if (toggle && nav) {
    toggle.addEventListener("click", () => {
      nav.classList.toggle("show");
    });
  }
};

showMenu("main-menu-toogle", "main-nav");
