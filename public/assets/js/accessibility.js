document.addEventListener("DOMContentLoaded", function () {
    const increaseFontButton = document.getElementById("increase-font");
    const decreaseFontButton = document.getElementById("decrease-font");
    const body = document.body;

    let currentFontSize = 16; // Tamanho padrão da fonte

    // Verifica se há um tamanho de fonte armazenado no localStorage
    if (localStorage.getItem("fontSize")) {
        currentFontSize = parseInt(localStorage.getItem("fontSize"));
        body.style.fontSize = currentFontSize + "px";
    }

    increaseFontButton.addEventListener("click", function () {
        currentFontSize += 2; // Aumenta 2px
        body.style.fontSize = currentFontSize + "px";
        localStorage.setItem("fontSize", currentFontSize); // Armazena o novo tamanho no localStorage
    });

    decreaseFontButton.addEventListener("click", function () {
        if (currentFontSize > 10) { // Impede que a fonte fique muito pequena
            currentFontSize -= 2; // Diminui 2px
            body.style.fontSize = currentFontSize + "px";
            localStorage.setItem("fontSize", currentFontSize); // Armazena o novo tamanho no localStorage
        }
    });
});
