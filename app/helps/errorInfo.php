<?php if (count($errMsg) > 0): ?>
    <ul>
        <?php foreach ($errMsg as $error): ?>
            <li><?=$error; ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
