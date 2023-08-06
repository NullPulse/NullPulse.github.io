<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>breakcore.exe</title>
  <style>
    body {
      background-color: #008080;
      background-size: cover;
      background-position: center;
      height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
</head>
<body>
  <script>
    function cambiaSfondoCasuale() {
      const sfondi = [
        'gif/1.gif',
        'gif/2.gif',
        'gif/3.gif',
        'gif/4.gif',
        'gif/5.gif',
        'gif/6.gif',
        'gif/7.gif',
        'gif/8.gif',
        'gif/9.gif',
        'gif/10.gif',
        'gif/11.gif',
        'gif/12.gif',
        'gif/13.gif',
        'gif/14.gif',
        'gif/15.gif',
        'gif/16.gif',
        'gif/17.gif',
        'gif/18.gif',
        // Aggiungi altri percorsi delle immagini GIF qui
      ];
      const numeroCasuale = Math.floor(Math.random() * sfondi.length);
      const sfondoCasuale = sfondi[numeroCasuale];
      document.body.style.backgroundImage = `url('${sfondoCasuale}')`;
    }

    // Chiamiamo la funzione una volta al caricamento della pagina
    cambiaSfondoCasuale();
  </script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cambio Sfondo Casuale</title>
  <style>
    body {
      background-size: cover;
      background-position: center;
      height: 100vh;
      margin: 0;
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
</head>
<body>
  <center>
    <audio autoplay muted controls>
      <source src="mp3/tst.mp3" type="">
    </audio>
  </center>
  <script>
    function cambiaSfondoCasuale() {
      const sfondi = [
        'gif/1.webp',
        'gif/2.webp',
        'gif/3.gif'
        'gif/4.gif'
        'gif/5.gif'


        // Aggiungi altri percorsi delle immagini GIF qui
      ];
      const numeroCasuale = Math.floor(Math.random() * sfondi.length);
      const sfondoCasuale = sfondi[numeroCasuale];
      document.body.style.backgroundImage = `url('${sfondoCasuale}')`;
    }

    // Chiamiamo la funzione una volta al caricamento della pagina
    cambiaSfondoCasuale();
  </script>
</body>
</html>