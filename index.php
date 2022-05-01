<html>
   <head>
    <title>Formulário</title>
   </head>
   <body>
       <h2>Cadastro Pessoa Física</h2>
       <form method="post" action="./controller/controllerPessoa.php">
            <table>
                <tr>
                    <td>
                        <label for="lblNome">Nome:</label>                
                    </td>
                    <td>
                        <input type="text" name="txtNome" id="txtNome">                 
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="lblEndereco">Endereco:</label>                
                    </td>
                    <td>
                        <input type="text" name="txtEndereco" id="txtEndereco">                 
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="lblBairro">Bairro:</label>               
                    </td>
                    <td>
                        <input type="text" name="txtBairro" id="txtBairro">              
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="lblCep">Cep</label>             
                    </td>
                    <td>
                        <input type="text" name="txtCep" id="txtCep">                 
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <button>Cadastrar</button>           
                    </td>
                </tr>
            </table>
        </form>
    </body>
</html> 

