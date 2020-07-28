<?php require_once 'inc/html_header.php'; ?>

<form method="post" class="" action="/movies/store<?php if ($id) : echo "/$id";
                                                    endif; ?>">
    <div class="form-group row">
        <label for="author_id" class="col-md-2 col-form-label">Autor</label>
        <div class="col-md-10">
            <select id="author_id" name="author_id" class="form-control col-sm-12 col-md-6 px-1" <?php if ($data) : ?> value="<?php echo $data['author_id'] ?>" <?php endif; ?> required>
                <option value="">Bitte wählen</option>
                <option value="1">Autor 1</option>
                <option value="2" selected>Autor 2</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <label for="title" class="col-md-2 col-form-label">Titel</label>
        <div class="col-md-10">
            <input type="text" id="title" name="title" class="form-control col-sm-12 col-md-6 px-1" <?php if ($data) : ?> value="<?php echo $data['title'] ?>" <?php endif; ?> required />
        </div>
    </div>

    <div class="form-group row">
        <label for="price" class="col-md-2 col-form-label">Preis</label>
        <div class="col-md-10">
            <input type="text" id="price" name="price" class="form-control col-sm-12 col-md-6 px-1" <?php if ($data) : ?> value="<?php echo $data['price'] ?>" <?php endif; ?> required />
        </div>
    </div>

    <div class="form-group row">
        <div class="col-md-auto float-right">
            <input type="submit" id="save" name="save" value="Save" role="button" class="btn btn-primary col-md-auto px-5" />
        </div>
    </div>
</form>

<?php require_once 'inc/html_footer.php'; ?>