<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register - Welcome To GOLF+</title>
    <link rel="stylesheet" href="<?= base_url() ?>css/styles.css">
</head>

<style>
    .linear {
        border-radius: 46px;
        background: linear-gradient(180deg, #D9D9D9 0%, #737373 100%);
        mix-blend-mode: multiply;
    }
</style>

<body class="flex items-center bg-no-repeat bg-cover bg-center h-screen" style="background-image: url('<?= base_url('assets/background.png') ?>');">
    <div class="flex max-w-7xl items-center justify-around w-full mx-auto">
        <div class="flex flex-col">
            <h1 class="text-3xl font-bold text-[80px] uppercase text-white mb-4">Welcome TO</h1>
            <p class="text-[80px] font-bold uppercase mt-8 text-right text-white ">GOLF+</p>
            <div class="flex flex-col space-y-6 mt-28 items-center">
                <p class="bg-[#AFB1B6] w-[350px] text-center rounded-[25px] px-4 py-2 text-[36px] text-black font-bold uppercase">Golf+ Present</p>
                <p class="bg-[#AFB1B6] w-[350px] text-center rounded-[25px] px-4 py-2 text-[36px] text-black font-bold uppercase">Golf + Studio</p>
            </div>
        </div>
        <div class="bg-[#000000] max-w-md w-full px-[36px] py-[56px] rounded-[46px] bg-opacity-35 shadow-md">
            <form action="<?= base_url('register') ?>" method="post">
                <p class="text-center text-xl text-white mb-4">Register New Account</p>
                <div class="mb-4 mt-14">
                    <label for="username" class="block text-lg text-white">Username</label>
                    <input type="text" name="username" id="username" class="form-input mt-1 p-2 w-full bg-[#000000] bg-opacity-25 rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="phone" class="block text-lg text-white">Phone</label>
                    <input type="text" name="phone" id="phone" class="form-input mt-1 p-2 w-full bg-[#000000] bg-opacity-25 rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-lg text-white">Password</label>
                    <input type="password" name="password" id="password" class="form-input mt-1 p-2 w-full bg-[#000000] bg-opacity-25 rounded-lg">
                </div>
                <button type="submit" class="w-full bg-black text-white py-2 uppercase font-semibold px-4 rounded-md mb-8 hover:bg-[#D9D9D9] hover:text-black focus:outline-none">Sign Up</button>
            </form>
        </div>
    </div>
</body>

</html>