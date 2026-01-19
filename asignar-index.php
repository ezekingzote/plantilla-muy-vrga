<?php
include './header.php';
?>


<main id="main" class="main">

    <div class="pagetitle">
        <h1>Asignar Materias</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Asignar Materias</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <a href="./asignar-create.php" class="btn btn-outline-primary mt-3">
                            <i class="fa-solid fa-user-plus"></i>
                            Asignar Profesor
                        </a>

                        <hr>

                        <table class="table datatable text-center">
                            <thead>
                                <tr>
                                    <th>ASIGNATURA</th>
                                    <th>PROFESOR</th>
                                    <th>SEMESTRE</th>
                                    <th>CARRERA</th>
                                    <th>Activo</th>
                                    <th>Editar</th>
                                </tr>
                            </thead>
                            <tbody id="tbody-usuarios">
                                <tr>
                                    <td>Inteligencia Artificial</td>
                                    <td>ROLDAN</td>
                                    <td>9no</td>
                                    <td>ING SIS</td>

                                    <td>
                                        <div class="form-check form-switch">
                                            <input class="form-check-input" type="checkbox" id="{{ $item->id }}">
                                        </div>
                                    </td>

                                    <td>
                                        <a href="{{ route('usuarios.edit', $item->id) }}"
                                            class="btn btn-outline-warning"><i class="fa-solid fa-user-pen"></i></a>
                                    </td>
                                </tr>


                            </tbody>
                        </table>

                    </div>
                </div>

            </div>
        </div>
    </section>



</main><!-- End #main -->

<?php
include './footer.php';
?>