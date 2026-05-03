<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
    <h1>Edit Student</h1>

    <form action="/students/update/<?= $student['id'] ?>" method="post">
        <label>Name</label><br>
        <input type="text" name="name" value="<?= $student['name'] ?>" required><br><br>

        <label>Email</label><br>
        <input type="email" name="email" value="<?= $student['email'] ?>" required><br><br>

        <label>Course</label><br>
        <input type="text" name="course" value="<?= $student['course'] ?>" required><br><br>

        <button type="submit">Update</button>
    </form>

    <br>
    <a href="/students">Back</a>
</body>
</html>