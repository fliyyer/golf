<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facilities</title>
    <Link rel="stylesheet" href="<?= base_url() ?>css/styles.css">
</head>

<body>
    <?php include('partials/navbar.php'); ?>

    <main class="flex w-full">
        <div class="flex flex-col justify-center items-start max-w-7xl mx-auto h-full">
            <img src="<?= base_url('assets/logo.png') ?>" class="py-36" alt="GOLF+STUDIO">
        </div>
    </main>
    <section class="flex flex-col justify-center items-center max-w-7xl mx-auto">
        <div class="grid grid-cols-3 pb-32 gap-10">
            <div>
                <img class="w-[393px] hover:scale-105 duration-300 h-[266px] rounded-md" src="<?= base_url('assets/g1.png') ?>" alt="Concordia shooting range">
                <h1 class="text-lg font-bold uppercase mt-1">Concordia shooting range</h1>
                <p class="text-sm">Rp 500.000.00 (100Ball) - Rp 1.000.000.00 (150Ball)</p>
            </div>
            <div>
                <img class="w-[393px] hover:scale-105 duration-300 h-[266px] rounded-md" src="<?= base_url('assets/g2.png') ?>" alt="DAZN shooting range">
                <h1 class="text-lg font-bold uppercase mt-1">DAZN shooting range</h1>
                <p class="text-sm">Rp 750.000.00 (100Ball) - Rp 900.000.00 (150Ball)</p>
            </div>
            <div>
                <img class="w-[393px] hover:scale-105 duration-300 h-[266px] rounded-md" src="<?= base_url('assets/g3.png') ?>" alt="ASTRO shooting range">
                <h1 class="text-lg font-bold uppercase mt-1">ASTRO shooting range</h1>
                <p class="text-sm">Rp 650.000.00 (Ball) - Rp 850.000.00 (150Ball) </p>
            </div>
            <div>
                <img class="w-[393px] hover:scale-105 duration-300 h-[266px] rounded-md" src="<?= base_url('assets/g4.png') ?>" alt="RIVERDALE shooting range">
                <h1 class="text-lg font-bold uppercase mt-1">RIVERDALE shooting range</h1>
                <p class="text-sm">Rp 1.000.000.00 (100Ball) - Rp 1.500.000.00 (150Ball)</p>
            </div>
            <div>
                <img class="w-[393px] hover:scale-105 duration-300 h-[266px] rounded-md" src="<?= base_url('assets/g5.png') ?>" alt="CADIA shooting range">
                <h1 class="text-lg font-bold uppercase mt-1">CADIA shooting range</h1>
                <p class="text-sm">Rp 1.250.000.00 (100Ball) - Rp 2.050.000.00 (150Ball)</p>
            </div>
            <div>
                <img class="w-[393px] hover:scale-105 duration-300 h-[266px] rounded-md" src="<?= base_url('assets/g6.png') ?>" alt="DOHA shooting range">
                <h1 class="text-lg font-bold uppercase mt-1">DOHA shooting range</h1>
                <p class="text-sm">Rp 1.150.000.00 (100Ball) - Rp 1.500.000.00 (150Ball)</p>
            </div>
        </div>
    </section>
    <?php include('partials/footer.php'); ?>
</body>

</html>