<?php
include './headerDocentes.php';
?>


<main id="main" class="main">

    <div class="pagetitle">
        <h1>Instrumentacion de Docente</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Administrar las evidencias de evaluación</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <a href="./instrumentacion-docente-create.php" class="btn btn-outline-primary px-3">
        <i class="bi bi-plus-lg me-1"></i> Nueva Ponderación
    </a>
    <hr>
    <section class="section">
        <div class="row">
            <div class="col-12">
                <div class="card border-0 shadow-sm">

                    <div class="card-body p-0">
                        <div class="table-responsive">
                            <table id="tablaListaInstrumentacion" class="table table-hover align-middle mb-0">
                                <thead class="bg-light">
                                    <tr>
                                        <th class="ps-4 py-3 border-0 text-secondary small text-uppercase fw-bold">Materia</th>
                                        <th class="py-3 border-0 text-secondary small text-uppercase fw-bold">Unidad</th>
                                        <th class="py-3 border-0 text-secondary small text-uppercase fw-bold text-center">Criterio</th>
                                        <th class="py-3 border-0 text-secondary small text-uppercase fw-bold text-center">Ponderación</th>
                                        <th class="pe-4 py-3 border-0 text-secondary small text-uppercase fw-bold text-center">Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="align-middle">
                                        <td class="ps-4">
                                            <div class="fw-bold text-dark">Programación Web</div>
                                        </td>
                                        <td class="ps-4">
                                            <div class="text-muted small">Unidad 1</div>
                                        </td>

                                        <td class="text-center ps-4">
                                            <span class="badge rounded-pill bg-info bg-opacity-10 text-dark">
                                                Examen
                                            </span>
                                        </td>

                                        <td class="text-center">
                                            <div class="d-inline-flex flex-column align-items-center">
                                                <span class="badge bg-primary px-3 mb-1">50%</span>
                                                <div class="progress" style="height: 4px; width: 60px;">
                                                    <div class="progress-bar bg-primary" style="width: 50%"></div>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="text-center">
                                            <button class="btn btn-sm btn-outline-warning me-1">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td class="ps-4">
                                            <div class="fw-bold text-dark">Programación Web</div>
                                        </td>
                                        <td class="ps-4">
                                            <div class="text-muted small">Unidad 1</div>
                                        </td>

                                        <td class="text-center ps-4">
                                            <span class="badge rounded-pill bg-info bg-opacity-10 text-dark">
                                                Trabajo en Clase
                                            </span>
                                        </td>

                                        <td class="text-center">
                                            <div class="d-inline-flex flex-column align-items-center">
                                                <span class="badge bg-warning px-3 mb-1">30%</span>
                                                <div class="progress" style="height: 4px; width: 60px;">
                                                    <div class="progress-bar bg-warning" style="width: 30%"></div>
                                                </div>
                                            </div>
                                        </td>

                                        <td class="text-center">
                                            <button class="btn btn-sm btn-outline-warning me-1">
                                                <i class="fa-solid fa-pen-to-square"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger">
                                                <i class="fa-solid fa-trash-can"></i>
                                            </button>
                                        </td>
                                    </tr>
                                   
                                    <tr class="align-middle">
                                        <td></td>
                                        
                                        <td></td>
                                        <td class="ps-4">
                                            <div class="fw-bold text-dark text-center">Total registrado</div>
                                        </td>
                                       

                                        <td class="text-center">
                                            <div class="d-inline-flex flex-column align-items-center">
                                                <span class="badge bg-success px-3 mb-1">80%</span>
                                                <div class="progress" style="height: 4px; width: 60px;">
                                                    <div class="progress-bar bg-success" style="width: 100%"></div>
                                                </div>
                                            </div>
                                        </td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


</main><!-- End #main -->

<?php
include './footer.php';
?>