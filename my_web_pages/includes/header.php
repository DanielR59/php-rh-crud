<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>PHP CRUD MYSQL</title>
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <!-- BOOTSTRAP 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- FONT AWESOEM -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
  <!-- <link rel="stylesheet" href="./style/styles.css" media="print" onload="this.media='all'"> -->
  <style>
    :root {
      --header-height: 64px;
    }


    .table-header-dao {
      tbody:nth-of-type(1) tr:nth-of-type(1) td {
        border-top: none !important;
      }

      thead th {
        border-top: 1px solid white !important;
        border-bottom: 1px solid white !important;
        box-shadow: inset 0 1px 0 var(--bs-border-color), inset 0 -1px 0 var(--bs-border-color);
        /* padding: 2px 0; */
      }

      thead th {
        background-clip: padding-box
      }
    }

    .table-cont-dao {
      --t-height: 85vh;

      height: var(--t-height);

      div.position-relative {
        z-index: 10;
      }
    }

    .snackbar-dao {
      position: absolute;
      z-index: 20;
      min-width: 35vw;
      right: 0.5rem;
      top: 4rem;

    }

    .asistencia {
      --asistencia-height: 80vh;
      height: var(--asistencia-height);
    }

    @media screen and (max-width:767px) {
      .asistencia {
        margin-top: -2rem;
        --asistencia-height: 85vh;
        --comment-height: 13.5rem;

        div.asistencia-table {
          height: calc(100% - var(--comment-height)) !important;
        }

        div.asistencia-comment {
          height: var(--comment-height);
        }

      }
    }
  </style>
</head>

<body class="position-relative" style="height: 100vh;">
  <nav class="navbar navbar-expand navbar-dark bg-primary position-sticky sticky-top">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Usuarios
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              <li><a class="dropdown-item" href="altas.php">Alta</a></li>
              <li><a class="dropdown-item" href="bajas.php">Baja</a></li>
              <li><a class="dropdown-item" href="actualizar.php">Actualizar</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="asistencia.php">Asistencia ElDatio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="reporte.php">Reporte asistencia</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">PHP MySQL CRUD</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php">PHP MySQL CRUD</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>