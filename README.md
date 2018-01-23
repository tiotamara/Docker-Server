# uasPTCC
Menjalankan Aplikasi WEB (POS) dengan menggunakan Docker (Linux Ubuntu).

### Prerequisites
1. Download atau Clone repository.

2. Pastikan sudah terinstall [Docker](https://www.docker.com/) & [Docker Compose](https://docs.docker.com/compose/).

### Manual

1. Buat folder DockerFile dimanapun Anda inginkan.

2. Copy / Pindahkan File docker-compose.yml ke dalam folder DockerFile.

3. Buka Terminal dan masuk ke dalam directory DockerFile.

4. Jalankan Perintah :

```sh
$ sudo docker-compose up -d
```

5. Create folder `penjualan` di dalam folder DockerFile/app/.

6. Copy Semua File ke dalam folder DockerFile/app/penjualan.

7. Masuk ke dalam folder DockerFile/app/penjualan dan Import Database(`penjualan.sql`) dengan perintah :

```sh
$ sudo docker exec -i dockerfile_db_1 mysql -u root -proot --database=penjualan<penjualan.sql
```

8. Selesai.
