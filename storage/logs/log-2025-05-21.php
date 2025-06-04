<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

NOTICE - 2025-05-21 09:24:26 --> Mulai memasang data awal
NOTICE - 2025-05-21 09:24:50 --> Berhasil memperbarui data awal tabel setting_aplikasi
NOTICE - 2025-05-21 09:24:50 --> Berhasil memperbarui data awal tabel setting_modul
NOTICE - 2025-05-21 09:24:50 --> Berhasil memperbarui data awal tabel user_grup
NOTICE - 2025-05-21 09:24:50 --> Berhasil memperbarui data awal tabel user
NOTICE - 2025-05-21 09:24:51 --> Berhasil memperbarui data awal tabel media_sosial
NOTICE - 2025-05-21 09:24:51 --> Berhasil memperbarui data awal tabel kehadiran_jam_kerja
NOTICE - 2025-05-21 09:24:51 --> Berhasil memperbarui data awal tabel ref_jabatan
NOTICE - 2025-05-21 09:24:51 --> Berhasil memperbarui data awal tabel anjungan_menu
NOTICE - 2025-05-21 09:24:57 --> Berhasil memperbarui data awal tabel gis_simbol
NOTICE - 2025-05-21 09:24:57 --> Berhasil memperbarui data awal tabel ref_syarat_surat
NOTICE - 2025-05-21 09:24:57 --> Berhasil memperbarui data awal tabel widget
NOTICE - 2025-05-21 09:24:57 --> Berhasil memperbarui data awal tabel tweb_penduduk_umur
NOTICE - 2025-05-21 09:24:57 --> Berhasil memperbarui data awal tabel notifikasi
NOTICE - 2025-05-21 09:25:03 --> Berhasil Jalankan Migrasi_2024010171
NOTICE - 2025-05-21 09:25:03 --> Berhasil Jalankan Migrasi_2024020171
NOTICE - 2025-05-21 09:25:03 --> Berhasil Jalankan Migrasi_2024030171
NOTICE - 2025-05-21 09:25:04 --> Berhasil Jalankan Migrasi_2024040171
NOTICE - 2025-05-21 09:25:16 --> Berhasil Jalankan Migrasi_2024050171
NOTICE - 2025-05-21 09:25:17 --> Berhasil Jalankan Migrasi_2024060171
NOTICE - 2025-05-21 09:25:19 --> Berhasil Jalankan Migrasi_2024070171
NOTICE - 2025-05-21 09:25:20 --> Berhasil Jalankan Migrasi_2024080171
NOTICE - 2025-05-21 09:25:22 --> Berhasil Jalankan Migrasi_2024090171
NOTICE - 2025-05-21 09:25:22 --> Berhasil Jalankan Migrasi_2024100171
NOTICE - 2025-05-21 09:25:23 --> Berhasil Jalankan Migrasi_2024100951
NOTICE - 2025-05-21 09:25:23 --> Berhasil Jalankan Migrasi_2024101651
NOTICE - 2025-05-21 09:25:23 --> Berhasil Jalankan Migrasi_2024102351
NOTICE - 2025-05-21 09:25:23 --> Berhasil Jalankan Migrasi_2024102851
NOTICE - 2025-05-21 09:25:23 --> Berhasil Jalankan Migrasi_2025050101
NOTICE - 2025-05-21 09:25:23 --> Berhasil Jalankan migrasi_surat_bawaan
NOTICE - 2025-05-21 09:25:23 --> Berhasil Jalankan migrasi_beta
NOTICE - 2025-05-21 09:25:23 --> Berhasil Jalankan migrasi_rev
NOTICE - 2025-05-21 09:25:23 --> Berhasil Jalankan migrasi_umum
NOTICE - 2025-05-21 09:25:24 --> Versi database sudah terbaru
NOTICE - 2025-05-21 09:25:24 --> Selesai memasang data awal
ERROR - 2025-05-21 14:25:30 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://layanan.opendesa.id/api/v1/pelanggan/catat-versi` resulted in a `422 Unprocessable Entity` response:
{"message":"Bidang ini wajib di isi","errors":{"kode_desa":["Bidang ini wajib di isi"]}}
 in D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:111
