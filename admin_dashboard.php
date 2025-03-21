<?php 
session_start();
include './connect.php'; // Подключение к базе данных

// Проверка, является ли пользователь администратором
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Получение информации о пользователе
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$_SESSION['user_id']]);
$current_user = $stmt->fetch(PDO::FETCH_ASSOC);

// Проверка на роль администратора
if (!isset($current_user['role_id']) || $current_user['role_id'] != 2) { // 2 - роль администратора
    header("Location: dashboard.php");
    exit();
}

// Обработка удаления пользователя
if (isset($_GET['delete_id'])) {
    $delete_id = $_GET['delete_id'];
    $delete_stmt = $pdo->prepare("DELETE FROM users WHERE id = ?");
    $delete_stmt->execute([$delete_id]);
    header("Location: admin_dashboard.php"); // Перезагрузка страницы после удаления
    exit();
}

// Получение списка пользователей
$stmt = $pdo->prepare("SELECT * FROM users");
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Панель администратора</title>
</head>
<body>
    <h1>Панель администратора</h1>
    <h2>Список пользователей</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Логин</th>
            <th>Роль</th>
            <th>Действия</th>
        </tr>
        <?php foreach ($users as $user): ?>
            <tr>
                <td><?php echo htmlspecialchars($user['id']); ?></td>
                <td><?php echo htmlspecialchars($user['username']); ?></td>
                <td><?php 
                    // Получаем название роли
                    $role_stmt = $pdo->prepare("SELECT role FROM roles WHERE id = ?");
                    $role_stmt->execute([$user['role_id']]);
                    $role = $role_stmt->fetch(PDO::FETCH_ASSOC);
                    echo htmlspecialchars($role['role']); 
                ?></td>
                <td>
                    <a href="admin_dashboard.php?delete_id=<?php echo htmlspecialchars($user['id']); ?>" onclick="return confirm('Вы уверены, что хотите удалить этого пользователя?');">Удалить</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p><a href="logout.php">Выйти</a></p>
</body>
</html>
