<?php
//����ļ�
define('FRAME'  ,  realpath('./'));
define('MODULE' ,  'admin');
define('CORE'   ,  FRAME.'/core');
define('APP'    ,  FRAME.'/'.MODULE);
define('DEBUG'  ,  true);

//����composer���Զ�����
require_once './vendor/autoload.php';

//�Ƿ�������
ini_set('display_errors', DEBUG ? 'On' : 'Off');

//���غ��ĺ�����
require_once CORE.'/common/function.php';

//���ؿ���ļ�
require_once CORE.'/Frame.php';

//�������
new \core\Frame();
