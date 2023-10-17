fetch('https://', {
  method: 'GET'
})
  .then(response => response.json())
  .then(data => {
    console.log(data);
  })
  .catch(error => {
    console.error(error);
  });


  fetch('https', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json'
  },
  body: JSON.stringify({
    name: 'John Doe',
    email: 'johndoe@example.com'
  })
})
  .then(response => response.json())
  .then(data => {
    console.log(data);
  })
  .catch(error => {
    console.error(error);
  });


  fetch('https://localhost/2dosemestre/ ...', {
  method: 'PUT',
  headers: {
    'Content-Type': 'application/json'
  },
  body: JSON.stringify({
    name: 'John Doe',
    email: 'johndoe@example.com'
  })
})
  .then(response => response.json())
  .then(data => {
    console.log(data);
  })
  .catch(error => {
    console.error(error);
  });


  fetch('https://localhost  ...', {
  method: 'DELETE'
})
  .then(response => {
    if (response.ok) {
      console.log('El dato se eliminó correctamente');
    } else {
      console.error('No se pudo eliminar el dato');
    }
  })
  .catch(error => {
    console.error(error);
  });

// ! No eh probado la conexion mucho ojo