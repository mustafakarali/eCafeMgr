<div class="sub_kanan">
    <h2>Product &raquo; Add</h2><hr noshade>
    <?= validation_errors(); ?>
    <form id="f_products" method="post">
    <table width="40%" border="0" cellpadding="5" cellspacing="0" class="tbview">
        <tr>
            <td>Product: <strong>Category</strong></td>
            <td width="10">:</td>
            <td>
                <select name="catid">
                    <?= $sel_prdcats ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Product: <strong>Tag</strong></td>
            <td width="10">:</td>
            <td>
                <select name="tagid">
                    <?= $sel_tags ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Product: <strong>Name</strong></td>
            <td width="10">:</td>
            <td><input name="name" type="text" id="name" size="32" maxlength="64" value="<?= set_value('name', $name); ?>"></td>
        </tr>
        <tr>
            <td>Product: <strong>Price</strong></td>
            <td width="10">:</td>
            <td><input name="price" type="text" id="price" size="32" maxlength="64" value="<?= set_value('price', $price); ?>"></td>
        </tr>
    </table>
    <div>&nbsp;</div>
    <input type="button" value="Save [&radic;]" onclick="formpost('f_products', '<?= base_url() ?>products/Products/adding');">&nbsp;
    <input type="button" value="Cancel [X]" onclick="javascript:_goto('products/Products');">&nbsp;
    </form>
</div>

<script type="text/javascript">
    function isInputValid() {
        return true;
    }
</script>