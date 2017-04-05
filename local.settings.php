<?php

// Brands Configuration  - (not automated yet - add translated text)
$conf['hcp_site_configuration'] = array(
  'language' => 'zh-hans',
  'country' => 'CN',
  'feed_uri' => 's3.amazonaws.com',
  'feed_brand_endpoint' => 'pfe-gpt/cn/zh-cn/brand.json',
  'feed_url_endpoint' => 'pfe-gpt/cn/zh-cn/brand_url.json',
  'feed_product_endpoint' => 'GlobalProductXrefService/REST/XrefProducts',
  'feed_cron' => 1,
  'menu_title' => 'Clinical Information',
  'services_title' => 'Support & Services',
  'live_event_text' => 'Live Events',
  'webinar_text' => 'Online Events',
  'past_event_text' => 'On-demand Video',
  'feed_interval' => '4',
  'request_type' => '0',
  'feed_username' => '',
  'feed_password' => '',
  'product_section' => 1,
  'condition_section' => 1,
  'hcp_build_no' => '',
);

// common webstandards settings
$conf['pfizer_webstandards_mode'] = 'prod';
$conf['pfizer_webstandards_rebuild_cron'] = '1';
$conf['pfizer_webstandards_include_files'] = '1';
$conf['pfizer_webstandards_development_report_suites'] = 'pfizerhcpchinastage,pfizerglobalimdevelopment';
$conf['pfizer_webstandards_development_domains'] = 'pfizerforprocomcnstg.prod.acquia-sites.com, pfizerforprocomcndev.prod.acquia-sites.com';
$conf['pfizer_webstandards_production_report_suites'] = 'pfizerhcpchinaprod,pfizerglobalimprod';
$conf['pfizer_webstandards_production_domains'] = 'pfizerforprofessional.com.cn,www.pfizerforprofessional.com.cn,pfizerforprofessional.com,www.pfizerforprofessional.com';
$conf['pfizer_webstandards_site_section_prefix'] = '';
$conf['pfizer_webstandards_site_section_delimiter'] = '>';
$conf['pfizer_webstandards_page_name_base'] = 'title';
$conf['pfizer_webstandards_page_name_prefix'] = '';
$conf['pfizer_webstandards_page_name_homepage'] = '';
$conf['pfizer_webstandards_page_name_delimiter'] = '>';

// securepages settings
$conf['securepages_enable'] = 1;
$conf['securepages_switch'] = 0;
$conf['securepages_basepath'] = '';
$conf['securepages_basepath_ssl'] = '';
$conf['securepages_secure'] = 0;
$conf['securepages_pages'] = "*/ajax/*\n*/autocomplete/*\nbatch";
$conf['securepages_ignore'] = "*/ajax/*\n*/autocomplete/*\nbatch";
$conf['https'] = FALSE;

/*
 * SiteCatalyst Settings
 *   admin/config/system/sitecatalyst
 *   sitecatalyst/sitecatalyst.module
 */
$conf['sitecatalyst_js_file_location'] = '/sites/default/modules/custom/hcp_overrides/js/s_code.js';
$conf['sitecatalyst_image_file_location'] = 'http://pfizer.112.2o7.net/b/ss/pfizerglobalimprod/1/JS-1.2.2--NS/0';
$conf['sitecatalyst_version'] = 'JS-1.2.2';
$conf['pfizer_grv_market'] = 'CN';
$conf['pfizer_grv_janrain_settings_custom'] = 'true';


// Disable output of errors: warnings etc.
$conf['error_level'] = 0;
// PFHCP-887 The number of days that a news article is considered current.
$conf['pfizer_hcp2_newscred_current_duration'] = 180;
// PFHCP-887 Autologout timeout value in seconds.
$conf['autologout_timeout'] = 86400;

/*
 * Recommended PHP memory limit for Portal v2.2+
 */
ini_set('memory_limit', '512M');

/*
 * Pfizer Deploy Settings
 *   Set deploy to blank unless overridden
 *   admin/config/pfizer/pfizer_deploy
 */
$conf['pfizer_deploy_next_user'] = 'pfizer-admin';
$conf['pfizer_deploy_next_url'] = '';

/**
 * NewsCred - global test credentials, needs updating
 */
$conf['pfizer_hcp2_newscred_access_key'] = '79aae680efde8345c8e28175a7876679';
$conf['pfizer_hcp2_newscred_collection'] = 'be3a7b1e6cd1dbb10afae5e2cba34d0c';

// Disable Newscred integration on prod environment - should only occur on DEV3
$conf['pfizer_hcp2_newscred_disable_import'] = TRUE;

// Default webstandard used for dev environments.
$conf['sitecatalyst_image_file_location'] = 'http://pfizer.112.2o7.net/b/ss/pfizerglobalimdevelopment/1/JS-1.2.2--NS/0';
$conf['pfizer_webstandards_mode'] = "dev";

