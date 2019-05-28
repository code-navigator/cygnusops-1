<?php

class Theme {
  public function __construct() {
    $this->addStyle('theme-styles',  get_stylesheet_uri());
  }

  public function addStyle($handle, $src = '', $deps = array(), $ver = false, $media = 'all') {
    $this->actionEnqueueScripts(function() use ($handle, $src, $deps, $ver, $media) {
        wp_enqueue_style($handle, $src, $deps, $ver, $media);
    });
    return $this;
  }

  private function actionEnqueueScripts($function) {
    add_action('wp_enqueue_scripts', function() use ($function) {
        $function();
    });
  }
}