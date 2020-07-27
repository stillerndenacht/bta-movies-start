<?php require_once 'inc/html_header.php'; ?>

<?php if (isset($list) && count($list) > 0): ?>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Price</th>
        </tr>
        <?php foreach ($list as $movie) : ?>
            <tr>
                <td><?php echo $movie['id']; ?></td>
                <td><a href="/movies/<?php echo $movie['id']; ?>"><?php echo $movie['title']; ?></a></td>
                <td><?php echo $movie['price']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else: ?>
    <h3>Keine Daten vorhanden</h3>
<?php endif; ?>

<?php require_once 'inc/html_footer.php'; ?>