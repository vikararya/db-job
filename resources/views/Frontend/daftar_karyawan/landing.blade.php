<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Db web</title>
  <script src="https://cdn.tailwindcss.com"></script> <!-- Tambahkan Tailwind CSS -->
</head>
<body>
  <!-- Navbar -->
  <nav class="bg-white-500 p-8">
    <div class="container mx-auto flex justify-between items-center">
      <!-- Kiri: Logo + Menu -->
      <div class="flex items-center">
        <!-- Logo (full ukuran gambar) -->
        <a href="/index.html">
          <img src="img/logo.png" alt="Logo" class="h-auto w-auto max-h-16 ml-10"> <!-- Sesuaikan src dengan lokasi file gambar -->
        </a>
        
        <!-- Menu (tanpa spasi antara item) -->
        <ul class="flex ml-20"> 
          <li><a href="#" class="text-black px-2 hover:text-gray-500">Lowongan</a></li>
          <li><a href="#" class="text-black px-2 hover:text-gray-500">Perusahaan</a></li>
          <li><a href="#" class="text-black px-2 hover:text-gray-500">Event</a></li>
          <li><a href="#" class="text-black px-2 hover:text-gray-500">Artikel</a></li>
        </ul>
      </div>

    <!-- Kanan: Masuk dan Fitur Perusahaan -->
<div class="flex items-center">
  <a href="#" class="border border-green-500 text-[#abf260] py-2 px-4 rounded hover:bg-green-500 hover:text-white mr-4">Masuk</a>
  <a href="#" class="border border-green-500 text-[#abf260] py-2 px-4 rounded hover:bg-green-500 hover:text-white mr-4">Fitur Perusahaan</a>
</div>

  </nav>

<!-- Background hijau Di Bawah Navbar -->
<div style="background-color: #7ED809; ">
  <div style="background-image: url('img/sampul.png'); background-size: contain; background-repeat: no-repeat; background-position: right;">
    <div class="container mx-auto p-[40px]">
    <!-- Hero -->
    <div class="max-w-[85rem] mx-auto px-4 sm:px-6 lg:px-8">
      <!-- Grid -->
      <div class="grid md:grid-cols-2 gap-4 md:gap-8 xl:gap-20 md:items-center">
        <div>
          <h1 class="block text-3xl font-bold text-white sm:text-4xl lg:text-5xl lg:leading-tight dark:text-white">CARI PEKERJAAN YANG SESUAI <span class="text-blue-600"></span></h1>
          <p class="mt-3 text-lg text-white dark:text-neutral-400">Temukan peluang dan karir anda di DB JOB</p>

          <!-- Form Search -->
          <form class="mt-5">
            <div class="flex items-center border rounded-md overflow-hidden">
              <!-- Input untuk pekerjaan dan lokasi -->
              <input type="text" class="w-full px-4 py-2 border-green-500 focus:ring focus:ring-blue-300 focus:outline-none" placeholder="Cari pekerjaan - lokasi">
              <!-- Tombol Search -->
              <button type="submit" class=" text-white px-4 py-2 hover:bg-green-700 focus:ring focus:ring-blue-300">
                <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 17a6 6 0 100-12 6 6 0 000 12zm0 0l6 6m-6-6h6" />
                </svg>
              </button>
            </div>
          </form>
        </div>
        <!-- Gambar di sebelah kanan -->
       <div class="flex justify-end p-1">
      </div>
    </div>
  </div>
