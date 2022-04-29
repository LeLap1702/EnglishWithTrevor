function openNav() {
    document.getElementById("myNav").style.display = "block";
}

function closeNav() {
    document.getElementById("myNav").style.display = "none";
}
// Add active class to the current button (highlight it)
// var header = document.getElementsByClassName('.nav__list');
// var btns = header.getElementsByClassName("nav__link");
// for (var i = 0; i < btns.length; i++) {
//     btns[i].addEventListener("click", function() {
//         var current = document.getElementsByClassName("active");
//         current[0].className = current[0].className.replace(" active", "");
//         this.className += " active";
//     });
// }
document.getElementById("read_more").addEventListener('click', changeClass);

function changeClass() {
    var content = document.getElementById("extra_content");
    var btn = document.getElementById("read_more");
    content.classList.toggle('show');
    if (content.classList.contains("show")) {
        btn.innerHTML = "Show Less";
    } else {
        btn.innerHTML = "Show More...";
    }
}
// scrolling
const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

let activeLink = null;

window.addEventListener("scroll", () => {
    $$(".section").forEach(section => {
        const {
            y
        } = section.getBoundingClientRect();

        if (y <= 0) {

            if (activeLink != null) {
                activeLink.classList.remove("active");
            }

            activeLink = $(`.nav-link[href~="#${section.id}"]`);
            activeLink.classList.add("active");
        }
    });
});