    //Carrito
   
   // Escucha el evento click en los enlaces de agregar a la carta
    document.addEventListener('DOMContentLoaded', function() {
        var agregarCarritoLinks = document.getElementsByClassName('agregar-carrito');
        for(var i = 0; i < agregarCarritoLinks.length; i++) {
            agregarCarritoLinks[i].addEventListener('click', function(e) {
                e.preventDefault(); // Previene el comportamiento predeterminado del enlace

                var productId = this.getAttribute('data-id'); // Obtiene el ID del producto
                // Realiza la solicitud AJAX
                var xhr = new XMLHttpRequest();
                xhr.open('GET', 'AccionCarta.php?action=addToCart&id=' + productId, true);
                xhr.onload = function() {
                    if (xhr.status === 200) {
                        document.getElementById('producto').innerHTML = xhr.responseText; // Actualiza el contenido de los productos
                    } else {
                        console.error('Error al agregar el producto a la carta.');
                    }
                };
                xhr.send();
            });
        }
    });

 //PopUp

    var botones = document.getElementsByClassName('agregar-carrito');
    var popUps = document.getElementsByClassName('pop-up');
    for (var i = 0; i < botones.length; i++) {
        botones[i].addEventListener('click', function() {
            for (var j = 0; j < popUps.length; j++) {
                popUps[j].style.display = 'none';
            }
            var popUp = this.parentNode.querySelector('.pop-up');
            popUp.style.display = 'flex';
            setTimeout(function() {
                popUp.style.display = 'none';
            }, 500);
        });
    }
    