</div>
</div>

   </button>
              </div>
            </form h-auto>
          </div>
        </div>
      </div>
    </div>
  </div>

    <!-- Bagian baru "Pekerjaan Populer" -->
    <div class="bg-white py-12">
      <div class="container mx-auto">
        <h2 class="text-2xl font-bold text-left mb-8 pl-14">Pekerjaan Populer</h2>
    
        <!-- Kotak pertama -->
        <div class="bg-gray-100 rounded-xl p-1 max-w-6xl mx-auto">
          <div class="grid grid-cols-1 sm:grid-cols-4 gap-2"> <!-- Mengurangi gap -->
            
            <!-- Desain -->
            <div class="flex items-center justify-center">
              <div class="rounded-lg px-20 py-0.5" style="background-color: #abf260;">
                <span class="text-lg text-black">Desain</span>
              </div>
            </div>
    
            <!-- Marketing -->
            <div class="flex items-center justify-center">
              <div class="rounded-lg px-20 py-0.5" style="background-color: #abf260;">
                <span class="text-lg text-black">Marketing</span>
              </div>
            </div>
    
            <!-- Computer & IT -->
            <div class="flex items-center justify-center">
              <div class="rounded-lg px-20 py-0.5" style="background-color: #abf260;">
                <span class="text-lg text-black">Computer & IT</span>
              </div>
            </div>
    
            <!-- Administrator dengan rectangle aktif merekrut -->
            <div class="relative flex items-center justify-center">
              <div class="rounded-lg px-12 py-0.5" style="background-color: #abf260;">
                <span class="text-lg text-black">Administrator</span>
              </div>
              <!-- Rectangle Aktif Merekrut -->
              <div class="absolute bg-red-500 text-white rounded-lg px-1 py-1 w-auto left-32 -top-0"> <!-- Pendekkan panjang -->
                <img src="img/api.png" alt="Logo Api" class="inline-block w-4 h-4 ml-1"> <!-- Ganti src dengan lokasi logo api -->
                <span class="text-sm">Aktif Merekrut</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    

    <!-- Kotak kedua -->
<div class="bg-gray-100 rounded-xl p-1 mt-6 max-w-6xl mx-auto">
  <div class="grid grid-cols-1 sm:grid-cols-4 gap-2"> <!-- Mengurangi gap -->
    <!-- Data Analyst -->
    <div class="flex items-center justify-center">
      <div class="rounded-lg px-12 py-0.5" style="background-color: #abf260;">
        <span class="text-lg text-black">Data Analyst</span>
      </div>
    </div>
    
    <!-- Content Writer -->
    <div class="flex items-center justify-center">
      <div class="rounded-lg px-12 py-0.5" style="background-color: #abf260;">
        <span class="text-lg text-black">Content Writer</span>
      </div>
    </div>
    
    <!-- UI/UX -->
    <div class="flex items-center justify-center">
      <div class="rounded-lg px-20 py-0.5" style="background-color: #abf260;">
        <span class="text-lg text-black">UI/UX</span>
      </div>
    </div>
    
    <!-- Web Developer dengan rectangle aktif merekrut -->
    <div class="relative flex items-center justify-center">
      <div class="rounded-lg px-12 py-0.5" style="background-color: #abf260;">
        <span class="text-lg text-black">Web Developer</span>
      </div>
      <!-- Rectangle Aktif Merekrut -->
      <div class="absolute bg-blue-500 text-white rounded-lg px-1 py-1 w-auto left-32 -top-0"> <!-- Pendekkan panjang -->
        <img src="img/rekrut.png" alt="Logo Api" class="inline-block w-4 h-4 ml-1"> <!-- Ganti src dengan lokasi logo api -->
        <span class="text-sm">Fresh Graduate</span>
      </div>
    </div>
    
  </div>
</div>


    <div class="bg-white py-14">
      <div class="container mx-auto">
        <h2 class="text-3xl font-bold text-left mb-14 pl-14" style="color: #abf260;">Kategori</h2> <!-- Mengubah ukuran font dan warna -->
        
