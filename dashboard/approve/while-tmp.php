<tr id="<?php echo $row['id']; ?>">

    <th scope='row'>
        <?php echo $row['id']; ?>
    </th>
    <td>
        <a id='url' href="<?php echo $row['url']; ?>">
            <?php echo $row['url']; ?>
        </a>
    </td>
    <td>
        <?php echo $row['category']; ?>
    </td>
    <td>
        <?php echo $row['pending']; ?>
    </td>
    <td>
        <a data-id="<?php echo $row['id']; ?>" class="approve" name="approve" href="#">
            x
        </a>
    </td>
</tr>