<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
    <h1 class="mb-4">Edit Student</h1>

    <form action="/students/update/<?= $student['id'] ?>" method="post">
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" name="name" class="form-control" value="<?= $student['name'] ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" class="form-control" value="<?= $student['email'] ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Course</label>
            <input type="text" name="course" class="form-control" value="<?= $student['course'] ?>" required>
        </div>

        <button type="submit" class="btn btn-warning">Update</button>
        <a href="/students" class="btn btn-secondary">Back</a>
    </form>
</div>
</body>
</html>