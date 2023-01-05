window.addEventListener("scroll", function() {
    let navScroll = document.getElementById("navbar");
    navScroll.classList.toggle("sticky", this.window.scrollY);
});
// 


