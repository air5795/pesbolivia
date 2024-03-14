<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Imagen a pantalla completa en móvil</title>
<style>
  body, html {
    margin: 0;
    padding: 0;
    height: 100%;
    overflow: hidden;
  }
  img {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    object-fit: contain;
  }
</style>
</head>
<body>
  <img src="assets/images/pagina.png" alt="Imagen a pantalla completa">
</body>
</html>