<!-- Row of Images -->
<div class="grid grid-cols-1 sm:grid-cols-6 md:grid-cols-5 gap-0"> <!-- Reduced gap between grid items -->
  <div class="flex justify-center">
    <div class="bg-gray-200 p-0 rounded-lg shadow-md w-[60%] relative"> <!-- Container relative -->
      <img src="img/Rectangle.png" alt="Kategori 1" class="max-w-[70%] h-auto mx-auto relative" style="top: -30px;"> <!-- Gambar timbul ke atas -->
      <p class="text-center mt-0 text-black">Deskripsi Kategori 1</p> <!-- Deskripsi di bawah gambar -->
    </div>
  </div>
  
  <div class="flex justify-center">
    <div class="bg-gray-200 p-0 rounded-lg shadow-md w-[60%] relative"> <!-- Container relative -->
      <img src="img/ke2.png" alt="Kategori 1" class="max-w-[70%] h-auto mx-auto relative" style="top: -30px;"> <!-- Gambar timbul ke atas -->
      <p class="text-center mt-0 text-black">Deskripsi Kategori 1</p> <!-- Deskripsi di bawah gambar -->
    </div>
  </div>
  
  <div class="flex justify-center">
    <div class="bg-gray-200 p-0 rounded-lg shadow-md w-[60%] relative"> <!-- Container relative -->
      <img src="img/ke3.png" alt="Kategori 1" class="max-w-[70%] h-auto mx-auto relative" style="top: -30px;"> <!-- Gambar timbul ke atas -->
      <p class="text-center mt-0 text-black">Deskripsi Kategori 1</p> <!-- Deskripsi di bawah gambar -->
    </div>
  </div>
  
  <div class="flex justify-center">
    <div class="bg-gray-200 p-0 rounded-lg shadow-md w-[60%] relative"> <!-- Container relative -->
      <img src="img/ke4.png" alt="Kategori 1" class="max-w-[70%] h-auto mx-auto relative" style="top: -30px;"> <!-- Gambar timbul ke atas -->
      <p class="text-center mt-0 text-black">Deskripsi Kategori 1</p> <!-- Deskripsi di bawah gambar -->
    </div>
  </div>
  
  <div class="flex justify-center">
    <div class="bg-gray-200 p-0 rounded-lg shadow-md w-[60%] relative"> <!-- Container relative -->
      <img src="img/ke5.png" alt="Kategori 1" class="max-w-[70%] h-auto mx-auto relative" style="top: -30px;"> <!-- Gambar timbul ke atas -->
      <p class="text-center mt-0 text-black">Deskripsi Kategori 1</p> <!-- Deskripsi di bawah gambar -->
    </div>
  </div>
</div>
      </div>
    </div>
    <div class="bg-white py-14">
      <div class="container mx-auto text-center"> <!-- Center-align all content -->
        <p class="text-sm mb-4">Mudah Dapat Lowongan</p> <!-- Smaller text above the title -->
        <h2 class="text-3xl font-bold mb-14" style="color: #abf260;">Lebih dari 500 Perusahaan</h2> <!-- Centered title -->
<<<<<<< Updated upstream:resources/views/Frontend/daftar_karyawan/landing.blade.php
    
      <!-- Image section -->
      <div class="mb-14"> <!-- Add margin-bottom for spacing -->
        <img src="{{asset('assets/images/logo perusahaan.png')}}" alt="Descriptive Alt Text" class="mx-auto" /> <!-- Centered image -->
    </div>
   </div>
</div>
=======
     <!-- Image section -->
     <div class="mb-14"> <!-- Add margin-bottom for spacing -->
      <img src="img/perusahaan.png" alt="Descriptive Alt Text" class="mx-auto" /> <!-- Centered image -->
  </div>
</div>
</div>
        <!-- Row of Images -->
       
        
 <div class="bg-white py-16">
>>>>>>> Stashed changes:resources/views/Frontend/daftar_karyawan/index.html

