<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - My Website</title>
    <Link rel="stylesheet" href="<?= base_url() ?>css/styles.css">
</head>

<body>
    <?php include('partials/navbar.php'); ?>

    <main class="flex w-full h-[668px] bg-cover bg-center" style="background-image: url('<?= base_url('assets/bg-home.png') ?>');">
        <div class="flex flex-col justify-center items-start max-w-7xl mx-auto h-full">
            <p class="text-white text-[25px]">Design By Golf+Studio </p>
            <h1 class="text-white text-[65px] uppercase font-bold">Feel the sensation of playing golf</h1>
            <button class="bg-[#eaeaea] text-black mt-2 px-4 py-2 rounded">Explore Now</button>
        </div>
    </main>
    <section class="flex flex-col justify-center items-center max-w-7xl mx-auto">
        <h1 class="text-center text-5xl font-bold uppercase my-16">play golf and upgrade your skill</h1>
        <div class="flex space-x-56 mb-20">
            <img class="rounded-md shadow-xl w-60 hover:scale-105 duration-300 h-60" src="<?= base_url('assets/home1.png') ?>" alt="Lapangan 1">
            <img class="rounded-md shadow-xl w-60 hover:scale-105 duration-300 h-60" src="<?= base_url('assets/home2.png') ?>" alt="Lapangan 2">
            <img class="rounded-md shadow-xl w-60 hover:scale-105 duration-300 h-60" src="<?= base_url('assets/home3.png') ?>" alt="Lapangan 3">
        </div>
    </section>
    <footer class="flex gap-48 justify-center items-center h-40 text-white">
        <div class="flex">
            <img class="w-[35px]" src="<?= base_url('assets/ig.png') ?>" alt="">
            <span class="ml-2 text-2xl font-medium text-black">GOLF+STUDIO</span>
        </div>
        <div class="flex">
            <img class="w-[35px]" src="<?= base_url('assets/x.png') ?>" alt="">
            <span class="ml-2 text-2xl font-medium text-black">GOLF+STUDIO</span>
        </div>
        <div class="flex">
            <img class="w-[35px]" src="<?= base_url('assets/fb.png') ?>" alt="">
            <span class="ml-2 text-2xl font-medium text-black">GOLF+STUDIO</span>
        </div>
    </footer>
</body>

</html>