<h2><?= esc($title) ?></h2>

<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>

<form action="/~2378632/project-root2/public/news" method="post">
    <?= csrf_field() ?>

    <label for="title">Title</label><br>
    <input type="input" name="title" value="<?= set_value('title') ?>">
    <br>

    <label for="body">Text</label><br>
    <textarea name="body" cols="45" rows="4"><?= set_value('body') ?></textarea>
    <br>

    <label for="imageupload">Upload image</label><br>
    <input type="file" name="image" id="imageupload" required><br>
    <img id="imagePreview" src="#" alt="Image Preview" style="display:none; width: 300px; height: 250px;">
    <br>

    <input type="submit" name="submit" value="Create news item"><br>

    <a class="btn btn-primary" href="https://mi-linux.wlv.ac.uk/~2378632/project-root2/public/news/">Back to cars</a>
</form>

<script>
        document.getElementById('imageupload').addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = function(e) {
                    document.getElementById('imagePreview').src = e.target.result;
                    document.getElementById('imagePreview').style.display = 'block';
                }
                reader.readAsDataURL(file);
            }
        });
    </script>