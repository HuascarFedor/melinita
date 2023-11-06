<?php
function conectar()
{
  $enlace = mysqli_connect("roundhouse.proxy.rlwy.net", "root", "B1f2E1a5-5afge4aE1ccHf3DDGH5dG4b", "railway", 24663);
  if (!$enlace) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
  }
  return $enlace;
}
