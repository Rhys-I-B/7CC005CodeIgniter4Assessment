<head>
	<title>CodeIgniter Games</title>
</head>

<h2>Games</h2>

<?php if ($games_list !== []): ?>

    <?php foreach ($games_list as $games_item): ?>

        <h3><?= esc($games_item['title']) ?></h3>

        <div class="main">
			<p><?= esc($games_item['theme']) ?></p>
			<p><?= esc($games_item['price']) ?></p>
			<p>Released: <?= esc($games_item['releaseDate']) ?></p>
			<img src="<?= esc($games_item['image']) ?>" alt="Image" style="width:150px;height:210px;"></img>
			<p><?= esc($games_item['downloads']) ?> Downloads</p>
			<p>Suitable on: <?= esc($games_item['platforms']) ?></p>
			<p>Ratings: <?= esc($games_item['ratings']) ?></p>
			<a href="<?= esc($games_item['reviews']) ?>">See Reviews on Steam</a>
			<p>Developer(s): <?= esc($games_item['developer']) ?></p>
			<p>Publisher(s): <?= esc($games_item['publisher']) ?></p>
			<br>
        </div>

    <?php endforeach ?>

<?php else: ?>

    <h3>No Games</h3>

    <p>Unable to find any games for you.</p>

<?php endif ?>