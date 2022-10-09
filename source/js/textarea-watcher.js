window.onload = function() {
textarea = document.getElementById("poe-writer");
console.log("cs")
textarea.addEventListener('change', (event) => {
poem_content = textarea.text;
console.log(poem_content);
});
}
