<table> 
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_a">Meta A</label>
        </th>
        <td>
            <input type="textarea" rows="10" id="meta_a" name="meta_a" value="<?php echo @get_post_meta($post->ID, 'meta_a', true); ?>" />
        </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_a">Meta B</label>
        </th>
        <td>
            <select multiple value="<?php echo @get_post_meta($post->ID, 'meta_b', true); ?>" >
                <option >Чебурашка</option>
                <option>Крокодил Гена</option>
                <option>Шапокляк</option>
                <option>Крыса Лариса</option>
            </select>




            <!--<input type="text" id="meta_b" name="meta_b" value="?php echo @get_post_meta($post->ID, 'meta_b', true); ?>" />!-->
        </td>
    </tr>
    <tr valign="top">
        <th class="metabox_label_column">
            <label for="meta_a">Meta C</label>
        </th>
        <td>
            <input type="file" name="f">
            <input type="submit" value="Отправить">

            <!--<input type="text" id="meta_c" name="meta_c" value="?php echo @get_post_meta($post->ID, 'meta_c', true); ?>" />!-->
        </td>
    </tr>
    <tr>
       <td><input type="hidden" id="_wpnonce" name="_wpnonce" value="796c7766b1" />
           <input type="hidden" name="_wp_http_referer" value="/wp-admin/edit-comments.php" /></td>
    </tr>
</table>
