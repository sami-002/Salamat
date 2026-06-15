<?php

/*
Plugin Name: Seraphinite Accelerator - Advanced Cache (Drop-in)
Plugin URI: http://wordpress.org/plugins/seraphinite-accelerator
Description: Turns on site high speed to be attractive for people and search engines.
Author: Seraphinite Solutions
Author URI: https://www.s-sols.com
*/

/* seraphinite-accelerator */
if( defined( 'SERAPH_ACCEL_ADVCACHE_COMP' ) ) return;
function seraph_accel_siteSettInlineDetach($siteId){ return array (
  'cache' => 
  array (
    'enable' => true,
    'normAgent' => true,
    'chkNotMdfSince' => false,
    'cntLen' => true,
    'opAgentPostpone' => true,
    'srv' => true,
    'srvClr' => true,
    'srvUpd' => false,
    'srvUpdTimeout' => 5,
    'sucuri' => 
    array (
      'apiKey' => '',
      'apiSecret' => '',
    ),
    'cloudflare' => 
    array (
      'zoneId' => '',
      'auth' => 'key',
      'email' => '',
      'apiKey' => '',
      'apiToken' => '',
    ),
    'nginx' => 
    array (
      'method' => '3rdp',
      'url' => '',
      'urlAll' => '',
      'fastCgiDir' => '',
      'fastCgiLevels' => '1:2',
    ),
    'cron' => false,
    'forceAdvCache' => false,
    'lazyInv' => true,
    'lazyInvInitTmp' => true,
    'lazyInvForcedTmp' => false,
    'lazyInvTmp' => false,
    'fastTmpOpt' => true,
    'lazyInvFr' => true,
    'updPost' => true,
    'updPostDelay' => 0,
    'updPostOp' => 0,
    'updPostDeps' => 
    array (
      0 => '@home',
      1 => '@post@{ID}:@pageNums',
      2 => '@post@{ID}:@commentPageNums',
      3 => '@postsBase@{post_type}:<|@pageNums|@commentPageNums>',
      4 => '@termsOfClass@categories@{post_type}@{ID}:<|@pageNums|@commentPageNums>',
    ),
    'updPostMeta' => false,
    'updPostMetaExcl' => 
    array (
      0 => '!@^_stock$@ & !@^_stock_status$@ & !@^_low_stock_amount$@ & !@_price@',
    ),
    'updGlobs' => 
    array (
      'op' => 0,
      'terms' => 
      array (
        'enable' => false,
        'deps' => 
        array (
          0 => 'category',
          1 => 'product_cat',
          2 => 'course_cat',
        ),
      ),
      'menu' => 
      array (
        'enable' => false,
      ),
      'tpl' => 
      array (
        'enable' => false,
      ),
      'elmntrTpl' => 
      array (
        'enable' => false,
      ),
      'tblPrss' => 
      array (
        'enable' => false,
      ),
      'flntFrm' => 
      array (
        'enable' => false,
      ),
    ),
    'updAllDeps' => 
    array (
      0 => '@home',
      1 => '@postsViewable:<|@pageNums|@commentPageNums>',
      2 => '@termsOfClass@categories',
    ),
    'updSche' => 
    array (
      'def' => 
      array (
        'enable' => false,
        'op' => 0,
        'prior' => 7,
        'period' => 24,
        'periodN' => 1,
        'deps' => 
        array (
          0 => '@home',
        ),
        'times' => 
        array (
          0 => 
          array (
            'tm' => 0,
            'm' => 0,
            's' => 0,
          ),
        ),
      ),
    ),
    'updByTimeout' => true,
    'maxProc' => 1,
    'procInterval' => 5,
    'procIntervalShort' => 1,
    'procMemLim' => 2048,
    'procTmLim' => 570,
    'procWorkInt' => 0.5,
    'procPauseInt' => 0.5,
    'procEngn' => 1,
    'autoProc' => true,
    'timeout' => 86400,
    'timeoutFr' => 60,
    'timeoutCln' => 262080,
    'timeoutFrCln' => 3600,
    'ctxTimeoutCln' => 1440,
    'extObjTimeoutCln' => 10080,
    'autoClnPeriod' => 1440,
    'useTimeoutClnForWpNonce' => true,
    'encs' => 
    array (
      0 => 'gzip',
      1 => 'deflate',
      2 => 'compress',
      3 => '',
    ),
    'dataCompr' => 
    array (
      0 => 'deflate',
    ),
    'dataLvl' => 
    array (
      0 => 1,
      1 => 2,
    ),
    'useDataComprAssets' => true,
    'chunks' => 
    array (
      'enable' => true,
      'js' => true,
      'css' => true,
      'seps' => 
      array (
        0 => 
        array (
          'enable' => true,
          'sel' => './/header[1]',
          'side' => 3,
        ),
        1 => 
        array (
          'enable' => true,
          'sel' => './/footer[last()]',
          'side' => 3,
        ),
        2 => 
        array (
          'enable' => true,
          'sel' => './/div[contains(concat(" ", normalize-space(@class), " "), " header ")][1]',
          'side' => 3,
        ),
        3 => 
        array (
          'enable' => true,
          'sel' => './/div[contains(concat(" ", normalize-space(@class), " "), " footer ")][last()]',
          'side' => 3,
        ),
        4 => 
        array (
          'enable' => true,
          'sel' => './/div[@id="comments" and contains(concat(" ", normalize-space(@class), " "), " comments-area ")]',
          'side' => 3,
        ),
        5 => 
        array (
          'enable' => true,
          'sel' => './/section[@id="comment-wrap"]',
          'side' => 3,
        ),
        6 => 
        array (
          'enable' => true,
          'sel' => './/div[@data-elementor-type="header"]',
          'side' => 3,
        ),
        7 => 
        array (
          'enable' => true,
          'sel' => './/div[@data-elementor-type="footer"]',
          'side' => 3,
        ),
        8 => 
        array (
          'enable' => true,
          'sel' => './/*[contains(concat(" ",normalize-space(@class)," ")," elementor-icon-list-items ")]',
          'side' => 3,
        ),
        9 => 
        array (
          'enable' => true,
          'sel' => './/div[contains(concat(" ", normalize-space(@class), " "), " tdc-header-wrap ")]',
          'side' => 3,
        ),
        10 => 
        array (
          'enable' => true,
          'sel' => './/div[contains(concat(" ", normalize-space(@class), " "), " tdc-footer-wrap ")]',
          'side' => 3,
        ),
        11 => 
        array (
          'enable' => true,
          'sel' => './/div[contains(concat(" ", normalize-space(@class), " "), " td-header-template-wrap ")]',
          'side' => 3,
        ),
        12 => 
        array (
          'enable' => true,
          'sel' => './/div[contains(concat(" ", normalize-space(@class), " "), " td-footer-template-wrap ")]',
          'side' => 3,
        ),
        13 => 
        array (
          'enable' => true,
          'sel' => './/div[contains(concat(" ", normalize-space(@class), " "), " fusion-tb-header ")]',
          'side' => 3,
        ),
        14 => 
        array (
          'enable' => true,
          'sel' => './/div[contains(concat(" ", normalize-space(@class), " "), " fusion-tb-footer ")]',
          'side' => 3,
        ),
        15 => 
        array (
          'enable' => true,
          'sel' => './/*[contains(concat(" ",normalize-space(@class)," ")," et_pb_comments_module ")]',
          'side' => 3,
        ),
      ),
    ),
    'urisExcl' => 
    array (
      0 => '/checkout/',
      1 => '@sitemap@',
      2 => '@(?:^|/)page/@',
    ),
    'exclAgents' => 
    array (
      0 => 'printfriendly',
    ),
    'exclCookies' => 
    array (
    ),
    'exclArgsAll' => true,
    'exclArgs' => 
    array (
      0 => 'aiosp_sitemap_path',
      1 => 'aiosp_sitemap_page',
      2 => 'xml_sitemap',
      3 => 'seopress_sitemap',
      4 => 'seopress_news',
      5 => 'seopress_video',
      6 => 'seopress_cpt',
      7 => 'seopress_paged',
      8 => 'sitemap',
      9 => 'sitemap_n',
      10 => 'elementor-preview',
      11 => 'wc-ajax',
    ),
    'skipArgsEnable' => false,
    'skipArgsAll' => false,
    'skipArgs' => 
    array (
      0 => 'redirect_to',
      1 => 'utm_source',
      2 => 'utm_medium',
      3 => 'utm_campaign',
      4 => 'utm_content',
      5 => 'utm_term',
      6 => 'fbclid',
      7 => 'story_fbid',
      8 => 'mibextid',
      9 => 'gclid',
      10 => 'wbraid',
      11 => 'gbraid',
      12 => 'gad_campaignid',
      13 => 'gad_source',
      14 => '_ga',
      15 => 'yclid',
      16 => 'srsltid',
    ),
    'exclConts' => 
    array (
      0 => './/*[@id="wpadminbar"]',
      1 => './/body[contains(concat(" ",normalize-space(@class)," ")," theme-woodmart ")][contains(concat(" ",normalize-space(@class)," ")," seraph-accel-view-cmn ")]//*[contains(concat(" ",normalize-space(@class)," ")," whb-general-header-inner ")][count(./*[contains(concat(" ",normalize-space(@class)," ")," whb-visible-lg ")]) = 0]',
      2 => './/body[contains(concat(" ",normalize-space(@class)," ")," wpc_is_filter_request ")]',
    ),
    'hdrs' => 
    array (
      0 => '@^Set-Cookie\\s*:\\s*wordpress_test_cookie\\s*=@i',
      1 => '@^X-XSS-Protection\\s*:@i',
      2 => '@^X-Frame-Options\\s*:@i',
      3 => '@^X-Robots-Tag\\s*:@i',
      4 => '@^Content-Security-Policy\\s*:@i',
      5 => '@^Strict-Transport-Security\\s*:@i',
      6 => '@^Referrer-Policy\\s*:@i',
      7 => '@^Feature-Policy\\s*:@i',
      8 => '@^Permissions-Policy\\s*:@i',
      9 => '@^Cf-Edge-Cache\\s*:@i',
      10 => '@^Ec-Cdn-@i',
    ),
    'views' => true,
    'viewsDeviceGrps' => 
    array (
      0 => 
      array (
        'enable' => false,
        'name' => '',
        'id' => 'mobilehighres',
        'agents' => 
        array (
          0 => 'android',
          1 => 'bada',
          2 => 'incognito',
          3 => 'maemo',
          4 => 'mobi',
          5 => 'opera mini',
          6 => 's8000',
          7 => 'series60',
          8 => 'ucbrowser',
          9 => 'ucweb',
          10 => 'webmate',
          11 => 'webos',
        ),
      ),
      1 => 
      array (
        'enable' => false,
        'name' => '',
        'id' => 'mobilelowres',
        'agents' => 
        array (
          0 => '240x320',
          1 => '2.0 mmp',
          2 => '\\bppc\\b',
          3 => 'alcatel',
          4 => 'amoi',
          5 => 'asus',
          6 => 'au-mic',
          7 => 'audiovox',
          8 => 'avantgo',
          9 => 'benq',
          10 => 'bird',
          11 => 'blackberry',
          12 => 'blazer',
          13 => 'cdm',
          14 => 'cellphone',
          15 => 'danger',
          16 => 'ddipocket',
          17 => 'docomo',
          18 => 'dopod',
          19 => 'elaine/3.0',
          20 => 'ericsson',
          21 => 'eudoraweb',
          22 => 'fly',
          23 => 'haier',
          24 => 'hiptop',
          25 => 'hp.ipaq',
          26 => 'htc',
          27 => 'huawei',
          28 => 'i-mobile',
          29 => 'iemobile',
          30 => 'iemobile/7',
          31 => 'iemobile/9',
          32 => 'j-phone',
          33 => 'kddi',
          34 => 'konka',
          35 => 'kwc',
          36 => 'kyocera/wx310k',
          37 => 'lenovo',
          38 => 'lg',
          39 => 'lg/u990',
          40 => 'lge vx',
          41 => 'midp',
          42 => 'midp-2.0',
          43 => 'mmef20',
          44 => 'mmp',
          45 => 'mobilephone',
          46 => 'mot-v',
          47 => 'motorola',
          48 => 'msie 10.0',
          49 => 'netfront',
          50 => 'newgen',
          51 => 'newt',
          52 => 'nintendo ds',
          53 => 'nintendo wii',
          54 => 'nitro',
          55 => 'nokia',
          56 => 'novarra',
          57 => 'o2',
          58 => 'openweb',
          59 => 'opera mobi',
          60 => 'opera.mobi',
          61 => 'p160u',
          62 => 'palm',
          63 => 'panasonic',
          64 => 'pantech',
          65 => 'pdxgw',
          66 => 'pg',
          67 => 'philips',
          68 => 'phone',
          69 => 'playbook',
          70 => 'playstation portable',
          71 => 'portalmmm',
          72 => 'proxinet',
          73 => 'psp',
          74 => 'qtek',
          75 => 'sagem',
          76 => 'samsung',
          77 => 'sanyo',
          78 => 'sch',
          79 => 'sch-i800',
          80 => 'sec',
          81 => 'sendo',
          82 => 'sgh',
          83 => 'sharp',
          84 => 'sharp-tq-gx10',
          85 => 'small',
          86 => 'smartphone',
          87 => 'softbank',
          88 => 'sonyericsson',
          89 => 'sph',
          90 => 'symbian',
          91 => 'symbian os',
          92 => 'symbianos',
          93 => 'toshiba',
          94 => 'treo',
          95 => 'ts21i-10',
          96 => 'up.browser',
          97 => 'up.link',
          98 => 'uts',
          99 => 'vertu',
          100 => 'vodafone',
          101 => 'wap',
          102 => 'willcome',
          103 => 'windows ce',
          104 => 'windows.ce',
          105 => 'winwap',
          106 => 'xda',
          107 => 'xoom',
          108 => 'zte',
        ),
      ),
      2 => 
      array (
        'enable' => true,
        'name' => '',
        'id' => 'mobile',
        'agents' => 
        array (
          0 => 'mobile',
          1 => 'android',
          2 => 'silk/',
          3 => 'blackberry',
          4 => 'opera mini',
          5 => 'opera mobi',
        ),
      ),
    ),
    'viewsGeo' => 
    array (
      'enable' => false,
      'apiKeyMmDb' => '',
      'fileMmDb' => NULL,
      'grps' => 
      array (
      ),
    ),
    'viewsCompatGrps' => 
    array (
      0 => 
      array (
        'enable' => true,
        'name' => '',
        'id' => 'c',
        'agents' => 
        array (
          0 => '@\\Wmsie \\d+\\.\\d+\\W@i',
          1 => '@\\Wtrident/\\d+\\.\\d+\\W@i',
          2 => '@\\Wyandexmetrika/\\d+\\.\\d+\\W@i',
          3 => '@\\Wgoogleadsenseinfeed\\W@i',
          4 => '!@\\WChrome/\\d+\\W@i & @(?:\\W|^)Safari/([\\d\\.]+)(?:\\W|$)@i < 603.3.8',
          5 => '!@\\WChrome/\\d+\\W@i & @\\sMac\\sOS\\sX\\s([\\d\\_]+)@i < 10.12.6',
        ),
      ),
      1 => 
      array (
        'enable' => false,
        'name' => '',
        'id' => 'cm',
        'agents' => 
        array (
          0 => '@\\Wbingbot/\\d+\\.\\d+\\W@',
        ),
      ),
    ),
    'viewsGrps' => 
    array (
      0 => 
      array (
        'enable' => true,
        'fr' => false,
        'name' => 'AMP',
        'urisExcl' => 
        array (
        ),
        'cookies' => 
        array (
        ),
        'hdrs' => 
        array (
        ),
        'args' => 
        array (
          0 => 'amp',
        ),
      ),
      1 => 
      array (
        'enable' => true,
        'fr' => false,
        'name' => 'WPML',
        'urisExcl' => 
        array (
        ),
        'cookies' => 
        array (
          0 => 'wp_wcml_currency',
          1 => 'wcml_client_currency',
        ),
        'hdrs' => 
        array (
        ),
        'args' => 
        array (
          0 => 'lang',
        ),
      ),
      2 => 
      array (
        'enable' => true,
        'fr' => false,
        'name' => 'WPtouch',
        'urisExcl' => 
        array (
        ),
        'cookies' => 
        array (
          0 => 'wptouch-pro-cache-state',
          1 => 'wptouch-pro-view',
        ),
        'hdrs' => 
        array (
        ),
        'args' => 
        array (
        ),
      ),
      3 => 
      array (
        'enable' => true,
        'fr' => false,
        'name' => 'VillaTheme WooCommerce Multi Currency',
        'urisExcl' => 
        array (
        ),
        'cookies' => 
        array (
          0 => 'wmc_current_currency',
        ),
        'hdrs' => 
        array (
        ),
        'args' => 
        array (
        ),
      ),
      4 => 
      array (
        'enable' => true,
        'fr' => false,
        'name' => 'YITH Multi Currency Switcher for WooCommerce',
        'urisExcl' => 
        array (
        ),
        'cookies' => 
        array (
          0 => 'yith_wcmcs_currency',
        ),
        'hdrs' => 
        array (
        ),
        'args' => 
        array (
        ),
      ),
      5 => 
      array (
        'enable' => true,
        'fr' => false,
        'name' => 'Aelia Currency Switcher',
        'urisExcl' => 
        array (
        ),
        'cookies' => 
        array (
          0 => 'aelia_cs_selected_currency',
        ),
        'hdrs' => 
        array (
        ),
        'args' => 
        array (
        ),
      ),
      6 => 
      array (
        'enable' => true,
        'fr' => false,
        'name' => 'FOX - Currency Switcher',
        'urisExcl' => 
        array (
        ),
        'cookies' => 
        array (
          0 => '@^wccs_changed_currency$@',
        ),
        'hdrs' => 
        array (
        ),
        'args' => 
        array (
        ),
      ),
      7 => 
      array (
        'enable' => false,
        'fr' => false,
        'name' => 'GDPR Cookie Consent',
        'urisExcl' => 
        array (
        ),
        'cookies' => 
        array (
          0 => 'viewed_cookie_policy',
          1 => 'cli_user_preference',
        ),
        'hdrs' => 
        array (
        ),
        'args' => 
        array (
        ),
      ),
      8 => 
      array (
        'enable' => true,
        'fr' => false,
        'name' => 'Pixelmate Cookie Banner',
        'urisExcl' => 
        array (
        ),
        'cookies' => 
        array (
          0 => 'pixelmate',
        ),
        'hdrs' => 
        array (
        ),
        'args' => 
        array (
        ),
      ),
      9 => 
      array (
        'enable' => true,
        'fr' => false,
        'name' => 'OneCom Cookie Banner',
        'urisExcl' => 
        array (
        ),
        'cookies' => 
        array (
          0 => 'onecom_cookie_consent',
        ),
        'hdrs' => 
        array (
        ),
        'args' => 
        array (
        ),
      ),
      10 => 
      array (
        'enable' => true,
        'fr' => false,
        'name' => 'us_cookie_notice',
        'urisExcl' => 
        array (
        ),
        'cookies' => 
        array (
          0 => 'us_cookie_notice_accepted',
        ),
        'hdrs' => 
        array (
        ),
        'args' => 
        array (
        ),
      ),
      11 => 
      array (
        'enable' => true,
        'fr' => false,
        'name' => 'Transcy',
        'urisExcl' => 
        array (
        ),
        'cookies' => 
        array (
          0 => 'transcy_',
        ),
        'hdrs' => 
        array (
        ),
        'args' => 
        array (
        ),
      ),
      12 => 
      array (
        'enable' => true,
        'fr' => false,
        'name' => 'WP Legal Pages',
        'urisExcl' => 
        array (
        ),
        'cookies' => 
        array (
          0 => 'wplegalpages-',
        ),
        'hdrs' => 
        array (
        ),
        'args' => 
        array (
        ),
      ),
    ),
    'ctx' => false,
    'ctxSkip' => false,
    'ctxSessSep' => true,
    'ctxContPr' => true,
    'ctxCliRefresh' => true,
    'ctxLazyInv' => false,
    'ctxGrps' => 
    array (
      'common' => 
      array (
        'enable' => true,
        'name' => 'Common',
        'cookies' => 
        array (
          0 => 'wp-postpass_',
          1 => 'comment_author_',
          2 => 'sc_commented_posts',
        ),
        'args' => 
        array (
          0 => 'key',
        ),
        'tables' => 
        array (
          0 => 
          array (
            'name' => '%PREFIX%users',
            'col' => 'ID',
            'nameRel' => '',
            'colRel' => '',
            'colRelLink' => '',
            'condRel' => 
            array (
            ),
          ),
          1 => 
          array (
            'name' => '%PREFIX%usermeta',
            'col' => 'user_id',
            'nameRel' => '',
            'colRel' => '',
            'colRelLink' => '',
            'condRel' => 
            array (
            ),
          ),
        ),
      ),
      'wordpress-social-login' => 
      array (
        'enable' => true,
        'name' => 'Social Login',
        'cookies' => 
        array (
        ),
        'args' => 
        array (
          0 => 'action',
        ),
        'tables' => 
        array (
        ),
      ),
      'theme_woodmart' => 
      array (
        'enable' => true,
        'name' => 'WoodMart Theme',
        'cookies' => 
        array (
          0 => 'woodmart_wishlist_products',
          1 => 'woodmart_compare_list',
        ),
        'args' => 
        array (
        ),
        'tables' => 
        array (
        ),
      ),
      'jet-cw' => 
      array (
        'enable' => true,
        'name' => 'Jet',
        'cookies' => 
        array (
          0 => 'jet-wish-list',
          1 => 'jet-compare-list',
        ),
        'args' => 
        array (
        ),
        'tables' => 
        array (
        ),
      ),
      'woocommerce' => 
      array (
        'enable' => true,
        'name' => 'WooCommerce',
        'cookies' => 
        array (
          0 => 'woocommerce_cart_hash',
          1 => 'wp_woocommerce_session_',
          2 => 'yith_wcwl_session_',
        ),
        'args' => 
        array (
          0 => 'add-to-cart',
          1 => 'remove_item',
          2 => 'removed_item',
          3 => 'undo_item',
          4 => 'update_cart',
          5 => 'proceed',
          6 => 'order_again',
          7 => 'apply_coupon',
          8 => 'remove_coupon',
        ),
        'tables' => 
        array (
          0 => 
          array (
            'name' => '%PREFIX%woocommerce_sessions',
            'col' => 'session_key',
            'nameRel' => '',
            'colRel' => '',
            'colRelLink' => '',
            'condRel' => 
            array (
            ),
          ),
          1 => 
          array (
            'name' => '%PREFIX%posts',
            'col' => 'ID',
            'nameRel' => '%PREFIX%postmeta',
            'colRel' => 'meta_value',
            'colRelLink' => 'post_id',
            'condRel' => 
            array (
              'meta_key' => 
              array (
                0 => '_customer_user',
              ),
            ),
          ),
          2 => 
          array (
            'name' => '%PREFIX%postmeta',
            'col' => 'post_id',
            'nameRel' => '%PREFIX%postmeta',
            'colRel' => 'meta_value',
            'colRelLink' => 'post_id',
            'condRel' => 
            array (
              'meta_key' => 
              array (
                0 => '_customer_user',
              ),
            ),
          ),
        ),
      ),
      'easy-digital-downloads' => 
      array (
        'enable' => true,
        'name' => 'Easy Digital Downloads',
        'cookies' => 
        array (
          0 => '@^edd_items_in_cart$@ > 0 & @^phpsessid$@i',
        ),
        'args' => 
        array (
        ),
        'tables' => 
        array (
        ),
      ),
      'lifterlms' => 
      array (
        'enable' => false,
        'name' => 'LMS by LifterLMS',
        'cookies' => 
        array (
        ),
        'args' => 
        array (
        ),
        'tables' => 
        array (
          0 => 
          array (
            'name' => '%PREFIX%lifterlms_sessions',
            'col' => 'session_key',
            'nameRel' => '',
            'colRel' => '',
            'colRelLink' => '',
            'condRel' => 
            array (
            ),
          ),
          1 => 
          array (
            'name' => '%PREFIX%posts',
            'col' => 'ID',
            'nameRel' => '%PREFIX%lifterlms_user_postmeta',
            'colRel' => 'user_id',
            'colRelLink' => 'post_id',
            'condRel' => 
            array (
            ),
          ),
          2 => 
          array (
            'name' => '%PREFIX%postmeta',
            'col' => 'post_id',
            'nameRel' => '%PREFIX%lifterlms_user_postmeta',
            'colRel' => 'user_id',
            'colRelLink' => 'post_id',
            'condRel' => 
            array (
            ),
          ),
        ),
      ),
      'wp-recall' => 
      array (
        'enable' => true,
        'name' => 'WP-Recall',
        'cookies' => 
        array (
        ),
        'args' => 
        array (
        ),
        'tables' => 
        array (
          0 => 
          array (
            'name' => '%PREFIX%rcl_bookmarks',
            'col' => 'user_id',
            'nameRel' => '',
            'colRel' => '',
            'colRelLink' => '',
            'condRel' => 
            array (
            ),
          ),
          1 => 
          array (
            'name' => '%PREFIX%rcl_bookmarks_gr',
            'col' => 'user_gr',
            'nameRel' => '',
            'colRel' => '',
            'colRelLink' => '',
            'condRel' => 
            array (
            ),
          ),
          2 => 
          array (
            'name' => '%PREFIX%rcl_chat_messages',
            'col' => 'user_id',
            'nameRel' => '',
            'colRel' => '',
            'colRelLink' => '',
            'condRel' => 
            array (
            ),
          ),
          3 => 
          array (
            'name' => '%PREFIX%rcl_chat_messagemeta',
            'col' => 'message_id',
            'nameRel' => '%PREFIX%rcl_chat_messages',
            'colRel' => 'user_id',
            'colRelLink' => 'message_id',
            'condRel' => 
            array (
            ),
          ),
          4 => 
          array (
            'name' => '%PREFIX%rcl_chat_users',
            'col' => 'user_id',
            'nameRel' => '',
            'colRel' => '',
            'colRelLink' => '',
            'condRel' => 
            array (
            ),
          ),
          5 => 
          array (
            'name' => '%PREFIX%rcl_chats',
            'col' => 'chat_id',
            'nameRel' => '%PREFIX%rcl_chat_users',
            'colRel' => 'user_id',
            'colRelLink' => 'chat_id',
            'condRel' => 
            array (
            ),
          ),
          6 => 
          array (
            'name' => '%PREFIX%rcl_feeds',
            'col' => 'user_id',
            'nameRel' => '',
            'colRel' => '',
            'colRelLink' => '',
            'condRel' => 
            array (
            ),
          ),
          7 => 
          array (
            'name' => '%PREFIX%rcl_groups_users',
            'col' => 'user_id',
            'nameRel' => '',
            'colRel' => '',
            'colRelLink' => '',
            'condRel' => 
            array (
            ),
          ),
          8 => 
          array (
            'name' => '%PREFIX%rcl_groups_options',
            'col' => 'group_id',
            'nameRel' => '%PREFIX%rcl_groups_users',
            'colRel' => 'user_id',
            'colRelLink' => 'group_id',
            'condRel' => 
            array (
            ),
          ),
          9 => 
          array (
            'name' => '%PREFIX%rcl_groups',
            'col' => 'ID',
            'nameRel' => '%PREFIX%rcl_groups_users',
            'colRel' => 'user_id',
            'colRelLink' => 'group_id',
            'condRel' => 
            array (
            ),
          ),
          10 => 
          array (
            'name' => '%PREFIX%rcl_notifications',
            'col' => 'user_id',
            'nameRel' => '',
            'colRel' => '',
            'colRelLink' => '',
            'condRel' => 
            array (
            ),
          ),
          11 => 
          array (
            'name' => '%PREFIX%rcl_orders',
            'col' => 'user_id',
            'nameRel' => '',
            'colRel' => '',
            'colRelLink' => '',
            'condRel' => 
            array (
            ),
          ),
          12 => 
          array (
            'name' => '%PREFIX%rcl_order_items',
            'col' => 'order_id',
            'nameRel' => '%PREFIX%rcl_orders',
            'colRel' => 'user_id',
            'colRelLink' => 'order_id',
            'condRel' => 
            array (
            ),
          ),
          13 => 
          array (
            'name' => '%PREFIX%rcl_rating_values',
            'col' => 'user_id',
            'nameRel' => '',
            'colRel' => '',
            'colRelLink' => '',
            'condRel' => 
            array (
            ),
          ),
          14 => 
          array (
            'name' => '%PREFIX%rcl_rating_totals',
            'col' => 'object_id',
            'nameRel' => '%PREFIX%rcl_rating_values',
            'colRel' => 'user_id',
            'colRelLink' => 'object_id',
            'condRel' => 
            array (
            ),
          ),
          15 => 
          array (
            'name' => '%PREFIX%rcl_rating_users',
            'col' => 'user_id',
            'nameRel' => '',
            'colRel' => '',
            'colRelLink' => '',
            'condRel' => 
            array (
            ),
          ),
          16 => 
          array (
            'name' => '%PREFIX%rcl_temp_media',
            'col' => 'user_id',
            'nameRel' => '',
            'colRel' => '',
            'colRelLink' => '',
            'condRel' => 
            array (
            ),
          ),
          17 => 
          array (
            'name' => '%PREFIX%rcl_user_action',
            'col' => 'user',
            'nameRel' => '',
            'colRel' => '',
            'colRelLink' => '',
            'condRel' => 
            array (
            ),
          ),
          18 => 
          array (
            'name' => '%PREFIX%rcl_uw_shares',
            'col' => 'author_id',
            'nameRel' => '',
            'colRel' => '',
            'colRelLink' => '',
            'condRel' => 
            array (
            ),
          ),
        ),
      ),
      'cmsrush' => 
      array (
        'enable' => true,
        'name' => 'CMS Rush',
        'cookies' => 
        array (
          0 => 'cmsrush_',
        ),
        'args' => 
        array (
        ),
        'tables' => 
        array (
        ),
      ),
    ),
    'data' => 
    array (
      'items' => 
      array (
      ),
    ),
    'srvShrdTtl' => 3600,
  ),
  'cacheBr' => 
  array (
    'enable' => true,
    'timeout' => 525600,
  ),
  'cacheObj' => 
  array (
    'enable' => false,
    'forceDropin' => false,
    'timeout' => 86400,
    'groupsGlobal' => 
    array (
      0 => 'blog-details',
      1 => 'blog-id-cache',
      2 => 'blog-lookup',
      3 => 'global-posts',
      4 => 'networks',
      5 => 'rss',
      6 => 'sites',
      7 => 'site-details',
      8 => 'site-lookup',
      9 => 'site-options',
      10 => 'site-transient',
      11 => 'users',
      12 => 'useremail',
      13 => 'userlogins',
      14 => 'usermeta',
      15 => 'user_meta',
      16 => 'userslugs',
      17 => 'blog_meta',
      18 => 'image_editor',
      19 => 'network-queries',
      20 => 'site-queries',
      21 => 'theme_files',
      22 => 'translation_files',
      23 => 'user-queries',
    ),
    'groupsNonPersistent' => 
    array (
      0 => 'comment',
      1 => 'counts',
      2 => 'plugins',
      3 => 'theme_json',
      4 => 'themes',
      5 => 'trp',
      6 => 'wc_session_id',
    ),
  ),
  'contPr' => 
  array (
    'enable' => true,
    'normalize' => 3,
    'normUrl' => false,
    'normUrlMode' => 2,
    'min' => true,
    'cln' => 
    array (
      'cmts' => true,
      'cmtsExcl' => 
      array (
        0 => '@^\\s*/?noindex\\s*$@i',
        1 => '@\\[et-ajax\\]@i',
        2 => '@^\\s*\\[if\\s@i',
        3 => '@\\[endif\\]\\s*$@i',
        4 => '@fwp-loop@i',
        5 => '@data-map-zoom@i',
        6 => '@react@i',
      ),
      'items' => 
      array (
        0 => './/img/@loading',
        1 => './/iframe/@loading',
        2 => './/link[@rel="preload"][@as="font"][not(self::node()[@seraph-accel-crit="1"])]',
        3 => './/link[@rel="modulepreload"][not(self::node()[@seraph-accel-crit="1"])]',
      ),
    ),
    'rpl' => 
    array (
      'items' => 
      array (
        0 => 
        array (
          'enable' => false,
          'descr' => 'Fetch Priority to High',
          'alws' => false,
          'expr' => '@^<\\w+()@',
          'sel' => '',
          'data' => ' fetchpriority="high"',
        ),
        1 => 
        array (
          'enable' => false,
          'descr' => 'DNS Prefetch',
          'alws' => false,
          'expr' => '@<head(?:\\s[^>]*)?>()@',
          'sel' => '',
          'data' => '<link rel="dns-prefetch" href="//fonts.gstatic.com">',
        ),
        2 => 
        array (
          'enable' => true,
          'descr' => '',
          'alws' => false,
          'expr' => '@<link\\s+rel="stylesheet"[^>]+(consent-original-href-_)=[^>]+>@',
          'sel' => '',
          'data' => 'href',
        ),
        3 => 
        array (
          'enable' => true,
          'descr' => '',
          'alws' => false,
          'expr' => '@<body[^>]+(cm-manage-google-fonts)[^>]+>@',
          'sel' => '',
          'data' => '',
        ),
        4 => 
        array (
          'enable' => true,
          'descr' => '',
          'alws' => false,
          'expr' => '@\\sid=\\"nelio-ab-testing-main-js\\"@ & @<body[^>]+class="()@',
          'sel' => '',
          'data' => 'nab-done ',
        ),
      ),
    ),
    'rc' => 
    array (
      'thmFltsm' => true,
      'gglTrn' => true,
      'aksmtAs' => true,
      'advWooSrch' => true,
      'jetMblMnu' => true,
      'wpelLnk' => true,
      'cfTrnstl' => true,
      'tagGrpsShfflBx' => true,
      'g5Ere' => true,
      'elmntrTrx' => true,
      'thmXStr' => true,
      'wooPrdQnt' => true,
      'asClnTlk' => true,
      'chbsBkngFrm' => true,
      'jegElmntr' => true,
      'divi' => true,
      'pys' => true,
    ),
    'lazy' => 
    array (
      'items' => 
      array (
      ),
      'itemsExcl' => 
      array (
      ),
      'bjs' => true,
      'p' => false,
    ),
    'fresh' => 
    array (
      'smoothAppear' => true,
      'items' => 
      array (
      ),
    ),
    'earlyPaint' => true,
    'img' => 
    array (
      'srcAddLm' => false,
      'sysFlt' => false,
      'inlSml' => true,
      'inlSmlSize' => 1024,
      'deinlLrg' => true,
      'deinlLrgSize' => 2048,
      'redirOwn' => false,
      'redirCacheAdapt' => false,
      'comprAsync' => false,
      'webp' => 
      array (
        'enable' => true,
        'redir' => true,
        'prms' => 
        array (
          'q' => 80,
        ),
      ),
      'avif' => 
      array (
        'enable' => false,
        'redir' => false,
        'prms' => 
        array (
          'q' => 52,
          's' => 6,
        ),
      ),
      'szAdaptImg' => false,
      'szAdaptBg' => false,
      'szAdaptAsync' => false,
      'szAdaptOnDemand' => true,
      'szAdaptExcl' => 
      array (
      ),
      'szAdaptBgCxMin' => 0,
      'szAdaptDpr' => true,
      'szAdaptDprMin' => 100,
      'excl' => 
      array (
        0 => './/svg[contains(concat(" ",normalize-space(@class)," ")," lottgen ")][contains(concat(" ",normalize-space(@class)," ")," js-lzl-ing ")]/image',
        1 => './/meta[@property]',
        2 => './/img[@uk-svg]',
        3 => './/img[@name="zsCaptchaImage"]',
        4 => './/img[contains(@src,"arttrk.com/pixel")]',
      ),
      'lazy' => 
      array (
        'setSize' => false,
        'load' => true,
        'own' => true,
        'smoothAppear' => true,
        'plchRast' => false,
        'del3rd' => true,
        'excl' => 
        array (
          0 => './/img[contains(concat(\' \',normalize-space(@class),\' \'),\' jetpack-lazy-image \')]',
          1 => './/img[@data-opt-src]',
          2 => './/img[contains(concat(" ",normalize-space(@class)," ")," rev-slidebg ")]',
          3 => './/sr7-module//img',
          4 => './/*[contains(concat(" ",normalize-space(@class)," ")," n2-ss-slider ")]//img',
          5 => './/img[contains(concat(" ",normalize-space(@class)," ")," a3-notlazy ")]',
          6 => './/*[contains(concat(" ",normalize-space(@class)," ")," t-bgimg ")]',
          7 => './/*[contains(concat(" ",normalize-space(@class)," ")," posts-container ")][@data-load-animation]//*[contains(concat(" ",normalize-space(@class)," ")," post-featured-img ")]//img',
          8 => './/*[contains(concat(" ",normalize-space(@class)," ")," dani-lzl ")]//img',
          9 => 'ajs:.//img[@data-no-lazy="1"]',
          10 => 'ajs:.//img[contains(concat(" ",normalize-space(@class)," ")," skip-lazy ")]',
          11 => 'ajs:.//*[@data-zoom_image]/img',
          12 => 'ajs:.//vehica-car-field-gallery//img',
        ),
      ),
      'cacheExt' => 
      array (
        0 => 'crit:@\\.cdninstagram\\.com/@',
        1 => 'crit:@\\.googleusercontent\\.com/@',
        2 => '@\\.ytimg\\.com/@',
        3 => '@\\.vimeocdn\\.com/@',
      ),
    ),
    'frm' => 
    array (
      'excl' => 
      array (
        0 => 'ajs:.//*[contains(concat(" ",normalize-space(@class)," ")," wprm-recipe-video ")]/iframe',
        1 => 'ajs:.//iframe[contains(@src,"/maps")]',
        2 => 'ajs:.//iframe[contains(concat(" ",normalize-space(@class)," ")," rezdy ")]',
      ),
      'lazy' => 
      array (
        'enable' => true,
        'own' => true,
        'yt' => true,
        'vm' => true,
      ),
    ),
    'cp' => 
    array (
      'elmntrBg' => true,
      'youTubeFeed' => true,
      'sldBdt' => true,
      'swBdt' => true,
      'vidJs' => true,
      'elmntrAni' => true,
      'elmntrSpltAni' => true,
      'elmntrTrxAni' => true,
      'elmntrBgSldshw' => true,
      'elmntrVids' => true,
      'qodefApprAni' => true,
      'prtThSkel' => true,
      'astrRsp' => true,
      'ntBlueThRspnsv' => true,
      'mdknThRspnsv' => true,
      'fltsmThBgFill' => true,
      'fltsmThAni' => true,
      'ukSldshw' => true,
      'ukBgImg' => true,
      'ukAni' => true,
      'ukGrid' => true,
      'ukModal' => true,
      'ukHghtVwp' => true,
      'ukNavBar' => true,
      'tmHdr' => true,
      'fusionBgVid' => true,
      'fsnEqHghtCols' => true,
      'fsnAni' => true,
      'thrvAni' => true,
      'phloxThRspnsv' => true,
      'phloxThAni' => true,
      'sldN2Ss' => false,
      'sldRev' => true,
      'sldRev_SmthLd' => true,
      'sldRev7' => true,
      'tdThumbCss' => true,
      'elmsKitImgCmp' => true,
      'elmsKitLott' => true,
      'haCrsl' => true,
      'jetCrsl' => true,
      'jetCrslPst' => true,
      'elmntrRspnsv' => true,
      'elmntrTabs' => true,
      'elmntrAccrdn' => true,
      'elmntrAdvTabs' => true,
      'elmntrNavMenu' => true,
      'elmntrPremNavMenu' => true,
      'elmntrPremScrl' => true,
      'elmntrPremTabs' => true,
      'elmntrPremCrsl' => true,
      'elmntrWdgtGal' => true,
      'elmntrWdgtImgCrsl' => true,
      'elmntrWdgtCntr' => true,
      'elmntrWdgtCntdwn' => true,
      'elmntrWdgtEaelCntdwn' => true,
      'elmntrWdgtTmFnfctCntr' => true,
      'elmntrWdgtAvoShcs' => true,
      'elmntrWdgtLott' => true,
      'elmntrWdgtPrmLott' => true,
      'nktrLott' => true,
      'elmntrWdgtAniHdln' => true,
      'elmntrStck' => false,
      'elmntrShe' => false,
      'elmntrStrtch' => true,
      'elmntrStckHdr' => true,
      'xooelTabs' => true,
      'phtncThmb' => true,
      'jetMobMenu' => true,
      'jetLott' => true,
      'kpPsvStls' => true,
      'diviMv' => true,
      'diviSld' => true,
      'diviMvImg' => false,
      'diviMvText' => false,
      'diviMvSld' => false,
      'diviMvFwHdr' => true,
      'diviVidBox' => false,
      'diviVidBox2' => true,
      'diviVidBg' => true,
      'diviVidFr' => false,
      'diviDsmGal' => true,
      'diviLzStls' => true,
      'diviPrld' => true,
      'diviStck' => false,
      'diviAni' => true,
      'diviDataAni' => true,
      'diviHdr' => true,
      'diviCntdwnTmr' => true,
      'brcksAni' => true,
      'kdncThAni' => true,
      'scrlSeq' => true,
      'mkImgSrcSet' => true,
      'woodmartPrcFlt' => true,
      'wooPrcFlt' => true,
      'wbwPrdFlt' => true,
      'wooOuPrdGal' => true,
      'wooGsPrdGal' => true,
      'wooJs' => true,
      'wpStrs' => true,
      'txpTagGrps' => true,
      'eaelSmpMnu' => true,
      'wprAniTxt' => true,
      'wprTabs' => true,
      'wooTabs' => true,
      'suTabs' => true,
      'upbAni' => true,
      'upbBgImg' => true,
      'upbCntVid' => true,
      'ultRspnsv' => true,
      'ultVcHd' => true,
      'ultAni' => true,
      'the7Ani' => true,
      'the7MblHdr' => true,
      'sbThAni' => true,
      'esntlsThAni' => true,
      'beThAni' => true,
      'merimagBgImg' => true,
      'mdcrLdng' => true,
      'prmmprssLzStls' => true,
      'mnmgImg' => true,
      'tldBgImg' => true,
      'jqVide' => true,
      'jqSldNivo' => true,
      'wooSctrCntDwnTmr' => true,
      'strmtbUpcTmr' => true,
      'hrrCntDwnTmr' => true,
      'lottGen' => true,
      'sprflMenu' => true,
      'jqJpPlr' => true,
      'prstPlr' => true,
      'grnshftPbAosOnceAni' => true,
      'grnshftPbAosAni' => true,
      'wooPrdGall' => true,
      'wooPrdGallAstrThmbsHeight' => true,
      'wooPrdGallFltsmThmbs' => true,
      'wooPrdGallCrftThmbs' => true,
      'wooNasaPrdGall' => true,
      'wooPrdGallSld' => true,
      'xstrThSwpr' => true,
      'vhcThCarFldGall' => true,
      'bdeSwpr' => true,
      'bdeTabs' => true,
      'btCntSld' => true,
      'btMenu' => true,
      'wcs' => true,
      'tpgbAni' => true,
      'slckGen' => true,
      'swprGen' => true,
      'slckGen_a' => 
      array (
      ),
      'swprGen_a' => 
      array (
      ),
    ),
    'js' => 
    array (
      'groupCritSpec' => false,
      'groupNonCrit' => false,
      'groupTrC' => true,
      'groupExclMdls' => true,
      'groupExcls' => 
      array (
        0 => 'src:@stripe@',
        1 => 'src:@\\.hsforms\\.net\\W@',
        2 => 'body:@window\\.hsFormsOnReady@',
        3 => 'body:@hbspt\\.forms\\.create@',
        4 => 'src:@//cdnjs\\.cloudflare\\.com/ajax/libs/bodymovin/[\\d\\.]+/lottie\\.@',
        5 => 'src:@/plugins/zippy-form/public/js/flatpickr\\.@',
        6 => 'id:@^wd-swiper-library-js@',
        7 => 'src:@\\Wtrustedshops\\.com\\W@',
        8 => 'body:@currentScript\\s*\\.\\s*getAttribute\\(\\s*\'data-gt-widget-id\'@',
        9 => 'src:@\\.cloudflare\\.com/turnstile/@',
        10 => 'id:@^e-sticky-js$@',
        11 => 'src:@\\.cookiebot\\.com@',
      ),
      'min' => false,
      'minExcls' => 
      array (
        0 => 'src:@stripe@',
        1 => 'src:@\\.hsforms\\.net\\W@',
        2 => 'body:@window\\.hsFormsOnReady@',
        3 => 'body:@hbspt\\.forms\\.create@',
        4 => 'src:@//cdnjs\\.cloudflare\\.com/ajax/libs/bodymovin/[\\d\\.]+/lottie\\.@',
        5 => 'src:@/plugins/zippy-form/public/js/flatpickr\\.@',
        6 => 'id:@^wd-swiper-library-js@',
        7 => 'src:@\\Wtrustedshops\\.com\\W@',
        8 => 'body:@currentScript\\s*\\.\\s*getAttribute\\(\\s*\'data-gt-widget-id\'@',
        9 => 'src:@\\.cloudflare\\.com/turnstile/@',
        10 => 'id:@^e-sticky-js$@',
        11 => 'src:@\\.cookiebot\\.com@',
      ),
      'other' => 
      array (
        'incl' => 
        array (
          0 => './/iframe[@id=\'likes-master\' and contains(@src,\'//widgets.wp.com/likes/master.html?\')]',
          1 => './/iframe[@onload]',
        ),
      ),
      'cprRem' => false,
      'optLoad' => true,
      'cplxDelay' => false,
      'preLoadEarly' => false,
      'loadFast' => false,
      'prvntDblInit' => false,
      'aniDelay' => 1000,
      'scrlDelay' => 500,
      'clk' => 
      array (
        'delay' => 250,
        'excl' => 
        array (
          0 => './/*[contains(concat(" ",normalize-space(@class)," ")," cpel-switcher__lang ")]',
          1 => './/*[contains(concat(" ",normalize-space(@class)," ")," cpel-switcher__lang ")]//a',
          2 => './/*[contains(concat(" ",normalize-space(@class)," ")," n2-ss-slider ")]//*[contains(concat(" ",normalize-space(@class)," ")," nextend-arrow ")]',
          3 => './/*[contains(concat(" ",normalize-space(@class)," ")," n2-ss-slider ")]//*[contains(concat(" ",normalize-space(@class)," ")," n2-bullet ")]',
          4 => './/a[contains(concat(" ",normalize-space(@class)," ")," woocommerce-loop-product__link ")]',
          5 => 'ifExistsThenCssSel(.//script[@id="cookieyes"],".cky-btn")',
          6 => './/*[@data-map-zoom]',
        ),
        'exclDef' => 
        array (
          0 => './/a[@href="#"]',
          1 => './/a[@href="#link-popup"]',
          2 => './/a[@onclick]',
          3 => './/button',
          4 => './/*[starts-with(@href,"#elementor-action")]',
          5 => './/a[contains(concat(" ",normalize-space(@class)," ")," mobile-menu ")]',
          6 => './/a[contains(concat(" ",normalize-space(@class)," ")," elementor-button ")][not(self::node()[contains(concat(" ",normalize-space(@class)," ")," elementor-button-link ")])]',
          7 => './/a[@e-action-hash]',
          8 => './/a[contains(concat(" ",normalize-space(@class)," ")," elementor-toggle-title ")]',
          9 => './/a[contains(concat(" ",normalize-space(@class)," ")," sby_video_thumbnail ")]',
          10 => './/a[contains(concat(" ",normalize-space(@class)," ")," ui-tabs-anchor ")]',
          11 => './/a[contains(concat(" ",normalize-space(@class)," ")," elementor-icon ")]',
          12 => './/a[contains(concat(" ",normalize-space(@class)," ")," wd-open-popup ")]',
          13 => './/a[starts-with(@href,"#grve-")]',
          14 => './/a[starts-with(@href,"#")][contains(concat(" ",normalize-space(@class)," ")," infinite-mm-menu-button ")]',
          15 => './/*[contains(concat(" ",normalize-space(@class)," ")," elementor-swiper-button ")]',
          16 => './/a[contains(concat(" ",normalize-space(@class)," ")," jet-button__instance ")]',
          17 => './/*[contains(concat(" ",normalize-space(@class)," ")," jet-menu-item ")]/a[contains(concat(" ",normalize-space(@class)," ")," menu-link ")]',
          18 => './/a[contains(concat(" ",normalize-space(@class)," ")," ajax_add_to_cart ")]',
          19 => './/a[contains(concat(" ",normalize-space(@class)," ")," dt-mobile-menu-icon ")]',
          20 => './/a[contains(concat(" ",normalize-space(@class)," ")," submit ")]',
          21 => './/a[@uk-toggle]',
          22 => './/a[contains(concat(" ",normalize-space(@class)," ")," woodmart-nav-link ")]',
          23 => './/*[contains(concat(" ",normalize-space(@class)," ")," wd-action-btn ")]/a',
          24 => './/a[contains(concat(" ",normalize-space(@class)," ")," et_pb_video_play ")]',
          25 => './/*[contains(concat(" ",normalize-space(@class)," ")," et-menu ")]/li/a[starts-with(@href,"#")]',
          26 => './/a[contains(concat(" ",normalize-space(@class)," ")," et_pb_button ")]',
          27 => './/a[contains(concat(" ",normalize-space(@class)," ")," meanmenu-reveal ")]',
          28 => './/*[contains(concat(" ",normalize-space(@class)," ")," wpforms-icon-choices-item ")]',
          29 => './/a[contains(concat(" ",normalize-space(@class)," ")," wd-el-video-link ")]',
          30 => './/*[contains(concat(" ",normalize-space(@class)," ")," product-video-button ")]/a',
          31 => './/a[@data-fslightbox="gallery"]',
          32 => './/a[contains(concat(" ",normalize-space(@class)," ")," dvmm_button ")]',
          33 => 'click:.//div[@data-thumb]//a',
          34 => './/a[contains(concat(" ",normalize-space(@class)," ")," searchOpen ")]',
          35 => './/a[contains(concat(" ",normalize-space(@class)," ")," bricks-button ")]',
          36 => './/img[contains(concat(" ",normalize-space(@class)," ")," swiper-slide-image ")]',
          37 => './/*[contains(concat(" ",normalize-space(@class)," ")," e-click ")]',
          38 => './/a[contains(concat(" ",normalize-space(@class)," ")," wd-load-more ")]',
          39 => 'click:.//presto-player | .//presto-player-js-lzl-ing || .//presto-playlist | .//presto-playlist-js-lzl-ing',
          40 => './/vehica-car-field-gallery',
          41 => './/*[contains(concat(" ",normalize-space(@class)," ")," woocommerce-product-gallery__wrapper ")]//a',
        ),
      ),
      'nonCrit' => 
      array (
        'inl' => true,
        'int' => true,
        'ext' => true,
        'excl' => true,
        'items' => 
        array (
          0 => 'body:@\\Wfunction\\s+et_core_page_resource_fallback\\W@',
          1 => 'body:@\\WTRINITY_TTS_WP_CONFIG\\W@',
          2 => 'id:@^spai_js$@',
          3 => 'src:@/depicter/@',
          4 => 'body:@\\WDepicter\\W@',
          5 => 'src:@/plugins/(?:nextend-|)smart-slider@',
          6 => 'body:@(?:^|\\W)_N2\\s*\\.\\s*r\\s*\\(\\s*[\'"]documentReady[\'"]@',
          7 => 'body:@\\Wthis\\s*\\.\\s*_N2\\s*=\\s*this\\s*\\.\\s*_N2\\W@',
          8 => 'src:@\\.github\\.com@',
          9 => 'body:@window\\.jetMenuMobileWidgetRenderData@',
          10 => 'src:@\\.typekit\\.net@',
          11 => 'body:@\\WTypekit\\.load\\(@',
          12 => 'body:@\\Wdocument\\s*\\.\\s*querySelector\\s*\\(\\s*"\\.jdgm-rev-widg"\\s*\\)@',
          13 => 'body:@window\\s*\\.\\s*gtranslateSettings\\s*=@',
          14 => 'src:@trustindex\\.io/assets/js/richsnippet@',
          15 => 'src:@web\\.cmp\\.usercentrics\\.eu/@',
          16 => 'id:@^zeroy-tailwind-@',
          17 => 'src:@/kit\\.fontawesome\\.com/@',
        ),
        'timeout' => 
        array (
          'enable' => true,
          'v' => 7500,
        ),
      ),
      'critSpec' => 
      array (
        'timeout' => 
        array (
          'enable' => true,
          'v' => 0,
        ),
        'items' => 
        array (
          0 => 'src:@\\.cookiebot\\.com@',
          1 => 'id:@^cookieyes$@',
          2 => 'id:@^cmplz-cookiebanner-js@',
          3 => 'src:@\\.elfsight\\.com/platform/@',
          4 => 'src:@\\.elfsight\\.com/platform/@',
          5 => 'src:@/gtranslate/@',
        ),
      ),
      'spec' => 
      array (
        'timeout' => 
        array (
          'enable' => false,
          'v' => 500,
        ),
        'items' => 
        array (
          0 => '@googletagmanager\\.com@i',
          1 => '@(?:^|\\W)gtag\\s*\\(\\s*[\'"]@',
          2 => '@google-analytics\\.com@i',
          3 => '@(?:^|\\W)ga\\s*\\(\\s*[\'"]create\\W@',
          4 => '@(?:^|\\W)ga\\s*\\(\\s*[\'"][^\'"]*\\.?send\\W@',
          5 => '@\\Wgoogleadservices\\.com\\W@i',
          6 => '@\\Wgooglesyndication\\.com/pagead/js/adsbygoogle\\.js(?:$|\\W)@',
          7 => '@(?:^|\\W)window\\s*.\\s*adsbygoogle(?:$|\\W)@',
          8 => '@\\Wgstatic\\.com\\W@',
          9 => 'id:@^wpforms-recaptcha-js-after@',
          10 => 'src:@/plugins/contact-form-7/modules/recaptcha/@',
          11 => '@//apis\\.google\\.com/js/plusone\\.js$@',
          12 => '@//apis\\.google\\.com/js/platform\\.js$@',
          13 => 'id:@^googlesitekit-events-provider-woocommerce-js-before$@',
          14 => '!body:@elementor@i & src,body:@connect\\.facebook\\.net@i',
          15 => '@(?:^|\\W)fbq\\s*\\(\\s*[\'"]@',
          16 => '@static\\.hotjar\\.com@i',
          17 => 'src:@\\Wtrinitymedia\\.ai/player\\W@',
          18 => '@mc\\.yandex\\.ru/metrika@i',
          19 => '@(?:^|\\W)ym\\s*\\(\\s*\\d@',
          20 => '@\\Wyastatic\\.net\\W@i',
          21 => '@\\Wcdn\\.jsdelivr\\.net/npm/yandex-metrica-watch/[\\w\\-]+\\.js@',
          22 => '@\\Wsite\\.yandex\\.net/v[\\d\\.]+/js/all\\.js\\W@s',
          23 => '@\\Wyandex\\.st/share/share\\.js@',
          24 => '@\\Wapi-maps\\.yandex\\.ru/services/constructor\\W@i',
          25 => 'body:@\\Wymaps\\W@',
          26 => '@top-fwz1\\.mail\\.ru@i',
          27 => '@(?:^|\\W)_tmr\\s*\\.@',
          28 => '@\\Wconnect\\.ok\\.ru/connect\\.js\\W@',
          29 => '@\\Wlc2ads\\.ru/js/adv_out\\.js@',
          30 => '@counter\\.yadro\\.ru/hit\\?@i',
          31 => '@\\Wadvertur\\.ru\\W@',
          32 => '@\\Wapi\\.content-ad\\.net\\W@',
          33 => '@\\Wuptolike\\.com\\W@i',
          34 => '@\\Wshare\\.pluso\\.ru\\W@',
          35 => '@\\Wsendpulse\\.com/js/push/@',
          36 => '@\\Wmediametrics\\.ru/partner/inject/inject\\.js@',
          37 => '@code[\\w-]*\\.jivosite\\.com@i',
          38 => '@\\Wtawk\\.to\\W@',
          39 => '@\\Wgetbutton\\.io\\W@',
          40 => '@bigreal\\.org/@i',
          41 => '@\\.realbig\\.media/@i',
          42 => '@\\Wtruenat\\.bid\\W@i',
          43 => '@\\Wnewup\\.bid\\W@i',
          44 => '@\\Wnewrrb\\.bid\\W@i',
          45 => '@\\Wrb_ajaxurl\\W@',
          46 => '@\\Wcontent_rb\\W@',
          47 => '@gi\\[\'ads\'\\]\\[\'siteAdBlock\'\\]&&gi\\[\'ads\'\\]\\[\'blockAdBlock\'\\]&&gh\\[\'setAttribute\'\\]\\(\'data-ad-block\'@',
          48 => '@\\Wgismeteo\\.ru/api/informer/getinformer/@',
          49 => '@\\Wvk\\.com/js/api/openapi\\.js\\W@',
          50 => '@(?:^|\\W)VK\\s*\\.\\s*Widgets\\W@s',
          51 => '@(?:^|\\W)VK\\s*\\.\\s*init\\s*\\(@s',
          52 => '@\\.addtoany\\.com\\W@i',
          53 => '@\\Wtravelpayouts\\.com\\W@i',
          54 => 'src:@\\Wcalendly\\.com@',
          55 => '@/woocommerce-gateway-stripe/assets/js/stripe(?:\\.|\\.min\\.)js\\W@',
          56 => '@/amp\\-analytics\\-@i',
          57 => '@\\w*\\.write\\s*\\(\\s*[\'"]<a\\s*[^>]*href\\s*=\\s*[\'"][^\'"]*www\\.liveinternet\\.ru\\W@',
          58 => '@\\w*\\.write\\s*\\(\\s*[\'"]<img\\s*[^>]*src\\s*=\\s*[\'"][^\'"]*\\Wcounter\\.yadro\\.ru\\W@',
          59 => '@\\Wadvertur\\.ru/v\\d+/code\\.js\\?id=\\d+@',
          60 => '@\\.googlesyndication\\.com/pagead/show_ads\\.js$@',
          61 => '@(?:^|\\W)amzn_assoc_placement\\s*=\\s*[\\\'"][\\w\\-]+[\\\'"]@',
          62 => '@\\Wamazon-adsystem\\.com/widgets/onejs\\W@',
          63 => '@\\.\\s*write\\s*\\(.+<div.+div>.+\\Wuptolike\\.com\\W@s',
          64 => '@\\Wbeeketing\\.com\\W@',
          65 => '@counter\\.rambler\\.ru/top100\\.jcn\\?@',
          66 => 'body:@function\\(c,h,i,m,p\\)@',
          67 => 'src:@\\.popt\\.in\\W@',
          68 => 'src:@/interactive-geo-maps/@',
          69 => 'src:@amcharts\\.com@',
          70 => '@\\.chatbase\\.co@i',
          71 => 'src:@\\.hsforms\\.net\\W@',
          72 => 'body:@hbspt\\.forms\\.create\\(@',
          73 => 'src:@\\.visitiq\\.io@',
          74 => 'body:@vpixel\\.piximage@',
          75 => 'body:@\\WnjtWhatsApp\\W@',
          76 => 'src:@\\Wtrustedshops\\.com\\W@',
          77 => 'id:@^cloudflare-recaptcha-js$@',
        ),
      ),
      'skipBad' => false,
      'skips' => 
      array (
      ),
    ),
    'css' => 
    array (
      'corrErr' => true,
      'group' => true,
      'groupCombine' => false,
      'groupNonCrit' => true,
      'groupNonCritCombine' => false,
      'groupFont' => true,
      'groupFontCombine' => true,
      'font' => 
      array (
        'inl' => 
        array (
          'enable' => true,
          'items' => 
          array (
          ),
        ),
        'delayNonCritWithJs' => false,
        'nonCritExcl' => 
        array (
        ),
        'deinlLrg' => true,
        'deinlLrgSize' => 512,
        'optLoadNameExpr' => '',
      ),
      'sepImp' => true,
      'min' => true,
      'optLoad' => true,
      'inlAsSrc' => false,
      'inlCrit' => true,
      'inlNonCrit' => false,
      'delayNonCritWithJs' => true,
      'bfrJs' => false,
      'nonCrit' => 
      array (
        'auto' => true,
        'autoExcls' => 
        array (
          0 => '@depicter@',
          1 => '@\\.n2-ss-@',
          2 => '@\\.slick-dots@',
          3 => '@\\.show-mobile-header@',
          4 => '@\\.uk-modal@',
          5 => '@\\.uk-first-column@',
          6 => '@\\.uk-grid-margin@',
          7 => '@\\.uk-grid-stack@',
          8 => '@\\.et_pb_column@',
          9 => '@#cr_floatingtrustbadge@',
          10 => '@(?:^|\\s)br(?:$|[\\s\\.#\\[])@',
          11 => '@(?:^|\\s)svg(?:$|[\\s\\.#\\[])@',
        ),
        'inl' => true,
        'int' => true,
        'ext' => true,
        'excl' => false,
        'items' => 
        array (
        ),
      ),
      'fontOptLoad' => true,
      'fontOptLoadDisp' => 'swap',
      'fontCrit' => true,
      'skipBad' => true,
      'skips' => 
      array (
        0 => 'id:@^reycore-critical-css$@',
      ),
      'custom' => 
      array (
        0 => 
        array (
          'enable' => true,
          'noJsDl' => false,
          'descr' => '',
          'data' => '',
        ),
        'preloaders' => 
        array (
          'enable' => true,
          'noJsDl' => false,
          'descr' => 'Preloaders',
          'data' => '#pre-load, #preloader, #page_preloader, #page-preloader, #loader-wrapper, #royal_preloader, #loftloader-wrapper, #page-loading, #the7-body > #load, #loader, #loaded, #loader-container, #ocean-preloader,
.rokka-loader, .page-preloader-cover, .apus-page-loading, .medizco-preloder, e-page-transition, .loadercontent, .shadepro-preloader-wrap, .tslg-screen, .page-preloader, .pre-loading, .preloader-outer, .page-loader, .martfury-preloader, body.theme-dotdigital > .preloader, .loader-wrap, .site-loader, .pix-page-loading-bg, .pix-loading-circ-path, .mesh-loader, .lqd-preloader-wrap, .rey-sitePreloader, .et-loader, .preloader-plus, .plwao-loader-wrap, .wcf-preloader {
	display: none !important;
}

body.royal_preloader {
	visibility: hidden !important;
}

/*html body > :not(.preloader-plus) {
	opacity: unset;
}*/',
        ),
        'htmlGen' => 
        array (
          'enable' => true,
          'noJsDl' => false,
          'descr' => 'Generic HTML',
          'data' => 'html, html.async-hide, body {
	display: block !important;
	opacity: 1 !important;
	visibility: unset !important;
}

html body:is(.seraph-accel-js-lzl-ing, .seraph-accel-js-lzl-ing-ani) {
	overflow: auto !important;
}',
        ),
        'jet-menu' => 
        array (
          'enable' => false,
          'noJsDl' => false,
          'descr' => 'Jet Menu',
          'data' => '.seraph-accel-js-lzl-ing ul.jet-menu > li[id^=jet-menu-item-] {
	display: none!important;
}',
        ),
        'jet-testimonials' => 
        array (
          'enable' => true,
          'noJsDl' => false,
          'descr' => 'Jet Testimonials',
          'data' => '.jet-testimonials__instance:not(.slick-initialized) .jet-testimonials__item {
	max-width: 100%;
}

.jet-testimonials__instance:not(.slick-initialized) .jet-testimonials__item:nth-child(n+4) {
	display: none !important;
}',
        ),
        'xo-slider' => 
        array (
          'enable' => true,
          'noJsDl' => false,
          'descr' => 'XO Slider',
          'data' => '.xo-slider .slide-content {
	display: unset!important;
}',
        ),
        'jqSldNivo' => 
        array (
          'enable' => true,
          'noJsDl' => false,
          'descr' => 'Nivo Slider for jQuery',
          'data' => 'body:is(.seraph-accel-js-lzl-ing, .seraph-accel-js-lzl-ing-ani) .nivo-caption {
	opacity: 1 !important;
}

.nivo-caption {
	display: none;
}',
        ),
        'owl-carousel' => 
        array (
          'enable' => true,
          'noJsDl' => false,
          'descr' => 'OWL Carousel',
          'data' => '.owl-carousel:not(.wd-owl):not(.owl-loaded) {
	display: block !important;
	visibility: visible !important;
}

