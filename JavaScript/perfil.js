function arquivo_file() {

    let foto = document.getElementById('img-foto');
    let arquivo = document.getElementById('formFileSm');

    foto.addEventListener('click', () => {
        arquivo.click();
    });

    arquivo.addEventListener('change', (event) => {

        let reader = new FileReader();

        reader.onload = () => {
            foto.src = reader.result;
        }
        reader.readAsDataURL(arquivo.files[0]);
    })

}