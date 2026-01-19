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
          <div class="filter">
            <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
              <li class="dropdown-header text-start">
                <h6>Filter</h6>
              </li>

              <li><a class="dropdown-item" href="#">Today</a></li>
              <li><a class="dropdown-item" href="#">This Month</a></li>
              <li><a class="dropdown-item" href="#">This Year</a></li>
            </ul>
          </div>

          <div class="card-body">
            <h5 class="card-title">Recent Activity <span>| Today</span></h5>

            <div class="activity">

              <div class="activity-item d-flex">
                <div class="activite-label">32 min</div>
                <i class='bi bi-circle-fill activity-badge text-success align-self-start'></i>
                <div class="activity-content">
                  Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                </div>
              </div><!-- End activity item-->

              <div class="activity-item d-flex">
                <div class="activite-label">56 min</div>
                <i class='bi bi-circle-fill activity-badge text-danger align-self-start'></i>
                <div class="activity-content">
                  Voluptatem blanditiis blanditiis eveniet
                </div>
              </div><!-- End activity item-->

              <div class="activity-item d-flex">
                <div class="activite-label">2 hrs</div>
                <i class='bi bi-circle-fill activity-badge text-primary align-self-start'></i>
                <div class="activity-content">
                  Voluptates corrupti molestias voluptatem
                </div>
              </div><!-- End activity item-->

              

            </div>

          </div>
        </div><!-- End Recent Activity -->




      </div><!-- End Right side columns -->

    </div>
  </section>

</main><!-- End #main -->

<?php
include './footer.php';
?>