
<p align="center"><a href="" target="_blank"><img src="https://github.com/zeondev19/Capstone_Project_C624-PS056/assets/135107039/22b0a070-bb4b-4270-bafe-f4e88ecbbddf" width="400" alt="Teman Cater"></a></p>

<h1 align="center"><b>Teman Cater - Teman terpercaya untuk kebutuhan catering anda</b></h1>

Proyek TemanCater merupakan sebuah platform website yang bertujuan untuk membantu para ibu-ibu rumah tangga yang ingin memperkenalkan catering mereka secara luas. Melalui platform digital TemanCater diharapkan membawa perubahan positif dalam bisnis catering dengan memanfaatkan teknologi digital untuk meningkatkan aksesibilitas, keterjangkauan, dan kualitas layanan bagi penyedia catering dan konsumen mereka.
## Tim C624-PS056

- F3456YB352 – [Tengku Bintang Zaky Irmaysa](https://github.com/zeondev19) - Universitas 17 Agustus 1945 Surabaya
- F2046YB301 – [Farid Akbar Ishaq Maulana](https://github.com/mesir998) - Universitas Esa Unggul
- F3156XB385 – [Catrin Monica](https://github.com/catrinmonica/Catrinmonica) - Universitas Sriwijaya
  
## Dokumen
- [Project Brief](https://docs.google.com/document/d/1-Bs8ZA5_E80Z7i-Ri8UBvCmlinJAmRopt76qLB9xANE/edit?usp=sharing)
- [Working Doc](https://docs.google.com/document/d/1zmk--U6bOIFGtG29zrIpcWRHh2zBx2yopy0raeAVHLc/edit?usp=sharing)
- [User Guide](https://www.canva.com/design/DAGIeSznJyM/_OKJV_3WFpRSoVcW-AY63g/edit)
- [Slide Presentasi](https://www.canva.com/design/DAGIZOv4bX8/Gz5ZYJrRZ2qcpo-50s9oog/view?utm_content=DAGIZOv4bX8&utm_campaign=designshare&utm_medium=link&utm_source=editor)
- [Video Presentasi]()
- [Video Demo Aplikasi](https://youtu.be/irYg7qZp1D0)

## Resources
<span><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/6/61/HTML5_logo_and_wordmark.svg/768px-HTML5_logo_and_wordmark.svg.png" width="150" alt="Logo HTML"></span>
<span><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/99/Unofficial_JavaScript_logo_2.svg/1200px-Unofficial_JavaScript_logo_2.svg.png" width="150" alt="Logo Javascript"></span>
<a href="https://www.php.net/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/2560px-PHP-logo.svg.png" width="150" alt="Logo PHP"></a>
<a href="https://laravel.com/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1969px-Laravel.svg.png" width="150" alt="Logo Laravel"></a>
<a href="https://tailwindcss.com/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/d5/Tailwind_CSS_Logo.svg/512px-Tailwind_CSS_Logo.svg.png?20230715030042" width="200" alt="Logo TailwindCSS"></a>

## Instalasi / Cara menjalankan di lokal
1. Clone proyek
```bash
  git clone https://github.com/zeondev19/Capstone_Project_C624-PS056.git
```
2. Jalankan composer update
```bash
  composer update
```
3. Instal library menggunakan npm
```bash
  npm install
```
4. Setup database mySQL di local
5. Copy + Paste .env.example lalu rename menjadi .env
6. Generate `APP_KEY` pada file .env dengan
```bash
  php artisan key:generate
```
8. Konfigurasi `DB_DATABASE` `DB_USERNAME` `DB_PASSWORD` di file .env
9. Jalankan seeder database
```bash
  php artisan migrate:fresh --seed
```
9. Buat link storage ke public directory
```bash
  php artisan storage:link
```
10. Jalankan node runtime
```bash
  npm run dev
```
11. Jalankan proyek Laravel
```bash
  php artisan serve
```