<!-- Testimoni Section -->
<div class="grid grid-cols-3 sm:grid-cols-1 md:grid-cols-3 gap-0">
  <!-- Testimoni 1 -->
  <div class="relative flex justify-center" style="margin-left: -15px;">
    <!-- Background abu-abu setengah halaman -->
    <div class="absolute bg-gray-200 w-full h-[100%] top-16 left-4 rounded-lg"></div>
    <!-- Kotak testimoni -->
    <div class="relative p-14 rounded-lg shadow-md z-10" style="background-color: #0113A5;">
      <img src="img/ronaldo.jpg" alt="Testimoni 2" class="w-30 h-40 rounded-full object-cover mx-auto -mt-24 border-4 border-yellow shadow-lg"> <!-- Gambar bulat lebih terangkat -->
    <p class="text-center mt-2 text-white" style="max-width: 200px; word-wrap: break-word;">
        TestimoniTestimoniTestimoniTestimoniTestimoniTestimoniTestimoniTestimoniTestimoniTestimoniTestimoniTestimoniTestimoniTestimoniTestimoniTestimoniTestimoniTestimoniTestimoni
      </p>
    </div>
  </div>

  <!-- Testimoni 2 -->
  <div class="relative flex justify-center" style="margin-left: -20px;">
    <!-- Background abu-abu setengah halaman -->
    <div class="absolute bg-gray-200 w-full h-[100%] top-16 left-0 rounded-lg"></div>
    <!-- Kotak testimoni -->
    <div class="relative p-14 rounded-lg shadow-md z-10" style="background-color: #0113A5;">
        <img src="img/ronaldo.jpg" alt="Testimoni 2" class="w-30 h-40 rounded-full object-cover mx-auto -mt-24 border-4 border-yellow shadow-lg"> <!-- Gambar bulat lebih terangkat -->
      <p class="text-center mt-2 text-white" style="max-width: 200px; word-wrap: break-word;">
        Testimoni 2 Testimoni yang sangat panjang sampai melewati satu baris, dan akan dilanjutkan ke baris berikutnya.
      </p>
    </div>
  </div>

  <!-- Testimoni 3 -->
  <div class="relative flex justify-center" style="margin-left: -50px;">
    <!-- Background abu-abu setengah halaman -->
    <div class="absolute bg-gray-200 w-full h-[100%] top-16 left-0 rounded-lg"></div>
    <!-- Kotak testimoni -->
    <div class="relative p-14 rounded-lg shadow-md z-10" style="background: linear-gradient(to right, #0113A5 50%, #2585F3 50%);">
        <img src="img/ronaldo.jpg" alt="Testimoni 2" class="w-30 h-40 rounded-full object-cover mx-auto -mt-24 border-4 border-yellow shadow-lg"> <!-- Gambar bulat lebih terangkat -->
    <p class="text-center mt-2 text-white" style="max-width: 200px; word-wrap: break-word;">
        Testimoni 2 Testimoni yang sangat panjang sampai melewati satu baris, dan akan dilanjutkan ke baris berikutnya.

      </p>
    </div>
  </div>
</div>


</div>
<div class="bg-white py-16"></div>
<div class="container mx-auto">
  <h2 class="text-1x2 font-bold text-left mb-8 pl-16">Pencarian Cepat</h2>
  <div class="flex items-center justify-start pl-16 mb-4"> <!-- Ubah justify-between menjadi justify-start -->
      <h2 class="text-1x2 font text-left mr-4">Klasifikasi</h2>
      <div class="flex space-x-6"> <!-- Mengubah space-x-16 menjadi space-x-6 untuk merapatkan tautan -->
          <a href="link-akuntansi.html" class="text-blue-600 hover:underline">Akuntansi</a>
          <a href="link-pendidikan.html" class="text-blue-600 hover:underline">Pendidikan</a>
          <a href="link-pelatihan.html" class="text-blue-600 hover:underline">Pelatihan</a>
          <a href="link-pemerintahan.html" class="text-blue-600 hover:underline">Pemerintahan</a>
          <a href="link-pertahanan.html" class="text-blue-600 hover:underline">Pertahanan</a>
          <a href="link-kesehatan.html" class="text-blue-600 hover:underline">Kesehatan Medis</a>
          <a href="link-penjualan.html" class="text-blue-600 hover:underline">Penjualan</a>
          <a href="link-lihat-semua.html" class="text-blue-600 hover:underline">Lihat Semua</a>
      </div>
  </div>
</div>
<div class="flex items-center justify-start pl-16 mb-4"> <!-- Ubah justify-between menjadi justify-start -->
  <h2 class="text-1x2 font text-left mr-4">Kota Besar</h2>
  <div class="flex space-x-6"> <!-- Mengubah space-x-16 menjadi space-x-6 untuk merapatkan tautan -->
    <a href="link-akuntansi.html" class="text-blue-600 hover:underline">Surabaya</a>
    <a href="link-pendidikan.html" class="text-blue-600 hover:underline">Bandung</a>
    <a href="link-pelatihan.html" class="text-blue-600 hover:underline">Medan</a>
    <a href="link-pemerintahan.html" class="text-blue-600 hover:underline">Jakarta</a>
    <a href="link-pertahanan.html" class="text-blue-600 hover:underline">Semarang</a>
    <a href="link-kesehatan.html" class="text-blue-600 hover:underline"> Tangerang</a>
    <a href="link-penjualan.html" class="text-blue-600 hover:underline">Malang</a>
    <a href="link-lihat-semua.html" class="text-blue-600 hover:underline">Bekasi</a>