Stack trace:
#0 D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://layanan...', Array)
#11 D:\xampp\htdocs\scon\donjo-app\helpers\general_helper.php(577): GuzzleHttp\Client->post('https://layanan...', Array)
#12 D:\xampp\htdocs\scon\donjo-app\models\Track_model.php(68): kirim_versi_opensid('')
#13 D:\xampp\htdocs\scon\donjo-app\controllers\First.php(117): Track_model->track_desa('first')
#14 D:\xampp\htdocs\scon\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#15 D:\xampp\htdocs\scon\index.php(284): require_once('D:\\xampp\\htdocs...')
#16 {main}
ERROR - 2025-05-21 14:26:00 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://layanan.opendesa.id/api/v1/pelanggan/catat-versi` resulted in a `422 Unprocessable Entity` response:
{"message":"Bidang ini wajib di isi","errors":{"kode_desa":["Bidang ini wajib di isi"]}}
 in D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:111
Stack trace:
#0 D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://layanan...', Array)
#11 D:\xampp\htdocs\scon\donjo-app\helpers\general_helper.php(577): GuzzleHttp\Client->post('https://layanan...', Array)
#12 D:\xampp\htdocs\scon\donjo-app\models\Track_model.php(68): kirim_versi_opensid('')
#13 D:\xampp\htdocs\scon\donjo-app\controllers\First.php(117): Track_model->track_desa('first')
#14 D:\xampp\htdocs\scon\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#15 D:\xampp\htdocs\scon\index.php(284): require_once('D:\\xampp\\htdocs...')
#16 {main}
ERROR - 2025-05-21 14:27:24 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://layanan.opendesa.id/api/v1/pelanggan/catat-versi` resulted in a `422 Unprocessable Entity` response:
{"message":"Bidang ini wajib di isi","errors":{"kode_desa":["Bidang ini wajib di isi"]}}
 in D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:111
Stack trace:
#0 D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://layanan...', Array)
#11 D:\xampp\htdocs\scon\donjo-app\helpers\general_helper.php(577): GuzzleHttp\Client->post('https://layanan...', Array)
#12 D:\xampp\htdocs\scon\donjo-app\models\Track_model.php(68): kirim_versi_opensid('')
#13 D:\xampp\htdocs\scon\donjo-app\controllers\First.php(117): Track_model->track_desa('first')
#14 D:\xampp\htdocs\scon\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#15 D:\xampp\htdocs\scon\index.php(284): require_once('D:\\xampp\\htdocs...')
#16 {main}
ERROR - 2025-05-21 14:27:45 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://layanan.opendesa.id/api/v1/pelanggan/catat-versi` resulted in a `422 Unprocessable Entity` response:
{"message":"Bidang ini wajib di isi","errors":{"kode_desa":["Bidang ini wajib di isi"]}}
 in D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:111
Stack trace:
#0 D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://layanan...', Array)
#11 D:\xampp\htdocs\scon\donjo-app\helpers\general_helper.php(577): GuzzleHttp\Client->post('https://layanan...', Array)
#12 D:\xampp\htdocs\scon\donjo-app\models\Track_model.php(68): kirim_versi_opensid('')
#13 D:\xampp\htdocs\scon\donjo-app\controllers\Main.php(59): Track_model->track_desa('main')
#14 D:\xampp\htdocs\scon\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): Main->index()
#15 D:\xampp\htdocs\scon\index.php(284): require_once('D:\\xampp\\htdocs...')
#16 {main}
ERROR - 2025-05-21 18:41:38 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://layanan.opendesa.id/api/v1/pelanggan/catat-versi` resulted in a `400 Bad Request` response:
"Data gagal disimpan atau desa tidak ditemukan"
 in D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:111
