<tr class="form-field">
    <th scope="row"><label for="meta-title">Meta Title</label></th>
    <td>
        <input type="text" name="scf_extra[title]" class="limit" id="meta-title"
               value="<?= esc_html(esc_attr(get_term_meta($term->term_id, 'title', true))) ?>"><br/>
        <span class="description">Enter meta title here</span>
    </td>
</tr>
<tr class="form-field">
    <th scope="row"><label for="limit2">Meta Description</label></th>
    <td>
                <textarea name="scf_extra[description]"
                          id="limit2"><?= esc_textarea(get_term_meta($term->term_id, 'description', true)) ?></textarea><br/>
        <span class="description">Enter meta description here</span>
    </td>
</tr>
<tr class="form-field">
    <th scope="row"><label for="meta-keywords">Meta Keywords</label></th>
    <td>
        <input type="text" name="scf_extra[keywords]" id="meta-keywords"
               value="<?= esc_html(esc_attr(get_term_meta($term->term_id, 'keywords', true))) ?>"><br/>
        <span class="keywords">Enter meta keywords</span>
    </td>
</tr>