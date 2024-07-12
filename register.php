<?php
$email = $_POST['email'];
$name = $_POST['name'];
$password = $_POST['password'];

$error_msg = '';

if (mb_strlen($password) < 8) {
    $error_msg = 'كلمة المرور يجب أن تحتوي على 8 أحرف على الأقل';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error_msg = 'البريد الإلكتروني غير صحيح';
}
?>

<!DOCTYPE html> 
<html> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <?php if (!empty($error_msg)): ?>
        <div class="alert alert-danger"><?php echo $error_msg; ?></div>
    <?php endif; ?>

    <div class="container">
        <table class="table table-success table-striped-columns">
            <thead>
                <tr>
                    <th>الاسم</th>
                    <th>البريد الإلكتروني</th>
                    <th>كلمة المرور</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $email; ?></td>
                    <td><?php echo $password; ?></td>
                </tr>
            <tbody>
        </table>
    </div>
</body>
</html>