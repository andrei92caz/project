<h2>
    <?= $title ?>
</h2>

<?= validation_errors(); ?>
<?= form_open("posts/update");?>
    <input type="hidden" name="ID" value="<?= $post['ID'];?>">
    <div class="form-group">
        <label>Title</label>
        <input type="text" class="form-control" name="title" placeholder="Add Title" value="<?= $post['title']; ?>">
    </div>
    <div class="form-group">
        <label>Body </label>
        <textarea class="form-control" name="body" placeholder="Add Body"><?= $post['body']; ?></textarea>

    
    <label>Category</label>
    <select name="category_id" class="form-control">
        <?php foreach($categories as $category): ?>
        <option value="<?= $category['id'];?>">
            <?= $category['name']; ?>
        </option>
        <?php endforeach;?>
    </select>
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
</form>