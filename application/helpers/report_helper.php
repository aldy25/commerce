<?php
function format_numbers($n)
{
    if($n < 0)
    {
        ?>
        <b class="col-red">Rp.<?= number_format($n) ?></b>
        <?php
    }
    else if($n == 0)
    {
        ?>
        <b class="col-grey">Rp.0</b>
        <?php
    }
    else
    {
        ?>
        <b class="col-green">Rp.<?= number_format($n) ?></b>
        <?php
    }
}