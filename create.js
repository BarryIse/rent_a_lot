const category = [...document.querySelectorAll(".category")];
category.forEach((el) => {
    el.addEventListener('click', (e) => {
        document.querySelector(".categories").value = el.innerHTML;
        document.querySelector(".cat").innerHTML = '';
    })
})