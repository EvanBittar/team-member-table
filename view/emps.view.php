<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
    <title>Team Members Table</title>
</head>
<body>
    <h2>Employer</h2>
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
    <?php foreach($tasks as $task): ?>
            <tr>
                <td><a href="emp?id=<?= $task['id'] ?>" class="edit-link"><?=  $task['title'] ?></a></td>
                <td><?=  $task['body'] ?></td>
                <td><a href="edit?id=<?= $task['id'] ?>" class="edit-link">Edit</a></td>
            </tr>
    <?php endforeach ?>
</tbody>
</table>
<div style="text-align: right; margin-top: 10px;">
    <a href="create">
        <button style="padding: 6px 12px;">Add New</button>
    </a>
</div>
</div>

</body>
</html>