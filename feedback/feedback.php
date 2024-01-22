<?php if (session_status() === PHP_SESSION_NONE) : ?>
    <ul>
        <?php foreach ($_SESSION['errors'] as $error) : ?>
            <li class="error"><?php echo $error; ?></li>
        <?php endforeach; ?>
        <?php foreach ($_SESSION['success'] as $success) : ?>
            <li class="success"><?php echo $success; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>