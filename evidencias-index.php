<?php
include './header.php';
?>


<main id="main" class="main">

    <div class="pagetitle">
        <h1>Evidencias de Docentes</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Administrar las evidencias de los docentes</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <hr>
    <div class="row">
      <div class="col-lg-12">
        <div class="card p-4">
          <div class="table-responsive">
            <table id="miTabla" class="table table-hover align-middle w-100">
              <thead class="table-light">
                <tr>
                  <th>Docente</th>
                  <th>Materia</th>
                  <th>Unidad</th>
                  <th>Fecha</th>
                  <th class="text-center">Acción</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Ing. Roldan Aquino</td>
                  <td>Backend</td>
                  <td>U1</td>
                  <td>hace 1 hora</td>
                  <td class="text-center">
                    <a href="./revisarEvidencia.php" class="btn btn-outline-primary"><i class="fa-regular fa-eye"></i> Revisar</a>
                  </td>
                </tr>
                <tr>
                  <td>Ing. Federico</td>
                  <td>IA</td>
                  <td>U2</td>
                  <td>hace 5 minutos</td>
                  <td class="text-center">
                    <a href="./revisarEvidencia.php" class="btn btn-outline-primary"><i class="fa-regular fa-eye"></i> Revisar</a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>


</main><!-- End #main -->

<?php
include './footer.php';
?>