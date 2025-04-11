<h2><?= esc($title) ?></h2>
<form action="<?= base_url('motormarket/create') ?>" method="post">
    <?= csrf_field() ?>

    <label for="make">Make</label><br>
    <input type="input" name="make" value="<?= set_value('make') ?>"><br>

    <label for="model">Model</label><br>
    <input type="input" name="model" value="<?= set_value('model') ?>"><br>

    <label for="description">Description</label><br>
    <textarea name="description" cols="45" rows="4"><?= set_value('description') ?></textarea><br>

    <label for="price">Price</label><br>
    <input type="input" name="price" value="<?= set_value('price') ?>"><br>

    <label for="milage">Milage</label><br>
    <input type="input" name="milage" value="<?= set_value('milage') ?>"><br>

    <label for="year">Year</label><br>
    <input type="input" name="year" value="<?= set_value('year') ?>"><br>

    <label for="gearbox">Gearbox</label><br>
    <input type="input" name="gearbox" value="<?= set_value('gearbox') ?>"><br>

    <label for="fuel">Fuel</label><br>
    <input type="input" name="fuel" value="<?= set_value('fuel') ?>"><br>

    <label for="image">Image URL</label><br>
    <input type="input" name="image" value="<?= set_value('image') ?>" required><br>

    <input type="submit" name="submit" value="Create car item"><br>

    <a class="btn btn-primary" href="<?= base_url('/motormarket/cars') ?>">Back to cars</a>
</form>