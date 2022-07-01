<html>
  <head>
    <title>Meu Formulário Personalizado</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <!--[if IE]>
    <link rel="stylesheet" type="text/css" href="css/estiloie.css">
    <![endif]-->

  </head>
<body>
  <div id="area">
    <form id="formulario" method="POST" action="{{ route('upload') }}" autocomplete="off">
        @csrf
      <fieldset>
        <legend>Aula</legend>
        <label>Título:</label><input name="name" class="nome" type="text"><br>
        <label>Video:</label><input name="video" class="video" type="file"><br>
        <label>Descrição:</label><br><textarea name="description" class="msg" cols="35" rows="8"></textarea><br>
        <input class="btn_submit" type="submit" value="Enviar">
      </fieldset>
    </form>
  </div>
</body>
</html>