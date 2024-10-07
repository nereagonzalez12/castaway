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
        <div class="theme-selector">
            <div style="color: var(--green-color);">■</div>
            <div style="color: var(--orange-color);">■</div>
            <div style="color: var(--blue-bg);">■</div>
        </div>
    </div>
</body>