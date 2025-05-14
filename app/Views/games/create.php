<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="<?=base_url()?>/games" method="post">
    <?= csrf_field() ?>

	<p>Game Name</p>
    <label for="title">Title</label>
    <input type="input" name="title" value="<?= set_value('title') ?>">
    <br>

    <label for="theme">Theme</label>
    <textarea name="theme" cols="45" rows="2"><?= set_value('theme') ?></textarea>
    <br>
	
	<p>Release Date		#May not be required as of yet</p>
    <input type="date"><?= set_value('releaseDate') ?></input>
    <br>
	
	<p>Image</p>
	<label for="image">Paste Image URL</label>
    <textarea name="image" cols="50" rows="2"><?= set_value('image') ?></textarea>
    <br>
	
	<label for="price">Price</label>
    <textarea name="price" cols="10" rows="1"><?= set_value('price') ?></textarea>
    <br>
	
	<label for="downloads">Downloads</label>
    <textarea name="downloads" cols="10" rows="1"><?= set_value('downloads') ?></textarea>
    <br>
	
	<p>Platforms</p>
	<label for="platforms">Platforms</label>
    <textarea name="platforms" cols="50" rows="2"><?= set_value('platforms') ?></textarea>
    <br>
	
	<label for="ratings">Ratings</label>
    <textarea name="ratings" cols="10" rows="1"><?= set_value('ratings') ?></textarea>
    <br>
	
	<p>Reviews</p>
	<label for="reviews">Paste Review Page URL</label>
    <textarea name="reviews" cols="50" rows="2"><?= set_value('reviews') ?></textarea>
    <br>
	
	<label for="developer">Developer</label>
    <textarea name="developer" cols="45" rows="2"><?= set_value('developer') ?></textarea>
    <br>
	
	<label for="publisher">Publisher</label>
    <textarea name="publisher" cols="45" rows="2"><?= set_value('publisher') ?></textarea>
    <br>

    <input type="submit" name="submit" value="Create Game item">
	<br>
	<p><a href="<?=base_url()?>games">Back</a></p>
</form>