//burger nav bar
(function () {
    var burger = document.querySelector(".burger");
    var menu = document.querySelector("#" + burger.dataset.target);
    burger.addEventListener("click", function () {
        burger.classList.toggle("is-active");
        menu.classList.toggle("is-active");
    });
})();

// Smooth Anchor Scrolling
$(document).on("click", 'a[href^="#"]', function (event) {
    event.preventDefault();
    $("html, body").animate(
        {
            scrollTop: $($.attr(this, "href")).offset().top,
        },
        500
    );
});

// When the user scrolls down 20px from the top of the document, show the scroll up button
window.onscroll = function () {
    scrollFunction();
};

function scrollFunction() {
    if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
    ) {
        document.getElementById("toTop").style.display = "block";
    } else {
        document.getElementById("toTop").style.display = "none";
    }
}

// $(document).ready(function () {
//     $("#post").click(function () {
//         $("#loading").addClass("is-active"); // modal is open
//     });

//     $("#close").click(function () {
//         $("#loading").removeClass("is-active"); // modal is close
//     });
// });
