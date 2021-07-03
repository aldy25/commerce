<?php
function alertFire($title,$type = NULL)
{
    if($type !== NULL)
    {
        ?>
        <script>
            swal.fire({
                title:"<?= $title ?>",
                icon:"<?= $type ?>"
            });
        </script>
        <?php
    }
}