.owl-carousel:not(.wd-owl):not(.owl-loaded) > *:not(:first-child) {
	display: none;
}

.owl-carousel:not(.wd-owl) .container.full-screen {
	height: 100vh;
}',
        ),
        'ult-carousel' => 
        array (
          'enable' => true,
          'noJsDl' => false,
          'descr' => 'Ultimate Carousel',
          'data' => '.seraph-accel-js-lzl-ing .ult-carousel-wrapper {
	visibility:initial!important;
}

.seraph-accel-js-lzl-ing .ult-carousel-wrapper .ult-item-wrap:not(:first-child) {
	display:none;
}',
        ),
        'bdt-slideshow' => 
        array (
          'enable' => true,
          'noJsDl' => false,
          'descr' => 'Airtech Plumber Slider',
          'data' => '.seraph-accel-js-lzl-ing .bdt-prime-slider-previous, .seraph-accel-js-lzl-ing .bdt-prime-slider-next {
	display: none !important;
}

.seraph-accel-js-lzl-ing .bdt-post-slider-item:first-child {
	display: unset !important;
}',
        ),
        'n2-ss-slider' => 
        array (
          'enable' => false,
          'noJsDl' => false,
          'descr' => 'Smart Slider',
          'data' => 'ss3-force-full-width, ss3-fullpage {
	transform: none !important;
	opacity: 1 !important;
	width: var(--seraph-accel-client-width) !important;
	margin-left: calc((100% - var(--seraph-accel-client-width)) / 2);
}

