<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users List</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Full Name</th>
            <th>Email</th>
            <th>Username</th>
        </tr>

        <?php foreach($user->rows as $item): ?>
        <tr>
            <td><?= $item->id ?></td>
            <td><?= $item->fullname ?></td>
            <td><?= $item->email ?></td>
            <td><?= $item->username ?></td>
        </tr>
        <?php endforeach ?>

    </table>
</body>
</html>