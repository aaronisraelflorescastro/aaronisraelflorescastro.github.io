document.addEventListener("DOMContentLoaded", () => {
    document.querySelector(".btn.btn-primary").addEventListener("click", event => {
        var itemList = document.getElementById("my-list");
        var template = document.getElementById("list-template");
        var total = itemList.childElementCount + 1;
        var clone = template.content.cloneNode(true);
        clone.querySelector("[data-id='number']").textContent = `${total}`;
        clone.querySelector("[data-id='ID']").textContent = "ID: ";
        clone.querySelector("[data-id='Name']").textContent = "Name: Rick Sanchez";
        clone.querySelector("[data-id='status']").textContent = "Status: Vivo";
        clone.querySelector("[data-id='species']").textContent = "Species: Humano";
        itemList.appendChild(clone);
    });

    document.querySelector(".btn.btn-light").addEventListener("click", event => {
        var itemList = document.getElementById("my-list");
        itemList.replaceChildren();
    });
});
