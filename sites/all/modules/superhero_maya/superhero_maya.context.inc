<?php
/**
 * @file
 * superhero_maya.context.inc
 */

/**
 * Implements hook_context_default_contexts().
 */
function superhero_maya_context_default_contexts() {
  $export = array();

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'header_clear';
  $context->description = '';
  $context->tag = '';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'node/82' => 'node/82',
        'node/84' => 'node/84',
        'node/85' => 'node/85',
        'node/54' => 'node/54',
        'node/90' => 'node/90',
        'content/left-sidebar' => 'content/left-sidebar',
        'content/right-sidebar' => 'content/right-sidebar',
        'content/full-width' => 'content/full-width',
        'blog' => 'blog',
        'blog-full-width' => 'blog-full-width',
        'blog-teaser' => 'blog-teaser',
        'blog-teaser-2' => 'blog-teaser-2',
      ),
    ),
  );
  $context->reactions = array(
    'delta' => array(
      'delta_template' => 'white_logo_layout',
    ),
    'theme_html' => array(
      'class' => 'header-clear',
    ),
  );
  $context->condition_mode = 0;
  $export['header_clear'] = $context;

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'home_no_intro';
  $context->description = '';
  $context->tag = '';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'node/89' => 'node/89',
      ),
    ),
  );
  $context->reactions = array(
    'delta' => array(
      'delta_template' => 'home_no_intro',
    ),
  );
  $context->condition_mode = 0;
  $export['home_no_intro'] = $context;

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'home_video';
  $context->description = '';
  $context->tag = '';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'node/85' => 'node/85',
      ),
    ),
  );
  $context->reactions = array(
    'delta' => array(
      'delta_template' => 'home_video',
    ),
  );
  $context->condition_mode = 0;
  $export['home_video'] = $context;

  $context = new stdClass();
  $context->disabled = FALSE; /* Edit this to true to make a default context disabled initially */
  $context->api_version = 3;
  $context->name = 'page_full_width';
  $context->description = 'Section Full Width';
  $context->tag = '';
  $context->conditions = array(
    'path' => array(
      'values' => array(
        'portfolio/1' => 'portfolio/1',
        'portfolio/2' => 'portfolio/2',
        'portfolio/3' => 'portfolio/3',
        'blog-full-width' => 'blog-full-width',
      ),
    ),
  );
  $context->reactions = array(
    'delta' => array(
      'delta_template' => 'page_full_width',
    ),
  );
  $context->condition_mode = 0;

  // Translatables
  // Included for use with string extractors like potx.
  t('Section Full Width');
  $export['page_full_width'] = $context;

  return $export;
}
