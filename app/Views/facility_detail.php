<!-- app/Views/facility_detail.php -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <Link rel="stylesheet" href="<?= base_url() ?>css/styles.css">
    <title>Facility Detail</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="<?= base_url('path_to/sweetalert2.min.css') ?>">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<style>
    /* CSS untuk styling radio button */
    .radio-container {
        display: flex;
        align-items: center;
    }

    .radio-container input {
        display: none;
    }

    .checkmark {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        border: 2px solid #000;
        margin-right: 10px;
        display: inline-block;
    }

    .radio-container input:checked+.checkmark {
        background-color: #000;
    }
</style>

<body>
    <?php include('partials/navbar.php'); ?>
    <?php
    $facilityTitle = $_GET['title'] ?? 'Unknown';
    ?>
    <main class="flex w-full h-[668px] bg-cover bg-center" style="background-image: url('<?= $facilityImage ?>');">
        <div class="flex flex-col justify-end items-start max-w-7xl h-full">
            <h1 class="text-white ml-5 mb-6 text-[65px] uppercase font-bold"><?= $facilityTitle ?></h1>
        </div>
    </main>
    <div class="max-w-7xl mx-auto my-24 flex justify-between">
        <div>
            <h1 class="text-black text-5xl font-bold">DAY</h1>
            <select class="bg-[#AFB1B6] p-2 mt-5 rounded-lg font-semibold" id="daySelect">
                <option value="monday">Monday</option>
                <option value="tuesday">Tuesday</option>
                <option value="wednesday">Wednesday</option>
                <option value="thursday">Thursday</option>
                <option value="friday">Friday</option>
                <option value="saturday">Saturday</option>
                <option value="sunday">Sunday</option>
            </select>
            <h1 class="text-black text-5xl mt-[30px] font-bold">TEE TIME</h1>
            <div class="flex gap-16 mt-5" id="teeTimeButtons">
                <button class="tee-time-button bg-[#AFB1B6] py-2 px-4 rounded-lg font-semibold" value="08:00">08:00</button>
                <button class="tee-time-button bg-[#AFB1B6] py-2 px-4 rounded-lg font-semibold" value="10:00">10:00</button>
                <button class="tee-time-button bg-[#AFB1B6] py-2 px-4 rounded-lg font-semibold" value="16:00">16:00</button>
                <button class="tee-time-button bg-[#AFB1B6] py-2 px-4 rounded-lg font-semibold" value="19:00">19:00</button>
            </div>
            <h1 class="text-black text-5xl mt-[30px] font-bold">PLAYER</h1>
            <div class="flex gap-16 mt-5" id="playerButtons">
                <button class="player-button bg-[#AFB1B6] py-2 px-4 rounded-lg font-semibold" value="1">1</button>
                <button class="player-button bg-[#AFB1B6] py-2 px-4 rounded-lg font-semibold" value="2">2</button>
            </div>
            <h1 class="text-black text-5xl mt-[30px] font-bold">PRICE</h1>
            <div class="flex gap-16 mt-5" id="priceButtons">
                <button class="price-button bg-[#AFB1B6] py-2 px-4 rounded-lg font-semibold" value="500000">Rp. 500.000,00</button>
                <button class="price-button bg-[#AFB1B6] py-2 px-4 rounded-lg font-semibold" value="1000000">Rp. 1.000.000,00</button>
            </div>
        </div>
        <div class="flex flex-col relative">
            <h1 class="text-black text-5xl font-bold">PAYMENT METHOD</h1>
            <div>
                <div class="bg-[#D9D9D9] px-5 py-3 mt-5 rounded-[30px]">
                    <label class="radio-container flex items-center justify-between">
                        <div class="flex flex-col">
                            <p>**** **** **** 467</p>
                            <p class="text-[#AFB1B6]">VISA</p>
                        </div>
                        <div>
                            <input type="radio" name="payment_method" value="visa">
                            <span class="checkmark border border-black"></span>
                        </div>
                    </label>
                </div>
                <div class="bg-[#D9D9D9] px-5 py-3 mt-5 rounded-[30px]">
                    <label class="radio-container flex items-center justify-between">
                        <div class="flex flex-col">
                            <p>**** **** **** 467</p>
                            <p class="text-[#AFB1B6]">VIRTUAL ACCOUNT</p>
                        </div>
                        <div>
                            <input type="radio" name="payment_method" value="virtual_account">
                            <span class="checkmark border border-black"></span>
                        </div>
                    </label>
                </div>
            </div>
            <div class="flex justify-end gap-2 absolute bottom-0 right-0">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="38" viewBox="0 0 50 38" fill="none">
                    <path d="M30.9621 0V12.3848H0V24.7697H30.9621V37.1545L49.5393 18.3915L30.9621 0Z" fill="black" />
                </svg>
                <button onclick="bookFacility()" class="bg-[#000] hover:bg-[#AFB1B6] hover:text-[#000] font-semibold px-5 rounded-[15px] py-2 text-white">BOOKING</button>
            </div>
        </div>
    </div>
    <?php include('partials/footer.php'); ?>
    <script>
        function bookFacility() {
            var selectedDay = document.getElementById('daySelect').value;
            var selectedTeeTime = document.querySelector('.tee-time-button.bg-red-600').value;
            var selectedPlayer = document.querySelector('.player-button.bg-red-600').value;
            var selectedPrice = document.querySelector('.price-button.bg-red-600').value;
            var selectedPaymentMethod = document.querySelector('input[name="payment_method"]:checked').value;

            $.ajax({
                type: 'POST',
                url: '<?= base_url('save-booking') ?>',
                data: {
                    selectedDay: selectedDay,
                    selectedTeeTime: selectedTeeTime,
                    selectedPlayer: selectedPlayer,
                    selectedPrice: selectedPrice,
                    selectedPaymentMethod: selectedPaymentMethod,
                    title: '<?= $facilityTitle ?>',
                },
                success: function(response) {
                    Swal.fire({
                        title: 'Success',
                        text: 'Booking successful!',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = '<?= base_url('/account') ?>';
                        }
                    });

                },
                error: function(xhr, status, error) {
                    alert('Error: ' + error);
                }
            });
        }

        document.querySelectorAll('.tee-time-button').forEach(item => {
            item.addEventListener('click', event => {
                document.querySelectorAll('.tee-time-button').forEach(btn => {
                    btn.classList.remove('bg-red-600');
                });
                event.target.classList.add('bg-red-600', 'text-white');
            });
        });

        document.querySelectorAll('.player-button').forEach(item => {
            item.addEventListener('click', event => {
                document.querySelectorAll('.player-button').forEach(btn => {
                    btn.classList.remove('bg-red-600');
                });
                event.target.classList.add('bg-red-600', 'text-white');
            });
        });

        document.querySelectorAll('.price-button').forEach(item => {
            item.addEventListener('click', event => {
                document.querySelectorAll('.price-button').forEach(btn => {
                    btn.classList.remove('bg-red-600');
                });
                event.target.classList.add('bg-red-600', 'text-white');
            });
        });
    </script>
</body>



</html>



</html>