// Default GRV config used for dev environments.
$conf['pfizer_grv_capture_hostname'] = 'pfizergrv-dev.capture.cn.janrain.com';
$conf['pfizer_grv_capture_client_id'] = 'ncas8mv4kjv3f4tg6msujtyxheb49h9s';
$conf['pfizer_grv_capture_secret'] = 'gag4jkpeft8pqpm557y93xudxpkqgnxq';
$conf['pfizer_grv_capture_application_id'] = 'tsn3vp5aadvm2r8m8ku7rkyu3c';
$conf['pfizer_grv_engage_hostname'] = 'engage.cn.janrain.com';
$conf['pfizer_grv_engage_load_js_hostname'] = 'janrain-widget-static.cn.janrain.com/pfizer-cn/load.js';
$conf['pfizer_grv_sso_federate_server'] = 'pfizergrv-dev.sso.cn.janrain.com';

// Default brands used for dev.
$conf['hcp_feed_brand_endpoint'] = 's3.amazonaws.com/dev-pfizerpro-global/cn/json/zh-cn/brand.json';
$conf['hcp_feed_url_endpoint'] = 's3.amazonaws.com/dev-pfizerpro-global/cn/json/zh-cn/brand_url.json';

/*
 * Kulu Valley - GLOBAL: DEV Settings
 *   admin/config/media/kuluvalley
 *   hcp_portal/pfizer_hcp2/modules/pfizer_kuluvalley/pfizer_kuluvalley.admin.inc
 */
$conf['pfizer_kuluvalley_config_consumer'] = 'aHu1qOcvAGL';
$conf['pfizer_kuluvalley_config_consumer_secret'] = 'omL8yRMYSe2';
$conf['pfizer_kuluvalley_config_token'] = '2bbe506797b97817bfb6fba7fd25d74e';
$conf['pfizer_kuluvalley_config_token_secret'] = '72005912f4ee8f9286c3a10ad6b63e3e';
$conf['pfizer_kuluvalley_config_username'] = 'api.user-dev';
$conf['pfizer_kuluvalley_config_password'] = 'ZvIMERfjI#Nrhw#zbjZaF3f';
$conf['pfizer_kuluvalley_config_domain'] = 'pfizeruat.kuluvalley.com';
$conf['pfizer_kuluvalley_config_validate_aliases'] = 1;

// removing time zone settings from user profile
$conf['configurable_timezones'] = 0;

/**
 * Configure transliteration of paths for non-standard URL characters
 * such as ® or é
 * admin/config/search/path/settings
 */
$conf['pathauto_transliterate'] = TRUE;
$conf['pathauto_reduce_ascii'] = FALSE;

/*
 * Brightcove - MARKET SPECIFIC, All environments.
 *   admin/config/media/brightcove
 */
$conf['brightcove_read_api_key'] = 'uHQ_963JJvFvuyq1UyxWZqdJYyz8SrhHzEOfzK51vfochNyY8cOmRw..';
$conf['brightcove_player_default'] = 'brightcove_player';