ss3-fullpage {
	height: 100vh !important;
}

body.seraph-accel-js-lzl-ing .n2-ss-align {
	overflow: visible !important;
}

.n2-ss-slider:not(.n2-ss-loaded):not([data-ss-carousel]) .n2-ss-slide-backgrounds [data-public-id][data-lzl-first="1"],
.n2-ss-slider:not(.n2-ss-loaded):not([data-ss-carousel]) [data-slide-public-id][data-lzl-first="1"] {
	transform: translate3d(0px, 0px, 0px) !important;
}

.n2-ss-slider:not(.n2-ss-loaded):not([data-ss-carousel]) .n2-ss-slide:not([data-slide-public-id][data-lzl-first="1"]),
.n2-ss-slider:not(.n2-ss-loaded) .n2-ss-layer.js-lzl-n-ing,
.n2-ss-slider:not(.n2-ss-loaded):not([style*=ss-responsive-scale]) [data-responsiveposition],
.n2-ss-slider:not(.n2-ss-loaded):not([style*=ss-responsive-scale]) [data-responsivesize],
.n2-ss-slider.n2-ss-loaded .n2-ss-layer.js-lzl-ing {
	visibility: hidden !important;
}

.n2-ss-slider:not(.n2-ss-loaded):not([data-ss-carousel]) [data-slide-public-id][data-lzl-first="1"] .n2-ss-layers-container,
.n2-ss-slider:not(.n2-ss-loaded):not([data-ss-carousel]) .n2-ss-slide-backgrounds [data-public-id][data-lzl-first="1"],
.n2-ss-slider:not(.n2-ss-loaded) .n2-ss-slider-controls-advanced {
	opacity: 1 !important;
}

