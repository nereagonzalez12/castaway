<?php
$nameRequest = 'Introduce tu nombre para empezar:';
?>

<body class="theme-green">
    <div class="scanline"></div>
    <div class="terminal">
        <div class="title">
            <img src='./assets/logo.png'>
            <h1><?= TITLE ?> </h1>
        </div>
        <div class="name-form">
            <div class="autotype-text"><?= $nameRequest ?></div>
            <form action="game.php" method="post">
                <label for="name" class="arrow">></label>
                <input name="name" id="name" type="text" autocomplete="off" maxlength="10">
            </form>
        </div>
        <div class="theme-selector">
            <div style="color: var(--green-color);">■</div>
            <div style="color: var(--orange-color);">■</div>
            <div style="color: var(--blue-bg);">■</div>
        </div>
    </div>
</body>