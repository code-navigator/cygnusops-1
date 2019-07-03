<?php

class Theme {
  public function __construct() {
    $this->addStyle('theme-styles',  get_stylesheet_uri());
    $this->addSupport('custom-header', array(
      'width' => 1600,
      'height' => 250
    ));
    $this->addMenus();
    show_admin_bar(false);
  }

  public function addStyle($handle, $src = '', $deps = array(), $ver = false, $media = 'all') {
    $this->actionEnqueueScripts(function() use ($handle, $src, $deps, $ver, $media) {
        wp_enqueue_style($handle, $src, $deps, $ver, $media);
    });
    return $this;
  }

  public function addNavMenus($locations = array()) {
    add_action('after_setup_theme',function() use ($locations){
        register_nav_menus($locations);
    });
    return $this;
  }

  public function addSupport($feature, $options = null) {
    $this->actionAfterSetup(function() use ($feature, $options) {
        if ($options){
            add_theme_support($feature, $options);
        } else {
            add_theme_support($feature);
        }
    });
    return $this;
  }

  public function addMenus() {
    $this->actionAfterInit(function() {
      register_nav_menus(
        array('header-menu' => __('Header Menu'))
      );
    });
  }

  private function actionEnqueueScripts($function) {
    add_action('wp_enqueue_scripts', function() use ($function) {
        $function();
    });
  }

  private function actionAfterSetup($function) {
    add_action('after_setup_theme', function() use ($function) {
        $function();
    });
  }

  private function actionAfterInit($function) {
    add_action('init', function() use ($function) {
      $function();
    });
  }
}