.n2-ss-slider[data-ss-carousel]:not(.n2-ss-loaded) .n2-ss-layers-container {
	opacity: 1 !important;
	visibility: visible !important;
}

.n2-ss-slider-pane {
	opacity: 1 !important;
	animation-name: none !important;
	--self-side-margin: auto !important;
	--slide-width: 100% !important;
}

/*.n2-ss-showcase-slides:not(.n2-ss-showcase-slides--ready) {
	opacity: 1 !important;
	transform: none !important;
}*/',
        ),
        'wp-block-ultimate-post-slider' => 
        array (
          'enable' => true,
          'noJsDl' => false,
          'descr' => 'Block Ultimate Post Slider',
          'data' => '[class*=wp-block-ultimate-post-post-slider] .ultp-block-items-wrap:not(.slick-initialized) > .ultp-block-item:not(:first-child)
{
	display: none!important;
}',
        ),
        'elementor-vis' => 
        array (
          'enable' => false,
          'noJsDl' => false,
          'descr' => 'Elementor (visibility and animation)',
          'data' => 'body.seraph-accel-js-lzl-ing-ani .elementor-invisible {
	visibility: visible !important;
}

.elementor-element[data-settings*="animation\\""] {
	animation-name: none !important;
}',
        ),
        'elementor' => 
        array (
          'enable' => true,
          'noJsDl' => false,
          'descr' => 'Elementor',
          'data' => '.vc_row[data-vc-full-width] {
	position: relative;
	width: var(--seraph-accel-client-width) !important;
}

