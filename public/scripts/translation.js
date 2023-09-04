//<--------------------------------Custom-Select------------------------------->
function initializeCustomSelect() {
    const selectTrigger = document.querySelector(".select-trigger");
    const selectOptions = document.querySelector(".select-options");
    const optionItems = document.querySelectorAll(".select-options li");

    if (selectTrigger && selectOptions && optionItems.length > 0) {
        selectTrigger.addEventListener("click", () => {
            selectOptions.classList.toggle("active");
        });

        optionItems.forEach((item) => {
            item.addEventListener("click", () => {
                const selectedValue = item.getAttribute("data-value");
                selectTrigger.textContent = item.textContent;
                selectOptions.classList.remove("active");
                // Aici poți face ceva cu valoarea selectată.
            });
        });

        document.addEventListener("click", (event) => {
            if (
                !selectTrigger.contains(event.target) &&
                !selectOptions.contains(event.target)
            ) {
                selectOptions.classList.remove("active");
            }
        });
    } else {
        console.log("Nu exista custom select pe aceasta pagina");
    }
}
//<------------------------------End-Custom-Select----------------------------->
//<-----------------------------Language-Switcher------------------------------>
document.addEventListener("DOMContentLoaded", function () {
    const defaultLanguage = "en"; // Limba implicită
    let texts = []; // Inițializăm array-ul pentru datele din JSON

    // Încărcăm datele din fișierul JSON la început
    fetch("/scripts/translations.json")
        .then(response => response.json())
        .then(data => {
            texts = data;
            const defaultLangData = texts.find(text => text.lang === defaultLanguage);
            updateContent(defaultLangData);
        })
        .catch(error => console.error("Error loading translations:", error));

    const langButtons = document.querySelectorAll("[data-lang]");
    const elementsWithDataText = document.querySelectorAll("[data-text]");

    langButtons.forEach(button => {
        button.addEventListener("click", function () {
            const lang = button.getAttribute("data-lang");
            const langData = texts.find(text => text.lang === lang);
            updateContent(langData);
        });
    });

    function updateContent(langData) {
        elementsWithDataText.forEach(element => {
            const dataAttribute = element.getAttribute("data-text");
            element.textContent = langData[dataAttribute];
        });
    }
});

//<---------------------------END-Language-Switcher---------------------------->
//<------------------------------Start-Functions------------------------------->
// Custom Select
initializeCustomSelect();

//<----------------------------End-Start-Functions----------------------------->
