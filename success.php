<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    @import url('https://fonts.googleapis.com/css?family=Quicksand:400,500,700&subset=latin-ext');

    html {
      position: relative;
      overflow-x: hidden !important;
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Quicksand', sans-serif;
      color: #324e63;
    }

    .wrapper {
      width: 100%;
      width: 100%;
      height: auto;
      min-height: 100vh;
      padding: 50px 20px;
      padding-top: 100px;
      display: flex;
      background-image: linear-gradient(-20deg, #ff2846 0%, #6944ff 100%);
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .profile-card {
      background-color: white;
      width: 70%;
      padding: 30px;
      display: flex;
      flex-direction: column;
      align-items: center;
      border-radius: 10px;

    }

    .profile-card__img img {
      border-radius: 50%;
      box-shadow: 0px 5px 50px 0px rgb(108, 68, 252), 0px 0px 0px 7px rgba(107, 74, 255, 0.5);
      width: 120px;
    }

    .profile-card__cnt {
      margin-top: 30px;
    }

    .profile-card__name {
      display: flex;
      flex-direction: column;
      justify-content: space-around;
      align-items: center;
      height: 150px;
    }

    a {
      text-decoration: none;
      background-color: #324e63;
      font-weight: 300;
      padding: 15px 25px;
      color: white;
      border-radius: 5px;
    }
  </style>
</head>

<body>
  <div class="wrapper">
    <div class="profile-card">
      <div class="profile-card__img">
        <img src="assets/meli.png" alt="profile card">
      </div>

      <div class="profile-card__cnt">
        <div class="profile-card__name">
          <h2>
            Acabo de recibir tu mensaje. ¡Gracias por contestar!
          </h2>
          <a href="index.php">Retornar</a>
        </div>
      </div>
    </div>
  </div>
</body>

</html>