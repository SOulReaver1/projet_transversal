<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 class="my-4">Newsletter</h1>

    <ul class="list-group">
        <?php foreach($getEmail as $key => $value):?>
            <?php  if ($key%2 == 1):?>
            <li class="list-group-item bg-newletter">
                <h4>
                    <?php echo $value->email;?>
                </h4>
                <h6>
                    <?php echo $value->created_at;?>
                </h6>
            </li>
            <?php else:?>
            <li class="list-group-item">
                <h4>
                    <?php echo $value->email;?>
                </h4>
                <h6>
                    <?php echo $value->created_at;?>
                </h6>
            </li>
            <?php endif;?>
        <?php endforeach;?>
    </ul>

</body>
</html>