<?php
    $targetPage = 'home';
    if (!empty($uri) && $uri !== '/' && is_dir(__DIR__ . '/' . $uri)) {
        $targetPage = $uri . '/';
    }
?>

<!-- BODY -->
<main class="content">
    <?php
        $contentFile = __DIR__ . '/' . $targetPage . '/' . 'index.php';
        
        if (file_exists($contentFile)) {
            include $contentFile;
        } else {
            echo '<h1>404 - Seite nicht gefunden</h1>';
        }
    ?>
</main>