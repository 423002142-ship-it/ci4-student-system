<!DOCTYPE html>
<html>
<head>
    <title>Students List</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Students List</h1>

    <a href="/students/create" class="btn btn-primary mb-3">Add Student</a>

    <form method="get" action="/students" class="mb-3 d-flex">
        <input type="text" name="search" class="form-control me-2" placeholder="Search...">
        <button type="submit" class="btn btn-success">Search</button>
    </form>

    <table class="table table-bordered table-striped">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Course</th>
            <th>Action</th>
        </tr>

        <?php foreach ($students as $student): ?>
        <tr>
            <td><?= $student['id'] ?></td>
            <td><?= $student['name'] ?></td>
            <td><?= $student['email'] ?></td>
            <td><?= $student['course'] ?></td>
            <td>
                <a href="/students/edit/<?= $student['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="/students/delete/<?= $student['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Delete this student?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <?= $pager->links(); ?>
</div>
</body>
</html>