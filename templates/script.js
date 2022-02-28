const body = document.querySelector('body'),
    sidebar = body.querySelector('nav'),
    toggle = body.querySelector(".toggle"),
    modeSwitch = body.querySelector(".toggle-switch"),
    modeText = body.querySelector(".mode-text");

if (toggle != null) {
    toggle.addEventListener("click", () => {
        sidebar.classList.toggle("close");
    })
}


const angkatan = document.querySelector('#angkatan');
const pembayaran = document.querySelector('#pembayaran');
angkatan.addEventListener('change', (e) => {
    pembayaran.innerHTML = e.target.value;
});