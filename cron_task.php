<?
/**
 * @var $DOCUMENT_ROOT
 */

# Импорт: каждую минуту
$schedule->exec('/opt/php56/bin/php '.$DOCUMENT_ROOT.'/app/Console/cake.php Import')->cron('* * * * *');

# Загрузка разговора с ботом: раз в день 4:05
$schedule->exec('/opt/php56/bin/php '.$DOCUMENT_ROOT.'/app/Console/cake.php LoadDialogAimylogic')->cron('5 4 * * *');

# Дозагрузка заявок с pro.knam: раз в день 4:15
$schedule->exec('/opt/php56/bin/php '.$DOCUMENT_ROOT.'/app/Console/cake.php LoadKnam')->cron('15 4 * * *');

# Суточная дозагрузка заявок с pro.knam: каждый час
$schedule->exec('/opt/php56/bin/php '.$DOCUMENT_ROOT.'/app/Console/cake.php LoadKnam day')->cron('0 * * * *');

# Загрузка звонков из гравител: каждую минуту
$schedule->exec('/opt/php56/bin/php '.$DOCUMENT_ROOT.'/app/Console/cake.php LoadGravitelCall')->cron('* * * * *');

# Баланс телефонии: каждые 10 мин
$schedule->exec('/opt/php56/bin/php '.$DOCUMENT_ROOT.'/app/Console/cake.php PhoneSaveBalance')->cron('*/10 * * * *');

# Баланс смс: каждые 10 мин
$schedule->exec('/opt/php56/bin/php '.$DOCUMENT_ROOT.'/app/Console/cake.php SmscSaveBalance')->cron('*/10 * * * *');

# Статус обзвона из aimylogic: каждые 3 мин
$schedule->exec('/opt/php56/bin/php '.$DOCUMENT_ROOT.'/app/Console/cake.php RequestStatusAimylogic')->cron('*/3 * * * *');

# Перенос файлов звонков: каждые 3 мин
$schedule->exec('/opt/php56/bin/php '.$DOCUMENT_ROOT.'/app/Console/cake.php TransferCallRecords')->cron('*/3 * * * *');

# Дата окончания регистрации доменов(источников): раз в день
$schedule->exec('/opt/php56/bin/php '.$DOCUMENT_ROOT.'/app/Console/cake.php CheckRegDomain')->cron('0 0 * * *');