html:not([dir=rtl]) .vc_row[data-vc-full-width] {
	left: calc((100% - var(--seraph-accel-client-width)) / 2) !important;
	margin-left: 0 !important;
}

html[dir=rtl] .vc_row[data-vc-full-width] {
	right: calc((100% - var(--seraph-accel-client-width)) / 2) !important;
	margin-right: 0 !important;
}

.vc_row.wpb_row[data-vc-full-width]:not([data-vc-stretch-content="true"]), .vc_row.mpc-row[data-vc-full-width]:not([data-vc-stretch-content="true"]) {
	--pdd: calc((var(--seraph-accel-client-width) - (100% + 2*15px)) / 2);
	padding-left: var(--pdd) !important;
	padding-right: var(--pdd) !important;
}

.elementor-top-section.elementor-section-stretched[data-settings*="section-stretched"] {
	width: var(--seraph-accel-client-width) !important;
}

html:not([dir=rtl]) .elementor-top-section.elementor-section-stretched[data-settings*="section-stretched"] {
	left: calc(-1 * var(--lzl-strtch-offs-x)) !important;
}

html[dir=rtl] .elementor-top-section.elementor-section-stretched[data-settings*="section-stretched"] {
	right: calc(-1 * var(--lzl-strtch-offs-x)) !important;
}

