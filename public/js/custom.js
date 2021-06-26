function generateBigNumber(){
    document.getElementById('matricula').setAttribute('value', Math.random().toString().slice(2, 7) + Math.random().toString().slice(2, 7))
}

window.onload = () => {
    generateBigNumber();
}
