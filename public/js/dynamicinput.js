const div = document.getElementById("req-form");
const input = document.getElementById("dyn-input");

var tags = [];

input.addEventListener("keypress", (event) => {
    if (event.key == "Enter") {
        appendTags();
        input.value = "";
    }
});
