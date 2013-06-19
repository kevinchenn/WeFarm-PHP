<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-06-19 15:39:20 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Arr::is_assoc() must be an array, integer given, called in /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Arr.php on line 428 and defined ~ SYSPATH/classes/Kohana/Arr.php [ 30 ] in /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Arr.php:30
2013-06-19 15:39:20 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Arr.php(30): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/Users/kevin.ch...', 30, Array)
#1 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Arr.php(428): Kohana_Arr::is_assoc(1)
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Config/File/Reader.php(49): Kohana_Arr::merge(Array, 1)
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Config.php(130): Kohana_Config_File_Reader->load('wepay')
#4 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/Wepayapi.php(9): Kohana_Config->load('wepay')
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_WepayAPI->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_WepayAPI))
#8 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#11 {main} in /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Arr.php:30
2013-06-19 15:42:55 --- EMERGENCY: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ APPPATH/bootstrap.php [ 144 ] in /Users/kevin.chen/Development/wefarm_php/application/bootstrap.php:144
2013-06-19 15:42:55 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/bootstrap.php(144): Kohana_Core::error_handler(2, 'include() [<a h...', '/Users/kevin.ch...', 144, Array)
#1 /Users/kevin.chen/Development/wefarm_php/application/bootstrap.php(144): include()
#2 /Users/kevin.chen/Development/wefarm_php/index.php(102): require('/Users/kevin.ch...')
#3 {main} in /Users/kevin.chen/Development/wefarm_php/application/bootstrap.php:144
2013-06-19 15:44:34 --- EMERGENCY: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ APPPATH/bootstrap.php [ 144 ] in /Users/kevin.chen/Development/wefarm_php/application/bootstrap.php:144
2013-06-19 15:44:34 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/bootstrap.php(144): Kohana_Core::error_handler(2, 'include() [<a h...', '/Users/kevin.ch...', 144, Array)
#1 /Users/kevin.chen/Development/wefarm_php/application/bootstrap.php(144): include()
#2 /Users/kevin.chen/Development/wefarm_php/index.php(102): require('/Users/kevin.ch...')
#3 {main} in /Users/kevin.chen/Development/wefarm_php/application/bootstrap.php:144
2013-06-19 15:44:35 --- EMERGENCY: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ APPPATH/bootstrap.php [ 144 ] in /Users/kevin.chen/Development/wefarm_php/application/bootstrap.php:144
2013-06-19 15:44:35 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/bootstrap.php(144): Kohana_Core::error_handler(2, 'include() [<a h...', '/Users/kevin.ch...', 144, Array)
#1 /Users/kevin.chen/Development/wefarm_php/application/bootstrap.php(144): include()
#2 /Users/kevin.chen/Development/wefarm_php/index.php(102): require('/Users/kevin.ch...')
#3 {main} in /Users/kevin.chen/Development/wefarm_php/application/bootstrap.php:144
2013-06-19 15:44:36 --- EMERGENCY: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ APPPATH/bootstrap.php [ 144 ] in /Users/kevin.chen/Development/wefarm_php/application/bootstrap.php:144
2013-06-19 15:44:36 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/bootstrap.php(144): Kohana_Core::error_handler(2, 'include() [<a h...', '/Users/kevin.ch...', 144, Array)
#1 /Users/kevin.chen/Development/wefarm_php/application/bootstrap.php(144): include()
#2 /Users/kevin.chen/Development/wefarm_php/index.php(102): require('/Users/kevin.ch...')
#3 {main} in /Users/kevin.chen/Development/wefarm_php/application/bootstrap.php:144
2013-06-19 15:44:37 --- EMERGENCY: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ APPPATH/bootstrap.php [ 144 ] in /Users/kevin.chen/Development/wefarm_php/application/bootstrap.php:144
2013-06-19 15:44:37 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/bootstrap.php(144): Kohana_Core::error_handler(2, 'include() [<a h...', '/Users/kevin.ch...', 144, Array)
#1 /Users/kevin.chen/Development/wefarm_php/application/bootstrap.php(144): include()
#2 /Users/kevin.chen/Development/wefarm_php/index.php(102): require('/Users/kevin.ch...')
#3 {main} in /Users/kevin.chen/Development/wefarm_php/application/bootstrap.php:144
2013-06-19 15:44:37 --- EMERGENCY: ErrorException [ 2 ]: include() [function.include]: Filename cannot be empty ~ APPPATH/bootstrap.php [ 144 ] in /Users/kevin.chen/Development/wefarm_php/application/bootstrap.php:144
2013-06-19 15:44:37 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/bootstrap.php(144): Kohana_Core::error_handler(2, 'include() [<a h...', '/Users/kevin.ch...', 144, Array)
#1 /Users/kevin.chen/Development/wefarm_php/application/bootstrap.php(144): include()
#2 /Users/kevin.chen/Development/wefarm_php/index.php(102): require('/Users/kevin.ch...')
#3 {main} in /Users/kevin.chen/Development/wefarm_php/application/bootstrap.php:144
2013-06-19 15:47:02 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method WePay::getAllScopes() ~ APPPATH/classes/Controller/Wepayapi.php [ 13 ] in :
2013-06-19 15:47:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-19 15:52:10 --- EMERGENCY: ErrorException [ 8 ]: A session had already been started - ignoring session_start() ~ APPPATH/classes/Controller/Wepayapi.php [ 9 ] in :
2013-06-19 15:52:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(8, 'A session had a...', '/Users/kevin.ch...', 9, Array)
#1 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/Wepayapi.php(9): session_start()
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_WepayAPI->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_WepayAPI))
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-06-19 16:18:08 --- EMERGENCY: Kohana_Exception [ 0 ]: The hasAccessToken property does not exist in the Model_Farmer class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:600
2013-06-19 16:18:08 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('hasAccessToken')
#1 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php(39): Kohana_ORM->__get('hasAccessToken')
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_account()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:600
2013-06-19 16:18:21 --- EMERGENCY: Kohana_Exception [ 0 ]: The hasAccessToken property does not exist in the Model_Farmer class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:600
2013-06-19 16:18:21 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('hasAccessToken')
#1 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php(39): Kohana_ORM->__get('hasAccessToken')
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_account()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:600
2013-06-19 16:18:22 --- EMERGENCY: Kohana_Exception [ 0 ]: The hasAccessToken property does not exist in the Model_Farmer class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:600
2013-06-19 16:18:22 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('hasAccessToken')
#1 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php(39): Kohana_ORM->__get('hasAccessToken')
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_account()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:600
2013-06-19 16:22:20 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: wepay ~ APPPATH/views/user/account.php [ 2 ] in /Users/kevin.chen/Development/wefarm_php/application/views/user/account.php:2
2013-06-19 16:22:20 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/views/user/account.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kevin.ch...', 2, Array)
#1 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(61): include('/Users/kevin.ch...')
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kevin.ch...', Array)
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kevin.chen/Development/wefarm_php/application/views/template.php(10): Kohana_View->__toString()
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(61): include('/Users/kevin.ch...')
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kevin.ch...', Array)
#7 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/kevin.chen/Development/wefarm_php/application/views/user/account.php:2
2013-06-19 16:27:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: info ~ APPPATH/classes/Controller/Wepayapi.php [ 27 ] in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/Wepayapi.php:27
2013-06-19 16:27:41 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/Wepayapi.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kevin.ch...', 27, Array)
#1 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_WepayAPI->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_WepayAPI))
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/Wepayapi.php:27
2013-06-19 16:56:03 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: wepay ~ APPPATH/views/user/account.php [ 2 ] in /Users/kevin.chen/Development/wefarm_php/application/views/user/account.php:2
2013-06-19 16:56:03 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/views/user/account.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kevin.ch...', 2, Array)
#1 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(61): include('/Users/kevin.ch...')
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kevin.ch...', Array)
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kevin.chen/Development/wefarm_php/application/views/template.php(10): Kohana_View->__toString()
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(61): include('/Users/kevin.ch...')
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kevin.ch...', Array)
#7 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/kevin.chen/Development/wefarm_php/application/views/user/account.php:2
2013-06-19 17:15:54 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: wepay ~ APPPATH/views/user/account.php [ 2 ] in /Users/kevin.chen/Development/wefarm_php/application/views/user/account.php:2
2013-06-19 17:15:54 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/views/user/account.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kevin.ch...', 2, Array)
#1 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(61): include('/Users/kevin.ch...')
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kevin.ch...', Array)
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kevin.chen/Development/wefarm_php/application/views/template.php(10): Kohana_View->__toString()
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(61): include('/Users/kevin.ch...')
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kevin.ch...', Array)
#7 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/kevin.chen/Development/wefarm_php/application/views/user/account.php:2
2013-06-19 17:15:56 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: wepay ~ APPPATH/views/user/account.php [ 2 ] in /Users/kevin.chen/Development/wefarm_php/application/views/user/account.php:2
2013-06-19 17:15:56 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/views/user/account.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kevin.ch...', 2, Array)
#1 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(61): include('/Users/kevin.ch...')
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kevin.ch...', Array)
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kevin.chen/Development/wefarm_php/application/views/template.php(10): Kohana_View->__toString()
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(61): include('/Users/kevin.ch...')
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kevin.ch...', Array)
#7 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/kevin.chen/Development/wefarm_php/application/views/user/account.php:2
2013-06-19 17:16:04 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: wepay ~ APPPATH/views/user/account.php [ 2 ] in /Users/kevin.chen/Development/wefarm_php/application/views/user/account.php:2
2013-06-19 17:16:04 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/views/user/account.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kevin.ch...', 2, Array)
#1 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(61): include('/Users/kevin.ch...')
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kevin.ch...', Array)
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kevin.chen/Development/wefarm_php/application/views/template.php(10): Kohana_View->__toString()
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(61): include('/Users/kevin.ch...')
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kevin.ch...', Array)
#7 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/kevin.chen/Development/wefarm_php/application/views/user/account.php:2
2013-06-19 17:43:34 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function getAccountId() ~ APPPATH/classes/Controller/WepayAPI.php [ 64 ] in :
2013-06-19 17:43:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-06-19 17:43:42 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: merchange ~ APPPATH/classes/Controller/WepayAPI.php [ 65 ] in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/WepayAPI.php:65
2013-06-19 17:43:42 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/WepayAPI.php(65): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kevin.ch...', 65, Array)
#1 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php(62): Controller_WepayAPI::create_checkout(Object(Model_Farmer))
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_buy()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/WepayAPI.php:65
2013-06-19 17:43:48 --- EMERGENCY: Kohana_Exception [ 0 ]: The price property does not exist in the Model_Farmer class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:600
2013-06-19 17:43:48 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('price')
#1 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/WepayAPI.php(67): Kohana_ORM->__get('price')
#2 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php(62): Controller_WepayAPI::create_checkout(Object(Model_Farmer))
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_buy()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:600
2013-06-19 17:43:54 --- EMERGENCY: RuntimeException [ 0 ]: You must initialize the WePay SDK with WePay::useStaging() or WePay::useProduction() ~ APPPATH/vendor/wepay.php [ 95 ] in /Users/kevin.chen/Development/wefarm_php/application/vendor/wepay.php:224
2013-06-19 17:43:54 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/vendor/wepay.php(224): WePay::getDomain()
#1 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/WepayAPI.php(69): WePay->request('account/create/', Array)
#2 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php(62): Controller_WepayAPI::create_checkout(Object(Model_Farmer))
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_buy()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/kevin.chen/Development/wefarm_php/application/vendor/wepay.php:224
2013-06-19 17:44:28 --- EMERGENCY: Kohana_Exception [ 0 ]: View variable is not set: edit ~ SYSPATH/classes/Kohana/View.php [ 171 ] in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php:43
2013-06-19 17:44:28 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php(43): Kohana_View->__get('edit')
#1 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_account()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php:43
2013-06-19 17:44:39 --- EMERGENCY: Kohana_Exception [ 0 ]: View variable is not set: edit ~ SYSPATH/classes/Kohana/View.php [ 171 ] in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php:40
2013-06-19 17:44:39 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php(40): Kohana_View->__get('edit')
#1 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_account()
#2 [internal function]: Kohana_Controller->execute()
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#7 {main} in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php:40
2013-06-19 17:45:45 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: edit ~ APPPATH/views/user/account.php [ 27 ] in /Users/kevin.chen/Development/wefarm_php/application/views/user/account.php:27
2013-06-19 17:45:45 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/views/user/account.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kevin.ch...', 27, Array)
#1 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(61): include('/Users/kevin.ch...')
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kevin.ch...', Array)
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kevin.chen/Development/wefarm_php/application/views/template.php(10): Kohana_View->__toString()
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(61): include('/Users/kevin.ch...')
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kevin.ch...', Array)
#7 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/kevin.chen/Development/wefarm_php/application/views/user/account.php:27
2013-06-19 17:46:19 --- EMERGENCY: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH/classes/Controller/WepayAPI.php [ 62 ] in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/WepayAPI.php:62
2013-06-19 17:46:19 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/WepayAPI.php(62): Kohana_Core::error_handler(8, 'Trying to get p...', '/Users/kevin.ch...', 62, Array)
#1 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php(66): Controller_WepayAPI::create_checkout(Object(Model_Farmer))
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_buy()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/WepayAPI.php:62
2013-06-19 17:46:39 --- EMERGENCY: WePayRequestException [ 0 ]: name parameter is required ~ APPPATH/vendor/wepay.php [ 245 ] in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/WepayAPI.php:70
2013-06-19 17:46:39 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/WepayAPI.php(70): WePay->request('account/create/', Array)
#1 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php(66): Controller_WepayAPI::create_checkout(Object(Model_Farmer))
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_buy()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/WepayAPI.php:70
2013-06-19 17:47:16 --- EMERGENCY: WePayPermissionException [ 0 ]: could not parse authorization header, a valid access_token is required ~ APPPATH/vendor/wepay.php [ 248 ] in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/WepayAPI.php:70
2013-06-19 17:47:16 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/WepayAPI.php(70): WePay->request('checkout/create...', Array)
#1 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php(66): Controller_WepayAPI::create_checkout(Object(Model_Farmer))
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_buy()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/WepayAPI.php:70
2013-06-19 17:47:32 --- EMERGENCY: WePayPermissionException [ 0 ]: could not parse authorization header, a valid access_token is required ~ APPPATH/vendor/wepay.php [ 248 ] in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/WepayAPI.php:70
2013-06-19 17:47:32 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/WepayAPI.php(70): WePay->request('checkout/create...', Array)
#1 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php(66): Controller_WepayAPI::create_checkout(Object(Model_Farmer))
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_buy()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/WepayAPI.php:70
2013-06-19 17:48:11 --- EMERGENCY: Kohana_Exception [ 0 ]: The wepay_access_tokenac property does not exist in the Model_Farmer class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:600
2013-06-19 17:48:11 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('wepay_access_to...')
#1 /Users/kevin.chen/Development/wefarm_php/application/classes/Model/farmer.php(21): Kohana_ORM->__get('wepay_access_to...')
#2 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/Wepayapi.php(51): Model_Farmer->getAccessToken()
#3 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/Wepayapi.php(26): Controller_WepayAPI->createAccount()
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_WepayAPI->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_WepayAPI))
#7 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#10 {main} in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:600
2013-06-19 17:48:58 --- EMERGENCY: WePayPermissionException [ 0 ]: invalid account_id, account does not exist or does not belong to user ~ APPPATH/vendor/wepay.php [ 248 ] in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/WepayAPI.php:69
2013-06-19 17:48:58 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/WepayAPI.php(69): WePay->request('checkout/create...', Array)
#1 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php(66): Controller_WepayAPI::create_checkout(Object(Model_Farmer))
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_buy()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/WepayAPI.php:69
2013-06-19 17:49:28 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: response_uri ~ APPPATH/classes/Controller/WepayAPI.php [ 70 ] in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/WepayAPI.php:70
2013-06-19 17:49:28 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/WepayAPI.php(70): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kevin.ch...', 70, Array)
#1 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php(66): Controller_WepayAPI::create_checkout(Object(Model_Farmer))
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_buy()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/WepayAPI.php:70
2013-06-19 17:49:41 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: stdClass::$uri ~ APPPATH/classes/Controller/WepayAPI.php [ 70 ] in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/WepayAPI.php:70
2013-06-19 17:49:41 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/WepayAPI.php(70): Kohana_Core::error_handler(8, 'Undefined prope...', '/Users/kevin.ch...', 70, Array)
#1 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php(66): Controller_WepayAPI::create_checkout(Object(Model_Farmer))
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_buy()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/WepayAPI.php:70
2013-06-19 17:49:52 --- EMERGENCY: View_Exception [ 0 ]: The requested view user/buy could not be found ~ SYSPATH/classes/Kohana/View.php [ 257 ] in /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php:137
2013-06-19 17:49:52 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(137): Kohana_View->set_filename('user/buy')
#1 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(30): Kohana_View->__construct('user/buy', NULL)
#2 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php(67): Kohana_View::factory('user/buy')
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_buy()
#4 [internal function]: Kohana_Controller->execute()
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#9 {main} in /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php:137
2013-06-19 17:50:11 --- EMERGENCY: Kohana_Exception [ 0 ]: The checkout_uri property does not exist in the Model_Farmer class ~ MODPATH/orm/classes/Kohana/ORM.php [ 684 ] in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:600
2013-06-19 17:50:11 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php(600): Kohana_ORM->get('checkout_uri')
#1 /Users/kevin.chen/Development/wefarm_php/application/classes/Controller/User.php(68): Kohana_ORM->__get('checkout_uri')
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(84): Controller_User->action_buy()
#3 [internal function]: Kohana_Controller->execute()
#4 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#8 {main} in /Users/kevin.chen/Development/wefarm_php/modules/orm/classes/Kohana/ORM.php:600
2013-06-19 17:50:39 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: return_url ~ APPPATH/views/user/buy.php [ 3 ] in /Users/kevin.chen/Development/wefarm_php/application/views/user/buy.php:3
2013-06-19 17:50:39 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/views/user/buy.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kevin.ch...', 3, Array)
#1 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(61): include('/Users/kevin.ch...')
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kevin.ch...', Array)
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kevin.chen/Development/wefarm_php/application/views/template.php(10): Kohana_View->__toString()
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(61): include('/Users/kevin.ch...')
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kevin.ch...', Array)
#7 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/kevin.chen/Development/wefarm_php/application/views/user/buy.php:3
2013-06-19 17:51:17 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: return_url ~ APPPATH/views/user/buy.php [ 3 ] in /Users/kevin.chen/Development/wefarm_php/application/views/user/buy.php:3
2013-06-19 17:51:17 --- DEBUG: #0 /Users/kevin.chen/Development/wefarm_php/application/views/user/buy.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', '/Users/kevin.ch...', 3, Array)
#1 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(61): include('/Users/kevin.ch...')
#2 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kevin.ch...', Array)
#3 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(228): Kohana_View->render()
#4 /Users/kevin.chen/Development/wefarm_php/application/views/template.php(10): Kohana_View->__toString()
#5 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(61): include('/Users/kevin.ch...')
#6 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/View.php(348): Kohana_View::capture('/Users/kevin.ch...', Array)
#7 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller/Template.php(44): Kohana_View->render()
#8 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_User))
#11 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 /Users/kevin.chen/Development/wefarm_php/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 /Users/kevin.chen/Development/wefarm_php/index.php(118): Kohana_Request->execute()
#14 {main} in /Users/kevin.chen/Development/wefarm_php/application/views/user/buy.php:3