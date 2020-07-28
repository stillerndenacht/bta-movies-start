<?php require_once 'inc/html_header.php'; ?>

<div>
    <a href="/movies/edit" role="button" class="btn btn-primary mt-0 mb-3">Neuen Film anlegen</a>
</div>

<?php if (isset($list) && count($list) > 0) : ?>
    <table class="table table-striped"> 
        <tr>    
            <th>ID</th>
            <th>Title</th>
            <th>Price</th>

            <?php if (isset($_SESSION['auth'])) : ?>
                <th colspan="2"><br></th>
            <?php endif; ?>

        </tr>
        <?php foreach ($list as $movie) : ?>
            <tr>
                <td><?php echo $movie['id']; ?></td>
                <td><a href="/movies/<?php echo $movie['id']; ?>"><?php echo $movie['title']; ?></a></td>
                <td><?php echo $movie['price']; ?></td>
                <?php if (isset($_SESSION['auth'])) : ?>
                    <td class="col-1"><a href="/movies/edit/<?php echo $movie['id']; ?>" class="btn-sm btn-primary" role="button">Edit</a></td>
                    <td class="col-1"><a href="/movies/delete/<?php echo $movie['id']; ?>" class="btn-sm btn-danger delsoft" role="button">Delete</a></td>
                <?php endif; ?>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else : ?>
    <h3>Keine Daten vorhanden</h3>
<?php endif; ?>

<?php require_once 'inc/html_footer.php'; ?>