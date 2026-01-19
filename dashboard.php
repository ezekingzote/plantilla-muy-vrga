<?php
include './header.php';
?>


<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Left side columns -->
      <div class="col-lg-12">
        <div class="row">

          <!-- Total Evidencias -->
          <div class="col-xxl-3 col-lg-3 col-md-6 col-sm-12">
            <div class="card info-card sales-card h-100">
              <div class="card-body d-flex flex-column justify-content-center">
                <h5 class="card-title">Total Evidencias <span>| Periodo</span></h5>

                <div class="d-flex align-items-center mt-2">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-folder"></i>
                  </div>
                  <div class="ps-3">
                    <h6>20</h6>
                    <span class="text-muted small">registradas</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Por Revisar -->
          <div class="col-xxl-3 col-lg-3 col-md-6 col-sm-12">
            <div class="card info-card revenue-card h-100">
              <div class="card-body d-flex flex-column justify-content-center">
                <h5 class="card-title">Por Revisar <span>| Pendientes</span></h5>

                <div class="d-flex align-items-center mt-2">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-hourglass-split"></i>
                  </div>
                  <div class="ps-3">
                    <h6>18</h6>
                    <span class="text-warning small fw-bold">requieren revisión</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- Aprobadas -->
          <div class="col-xxl-3 col-lg-3 col-md-6 col-sm-12">
            <div class="card info-card customers-card h-100">
              <div class="card-body d-flex flex-column justify-content-center">
                <h5 class="card-title">Aprobadas <span>| Validadas</span></h5>

                <div class="d-flex align-items-center mt-2">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-check-circle"></i>
                  </div>
                  <div class="ps-3">
                    <h6>1</h6>
                    <span class="text-success small fw-bold">correctas</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xxl-3 col-lg-3 col-md-6 col-sm-12">
            <div class="card info-card h-100">

              <div class="card-body d-flex flex-column justify-content-center">
                <h5 class="card-title">Rechazadas <span>| Corrección</span></h5>

                <div class="d-flex align-items-center mt-2">
                  <div
                    class="card-icon rounded-circle d-flex align-items-center justify-content-center bg-danger text-white">
                    <i class="bi bi-x-circle"></i>
                  </div>
                  <div class="ps-3">
                    <h6>1</h6>
                    <span class="text-danger small fw-bold">devueltas</span>
                  </div>
                </div>

              </div>

            </div>
          </div>





        </div>
      </div><!-- End Left side columns -->
      <hr class="mt-3">

      <!-- Right side columns -->
      <div class="col-lg-8">

        <!-- Recent Activity -->
        <div class="card">
        

          <div class="card-body">

            <div class="d-flex justify-content-between align-items-center mb-3">
              <h5 class="card-title mb-0">
                Recent Activity <span>| Today</span>
              </h5>

              <a href="#" class="btn btn-outline-dark p-0">
                <i class="fa-solid fa-eye"></i><small> Todas la evidencias</small>
              </a>
            </div>

            <div class="activity">

              <div class="activity-item d-flex">
                <div class="activite-label">32 min</div>
                <i class="bi bi-circle-fill activity-badge text-success align-self-start"></i>
                <div class="activity-content">
                  Roldan resubió una evidencia
                </div>
              </div>

              <div class="activity-item d-flex">
                <div class="activite-label">56 min</div>
                <i class="bi bi-circle-fill activity-badge text-danger align-self-start"></i>
                <div class="activity-content">
                  Emmanuel ha subido una evidencia
                </div>
              </div>

              <div class="activity-item d-flex">
                <div class="activite-label">2 hrs</div>
                <i class="bi bi-circle-fill activity-badge text-primary align-self-start"></i>
                <div class="activity-content">
                  Gabriel ha subido una evidencia
                </div>
              </div>

            </div>
          </div>

        </div><!-- End Recent Activity -->




      </div><!-- End Right side columns -->

      <div class="col-lg-4">
        <div class="card p-4">
          <h5 class="mb-1 fw-bold text-center">
            <p>GESTIÓN RÁPIDA</p>
          </h5>
          <a href="./docentes-index.php" class="btn btn-primary"><i class="fa-solid fa-person-chalkboard"></i> Nuevo Docente</a>
          <a href="./materias-index.php" class="btn btn-info mt-3"><i class="fa-solid fa-book-medical"></i> Nueva Asignatura</a>
        </div>
      </div>

    </div>
  </section>

</main><!-- End #main -->

<?php
include './footer.php';
?>