<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <Link rel="stylesheet" href="<?= base_url() ?>css/styles.css">
</head>

<body>
    <?php include('partials/navbar.php'); ?>

    <main class="flex w-full h-[668px] bg-cover bg-center" style="background-image: url('<?= base_url('assets/about.png') ?>');">
        <div class="flex flex-col justify-center items-start max-w-7xl mx-auto h-full">
            <img src="<?= base_url('assets/logo2.png') ?>" alt="GOLF+STUDIO">
        </div>
    </main>
    <section class="flex flex-col justify-center items-center max-w-7xl mx-auto">
        <h2 class="text-center text-2xl font-bold uppercase leading-10 my-28">Golf+ provides an inspiring and informative platform for golf lovers.
            We hope to be your loyal companion in exploring the beauty and challenges offered by the sport of golf.</h2>
        <div class="flex space-x-48 mt-10 mb-48">
            <div class="flex flex-col items-center">
                <img src="<?= base_url('assets/ab1.png') ?>" alt="">
                <p class="text-black uppercase font-bold mt-4 text-center text-xl">Breaking golf+<br> records</p>
            </div>
            <div class="flex flex-col items-center">
                <img src="<?= base_url('assets/ab2.png') ?>" alt="">
                <p class="text-black uppercase font-bold mt-4 text-center text-xl">Find Golf Course you<br> like </p>
            </div>
            <div class="flex flex-col items-center">
                <img src="<?= base_url('assets/ab3.png') ?>" alt="">
                <p class="text-black uppercase font-bold mt-4 text-center text-xl">Select the Golf course<br> you prefer via Golf+.</p>
            </div>
        </div>
    </section>
</body>

</html>