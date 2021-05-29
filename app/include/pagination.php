<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-center">
        <li class="page-item"><a class="page-link" href="?page=1">First</a></li>
        <?php if($page > 1): ?>
            <li class="page-item">
                <a class="page-link" href="<?php echo "?page=".($page - 1);?>">Prev</a>
            </li>
        <?php endif; ?>
        <?php if($page < $total_pages): ?>
        <li class="page-item">
            <a class="page-link" href="<?php echo "?page=".($page + 1);?>">Next</a>
        </li>
        <?php endif; ?>
        <li class="page-item"><a class="page-link" href="?page=<?php echo $total_pages; ?>">Last</a></li>
    </ul>
</nav>