body.seraph-accel-js-lzl-ing-ani .elementor-headline-dynamic-text.elementor-headline-text-active {
	opacity: 1;
}',
        ),
        'et' => 
        array (
          'enable' => true,
          'noJsDl' => false,
          'descr' => 'Divi',
          'data' => '.et_animated:not(.et_pb_sticky_placeholder,.dani-lzl) {
	opacity: 1 !important;
}

.et_pb_section_video_bg > video {
	height: 100%;
}

.et_pb_preload .et_pb_section_video_bg, .et_pb_preload > div {
	visibility: visible !important;
}

body .et_pb_gallery_grid .et_pb_gallery_item, body .et_pb_gallery .et_pb_gallery_item {
	display: block !important;
}

/* Slider */
/*.et_pb_slider:not([data-active-slide]) {
	height: 1px;
}*/

.et_pb_slider:not([data-active-slide]) .et_pb_slides,
.et_pb_slider:not([data-active-slide]) .et_pb_slide:first-child,
.et_pb_slider:not([data-active-slide]) .et_pb_slide:first-child .et_pb_container {
	height: 100%;
}',
        ),
        'tag-div' => 
        array (
          'enable' => true,
          'noJsDl' => false,
          'descr' => 'tagDiv',
          'data' => 'body.td-animation-stack-type0 .td-animation-stack .entry-thumb,
body.td-animation-stack-type0 .post img:not(.woocommerce-product-gallery img):not(.rs-pzimg),
body.td-animation-stack-type0 .td-animation-stack .td-lazy-img,
.tdb_header_menu .tdb-menu-items-pulldown.tdb-menu-items-pulldown-inactive {
	opacity: 1!important;
}',
        ),
        'photonic-thumb' => 
        array (
          'enable' => true,
          'noJsDl' => false,
          'descr' => 'Photonic Photo Gallery',
          'data' => '.photonic-thumb,
.photonic-thumb a img {
	display: unset !important;
}

.photonic-loading {
	display: none !important;
}

.photonic-stream * {
	animation-name: none !important;
}',
        ),
        'avia-slideshow' => 
        array (
          'enable' => true,
          'noJsDl' => false,
          'descr' => 'Avia Slideshow',
          'data' => '.avia-slideshow.av-default-height-applied .avia-slideshow-inner > li:first-child {
	opacity: 1 !important;
	visibility: visible !important;
}
',
        ),
        'rev-slider' => 
        array (
          'enable' => true,
          'noJsDl' => false,
          'descr' => 'Revolution Slider',
          'data' => 'rs-module-wrap:has(rs-module[data-lzl-layout="fullwidth"]), rs-module-wrap:has(rs-module[data-lzl-layout="fullscreen"]), rs-fullwidth-wrap, rs-fullwidth-wrap > rs-module-wrap {
	width: var(--seraph-accel-client-width) !important;
	left: calc((100% - var(--seraph-accel-client-width)) / 2) !important;
}

