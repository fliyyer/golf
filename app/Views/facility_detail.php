<!-- app/Views/facility_detail.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facility Detail</title>
</head>

<body>
    <?php
    // Ambil judul fasilitas dari parameter URL
    $facilityTitle = $_GET['title'] ?? 'Unknown';
    ?>
    <h1><?= $facilityTitle ?></h1>
    <img src="<?= $facilityImage ?>" alt="<?= $facilityTitle ?>">
</body>

</html>