<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Patients:</h1>

        <table class="table">
            <thead>
            <tr>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Action</th>
            </tr>
            </thead>
            <tbody>
            <?php
                foreach ($patients as $patient) {
                    echo "<tr>
                            <td>$patient->first_name</td>
                            <td>$patient->last_name</td>
                            <td><button type='button' class='btn btn-primary btn-xs'>Edit</button></td>
                        </tr>";
                }
            ?>
            </tbody>
        </table>
    </div>
</div>

<style>
    .table th {
        text-align: center;
    }
</style>

