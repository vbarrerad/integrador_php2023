
const cantidad = document.getElementById ("inputCantidad");

const categoria = document.getElementById ("inputCategoria");

const total  = document.getElementById ("total");

/* const resumen = document.getElementById("resumen");
resumen.addEventListener("click", calculo); */

function calculo() {
    var cantidadPagar= 200 * cantidad.value;
    var descuento;
    if (categoria.value == "estudiante")
    {descuento = 0.2;};
    if (categoria.value == "trainee")
    {descuento = 0.5;};
    if (categoria.value == "junior")
    {descuento = 0.85;};

    var totalPagar= cantidadPagar * descuento;

    total.innerHTML = totalPagar ; 
  }


/* 
  al momento de presionar el botón “Resumen”, deberá mostrar en la sección “Total a Pagar: $”, el monto correspondiente a la cantidad de tickets a comprar con el descuento correspondiente dependiendo la categoría seleccionada, existen 3 categorías, Estudiante, Trainee, Junior

<script>
const element = document.getElementById("myBtn");
element.addEventListener("click", myFunction);

function myFunction() {
  document.getElementById("demo").innerHTML = "Hello World";
}
</script> */