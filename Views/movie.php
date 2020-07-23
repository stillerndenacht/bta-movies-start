<?php require_once 'inc/html_header.php'; ?>

<?php if (isset($movie) && is_array($movie)) : ?>
    <table class="table table-striped">
        <tr>
            <th>ID:</th>
            <td><?php echo $movie['id']; ?></td>
        </tr>
        <tr>
            <th>Title:</th>
            <td><?php echo $movie['title']; ?></td>
        </tr>
        <tr>
            <th>Price:</th>
            <td><?php echo $movie['price']; ?></td>
        </tr>
        <tr>
            <th>Author:</th>
            <td><?php echo $movie['author']['name']; ?></td>
        </tr>
    </table>
<?php else : ?>
    <h3>Keine Daten vorhanden</h3>
<?php endif; ?>

<?php require_once 'inc/html_footer.php'; ?>