if (isset($_ENV['AH_SITE_ENVIRONMENT'])) {
  switch ($_ENV['AH_SITE_ENVIRONMENT']) {
    case 'dev':
      $conf['pfizer_deploy_next_url'] = 'https://pfizerforprocomcndev2.prod.acquia-sites.com/wf';
      $conf['hcp_site_configuration']['feed_brand_endpoint'] = 'dev-pfizerpro-global/cn/json/zh-cn/dev.brand.json';
      $conf['hcp_site_configuration']['feed_url_endpoint'] = 'dev-pfizerpro-global/cn/json/zh-cn/dev.brand_url.json';
      break;

    case 'dev2':

      break;
	case 'dev15':  
    case 'dev3':
      // $conf['pfizer_hcp2_newscred_disable_import'] = FALSE;  // leave this commented out until we receive proper newscred API credentials
      $conf['pfizer_deploy_next_url'] = 'https://pfizerforprocomcnstg.prod.acquia-sites.com/wf';
      $conf['hcp_site_configuration']['feed_brand_endpoint'] = 'dev-pfizerpro-global/cn/json/zh-cn/dev3.brand.json';
      $conf['hcp_site_configuration']['feed_url_endpoint'] = 'dev-pfizerpro-global/cn/json/zh-cn/dev3.brand_url.json';
      break;
    case 'dev4':
      break;
    case 'dev5':
      $conf['pfizer_deploy_next_url'] = 'https://pfizerforprocomcndev6.prod.acquia-sites.com/wf';
      $conf['hcp_site_configuration']['feed_brand_endpoint'] = 'dev-pfizerpro-global/cn/json/zh-cn/dev5.brand.json';
      $conf['hcp_site_configuration']['feed_url_endpoint'] = 'dev-pfizerpro-global/cn/json/zh-cn/dev5.brand_url.json';
      break;

    case 'test':
      $conf['pfizer_deploy_next_url'] = 'https://pfizerforprocomcn.prod.acquia-sites.com/wf';
      $conf['pfizer_grv_capture_hostname'] = 'pfizergrv-dev.capture.cn.janrain.com';
      $conf['pfizer_grv_capture_client_id'] = 'wqyevw855h3vtcmcu26rtget78uu49t8';
      $conf['pfizer_grv_capture_secret'] = 'hu7amy6jvqxdm57p2626zhpzh4can4rc';
      $conf['pfizer_grv_capture_application_id'] = 'tsn3vp5aadvm2r8m8ku7rkyu3c';
      $conf['pfizer_grv_engage_hostname'] = 'engage.cn.janrain.com';
      $conf['pfizer_grv_engage_load_js_hostname'] = 'janrain-widget-static.cn.janrain.com/pfizer-cn/load.js';
      $conf['pfizer_grv_sso_federate_server'] = 'pfizergrv-dev.sso.cn.janrain.com';
      $conf['hcp_feed_brand_endpoint'] = 's3.amazonaws.com/stage-pfizerpro-global/cn/json/zh-cn/brand.json';
      $conf['hcp_feed_url_endpoint'] = 's3.amazonaws.com/stage-pfizerpro-global/cn/json/zh-cn/brand_url.json';
      $conf['hcp_site_configuration']['feed_brand_endpoint'] = 'pfizerpro-global/cn/json/zh-cn/brand.json';
      $conf['hcp_site_configuration']['feed_url_endpoint'] = 'pfizerpro-global/cn/json/zh-cn/brand_url.json';
      break;

    case 'prod':
      $conf['sitecatalyst_image_file_location'] = 'http://pfizer.112.2o7.net/b/ss/pfizerglobalimprod/1/JS-1.2.2--NS/0';
      $conf['pfizer_webstandards_mode'] = 'prod';
      $conf['pfizer_grv_capture_hostname'] = 'pfizer-grv.capture.cn.janrain.com';
      $conf['pfizer_grv_capture_client_id'] = 'h974yq38rckjw2q8trr7vyk699rbb9r2';
      $conf['pfizer_grv_capture_application_id'] = 'dqem667jtataep888akfy866y9';
      $conf['pfizer_grv_engage_hostname'] = 'login.cn.janrain.com';
      $conf['pfizer_grv_engage_load_js_hostname'] = 'janrain-widget-static.cn.janrain.com/pfizergrv-cn/load.js';
      $conf['pfizer_grv_sso_federate_server'] = 'pfizer-grv.sso.cn.janrain.com';
      $conf['hcp_feed_brand_endpoint'] = 's3.amazonaws.com/pfizerpro-global/cn/json/zh-cn/brand.json';
      $conf['hcp_feed_url_endpoint'] = 's3.amazonaws.com/pfizerpro-global/cn/json/zh-cn/brand_url.json';
      $conf['hcp_site_configuration']['feed_brand_endpoint'] = 'pfizerpro-global/cn/json/zh-cn/brand.json';
      $conf['hcp_site_configuration']['feed_url_endpoint'] = 'pfizerpro-global/cn/json/zh-cn/brand_url.json';

      // KuluValley Configuration
      $conf['pfizer_kuluvalley_config_consumer'] = 'j4paKi8dT4d';
      $conf['pfizer_kuluvalley_config_consumer_secret'] = 'p1HNqKLJxxt';
      $conf['pfizer_kuluvalley_config_domain'] = 'pfizer.kuluvalley.com';
      $conf['pfizer_kuluvalley_config_token'] = '7dd31fbb5a6f6f3013c7198c9d9757c4';
      $conf['pfizer_kuluvalley_config_token_secret'] = '6b52a464ed07a4fb47182b3e14173b39';
      $conf['pfizer_kuluvalley_config_username'] = 'api.user';
      $conf['pfizer_kuluvalley_config_password'] = '4JBaj#5YNEG#GZoupntzezi';
      $conf['pfizer_kuluvalley_config_validate_aliases'] = 1;

      break;
  }
}

$conf['pfizer_webinars_site_type'] = "product";
// Mailgun Config
$conf['mailgun_api_auth_key'] = "api:key-9w70qe1o-i4-r5th1rmptgqm9-4hcda2";
$conf['mailgun_api_domain_url'] = "https://api.mailgun.net/v2/webinars.mailgun.org";
$conf['mailgun_disabled'] = 0;
$conf['mailgun_field_sender_address'] = "postmaster@webinars.mailgun.org";
$conf['mailgun_field_sender_name'] = "Pfizer Webinars";
$conf['mailgun_verify_ssl'] = 0;

/*
 * ZEN:89857 - Adding correct SMTP configuration for mailgun
 * @admin/config/system/smtp
 */
 $conf['smtp_username'] = 'postmaster@pfizerpro.com';
 $conf['smtp_password'] = 'e4f384d76fd9013a69f53ac78ff708d7';

// Kulu
$conf['pfizer_webinars_settings_video_players']['kulu_valley'] = array (
  'domain' => 'pfizer.kuluvalley.com',
  'width' => 902,
  'height' => 459,
  'consumer_key' => 'geD6Nl9msRD',
  'consumer_secret' => '350wlQILhdU',
  'access_token' => 'ea9096d51e9380e5c7755fea78a7191c',
  'access_token_secret' => '92dd8cfd65bad5419b0421d104fb1ae2'
);

$conf['fast_404_string_whitelisting'] = array('system/files/');
//ini_set('error_reporting', E_ALL);
