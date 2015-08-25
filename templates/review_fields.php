<table class="widefat">
    <tbody>
    <tr>
        <th>Star Rating</th>
        <th><input type="text" name="ahc_star_rating"
                   value="<?php echo (isset($options['ahc_star_rating'])) ? $options['ahc_star_rating'] : ""; ?>"
                   size="3"> stars
        </th>
    </tr>
    <tr>
        <th>Price</th>
        <th><input type="text" name="ahc_price"
                   value="<?php echo (isset($options['ahc_price'])) ? $options['ahc_price'] : ""; ?>" size="3"> USD
        </th>
    </tr>
    </tbody>
</table>