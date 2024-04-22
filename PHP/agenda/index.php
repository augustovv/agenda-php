<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
   
    <!-- Inclusão do jQuery-->
   <script src="http://code.jquery.com/jquery-1.11.1.js"></script>
    <!-- Inclusão do Plugin jQuery Validation-->
    <script src="http://jqueryvalidation.org/files/dist/jquery.validate.js"></script>
    <script src="http://jqueryvalidation.org/files/dist/additional-methods.min.js"></script>
    
    <style>
        body{
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        color:#01261C;
        
    }
    h6{
        font-size: 26px;
        margin: 5px 0px;
    }
    h1{
        text-align: center;
    }
    .input{
        border: 1px solid black;
        height: 50px;
        border-radius: 5px;
        margin: auto;
     
  
    }
    .input:hover{
        background-color: #93BFA3;
        color: black;
        padding: 15px;
    }
    .row{
        margin: 15px auto ;
        padding: 0%;
     
    }
    .container{
       background-color: rgba(0, 255, 51, 0.354);
       margin: auto;
    }

    .btn{
        height: 40px;
    }
    main{
        height: 90vh;
        margin: auto;
    }
    footer{
        background-color: #01261C;
        color: white;
        height: 250px;
    }
    footer p{
        color:whitesmoke;
        padding: 100px;
        text-align: center;
    }
    footer  a {
        text-decoration: none;
    }

    </style>
</head>
<body>
    <head> 
        <h1>AGENDA</h1>
    </head>


    <main>
    
        <form id="form" action="tabela.php" method="post">
            <fieldset>
                <div>
                    <label for="nome" class="row col-5">
                        <h6>Nome</h6>
                        <input type="text" name="nome" class="col-12 input" placeholder="Maria da Silva">
                    </label>

                    <label for="email" class="row col-5">
                        <h6>E-mail</h6>
                        <input type="email" name="email" id="email" placeholder="mariadasilva@gmail.com" class="col-12 input">
                    </label>

                    <label for="telefone"class="row col-5" >
                        <h6>Telefone</h6>
                        <input type="number" name="telefone" id="telefone" placeholder="31 999888777" class="col-12 input">
                    </label>
                    <div class="row col-5">
                        
                        <input type="submit" value="Enviar"  class="input btn col-6 btn-outline-success ">
                        
                        <input type="button" value="Limpar" onclick="location.reload()" style="margin-left: 35px;" class="input btn col-5  btn-outline-danger  ">
                    </div>
            

                </div>
            
            </fieldset>
        </form>
    </main>
    <footer>
        <p>Developed by <a href="https://github.com/augustovv" target="_blank">augustovv</a></p>
    </footer>


    <script>

        $("#form").validate({
            rules:{
                nome:{
                    required:true,
                },
                email:{
                    required:true,
                },
                telefone:{
                    required:true,
                    minlength:11,
                    maxlength:11,

                }
            },
            messages:{
                nome:{
                    required:"Campo obrigatório.",
                },
                email:{
                    required:"Campo obrigatório.",
                },
                telefone:{
                    required:"Campo obrigatório.",
                    minlength:"Insira um telefone válido.",
                    maxlength:"Por favor, entre com um número válido.",
                }
            }
        })
    </script>
    

</body>
</html>