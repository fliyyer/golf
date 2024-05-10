<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Facilities</title>
    <Link rel="stylesheet" href="<?= base_url() ?>css/styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <?php include('partials/navbar.php'); ?>

    <main class="flex h-screen w-full">
        <div class="flex flex-col justify-center items-start max-w-7xl mx-auto h-full">
            <div class="bg-[#736E6E] rounded-[68px] w-[430px] h-[635px] flex flex-col justify-center items-center">
                <p class="text-[#061023] text-[25px] font-semibold">Profile</p>
                <div class="mt-[42px] mb-[96px]">
                    <svg xmlns="http://www.w3.org/2000/svg" width="177" height="168" viewBox="0 0 177 168" fill="none">
                        <g filter="url(#filter0_d_4_1039)">
                            <path d="M172 80C172 123.58 134.668 159 88.5 159C42.332 159 5 123.58 5 80C5 36.4204 42.332 1 88.5 1C134.668 1 172 36.4204 172 80Z" fill="#D9D9D9" stroke="#1E1E1E" stroke-width="2" />
                            <path d="M119.188 63.3333C119.188 79.2987 105.501 92.3333 88.5 92.3333C71.4995 92.3333 57.8125 79.2987 57.8125 63.3333C57.8125 47.3679 71.4995 34.3333 88.5 34.3333C105.501 34.3333 119.188 47.3679 119.188 63.3333Z" stroke="#1E1E1E" stroke-width="2" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M21.6867 128.985C36.2809 111.481 60.7612 100 88.4987 100C116.236 100 140.716 111.481 155.311 128.985C154.879 129.512 154.441 130.033 153.996 130.549C139.869 113.394 115.938 102 88.4987 102C61.0592 102 37.1282 113.394 23.0011 130.549C22.5562 130.033 22.1181 129.512 21.6867 128.985Z" fill="#1E1E1E" />
                        </g>
                        <defs>
                            <filter id="filter0_d_4_1039" x="0" y="0" width="177" height="168" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                                <feFlood flood-opacity="0" result="BackgroundImageFix" />
                                <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                                <feOffset dy="4" />
                                <feGaussianBlur stdDeviation="2" />
                                <feComposite in2="hardAlpha" operator="out" />
                                <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0" />
                                <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_4_1039" />
                                <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_4_1039" result="shape" />
                            </filter>
                        </defs>
                    </svg>
                </div>
                <p class="text-[#061023] text-[25px] font-semibold">Pablo Evander</p>
                <p class="text-[#061023] text-[25px]">Pablo23@gmail.com</p>
                <p class="text-[#061023] text-[25px]">0856342635421</p>
            </div>
        </div>
    </main>

    <?php include('partials/footer.php'); ?>


</body>

</html>