function validarFormulario() {
  // Obtener los valores de los campos del formulario
  var nombre = document.getElementById('nombre').value.trim();
  var descripcion = document.getElementById('descripcion').value.trim();
  var precio = document.getElementById('precio').value.trim();
  var cantidad = document.getElementById('cantidad').value.trim();
  var categoria = document.getElementById('categoria').value;

  // Validar campos de texto y número
  if (nombre === '' || descripcion === '' || precio === '' || cantidad === '') {
    alert('Please fill in all the required fields.');
    return false;
  }

  // Validar que al menos un radio esté seleccionado
  var radios = document.getElementsByName('weight');
  var seleccionado = false;
  for (var i = 0; i < radios.length; i++) {
    if (radios[i].checked) {
      seleccionado = true;
      break;
    }
  }

  if (!seleccionado) {
    alert('Please select a weight unit.');
    return false;
  }

  // Validar que se haya seleccionado una categoría
  if (categoria === '') {
    alert('Please select a category.');
    return false;
  }

  // Si todas las validaciones pasan
  return true;
}
