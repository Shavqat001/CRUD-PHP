<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<form class="form-create" action="/" method="post">
    <legend>Add a Person</legend>
    <input type="text" placeholder="your name" name="name" required>
    <input type="text" placeholder="your age" name="age" required>
    <input type="text" placeholder="your nation" name="nation" required>
    <button class="create-btn" type="submit" name="create">create</button>
</form>

<script>
    document.addEventListener('DOMContentLoaded', function () {
    let editBtns = document.querySelectorAll('.edit-btn');
    let fields = document.querySelectorAll('.input-data-from-bd');

    fields.forEach(field => {
        field.addEventListener('focus', () => {
            let parentForm = field.closest('form');
            let editBtn = parentForm.querySelector('.edit-btn');
            if (editBtn) {
                editBtn.style.display = 'inline-block';
            }
        });

        field.addEventListener('blur', () => {
            let parentForm = field.closest('form');
            let editBtn = parentForm.querySelector('.edit-btn');
            if (editBtn) {
                editBtn.style.display = 'none';
            }
        });
    });
});
</script>
</body>
</html>
