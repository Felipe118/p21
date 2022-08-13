<?php

    namespace App\Helpers;

    use App\DB\Connection;

    $conn = Connection::getDB();

        // Set session
    session_start();
    if(isset($_POST['records-limit'])){
        $_SESSION['records-limit'] = $_POST['records-limit'];
    }

    // Dynamic limit
    $limit = isset($_SESSION['records-limit']) ? $_SESSION['records-limit'] : 5;

    // Get total records
    $sql = $conn->query("SELECT count(id) AS id FROM torcedores")->fetchAll();
    $allRecrods = $sql[0]['id'];
  
    // Calculate total pages
    $totoalPages = ceil($allRecrods / $limit);

    $limit = isset($_SESSION['records-limit']) ? $_SESSION['records-limit'] : 5;

    // Current pagination page number
    $page = (isset($_GET['page']) && is_numeric($_GET['page']) ) ? $_GET['page'] : 1;

    // Offset
    $paginationStart = ($page - 1) * $limit;

    // Limit query
    $students = $connection->query("SELECT * FROM students LIMIT $paginationStart, $limit")->fetchAll();

   
?>
<html>
<!-- Pagination -->
<nav aria-label="Page navigation example mt-5">
        <ul class="pagination justify-content-center">
            <li class="page-item <?php if($page <= 1){ echo 'disabled'; } ?>">
                <a class="page-link"
                    href="<?php if($page <= 1){ echo '#'; } else { echo "?page=" . $prev; } ?>">Previous</a>
            </li>

            <?php for($i = 1; $i <= $totoalPages; $i++ ): ?>
            <li class="page-item <?php if($page == $i) {echo 'active'; } ?>">
                <a class="page-link" href="/list?page=<?= $i; ?>"> <?= $i; ?> </a>
            </li>
            <?php endfor; ?>

            <li class="page-item <?php if($page >= $totoalPages) { echo 'disabled'; } ?>">
                <a class="page-link"
                    href="<?php if($page >= $totoalPages){ echo '#'; } else {echo "?page=". $next; } ?>">Next</a>
            </li>
        </ul>
    </nav>
</div>

<!-- jQuery + Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
    $(document).ready(function () {
        $('#records-limit').change(function () {
            $('form').submit();
        })
    });
</script>
</body>


</html>
 