rs-module[data-lzl-layout="fullscreen"] {
	height: calc(var(--seraph-accel-dvh) - var(--lzl-rs-offs-y)) !important;
}

rs-module[data-lzl-layout="fullscreen"].js-lzl-ing {
	margin-top: calc(-1*var(--seraph-accel-dvh) + var(--lzl-rs-offs-y)) !important;
}',
        ),
        'fusion-vis' => 
        array (
          'enable' => false,
          'noJsDl' => false,
          'descr' => 'Fusion (visibility and animation)',
          'data' => '.fusion-animated {
	visibility: visible;
}
',
        ),
        'fusion-menu' => 
        array (
          'enable' => true,
          'noJsDl' => false,
          'descr' => 'Fusion Menu',
          'data' => '.fusion-menu-element-wrapper.loading {
	opacity: 1;
}

@media (max-width: 1024px) {
	.fusion-menu-element-wrapper.loading .fusion-menu {
		display: none;
	}

	.fusion-menu-element-wrapper.loading button {
		display: block !important;
	}

	.fusion-menu-element-wrapper.loading {
		display: flex;
	}
}',
        ),
        'jnews' => 
        array (
          'enable' => true,
          'noJsDl' => false,
          'descr' => 'JNews Theme',
          'data' => '.thumbnail-container.animate-lazy > img {
	opacity: 1!important;
}',
        ),
        'grve' => 
        array (
          'enable' => true,
          'noJsDl' => false,
          'descr' => 'GROVE Theme',
          'data' => '.grve-bg-image {
	opacity: 1 !important;
}

body.seraph-accel-js-lzl-ing-ani .grve-animated-item {
	animation-fill-mode: both;
	animation-duration: .8s;
}

body.seraph-accel-js-lzl-ing-ani .grve-fade-in-left {
	animation-name: grve_fade_in_left;
}

body.seraph-accel-js-lzl-ing-ani .grve-fade-in {
	animation-name: grve_fade_in;
}

body.seraph-accel-js-lzl-ing-ani .grve-fade-in-up {
	animation-name: grve_fade_in_up;
}
',
        ),
        'wpb' => 
        array (
          'enable' => true,
          'noJsDl' => false,
          'descr' => 'WPBakery',
          'data' => '.upb_row_bg[data-bg-override="browser_size"],
.upb_row_bg[data-bg-override*="full"],
.ult-vc-seperator[data-full-width="true"] {
	width: var(--seraph-accel-client-width) !important;
}

.ult-vc-seperator[data-full-width="true"] .ult-main-seperator-inner {
	width: 100% !important;
	margin-left: 0 !important;
	margin-right: 0 !important;
}

html:not([dir=rtl]) .upb_row_bg[data-bg-override="browser_size"],
html:not([dir=rtl]) .upb_row_bg[data-bg-override*="full"],
html:not([dir=rtl]) .ult-vc-seperator[data-full-width="true"] {
	margin-left: calc((100% - var(--seraph-accel-client-width)) / 2) !important;
	left: 0 !important;
}

html[dir=rtl] .upb_row_bg[data-bg-override="browser_size"],
html[dir=rtl] .upb_row_bg[data-bg-override*="full"],
html[dir=rtl] .ult-vc-seperator[data-full-width="true"] {
	margin-right: calc((100% - var(--seraph-accel-client-width)) / 2) !important;
	right: 0 !important;
}',
        ),
        'tm' => 
        array (
          'enable' => true,
          'noJsDl' => false,
          'descr' => 'Yoo Theme',
          'data' => '.tm-header-placeholder {
	height: calc(1px*var(--uk-header-placeholder-cy));
}
',
        ),
        'packery' => 
        array (
          'enable' => true,
          'noJsDl' => false,
          'descr' => 'Packery',
          'data' => '[data-packery-options].row.row-grid > .col:not([style*="position"]),
[data-packery-options].row.row-masonry > .col:not([style*="position"]) {
	float: unset;
	display: inline-block !important;
	vertical-align: top;
}',
        ),
        'theme-xstore' => 
        array (
          'enable' => true,
          'noJsDl' => false,
          'descr' => 'XStore theme',
          'data' => 'body.wp-theme-xstore.elementor-default:not([data-elementor-device-mode]) {
	--etheme-element-loading-opacity: 1;
	--etheme-element-loading-visibility:visible;
	--etheme-element-loader-display:none;
}',
        ),
        'theme-bt' => 
        array (
          'enable' => true,
          'noJsDl' => false,
          'descr' => 'BoldThemes',
          'data' => 'body:is(.seraph-accel-js-lzl-ing, .seraph-accel-js-lzl-ing-ani) .bt_bb_animation_fade_in {
	opacity: 1;
}

