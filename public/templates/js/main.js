(function ($) {
    "use strict";

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($("#spinner").length > 0) {
                $("#spinner").removeClass("show");
            }
        }, 1);
    };
    spinner(0);

    // Initiate the wowjs
    new WOW().init();

    document.addEventListener("DOMContentLoaded", function () {
        const readMoreButtons = document.querySelectorAll(".read-more-btn");

        readMoreButtons.forEach((button) => {
            button.addEventListener("click", function (event) {
                event.preventDefault();
                const p = this.previousElementSibling;

                if (p.classList.contains("truncated")) {
                    p.classList.remove("truncated");
                    this.textContent = "Read Less";
                } else {
                    p.classList.add("truncated");
                    this.textContent = "Read More";
                }
            });
        });
    });
})(jQuery);
