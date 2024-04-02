<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Personal Abdul</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-primary">
    
    <nav class="flex mx-auto max-w-full py-10 justify-between fixed">
        <div class="ml-28 space-x-2">
            <a href="" class="text-white hover:text-red-600 font-extrabold">Home</a>
            <a href="" class="text-white hover:text-red-600 font-extrabold">Services</a>
            <a href="" class="text-white hover:text-red-600 font-extrabold">Portfolio</a>
            <a href="" class="text-white hover:text-red-600 font-extrabold">About Me</a>
        </div>

        <div class="ml-[650px]">
            <h3 class="text-xl text-white font-bold italic">Abdul<span class="text-red-600 font-semibold">Ghofur.</span></h3>
        </div>
    </nav>

    <section name="home" id="home" class="max-w-full mx-auto flex py-52 px-0">
        <div class="ml-28 text-left">
            <h1 class="text-2xl font-semibold text-white">
                Saya Abdul, saya adalah seorang            
            </h1>
            <span class="font-bold text-red-600 text-5xl">
                Front end Developer
            </span>
            <p class="mt-5 text-white">
                Saya adalah seorang profesional dalam bidang teknologi informasi yang bertanggung jawab
            </p>
            <p class=" text-white mb-4">untuk mengembangkan dan memelihara bagian depan suatu.</p>
            <a href="" class="bg-red-600 text-center py-1 px-10 rounded-md text-white">
                Download CV
            </a>
        </div>

        <div class="ml-10 -mt-14">
            <img src="https://i.ibb.co/Yp8KHFG/IMG-20240401-WA0013.jpg" alt="" class="w-[350px] h-[350px] rounded-full">
        </div>
    </section>

    <section name="services" id="services" class="max-w-full mx-auto block py-10 px-0">
        <div class="ml-28">
            <h1 class="text-4xl font-semibold text-red-600">
                Services      
            </h1>
            <p class="text-base font-medium text-white">
                Pelayanan kami mencakup desain grafis, pengembangan web, 
            </p>
            <span class="text-base font-medium text-white">dan strategi pemasaran digital.</span>

            <div class="grid grid-cols-5 grid-rows-1 gap-10 mt-5">
                <div class="bg-[#282B47] w-[300px] text-left px-5 rounded-md">
                    <h2 class="py-3 text-white text-lg font-bold">Pengembangan Website</h2>
                    <p class="text-white text-base pb-5">
                        Pengembangan website adalah proses menciptakan situs web dari awal, melibatkan desain, pengkodean, dan pengujian untuk mencapai tujuan yang ditetapkan.
                    </p>
                </div>
                <div class="bg-[#282B47] w-[300px] ml-20 text-left px-5 rounded-md">
                    <h2 class="py-3 text-white text-lg font-bold">Desain Grafis</h2>
                    <p class="text-white text-base pb-5">
                        Desain grafis adalah proses visualisasi ide dan konsep menggunakan elemen-elemen visual seperti gambar, teks, dan warna untuk menciptakan karya visual yang menarik dan berarti.
                    </p>
                </div>
                <div class="bg-[#282B47] ml-40 w-[300px] text-left px-5 rounded-md">
                    <h2 class="py-3 text-white text-lg font-bold">Pemasaran Digital</h2>
                    <p class="text-white text-base pb-5">
                        Pemasaran digital adalah penggunaan platform online dan strategi digital untuk mempromosikan produk atau layanan.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <section name="portfolio" id="portfolio" class="max-w-full mx-auto block py-40 px-0">
        <div class="ml-28 text-left">
            <h1 class="text-4xl font-semibold text-red-600">
                Portfolio      
            </h1>
            <p class="text-base font-medium text-white">
                portfolio pada web personal adalah bagian dari situs yang menampilkan 
            </p>
            <span class="text-base font-medium text-white">karya-karya atau proyek yang telah dilakukan oleh pemiliknya.</span>

            <div class="grid grid-cols-5 grid-rows-1 gap-10 mt-5">
                <div class="bg-[#282B47] w-[300px] text-center px-5 rounded-md">
                    <img src="https://i.ibb.co/ckqF2Gc/d3235f447c1f0ae24cf282764d35e502.png" alt="" class="w-[300px] h-[200px] py-5">
                    <h2 class="pb-5 text-white text-base font-bold">Pengembangan Website Sekolah SD Bahari</h2>
                </div>

                <div class="bg-[#282B47] ml-20 w-[300px] text-center px-5 rounded-md">
                    <img src="https://i.ibb.co/9N9knbk/images.jpg" alt="" class="w-[300px] h-[200px] py-5">
                    <h2 class="pb-5 text-white text-base font-bold">Desain Grafis Telur Asin Khas Brebes</h2>
                </div>

                <div class="bg-[#282B47] ml-40 w-[300px] text-center px-5 rounded-md">
                    <img src="https://i.ibb.co/9TrgCw0/images.png" alt="" class="w-[300px] h-[200px] py-5">
                    <h2 class="pb-5 text-white text-base font-bold">Digital Marketing Agensi Indonesia</h2>
                </div>
            </div>
    </section>

    <section name="about" id="about" class="max-w-full mx-auto block py-32 px-0">
        <div class="ml-28 text-left">
            <h1 class="text-4xl font-semibold text-red-600">
                Hubungi saya     
            </h1>

            <!-- <div class> -->
                <form action="">
                    <div class="text-white text-xl my-5 space-x-2">
                        <label for="nama">Nama </label>
                        <input type="text" name="nama" id="nama" class="w-[500px] rounded-md px-2 text-black">
                    </div>

                    <div class="text-white text-xl my-5 space-x-2">
                        <label for="email">Email </label>
                        <input type="email" name="email" id="email" class="w-[503px] rounded-md px-2 text-black">
                    </div>

                    <div class="text-white text-xl my-5 space-x-2">
                        <textarea name="pesan" id="pesan" cols="100" rows="10" class="text-black rounded-md px-2" placeholder="Pesan..."></textarea>
                    </div>

                    <button type="submit" class="bg-red-600 text-center py-1 px-10 rounded-md text-white">Kirim</button>
                </form>
            <!-- </div> -->
        </div>
    </section>


</body>
</html>