body:is(.seraph-accel-js-lzl-ing, .seraph-accel-js-lzl-ing-ani) .btSearch .btSearchInner.gutter {
	display: none;
}',
        ),
        'cookie-law-info' => 
        array (
          'enable' => true,
          'noJsDl' => false,
          'descr' => 'CookieYes',
          'data' => '.cky-consent-container.cky-hide ~ .cky-consent-container {
	display: none;
}',
        ),
      ),
    ),
    'cdn' => 
    array (
      'items' => 
      array (
        0 => 
        array (
          'enable' => true,
          'sa' => true,
          'addr' => '',
          'types' => 
          array (
            0 => 'js',
            1 => 'css',
            2 => 'less',
            3 => 'gif',
            4 => 'jpeg',
            5 => 'jpg',
            6 => 'bmp',
            7 => 'png',
            8 => 'svg',
            9 => 'webp',
            10 => 'avif',
            11 => 'eot',
            12 => 'aac',
            13 => 'mp3',
            14 => 'mp4',
            15 => 'ogg',
            16 => 'pdf',
            17 => 'docx',
            18 => 'otf',
            19 => 'ttf',
            20 => 'woff',
            21 => 'woff2',
          ),
          'uris' => 
          array (
            0 => 'wp-content',
            1 => 'wp-includes',
          ),
          'urisExcl' => 
          array (
          ),
        ),
      ),
      'enable' => false,
    ),
    'grps' => 
    array (
      'items' => 
      array (
        'home' => 
        array (
          'enable' => 0,
          'name' => 'Home',
          'patterns' => 
          array (
            0 => './/body[contains(concat(" ",normalize-space(@class)," ")," home ")]',
          ),
          'urisIncl' => 
          array (
          ),
          'argsIncl' => 
          array (
          ),
          'views' => 
          array (
          ),
          'sklSrch' => false,
          'sklExcl' => 
          array (
          ),
          'sklCssSelExcl' => 
          array (
          ),
          'contPr' => 
          array (
            'enable' => true,
            'jsOvr' => true,
            'js' => 
            array (
              'optLoad' => true,
              'nonCrit' => 
              array (
                'timeout' => 
                array (
                  'enable' => false,
                  'v' => 0,
                ),
                'inl' => true,
                'int' => true,
                'ext' => true,
                'excl' => true,
                'items' => 
                array (
                ),
              ),
              'spec' => 
              array (
                'timeout' => 
                array (
                  'enable' => false,
                  'v' => 7500,
                ),
              ),
            ),
            'jsNonCritScopeOvr' => false,
            'cssOvr' => false,
            'css' => 
            array (
              'nonCrit' => 
              array (
                'auto' => false,
              ),
            ),
          ),
        ),
        '@a' => 
        array (
          'enable' => 2,
          'name' => 'Common (advanced)',
          'patterns' => 
          array (
            0 => './/body[match(concat(" ",normalize-space(@class)," "),"@\\s(page)\\s@")][match(concat(" ",normalize-space(@class)," "),"@\\s(parent)-pageid-(\\d+)\\s@")]',
            1 => './/body[match(concat(" ",normalize-space(@class)," "),"@\\s(page)\\s@")][match(concat(" ",normalize-space(@class)," "),"@\\spage-id-(\\d+)\\s@")]',
            2 => './/body[match(concat(" ",normalize-space(@class)," "),"@\\s(single)\\s@")][match(concat(" ",normalize-space(@class)," "),"@\\ssingle-([\\w\\-]+)\\s@")]',
            3 => './/body[match(concat(" ",normalize-space(@class)," "),"@\\s(archive)\\s@")][match(concat(" ",normalize-space(@class)," "),"@\\s(post)-type-archive-([\\w\\-]+)\\s@")]',
            4 => './/body[match(concat(" ",normalize-space(@class)," "),"@\\s(archive)\\s@")][match(concat(" ",normalize-space(@class)," "),"@\\s(tax)-([\\w\\-]+)\\s@")]',
            5 => './/body[match(concat(" ",normalize-space(@class)," "),"@\\s(archive)\\s@")][match(concat(" ",normalize-space(@class)," "),"@\\s(tag)\\s@")]',
            6 => './/body[match(concat(" ",normalize-space(@class)," "),"@\\s(archive)\\s@")][match(concat(" ",normalize-space(@class)," "),"@\\s(date)\\s@")]',
            7 => './/body[match(concat(" ",normalize-space(@class)," "),"@\\s(home)\\s@")]',
            8 => './/body[match(concat(" ",normalize-space(@class)," "),"@\\s(blog)\\s@")]',
          ),
          'urisIncl' => 
          array (
          ),
          'argsIncl' => 
          array (
          ),
          'views' => 
          array (
          ),
          'sklSrch' => 'a',
          'sklExcl' => 
          array (
            0 => './/script',
            1 => './/style',
            2 => './/link',
            3 => './/head',
            4 => './/br',
            5 => './/svg//*',
          ),
          'sklCssSelExcl' => 
          array (
            0 => 'r=pslg:@\\.(?:[\\-\\w]+[\\-\\_]|)((?\'POST_SLUG\'))[\\-\\_\\W]@i',
            1 => '@#([\\w\\-\\%]+)@',
            2 => '@\\.(?:[\\-\\w]+[\\-\\_]|)(?:category|categories|tag|term|comment-author|(?\'ENUM_TAXONOMIES_NOTBUILTIN\'))[\\-\\_]([\\w\\-]+)@i',
            3 => 'r=txnm:@\\.(?:[\\-\\w]+[\\-\\_]|)(category|(?\'ENUM_TAXONOMIES_NOTBUILTIN\'))[\\-\\_\\W]@i',
            4 => '@\\.(?:[\\-\\w]+[\\-\\_]|)(?:post|page|attachment|(?\'ENUM_POSTTYPES_NOTBUILTINVIEWABLESPEC\'))[\\-\\_]([\\w\\-]+)@i',
            5 => '@[^[:alnum:]]eb-(?:row|column|text|accordion(?:-item|))-([[:alnum:]]+)[^[:alnum:]\\-_]@i',
            6 => '@[\\.#][\\w\\-\\:\\@\\\\]*[\\-_]([\\da-f]+)[\\W_]@i',
          ),
          'contPr' => 
          array (
            'enable' => true,
            'jsOvr' => false,
            'js' => 
            array (
              'optLoad' => true,
              'nonCrit' => 
              array (
                'timeout' => 
                array (
                  'enable' => true,
                  'v' => 7500,
                ),
                'inl' => true,
                'int' => true,
                'ext' => true,
                'excl' => true,
                'items' => 
                array (
                  0 => 'body:@\\Wfunction\\s+et_core_page_resource_fallback\\W@',
                  1 => 'body:@\\WTRINITY_TTS_WP_CONFIG\\W@',
                  2 => 'id:@^spai_js$@',
                  3 => 'src:@/depicter/@',
                  4 => 'body:@\\WDepicter\\W@',
                  5 => 'src:@/plugins/(?:nextend-|)smart-slider@',
                  6 => 'body:@(?:^|\\W)_N2\\s*\\.\\s*r\\s*\\(\\s*[\'"]documentReady[\'"]@',
                  7 => 'body:@\\Wthis\\s*\\.\\s*_N2\\s*=\\s*this\\s*\\.\\s*_N2\\W@',
                  8 => 'src:@\\.github\\.com@',
                  9 => 'body:@window\\.jetMenuMobileWidgetRenderData@',
                  10 => 'src:@\\.typekit\\.net@',
                  11 => 'body:@\\WTypekit\\.load\\(@',
                  12 => 'body:@\\Wdocument\\s*\\.\\s*querySelector\\s*\\(\\s*"\\.jdgm-rev-widg"\\s*\\)@',
                  13 => 'body:@window\\s*\\.\\s*gtranslateSettings\\s*=@',
                  14 => 'src:@trustindex\\.io/assets/js/richsnippet@',
                  15 => 'src:@web\\.cmp\\.usercentrics\\.eu/@',
                  16 => 'id:@^zeroy-tailwind-@',
                  17 => 'src:@/kit\\.fontawesome\\.com/@',
                ),
              ),
              'spec' => 
              array (
                'timeout' => 
                array (
                  'enable' => false,
                  'v' => 500,
                ),
              ),
            ),
            'jsNonCritScopeOvr' => false,
            'cssOvr' => false,
            'css' => 
            array (
              'nonCrit' => 
              array (
                'auto' => false,
              ),
            ),
          ),
        ),
        '@' => 
        array (
          'enable' => 2,
          'name' => 'Common',
          'patterns' => 
          array (
          ),
          'urisIncl' => 
          array (
          ),
          'argsIncl' => 
          array (
          ),
          'views' => 
          array (
          ),
          'sklSrch' => true,
          'sklExcl' => 
          array (
            0 => './/script',
            1 => './/style',
            2 => './/link',
            3 => './/head',
            4 => './/br',
            5 => './/svg[@width="0"][@height="0"]',
          ),
          'sklCssSelExcl' => 
          array (
            0 => '@\\.(?:product_cat|product_tag|category|tag|term|pa|woocommerce-product-attributes-item--attribute|comment-author)[\\-_]([\\w\\-]+)@i',
            1 => '@[\\.#][\\w\\-]*[\\-_]([\\da-f]+)[\\W_]@i',
          ),
          'contPr' => 
          array (
            'enable' => true,
            'jsOvr' => false,
            'js' => 
            array (
              'optLoad' => true,
              'nonCrit' => 
              array (
                'timeout' => 
                array (
                  'enable' => true,
                  'v' => 7500,
                ),
                'inl' => true,
                'int' => true,
                'ext' => true,
                'excl' => true,
                'items' => 
                array (
                  0 => 'body:@\\Wfunction\\s+et_core_page_resource_fallback\\W@',
                  1 => 'body:@\\WTRINITY_TTS_WP_CONFIG\\W@',
                  2 => 'id:@^spai_js$@',
                  3 => 'src:@/depicter/@',
                  4 => 'body:@\\WDepicter\\W@',
                  5 => 'src:@/plugins/(?:nextend-|)smart-slider@',
                  6 => 'body:@(?:^|\\W)_N2\\s*\\.\\s*r\\s*\\(\\s*[\'"]documentReady[\'"]@',
                  7 => 'body:@\\Wthis\\s*\\.\\s*_N2\\s*=\\s*this\\s*\\.\\s*_N2\\W@',
                  8 => 'src:@\\.github\\.com@',
                  9 => 'body:@window\\.jetMenuMobileWidgetRenderData@',
                  10 => 'src:@\\.typekit\\.net@',
                  11 => 'body:@\\WTypekit\\.load\\(@',
                  12 => 'body:@\\Wdocument\\s*\\.\\s*querySelector\\s*\\(\\s*"\\.jdgm-rev-widg"\\s*\\)@',
                  13 => 'body:@window\\s*\\.\\s*gtranslateSettings\\s*=@',
                  14 => 'src:@trustindex\\.io/assets/js/richsnippet@',
                  15 => 'src:@web\\.cmp\\.usercentrics\\.eu/@',
                  16 => 'id:@^zeroy-tailwind-@',
                  17 => 'src:@/kit\\.fontawesome\\.com/@',
                ),
              ),
              'spec' => 
              array (
                'timeout' => 
                array (
                  'enable' => false,
                  'v' => 500,
                ),
              ),
            ),
            'jsNonCritScopeOvr' => false,
            'cssOvr' => false,
            'css' => 
            array (
              'nonCrit' => 
              array (
                'auto' => false,
              ),
            ),
          ),
        ),
        'desktop' => 
        array (
          'enable' => 0,
          'name' => 'Desktop',
          'patterns' => 
          array (
          ),
          'urisIncl' => 
          array (
          ),
          'argsIncl' => 
          array (
          ),
          'views' => 
          array (
            0 => 'cmn',
          ),
          'sklSrch' => false,
          'sklExcl' => 
          array (
          ),
          'sklCssSelExcl' => 
          array (
          ),
          'contPr' => 
          array (
            'enable' => true,
            'jsOvr' => true,
            'js' => 
            array (
              'optLoad' => true,
              'nonCrit' => 
              array (
                'timeout' => 
                array (
                  'enable' => true,
                  'v' => 7500,
                ),
                'inl' => true,
                'int' => true,
                'ext' => true,
                'excl' => true,
                'items' => 
                array (
                ),
              ),
              'spec' => 
              array (
                'timeout' => 
                array (
                  'enable' => false,
                  'v' => 7500,
                ),
              ),
            ),
            'jsNonCritScopeOvr' => false,
            'cssOvr' => false,
            'css' => 
            array (
              'nonCrit' => 
              array (
                'auto' => false,
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'bots' => 
  array (
    'agents' => 
    array (
      0 => '@\\Wcompatible\\W@i',
      1 => 'facebookexternalhit',
      2 => 'go-http-client',
      3 => 'google-adwords-instant',
      4 => 'adsbot-google',
      5 => 'googlebot',
      6 => 'googleyoutube',
      7 => 'ioncrawl',
      8 => 'chrome-lighthouse',
      9 => 'gtmetrix',
      10 => 'rankmathapi',
      11 => 'validator.w3.org',
      12 => 'zoominfobot',
      13 => 'freshpingbot',
      14 => 'wordpress/',
      15 => 'applebot/',
      16 => 'python-requests/',
      17 => 'slackbot',
      18 => 'uptimemonitor',
      19 => 'crawler_eb',
      20 => '@\\s+web\\s+spider\\W@i',
      21 => 'dnbcrawler',
      22 => 'stormcrawler',
      23 => '@df\\s+bot@',
      24 => 'webprosbot',
      25 => 'researchoftheweb',
      26 => 'siteanalyzerbot',
      27 => '@2ip\\s+bot@',
      28 => 'ahrefs',
      29 => 'mj12bot',
      30 => 'bsbot',
      31 => 'okhttp',
      32 => 'phxbot',
      33 => 'sansanbot',
      34 => 'scrapy',
      35 => 'researchscan',
    ),
  ),
  'test' => 
  array (
    'optDelay' => false,
    'optDelayTimeout' => 15000,
    'contDelay' => false,
    'contDelayTimeout' => 5000,
    'contExtra' => false,
    'contExtraSize' => 524288,
  ),
  'hdrTrace' => true,
  'debugInfo' => false,
  'debug' => false,
  'emojiIcons' => true,
  'log' => false,
  'logScope' => 
  array (
    'upd' => false,
    'srvClr' => false,
    'request' => false,
    'requestSkipped' => true,
    'requestSkippedAdmin' => true,
    'requestBots' => true,
  ),
  'asyncUseCron' => true,
  'asyncMode' => '',
  'asyncUseCmptNbr' => false,
  'asyncSmpOpt' => true,
  'asyncMgrMaxRunTime' => 7,
  'v' => 201,
  'full' => true,
); }
$seraph_accel_sites = array (
  'localhost/salamatacademy' => 'm',
);
@include(WP_CONTENT_DIR . '/plugins/seraphinite-accelerator-ext/cache.php');
?>