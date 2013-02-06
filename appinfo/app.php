<?php

// if you dont want to register settings for the admin, delete the following
// line
\OCP\App::registerAdmin('android_service', 'admin/settings');

\OCP\App::addNavigationEntry( array(

  // the string under which your app will be referenced
  // in owncloud, for instance: \OC_App::getAppPath('APP_ID')
  'id' => 'android_service',

  // sorting weight for the navigation. The higher the number, the higher
  // it will be listed in the navigation
  'order' => 74,

  // the route that will be shown on startup
  //'href' => \OC_Helper::linkToRoute('yourappname_index'),

  // the icon that will be shown in the navigation
  //'icon' => \OCP\Util::imagePath('yourappname', 'example.png' ),

  // the title of your application. This will be used in the
  // navigation or on the settings page of your app
  'name' => \OC_L10N::get('android_service')->t('Android C2DM service')

));

?>

