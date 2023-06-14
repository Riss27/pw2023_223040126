const keyword = document.getElementById("keyword");
const searchContainer = document.getElementById("search-container");

keyword.onkeyup = function () {
    fetch('ajax/search.php?keyword=' + keyword.value)
        .then(response => response.text())
        .then((text) => (searchContainer.innerHTML = text));
}


// preview image untuk tambah dan ubah
function previewImage(input) {
    const gambar = document.querySelector(".gambar");
    const imgPreview = document.querySelector(".img-preview");

    const oFReader = new FileReader();
    oFReader.readAsDataURL(gambar.files[0]);

    oFReader.onload = function (oFREvent) {
        imgPreview.src = oFREvent.target.result;
    };
}
