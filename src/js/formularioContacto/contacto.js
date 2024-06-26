document.addEventListener('DOMContentLoaded',function(e){
    iniciarValidacion();
});

function iniciarValidacion(){
    validarForm();
}

function validarForm(){
    const forms = document.querySelectorAll('.needs-validation')

    // Loop over them and prevent submission
    Array.from(forms).forEach(form => {
      form.addEventListener('submit', event => {
          event.preventDefault()
        if (!form.checkValidity()) {
          event.stopPropagation()
        }
        else{

        }
  
        form.classList.add('was-validated')
      }, false)
    })
}