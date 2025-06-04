<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2025-05-22 09:38:14 --> GuzzleHttp\Exception\ConnectException: cURL error 28: Operation timed out after 5004 milliseconds with 0 bytes received (see https://curl.haxx.se/libcurl/c/libcurl-errors.html) for https://pantau.opensid.my.id/api/track/desa?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpZCI6bnVsbCwidGltZXN0YW1wIjoxNjAzNDY2MjM5fQ.HVCNnMLokF2tgHwjQhSIYo6-2GNXB4-Kf28FSIeXnZw in D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php:275
Stack trace:
#0 D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php(205): GuzzleHttp\Handler\CurlFactory::createRejection(Object(GuzzleHttp\Handler\EasyHandle), Array)
#1 D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\Handler\CurlFactory.php(157): GuzzleHttp\Handler\CurlFactory::finishError(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#2 D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\Handler\CurlHandler.php(47): GuzzleHttp\Handler\CurlFactory::finish(Object(GuzzleHttp\Handler\CurlHandler), Object(GuzzleHttp\Handler\EasyHandle), Object(GuzzleHttp\Handler\CurlFactory))
#3 D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php(28): GuzzleHttp\Handler\CurlHandler->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#4 D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\Handler\Proxy.php(48): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#5 D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\PrepareBodyMiddleware.php(64): GuzzleHttp\Handler\Proxy::GuzzleHttp\Handler\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#6 D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\Middleware.php(31): GuzzleHttp\PrepareBodyMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#7 D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\RedirectMiddleware.php(71): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#8 D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\Middleware.php(66): GuzzleHttp\RedirectMiddleware->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#9 D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\HandlerStack.php(75): GuzzleHttp\Middleware::GuzzleHttp\{closure}(Object(GuzzleHttp\Psr7\Request), Array)
#10 D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\Client.php(333): GuzzleHttp\HandlerStack->__invoke(Object(GuzzleHttp\Psr7\Request), Array)
#11 D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\Client.php(169): GuzzleHttp\Client->transfer(Object(GuzzleHttp\Psr7\Request), Array)
#12 D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\Client.php(189): GuzzleHttp\Client->requestAsync('POST', Object(GuzzleHttp\Psr7\Uri), Array)
#13 D:\xampp\htdocs\scon\vendor\guzzlehttp\guzzle\src\ClientTrait.php(95): GuzzleHttp\Client->request('POST', 'https://pantau....', Array)
#14 D:\xampp\htdocs\scon\donjo-app\helpers\opensid_helper.php(250): GuzzleHttp\Client->post('https://pantau....', Array)
#15 D:\xampp\htdocs\scon\donjo-app\models\Track_model.php(145): httpPost('https://pantau....', Array)
#16 D:\xampp\htdocs\scon\donjo-app\models\Track_model.php(66): Track_model->kirim_data()
#17 D:\xampp\htdocs\scon\donjo-app\controllers\First.php(117): Track_model->track_desa('first')
#18 D:\xampp\htdocs\scon\vendor\codeigniter\framework\system\core\CodeIgniter.php(533): First->index()
#19 D:\xampp\htdocs\scon\index.php(284): require_once('D:\\xampp\\htdocs...')
#20 {main}
ERROR - 2025-05-22 09:38:37 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://layanan.opendesa.id/api/v1/pelanggan/catat-versi` resulted in a `400 Bad Request` response:
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
ERROR - 2025-05-22 10:46:39 --> GuzzleHttp\Exception\ClientException: Client error: `POST https://layanan.opendesa.id/api/v1/pelanggan/catat-versi` resulted in a `400 Bad Request` response:
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
ERROR - 2025-05-22 21:02:22 --> Must minimaly specify a single recipient or topic.
