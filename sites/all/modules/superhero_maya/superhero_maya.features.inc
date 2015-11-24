<?php
/**
 * @file
 * superhero_maya.features.inc
 */

/**
 * Implements hook_ctools_plugin_api().
 */
function superhero_maya_ctools_plugin_api($module = NULL, $api = NULL) {
  if ($module == "context" && $api == "context") {
    return array("version" => "3");
  }
}

/**
 * Implements hook_views_api().
 */
function superhero_maya_views_api($module = NULL, $api = NULL) {
  return array("api" => "3.0");
}

/**
 * Implements hook_node_info().
 */
function superhero_maya_node_info() {
  $items = array(
    'article' => array(
      'name' => t('Article'),
      'base' => 'node_content',
      'description' => t('Use <em>articles</em> for time-sensitive content like news, press releases or blog posts.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'clients' => array(
      'name' => t('Clients'),
      'base' => 'node_content',
      'description' => t('Client logos displayed on home page'),
      'has_title' => '1',
      'title_label' => t('Name'),
      'help' => '',
    ),
    'page' => array(
      'name' => t('Basic page'),
      'base' => 'node_content',
      'description' => t('Use <em>basic pages</em> for your static content, such as an \'About us\' page.'),
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
    'superhero_portfolio' => array(
      'name' => t('Superhero Portfolio'),
      'base' => 'node_content',
      'description' => t('Provides information on Client/Work Portfolios'),
      'has_title' => '1',
      'title_label' => t('Name'),
      'help' => '',
    ),
    'team' => array(
      'name' => t('Team'),
      'base' => 'node_content',
      'description' => t('Information on the members of the team'),
      'has_title' => '1',
      'title_label' => t('Name'),
      'help' => '',
    ),
    'testimonial' => array(
      'name' => t('Testimonial'),
      'base' => 'node_content',
      'description' => '',
      'has_title' => '1',
      'title_label' => t('Title'),
      'help' => '',
    ),
  );
  drupal_alter('node_info', $items);
  return $items;
}