Stack trace:
#0 D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://layanan...', Array)
#11 D:\xampp\htdocs\scon\donjo-app\helpers\general_helper.php(577): GuzzleHttp\Client->post('https://layanan...', Array)
#12 D:\xampp\htdocs\scon\donjo-app\models\Track_model.php(68): kirim_versi_opensid('3519092005')
#13 D:\xampp\htdocs\scon\donjo-app\controllers\Main.php(59): Track_model->track_desa('main')
#14 D:\xampp\htdocs\scon\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): Main->index()
#15 D:\xampp\htdocs\scon\index.php(284): require_once('D:\\xampp\\htdocs...')
#16 {main}
ERROR - 2025-05-21 19:04:15 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2025-05-21 19:06:58 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2025-05-21 19:15:54 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2025-05-21 19:17:28 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2025-05-21 19:19:01 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2025-05-21 19:20:31 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2025-05-21 19:24:10 --> Sudut rotasi diperlukan untuk memutar gambar.
ERROR - 2025-05-21 21:00:38 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://layanan.opendesa.id/api/v1/pelanggan/catat-versi` resulted in a `400 Bad Request` response:
"Data gagal disimpan atau desa tidak ditemukan"
 in D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\Exception\RequestException.php:111
Stack trace:
#0 D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\Middleware.php(72): GuzzleHttp\Exception\RequestException::create(Object(GuzzleHttp\Psr7\Request), Object(GuzzleHttp\Psr7\Response), NULL, Array, NULL)
#1 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(209): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Response))
#2 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(158): GuzzleHttp\Promise\Promise::callHandler(1, Object(GuzzleHttp\Psr7\Response), NULL)
#3 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\TaskQueue.php(52): GuzzleHttp\Promise\Promise::GuzzleHttp\Promise\{closure}()
#4 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(251): GuzzleHttp\Promise\TaskQueue->run(true)
#5 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(227): GuzzleHttp\Promise\Promise->invokeWaitFn()
#6 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(272): GuzzleHttp\Promise\Promise->waitIfPending()
#7 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(229): GuzzleHttp\Promise\Promise->invokeWaitList()
#8 D:\xampp\htdocs\scon\vendor\guzzlehttp\promises\src\Promise.php(69): GuzzleHttp\Promise\Promise->waitIfPending()
#9 D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Promise\Promise->wait()
#10 D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://layanan...', Array)
#11 D:\xampp\htdocs\scon\donjo-app\helpers\general_helper.php(577): GuzzleHttp\Client->post('https://layanan...', Array)
#12 D:\xampp\htdocs\scon\donjo-app\models\Track_model.php(68): kirim_versi_opensid('3519092005')
#13 D:\xampp\htdocs\scon\donjo-app\controllers\First.php(117): Track_model->track_desa('first')
#14 D:\xampp\htdocs\scon\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#15 D:\xampp\htdocs\scon\index.php(284): require_once('D:\\xampp\\htdocs...')
#16 {main}
ERROR - 2025-05-21 21:20:26 --> Client error: `GET https://idm.kemendesa.go.id/open/api/desa/rumusan/3519092005/2020` resulted in a `400 Bad Request` response:
{"status":400,"error":true,"message":"ID Desa tidak ditemukan"}

ERROR - 2025-05-21 21:23:22 --> "1"
ERROR - 2025-05-21 21:37:41 --> Client error: `GET https://idm.kemendesa.go.id/open/api/desa/rumusan/3519092005/2020` resulted in a `400 Bad Request` response:
{"status":400,"error":true,"message":"ID Desa tidak ditemukan"}

ERROR - 2025-05-21 21:40:33 --> "1"
ERROR - 2025-05-21 21:58:47 --> Client error: `GET https://idm.kemendesa.go.id/open/api/desa/rumusan/3519092005/2020` resulted in a `400 Bad Request` response:
{"status":400,"error":true,"message":"ID Desa tidak ditemukan"}

ERROR - 2025-05-21 22:01:27 --> "1"
