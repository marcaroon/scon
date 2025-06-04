<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-05-29 09:03:36 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://layanan.opendesa.id/api/v1/pelanggan/catat-versi` resulted in a `400 Bad Request` response:
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
ERROR - 2025-05-29 09:23:22 --> Must minimaly specify a single recipient or topic.
ERROR - 2025-05-29 09:28:20 --> Must minimaly specify a single recipient or topic.
ERROR - 2025-05-29 10:38:24 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://layanan.opendesa.id/api/v1/pelanggan/catat-versi` resulted in a `400 Bad Request` response:
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
