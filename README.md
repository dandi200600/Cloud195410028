# Cloud195410028

LINK DOCKER HUB :

      https://hub.docker.com/r/dandi200600/cloudresponsi195410028

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
   
![lcl](https://user-images.githubusercontent.com/57336670/103365618-0ff2a280-4af3-11eb-996d-e7307bb8732e.jpg)
   
     localhost --> port 80 masuk ke menu web
![localhost](https://user-images.githubusercontent.com/57336670/103365613-0e28df00-4af3-11eb-9744-4be866e30b3d.jpg)  
   
     localhost:8080 --> untuk masuk ke dalam adminer database mysql
![localhost8080](https://user-images.githubusercontent.com/57336670/103365617-0f5a0c00-4af3-11eb-95c6-f46a87a8a870.jpg)
![8080](https://user-images.githubusercontent.com/57336670/103365700-42040480-4af3-11eb-8d8c-d1124034a7e5.jpg)
     
   6. setting database mysql dengan menggunakan adminer yang diakses dari localhost:8080 tadi dengan cara login ke database :
   
     username : root
     password : example
     database : (none atau dikosongkan)
     
![login db](https://user-images.githubusercontent.com/57336670/103364980-a2924200-4af1-11eb-86ec-e6e585eef49b.jpg)
     
   lalu create database dengan nama : 
      
     akademik

![create db](https://user-images.githubusercontent.com/57336670/103365511-d3bf4200-4af2-11eb-8f6a-3688eaed00d1.jpg)

   
   buat tabel dengan nama : 
      
     mahasiswa
   
   buat kolom table dengan format :
      
      Nim | int | length (11) | options (kosong) | NOT NULL | AI (isi, yang merupakan primary key) |
      Nama_Mhs | varchar | length (50) | NOT NULL | options (latin1)
      Jenis_Kelamin | varchar | length (50) | NOT NULL | options (latin1)
      Program_Studi | varchar | length (50) | NOT NULL | options (latin1)
      default values (conteng), comment (conteng)
      
![table](https://user-images.githubusercontent.com/57336670/103365247-36640e00-4af2-11eb-8802-c3db8475f4fb.jpg)
   
   Kemudian klik save (simpan)
   
![table2](https://user-images.githubusercontent.com/57336670/103365377-82af4e00-4af2-11eb-8155-f07113896666.jpg)

   
   7. buka localhost/localhost:80 untuk mengakses web kembali. kemudian web tersebut dapat melakukan proses CRUD.
   
![apk](https://user-images.githubusercontent.com/57336670/103365460-a96d8480-4af2-11eb-8e43-dcebbd5e7b91.jpg)
![apk1](https://user-images.githubusercontent.com/57336670/103365463-aa061b00-4af2-11eb-98e1-b0cae1b225f4.jpg)
![apk2](https://user-images.githubusercontent.com/57336670/103365456-a83c5780-4af2-11eb-8442-8f43be7ce396.jpg)

   
   8. untuk menghentikan docker composer dengan mengetikan perintah berikut pada terminal unbuntu/katacoda :
   
     docker-compose down
     
