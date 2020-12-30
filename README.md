# Cloud195410028

LINK IMAGE Docker hub :
   
   php:7.4-apache :
   
      https://hub.docker.com/_/php
      
      
   mysql :
   
      https://hub.docker.com/_/mysql
      
PETUNJUK/TUTORIAL :
   1. git clone pada terminal unbuntu/katacoda :
      
     git clone https://github.com/dandi200600/Cloud195410028.git
      
   2. pull image dari dockerhub pada terminal unbuntu/katacoda :
      
     docker pull dandi200600/cloudresponsi195410028
     
   3. masuk ke dalam directory file dari dari repostory github :
   
     cd Cloud195410028
      
   4. Setelah masuk ke dalam repostory github dandi200600/Cloud195410028 jalankan perintah berikut :
   
     docker-compose up -d
     
   5. setelah selesai buka web browser, untuk akses localhost :
   
     localhost --> port 80 masuk ke menu web
     localhost:8080 --> untuk masuk ke dalam adminer database mysql
     
   6. setting database mysql dengan menggunakan adminer yang diakses dari localhost:8080 tadi dengan cara login ke database :
   
     username : root
     password : example
     database : (none atau dikosongkan)
     
   lalu create database dengan nama : akademik
   
   buat tabel dengan nama : mahasiswa
   
   buat kolom table dengan format :
      
      Nim | int | length (10) | options (kosong) | NOT NULL | AI (isi, yang merupakan primary key) |
      Nama_Mhs | varchar | length (50) | NOT NULL | options (latin1)
      Jenis_Kelamin | varchar | length (50) | NOT NULL | options (latin1)
      Program_Studi | varchar | length (50) | NOT NULL | options (latin1)
      default values (conteng), comment (conteng)
   Kemudian klik save (simpan)
   
   7. buka localhost/localhost:80 untuk mengakses web kembali. kemudian web tersebut dapat melakukan proses CRUD.
   
   8. untuk menghentikan docker composer dengan mengetikan perintah berikut pada terminal unbuntu/katacoda :
   
     docker-compose down
     
