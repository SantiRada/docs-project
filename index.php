<?php
    $project = $_GET['project'] ?? "";
    $currentSection = $_GET['cs'] ?? "proposito"

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Docs Project</title>
    <!-- ICONS FONTAWESOME -->
    <script src="https://kit.fontawesome.com/a26e3520ad.js" crossorigin="anonymous"></script>
    <!-- STYLES -->
    <link rel="stylesheet" href="style/darkmode.css">
    <link rel="stylesheet" href="style/reset.css">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>


    <?php if($project == ""): ?>
        <main class="main">
            <a class="top-right edit-button" href="#"><i class="fas fa-plus"></i> Crear Proyecto</a>
            <img src="media/logo.png" alt="Logo del Proyecto">
            <h1 class="color">Nombre del Proyecto</h1>
            <form method="post">
                <div class="sector-input">
                    <input type="text" class="searchbar" name="searchbar" placeholder="Buscar un proyecto" required>
                    <a class="icon-search" href="#"><i class="fas fa-magnifying-glass"></i></a>
                </div>
            </form>
        </main>

        <section id="list">
            <?php for($i = 0; $i < 13; $i++): ?>
                <a class="card" href="?project=<?php echo $i; ?>">
                    <div>
                        <h3>Titulo del Proyecto</h3>
                        <span class="author">por <b>Santiago Rada</b></span>
                    </div>
                    <p class="desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos quisquam dolorum sint consequatur sequi voluptate ipsam nisi ab quam impedit! Eaque esse consequatur assumenda totam nesciunt quas explicabo doloremque aspernatur!</p>
                    <div class="data-card">
                        <span class="date">Última actualización: <b>07-02-2025</b></span>
                        <p class="state deprecated">Deprecated</p>
                    </div>
                </a>
            <?php endfor; ?>
        </section>
    <?php else: ?>
        <main class="view-project">
            <aside class="folders">
                <a href="#" class="title">
                    <h3>Titulo del Proyecto</h3>
                    <i class="fas fa-outdent"></i>
                </a>
                <a href="#">
                    <i class="fas fa-folder-open"></i>
                    General
                </a>
                <?php for($i = 0; $i < 4; $i++): ?>
                    <a href="#">
                        <i class="fas fa-folder"></i>
                        Ejemplo de Carpeta
                    </a>
                <?php endfor; ?>
            </aside>
            <article class="contain">
                <div class="sector-title">
                    <div class="between">
                        <h1>Titulo de la sección</h1>
                        <span class="bold placeholder">NameOfScript.cc</span>
                    </div>
                    <a href="#" class="state deprecated">Deprecated</a>
                </div>
                <div class="subsection">
                    <div class="between">
                        <h3>Nombre de la Subsección</h3>
                        <a href="#" class="edit-button"><i class="fas fa-pen"></i> Editar</a>
                    </div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ipsum libero dignissimos ipsa accusantium, dolores odit repellendus quibusdam expedita eaque quas vitae officiis, dolorum quidem iste vero vel asperiores natus voluptate?</p>
                </div>
            </article>
            <aside class="details">
                <a class="<?php if($currentSection == "proposito"): echo "select"; endif; ?>" href="?project=<?php echo $project; ?>&cs=proposito">Propósito</a>
                <a class="<?php if($currentSection == "dependencias"): echo "select"; endif; ?>" href="?project=<?php echo $project; ?>&cs=dependencias">Dependencias</a>
                <a class="<?php if($currentSection == "funciones"): echo "select"; endif; ?>" href="?project=<?php echo $project; ?>&cs=funciones">Funciones</a>
                <a class="<?php if($currentSection == "bugs"): echo "select"; endif; ?>" href="?project=<?php echo $project; ?>&cs=bugs">Bugs</a>
                <a class="<?php if($currentSection == "mejoras"): echo "select"; endif; ?>" href="?project=<?php echo $project; ?>&cs=mejoras">Mejoras</a>
            </aside>
        </main>
    <?php endif; ?>

    <script src="js/drawer.js"></script>
</body>
</html>