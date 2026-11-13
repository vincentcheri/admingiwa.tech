<?php
$images = [
    "https://images.unsplash.com/photo-1511379938547-c1f69419868d?w=800&q=80",
    "https://images.unsplash.com/photo-1525201548942-d8732f6617a0?w=800&q=80",
];
$pick = $images[array_rand($images)];
?>
<!DOCTYPE html>
<html>
<head><title>Random Guitar</title></head>
<body style="text-align:center;font-family:sans-serif;padding:40px">
    <h1>Random Guitar Image</h1>
    <img src="<?= $pick ?>" style="max-width:600px;border-radius:12px">
    <p><a href="rand.php">Reload</a> | <a href="index.html">Back home</a></p>
</body>
</html>
