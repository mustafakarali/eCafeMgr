<div class="sub_kanan">
    <h2>Data Deletion &raquo; Confirmation</h2><hr noshade />
    <p>Are you sure want to delete all of these data?</p>
    <?= form_open('employees/Position/deleting'); ?>
    <ul>
        <?
        foreach ($position as $data):
            echo '<li>' . $data['name'] . '<input type="hidden" name="cb-' . $data['posid'] . '" value="yes" /></li>';
        endforeach;
        ?>
    </ul>
    <input type="submit" value="Continue [&raquo;]">
    <input type="button" value="Cancel [X]" onclick="javascript:_goto('employees/Position');">
    <?= form_close() ?>
</div>