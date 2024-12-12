<?php
// الاتصال بقاعدة البيانات
$host = "localhost";
$user = "root";
$password = "";
$dbname = "retech";

// إنشاء الاتصال
$mysqli = new mysqli($host, $user, $password);

// التحقق من وجود أخطاء في الاتصال
if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

// تعيين مجموعة الأحرف إلى UTF-8
$mysqli->set_charset("utf8mb4");

// التحقق من وجود قاعدة البيانات
if (!$mysqli->select_db($dbname)) {
    // قاعدة البيانات غير موجودة، نقوم بإنشائها
    $createDbQuery = "CREATE DATABASE `$dbname` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;";
    if ($mysqli->query($createDbQuery) === TRUE) {
        echo "Database created successfully.\n";
    } else {
        die("Error creating database: " . $mysqli->error);
    }
    // اختيار قاعدة البيانات بعد إنشائها
    $mysqli->select_db($dbname);
}

// التحقق من وجود جدول "orders"
$tableExistsQuery = "SHOW TABLES LIKE 'orders'";
$result = $mysqli->query($tableExistsQuery);

if ($result->num_rows == 0) {
    // جدول "orders" غير موجود، نقوم بإنشائه
    $createTableQuery = "
    CREATE TABLE `orders` (
        `id` INT NOT NULL AUTO_INCREMENT,
        `name` VARCHAR(100) NOT NULL,
        `email` VARCHAR(100) NOT NULL,
        `mobile` VARCHAR(15) NOT NULL,
        `progect_name` VARCHAR(255) NOT NULL,
        `progect_description` TEXT NOT NULL,
        `date` DATETIME NOT NULL,
        PRIMARY KEY (`id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    ";

    if ($mysqli->query($createTableQuery) === TRUE) {
        echo "Table 'orders' created successfully.\n";
    } else {
        die("Error creating table: " . $mysqli->error);
    }
}

// معالجة الطلب POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // التحقق من صحة البيانات المدخلة
    $name = trim($_POST['name']);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $mobile = trim($_POST['mobile']);
    $progect_name = trim($_POST['progect_name']);
    $progect_description = trim($_POST['progect_description']);
    $date = gmdate('Y-m-d H:i:s');

    // التحقق من صحة البيانات المدخلة
    if (empty($name) || !filter_var($email, FILTER_VALIDATE_EMAIL) || empty($mobile) || empty($progect_name) || empty($progect_description)) {
        echo "error: Invalid input.";
        exit;
    }

    // إعداد الاستعلام باستخدام prepared statement
    $query = "INSERT INTO orders (name, email, mobile, progect_name, progect_description, date) 
              VALUES (?, ?, ?, ?, ?, ?)";

    // تحضير الاستعلام
    if ($stmt = $mysqli->prepare($query)) {
        // ربط المعاملات
        $stmt->bind_param("ssssss", $name, $email, $mobile, $progect_name, $progect_description, $date);

        // تنفيذ الاستعلام
        if ($stmt->execute()) {
            echo "success";
        } else {
            echo "error: " . $stmt->error;
        }

        // غلق الاستعلام
        $stmt->close();
    } else {
        echo "error: Failed to prepare statement.";
    }
}

// غلق الاتصال بقاعدة البيانات
$mysqli->close();
?>
