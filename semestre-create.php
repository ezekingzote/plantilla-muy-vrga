<?php
include './header.php';
?>


<main id="main" class="main">

    <div class="pagetitle">
        <h1>Crear Semestre</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Crear</a></li>
                <li class="breadcrumb-item active">Semestre</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
    
            <div class="col-lg-12">
                <div class="card shadow-sm border-0">
                   
                    <div class="card-body mt-3">
                        <form action="guardar_semestre.php" method="POST">
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Periodo del Semestre</label>
                                    <input type="text" class="form-control" placeholder="Ej: Ene - Jun 2026" required>
                                    <div class="form-text">Nombre descriptivo del ciclo escolar.</div>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Estado Inicial</label>
                                    <select class="form-select">
                                        <option value="activo" selected>Activo / En curso</option>
                                        
                                        <option value="proximo">Próximo</option>
                                    </select>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Número de Materias</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="bi bi-book"></i></span>
                                        <input type="number" class="form-control" placeholder="6" min="1">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <label class="form-label fw-bold">Color de Identificación</label>
                                    <input type="color" class="form-control form-control-color w-100" value="#0d6efd" title="Elige un color para la tarjeta">
                                </div>

                                <div class="col-12 mt-4">
                                    <hr>
                                    <div class="d-flex justify-content-end gap-2">
                                        <a href="./semestre.php" class="btn btn-light border">Cancelar</a>
                                        <button type="submit" class="btn btn-outline-primary px-4">
                                            <i class="bi bi-save me-1"></i> Guardar y Crear Semestre
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            
        </div>
    </section>



</main><!-- End #main -->

<?php
include './footer.php';
?>