</div>
</div>
</div>
<div class="flex items-center justify-start pl-16 mb-4"> <!-- Ubah justify-between menjadi justify-start -->
  <h2 class="text-1x2 font text-left mr-4">Lainnya</h2>
  <div class="flex space-x-6"> <!-- Mengubah space-x-16 menjadi space-x-6 untuk merapatkan tautan -->
    <a href="link-akuntansi.html" class="text-blue-600 hover:underline">Semua Lowongan Kerja</a>
    <a href="link-pendidikan.html" class="text-blue-600 hover:underline">Kerja Online</a>
    <a href="link-pelatihan.html" class="text-blue-600 hover:underline">Kerja Freelance</a>
    <a href="link-pemerintahan.html" class="text-blue-600 hover:underline">Kerja Tambang</a>
    <a href="link-pertahanan.html" class="text-blue-600 hover:underline">Lowongan Lulus Sma</a>
</div>
</div>
</div>
<div class="bg-white py-12"></div>
<!-- Section dengan Background Hijau -->
<div class="bg-[#7ED809] py-6">
  <div class="mb-20 flex items-start justify-between">
    <img src="img/logobg.png" alt="Logo" width="150" height="auto" class="mr-6" style="margin-left: 50px;" />
    <img src="img/ig.png" alt="Logo Kanan" width="100" height="auto" style="margin-right: 70px;" /> <!-- Sesuaikan ukuran gambar -->
  </div>
  <!-- Kolom dengan konten -->
  <div class="flex justify-between">
    <div class="flex justify-between">
      <div class="flex justify-between">
        <!-- Kolom Pencari Kerja -->
        <div class="w-3/4 mr-7 ml-16">
          <!-- Menambahkan margin kiri dan kanan -->
          <ul class="space-y-2">
            <li class="text-white font-bold">Untuk Pencari Kerja</li>
            <li><a href="link-lokasi-pekerjaan.html" class="text-white hover:underline">Lokasi Pekerjaan</a></li>
            <li><a href="link-nama-perusahaan.html" class="text-white hover:underline">Nama Perusahaan</a></li>
            <li><a href="link-kategori-pekerjaan.html" class="text-white hover:underline">Kategori Pekerjaan</a></li>
            <li><a href="link-lowongan-populer.html" class="text-white hover:underline">Lowongan Kerja Populer</a></li>
            <li><a href="link-help-center.html" class="text-white hover:underline">Help Center</a></li>
          </ul>
        </div>

        <!-- Kolom Pemberi Kerja -->
        <div class="w-3/4 mr-16 ml-20">
          <!-- Menambahkan margin kiri dan kanan -->
          <ul class="space-y-2">
            <li class="text-white font-bold">Untuk Pemberi Kerja</li>
            <li><a href="link-hr-tips.html" class="text-white hover:underline">Untuk Pemberi Kerja</a></li>
            <li><a href="link-publish-job.html" class="text-white hover:underline">HR Tips</a></li>
            <li><a href="link-candidate-management.html" class="text-white hover:underline">Glints Platform</a></li>
            <li><a href="link-interview-guide.html" class="text-white hover:underline">Perekrutan</a></li>
            <li><a href="link-employer-resources.html" class="text-white hover:underline">Bakat Terkelola</a></li>
          </ul>
        </div>

        <!-- Kolom Perusahaan -->
        <div class="w-2/2 mr-20 ml-16">
          <!-- Menambahkan margin kiri dan kanan -->
          <ul class="space-y-2">
            <li class="text-white font-bold">Perusahaan</li>
            <li><a href="link-candidate-management.html" class="text-white hover:underline">Tentang Kami</a></li>
            <li><a href="link-publish-job.html" class="text-white hover:underline">Tim Kami</a></li>
            <li><a href="link-candidate-management.html" class="text-white hover:underline">Inside Glints</a></li>
            <li><a href="link-interview-guide.html" class="text-white hover:underline">Tech Blog</a></li>
            <li><a href="link-employer-resources.html" class="text-white hover:underline">Careers </a></li>
          </ul>
        </div>

        <!-- Kolom Terdaftar & diawasi oleh -->
        <div class="w-full mr-1 ml-6">
          <!-- Menambahkan margin kiri dan kanan -->
          <ul class="space-y-2">
            <li class="text-white font-bold">Terdaftar & diawasi oleh</li>
            <li>
              <a href="link-hr-tips.html">
                <img src="img/kominfo.png" alt="HR Tips" width="100" height="80" class="hover:underline" />
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="bg-white py-12"></div>
<!-- Section dengan Background Hijau -->
<div class="bg-[#7ED809] py-6">
  <div class="mb-20 flex items-start justify-between">
    <img src="img/logobg.png" alt="Logo" width="150" height="auto" class="mr-6" style="margin-left: 50px;" />
    <img src="img/ig.png" alt="Logo Kanan" width="100" height="auto" style="margin-right: 70px;" /> <!-- Sesuaikan ukuran gambar -->
  </div>
  <!-- Kolom dengan konten -->
  <div class="flex justify-between">
    <div class="flex justify-between">
      <div class="flex justify-between">
        <!-- Kolom Pencari Kerja -->
        <div class="w-3/4 mr-7 ml-16">
          <!-- Menambahkan margin kiri dan kanan -->
          <ul class="space-y-2">
            <li class="text-white font-bold">Untuk Pencari Kerja</li>
            <li><a href="link-lokasi-pekerjaan.html" class="text-white hover:underline">Lokasi Pekerjaan</a></li>
            <li><a href="link-nama-perusahaan.html" class="text-white hover:underline">Nama Perusahaan</a></li>
            <li><a href="link-kategori-pekerjaan.html" class="text-white hover:underline">Kategori Pekerjaan</a></li>
            <li><a href="link-lowongan-populer.html" class="text-white hover:underline">Lowongan Kerja Populer</a></li>
            <li><a href="link-help-center.html" class="text-white hover:underline">Help Center</a></li>
          </ul>
        </div>

        <!-- Kolom Pemberi Kerja -->
        <div class="w-3/4 mr-16 ml-20">
          <!-- Menambahkan margin kiri dan kanan -->
          <ul class="space-y-2">
            <li class="text-white font-bold">Untuk Pemberi Kerja</li>
            <li><a href="link-hr-tips.html" class="text-white hover:underline">Untuk Pemberi Kerja</a></li>
            <li><a href="link-publish-job.html" class="text-white hover:underline">HR Tips</a></li>
            <li><a href="link-candidate-management.html" class="text-white hover:underline">Glints Platform</a></li>
            <li><a href="link-interview-guide.html" class="text-white hover:underline">Perekrutan</a></li>
            <li><a href="link-employer-resources.html" class="text-white hover:underline">Bakat Terkelola</a></li>
          </ul>
        </div>

        <!-- Kolom Perusahaan -->
        <div class="w-2/2 mr-20 ml-16">
          <!-- Menambahkan margin kiri dan kanan -->
          <ul class="space-y-2">
            <li class="text-white font-bold">Perusahaan</li>
            <li><a href="link-candidate-management.html" class="text-white hover:underline">Tentang Kami</a></li>
            <li><a href="link-publish-job.html" class="text-white hover:underline">Tim Kami</a></li>
            <li><a href="link-candidate-management.html" class="text-white hover:underline">Inside Glints</a></li>
            <li><a href="link-interview-guide.html" class="text-white hover:underline">Tech Blog</a></li>
            <li><a href="link-employer-resources.html" class="text-white hover:underline">Careers </a></li>
          </ul>
        </div>

        <!-- Kolom Terdaftar & diawasi oleh -->
        <div class="w-full mr-1 ml-6">
          <!-- Menambahkan margin kiri dan kanan -->
          <ul class="space-y-2">
            <li class="text-white font-bold">Terdaftar & diawasi oleh</li>
            <li>
              <a href="link-hr-tips.html">
                <img src="img/kominfo.png" alt="HR Tips" width="100" height="80" class="hover:underline" />
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
