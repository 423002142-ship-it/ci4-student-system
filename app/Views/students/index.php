<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
</head>
<body>
    <h1>Students List</h1>

    <a href="/students/create">Add Student</a>

    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Course</th>
            <th>Action</th>
        </tr>
        <form method="get" action="/students">
    <input type="text" name="search" placeholder="Search...">
    <button type="submit">Search</button>
</form>

<br>
        <?php foreach ($students as $student): ?>
        <tr>
            <td><?= $student['id'] ?></td>
            <td><?= $student['name'] ?></td>
            <td><?= $student['email'] ?></td>
            <td><?= $student['course'] ?></td>
            <td>
                <a href="/students/edit/<?= $student['id'] ?>">Edit</a>
                <a href="/students/delete/<?= $student['id'] ?>" onclick="return confirm('Delete this student?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?= $pager->links(); ?>
</body>
</html>