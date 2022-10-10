function down(n){
    if(confirm("Você quer Excluir?")){
      id = n
      $.ajax({
        url: "jquery/calculo.php",
        type: "POST",
        cache: false,
        data: {
        id : id,
          
        },
      success: function(response){
        if(response){
          window.location.reload(true);
        }else {
          alert("Não foi possivel excluir o dado")
        }
      }
  
    })
    }
   

  }