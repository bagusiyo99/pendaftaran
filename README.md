#Website Pendaftaran Sekolah

ini merupakan salah satu fitur di admin

![admin](https://github.com/bagusiyo99/pendaftaran/assets/73180981/d866af60-b63a-411b-bfd2-b5a7ffe82b9c)
!
!
!
!

ini merupakan salah satu fitur di home.

![artikel](https://github.com/bagusiyo99/pendaftaran/assets/73180981/cbf93442-56da-4c7e-a1a2-71ba3b2919fb)
!
!
!
!


ini merupakan fitur pendafataran di home, saya telah melimit 500 pendaftar, jika terisi semua akan berubah menjadi tampilan di bawah ini

![daftar](https://github.com/bagusiyo99/pendaftaran/assets/73180981/fa83d0e7-be60-434b-97f4-e203f0cf9309)
!
!
!
!

ini tampilan jika pendaftaran telah mencapai 500 pendaftar, maka akan otomatis tampilan seperti ini
![dafatrar ](https://github.com/bagusiyo99/pendaftaran/assets/73180981/2b1f7794-16cc-4200-b022-04bda999371b)



# Website  Sekolah
installasi:
- Buka file pada Text Editor
- Buka Terminal
- copas file .env.example ke directory yang sama /root directory dan rename menjadi .env
- edit pada file .env bagian database name: sekolah
- buat database kosong di localhost/phpmyadmin dengan nama: sekolah
- Ketikkan perintah: composer install
- Ketikkan perintah: php artisan key:generate
- Ketikkan perintah: php artisan migrate:fresh --seed
- npm install dan npm run dev
- Ketikkan perintah: php artisan serve
- panel admin : admin@gmail.com | password : 12345

ketik ini jika tidak ada database 
- php artisan db:seed

