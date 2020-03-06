<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body>

<div>

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>


<form id="formulario" action="conexao.php" method="POST">
<input id="comando" type="text" name="comand" value="1">
<input id="botao" type="submit" value="teste" >
<div id="resp"> </div>
<script>
document.getElementById("formulario").addEventListener("submit", (event) => {

event.preventDefault()

axios({
  method: 'post',
  url: 'conexao.php', // url
  data: {
    comando: document.getElementById("comando").value, // Parâmetro 1 enviado
  }
})
.then(response => {
    console.log(response)
    document.getElementById("resp").innerHTML = response.data
})
.catch(error => {
    console.log(error)
})

})


</script>
</form>

</div>

</body>
</html>
