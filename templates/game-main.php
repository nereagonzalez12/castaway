<body class="theme-green">
    <div class="scanline"></div>
    <div class="terminal">
        <div class="stats-container">
            <div class="day-container">
                <img class="stats-img" src='./assets/img/green-day.png'>
                día <?= $day ?>
            </div>
            <ul class="player-stats-list">
                <li><img class="stats-img" src='./assets/img/green-food.png'><?= $food ?></li>
                <li><img class="stats-img" id='water-img' src='./assets/img/green-water.png'><?= $water ?></li>
                <li><img class="stats-img" src='./assets/img/green-energy.png'><?= $energy ?></li>
            </ul>
        </div>
        <div class="game-lore">
            <div class="game-text"></div>
            <div class="game-buttons">
                <div class="game-buttons-container">
                    <input type="submit" class="button" name="search-food" value="Buscar comida"></input>
                    <input type="submit" class="button" name="explore" value="Explorar"></input>
                    <input type="submit" class="button" name="rest" value="Descansar"></input>
                    <input type="submit" class="button" name="escape" value="Intentar escapar"></input>
                </div>
            </div>
        </div>
        <div class="theme-selector">
            <div style="color: var(--green-color);">■</div>
            <div style="color: var(--orange-color);">■</div>
            <div style="color: var(--blue-bg);">■</div>
        </div>
    </div>
</body>

<script>
    // Type text animation with Typed.js
    document.addEventListener("DOMContentLoaded", function() {
        var typed = new Typed('.game-text', {
            strings: [<?= json_encode($response); ?>],
            typeSpeed: 50,
            showCursor: false,
            loop: false,
        });
    });

    // JQuery inputs with ajax
    $(document).ready(function() {
        $('.button').click(function() {
            var clickBtnValue = $(this).val();
            var ajaxurl = 'utils/ajax.php',
                data = {
                    'action': clickBtnValue
                };
            $.post(ajaxurl, data, function(response) {
                console.log(response);
            });
        });

    });
</script>