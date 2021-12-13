<tr id="<?php echo $row['id']; ?>">

    <th scope='row'>
        <?php echo $row['id']; ?>
    </th>
    <td class='url'>
        <a href="<?php echo $row['url']; ?>">
            <?php echo $row['url']; ?>
        </a>
    </td>
    <td class='category'>
        <?php echo $row['category']; ?>
    </td>
    <td><a href="#" data-id="<?php echo $row['id']; ?>" class="edit">edit</a></td>
    <td>
        <a data-id="<?php echo $row['id']; ?>" class="del" href="#">
            x
        </a>
    </td>
</tr>