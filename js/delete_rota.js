function down(n){
    if(confirm("Você quer Excluir?")){
      id = n
      $.ajax({
        url: "jquery/rota.php",
        type: "POST",
        cache: false,
        data: {
        id : id,
          
        },
      success: function(response){
        console.log(response);
        if(response){
          window.location.reload(true);
        }else {
          alert("Não foi possivel excluir o dado")
        }
      }
  
    })
    }
   

  }