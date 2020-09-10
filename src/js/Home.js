function goToNewPage()
{
    var url = document.getElementById('list').value;
    if(url != 'none') {
        window.location = url;
    }
}


const selectElement = document.querySelector('#books');

selectElement.addEventListener('change', (event) => {
  alert("sdf sdf dsfsdsds")
});


