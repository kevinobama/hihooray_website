<?php
return [
    'qiniu' => [
        'accessKey' => env('QINIU_ACCESSKEY', 'W6AZJYVDZlBK-f7-v3FbUHOATU7lvGBO75cu-33D'),
        'secretKey' => env('QINIU_SECRETKEY', 'AkRuBEv0xVo1v87HXfTJjMLcx4_dF6zk5QRfBtdz'),
    ],

    'hooray-teacher-files' => [
        'bucket' => 'hooray-teacher-files',
        'url' => 'http://hooray-teacher-files.hihooray.net/',
        'returnUrl' => '/teacherFiles/callback',
        'fops' => 'yifangyun_preview',
    ],
];