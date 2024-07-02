$(document).ready(function() {
    console.log('jquery is working!');
    
    $('#task-form').submit(e => {
      e.preventDefault();
      
      const postData = {
        name: $('#name').val(),
        telefono: $('#telefono').val(),
        email: $('#email').val(),
        mensaje: $('#mensaje').val()
      };
      
      $.post('contact-add.php', postData, (response) => {
        console.log(response);
        $('#task-form').trigger('reset');
        alert(response);
      });
    });
  });