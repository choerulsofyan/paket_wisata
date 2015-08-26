<div class="user_info_header">
    <H2>Informasi Keanggotaan Anda</H2>
</div>

<div class="user_info">
    <table>
        <?php foreach ($user_info as $key => $value){ ?>
            <tr>
                <td>
                    <?php echo $key?>
                </td>
                <td> 
                    : <?php echo $value?>
                </td>
            </tr>
        <?php } ?>
    </table>
</div>

<div class="pdf_download">
    <?php echo $link_download?>
</div>