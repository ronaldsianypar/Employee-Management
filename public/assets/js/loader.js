function loading(value) {
    if (value == true) {
        $("#loading-container").css("height", "100%");
        $("#loading-container")
            .find("p")
            .css(
                "animation",
                "typing 1.5s steps(30, end),blink-caret .5s step-end infinite"
            );
        $("html, body").css("overflow", "hidden");
    } else {
        $("#loading-container").css("height", "0");
        $("#loading-container").find("p").css("animation", "");
        $("html, body").css("overflow", "auto");
    }
}