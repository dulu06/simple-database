<?php
// --- DB CONFIG ---
$DB_HOST = 'sql103.infinityfree.com';
$DB_USER = 'if0_40423098';
$DB_PASS = 'websanjib890';        // <-- CHANGE THIS PASSWORD ASAP
$DB_NAME = 'if0_40423098_experiment1_db';

$mysqli = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);

if ($mysqli->connect_errno) {
    die("Database connection failed.");
}

$res = $mysqli->query("SELECT * FROM users ORDER BY id ASC");
$rows = $res->fetch_all(MYSQLI_ASSOC);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Users</title>
<style>
    body{font-family:Arial;background:#f4f6f9;margin:0;padding:40px;}
    .box{max-width:800px;margin:auto;background:#fff;padding:25px;border-radius:8px;
         box-shadow:0 4px 15px rgba(0,0,0,.08);}
    h1{margin-top:0;font-size:28px;text-align:center;}
    table{width:100%;border-collapse:collapse;margin-top:20px;}
    th,td{padding:12px;border-bottom:1px solid #e5e7eb;text-align:left;}
    th{background:#f1f5f9;font-weight:bold;}
    tr:hover{background:#f9fafb;}
</style>
</head>
<body>

<div class="box">
    <h1>Users</h1>
    <table>
        <tr>
            <th>ID</th><th>Name</th><th>Email</th><th>Created</th>
        </tr>
        <?php foreach($rows as $r): ?>
        <tr>
            <td><?= htmlspecialchars($r['id']) ?></td>
            <td><?= htmlspecialchars($r['name']) ?></td>
            <td><?= htmlspecialchars($r['email']) ?></td>
            <td><?= htmlspecialchars($r['created_at']) ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</div>

</body>
</html>
