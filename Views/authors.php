<?php require_once 'inc/html_header.php'; ?>

<?php if (isset($authors) && count($authors) > 0): ?>
    <table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Vorname</th>
            <th>Nachname</th>
            <?php if (isset($_SESSION['auth'])) : ?>
                <th colspan="2"><br></th> 
            <?php endif; ?> 
        </tr>
        <?php foreach ($authors as $author) : ?>
            <tr>
                <td><?php echo $author['id']; ?></td>
                <td><?php echo $author['firstname']; ?></td>
                <td><a href="/authors/<?php echo $author['id']; ?>"><?php echo $author['lastname']; ?></a></td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else: ?>
    <h3>Keine Daten vorhanden</h3>
<?php endif; ?>

<?php require_once 'inc/html_footer.php'; ?>