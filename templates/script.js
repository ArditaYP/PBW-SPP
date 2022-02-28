const body = document.querySelector('body'),
    sidebar = body.querySelector('nav'),
    toggle = body.querySelector(".toggle"),
    searchBtn = body.querySelector(".search-box"),
    modeSwitch = body.querySelector(".toggle-switch"),
    modeText = body.querySelector(".mode-text");

if (toggle != null) {
    toggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    })

    searchBtn.addEventListener("click", () => {
        sidebar.classList.remove("close");
    })
}


const angkatan = document.querySelector('#angkatan');
const pembayaran = document.querySelector('#pembayaran');
angkatan.addEventListener('change', (e) => {
    console.log(e.value)
    pembayaran.innerHTML = e.value;
});