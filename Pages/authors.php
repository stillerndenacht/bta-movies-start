<?php require_once 'inc/html_header.php'; ?>

<?php if (isset($authors) && count($authors) > 0) : ?>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Vorname</th>
            <th>Nachname</th>
        </tr>
        <?php foreach ($authors as $author) : ?>
            <tr>
                <td><?php echo $author['id']; ?></td>
                <td><?php echo $author['firstname']; ?></td>
                <td><?php echo $author['lastname']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else : ?>
    <h3>Keine Daten vorhanden</h3>
<?php endif; ?>

<?php require_once 'inc/html_footer.php'; ?>