const activePage = window.location.pathname;
const navbar = document.querySelectorAll(".sidebar-menu a").forEach(link => {
    if (link.href.includes(`${activePage}`)) {
        console.log(activePage)
        link.classList.add("active");
    }
});