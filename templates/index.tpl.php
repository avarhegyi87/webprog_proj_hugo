<!DOCTYPE html>
<html lang="en-en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $wnd_title['title'] . ((isset($wnd_title['motto'])) ? (' - ' . $wnd_title['motto']) : '') ?></title>
    <link rel="stylesheet" href="./styles/style.css" type="text/css">
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div id="page">
        <header>
            <h1 id="page-title"><?= $wnd_title['title'] ?></h1>
            <?php if (isset($wnd_title['motto'])) { ?><h2 id="page-subtitle"><?= $wnd_title['motto'] ?></h2><?php } ?>
        </header>
        <div id="wrapper">
            <nav id="nav" class="navbar navbar-expand-lg bg-light navbar-light justify-content-center">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <?php foreach ($pages as $url => $page) { ?>
                            <li class="nav-item">
                                <a <?= ($page == $search) ? ' class="nav-link active"' : 'class="nav-link"'; ?> href="<?= ($url == '/') ? '.' : ('?page=' . $url) ?>">
                                    <?php echo $page['text'] ?>
                                </a>
                            </li>
                        <?php } ?>
                        <button class="btn btn-danger navbar-btn" onclick="window.open('<?= $footer['original'] ?>')" target="_blank">
                            Go to the original site
                        </button>
                    </ul>
                </div>
            </nav>
            <img id="header-pic" src="./imgsources/<?= $headerpic['img-source'] ?>" alt="<?= $headerpic['img-alt'] ?>" width="937" height="300">
            <div id="container">
                <?php include("./templates/pages/{$search['file']}.tpl.php"); ?>
            </div>
        </div>
        <footer>
            <?php if (isset($footer['copyright'])) { ?>&copy;&nbsp;<?= $footer['copyright'] ?> <?php } ?>
        &nbsp;
        <?php if (isset($footer['company'])) { ?><?= $footer['company'] ?><?php } ?>
        &nbsp;
        <?php if (isset($footer['original'])) { ?>
            <p id="authors-note">
                This is not an official site. This site was made as a homework commissioned by the John von Neumann University of Kecskemét.
                &nbsp;
                <a id="original" href="<?= $footer['original'] ?>" target="_blank">Go to the original site.</a>
            </p>
        <?php } ?>
        </footer>
    </div>
</body>

</html>