<?php

/**
 * Custom MayA Template settings
 */

/**
 * Override or insert variables into the html templates.
 *
 * @param $vars
 *   An array of variables to pass to the theme template.
 */
function maya_preprocess_html(&$vars) {
  if ($vars['is_front']) {
    $vars['head_title'] = $vars['head_title_array']['name'];
  }

  // the styles
  drupal_add_css(drupal_get_path('theme', 'maya') . '/css/style.css', array('group' => CSS_THEME));
  // external styles
  drupal_add_css('//fonts.googleapis.com/css?family=Roboto:400,700italic,700,500italic,500,400italic,300italic,300&subset=latin,latin-ext', array('type' => 'external'));
  // the scripts
  drupal_add_js(drupal_get_path('theme', 'maya') . '/js/plugins.js', array('group' => JS_THEME));
  drupal_add_js(drupal_get_path('theme', 'maya') . '/js/script.js', array('group' => JS_THEME));
}

function maya_preprocess_node(&$vars) {
  $node_obj = $vars['elements']['#node'];

  // entity title
  if ($vars['view_mode'] == 'full'){
    //if ($node_obj->nid == 29 || $node_obj->nid == 3){ // home, calendar
      //unset($vars['title']);
    //}else{
      $entity_title = field_get_items('node', $node_obj, 'title_field');
      if (isset($entity_title[0]['safe_value'])){
        $vars['title'] = $entity_title[0]['safe_value'];
      }
    //}
  }
}

/**
 * page alter
 */
function maya_page_alter(&$vars) {
    // Add custom varibales for scss
    $theme = superhero_get_theme();
    $theme->custom['header_height'] = theme_get_setting('superhero_header_height');
    $theme->custom['header_fixed_height'] = theme_get_setting('superhero_header_fixed_height');
	//Add scroll to top
	$vars['page_bottom']['scrolToTop'] = array(
		'#weight' => 25, 
		'#markup' => '<div class="scrolToTop"><i class="fa fa-arrow-up"></i></div>',
	  );
}

/**
 * Implement hook_breadcrumd
 */
function maya_breadcrumb($variables) {
    $breadcrumb = $variables['breadcrumb'];

    if (!empty($breadcrumb)) {
        // Provide a navigational heading to give context for breadcrumb links to
        // screen-reader users. Make the heading invisible with .element-invisible.
        //$output = '<span class="showHere left">' . t('You are here') . '</span>';

        $output = '<div class="breadcrumb"><span class="showHere left">' . t('You are here:') . '</span> ' . implode(' <span class="fa fa-angle-right"></span> ', $breadcrumb) . '</div>';
        return $output;
    }
}

/**
* Implement hook_form_alter()
*/
function maya_form_alter(&$form, &$form_state, $form_id) {
	switch($form_id) {
		case 'contact_site_form' :
			$form['#title_display'] = FALSE;
			$form['#form_placeholder'] = TRUE;
			break;
		default : '';
	}
}

/**
* Implement hook_theme_username()
*/
function maya_username($variables) {
  if (isset($variables['link_path'])) {
    // We have a link path, so we should generate a link using l().
    // Additional classes may be added as array elements like
    // $variables['link_options']['attributes']['class'][] = 'myclass';
    $output = l($variables['name'] . $variables['extra'], $variables['link_path']);
  }
  else {
    // Modules may have added important attributes so they must be included
    // in the output. Additional classes may be added as array elements like
    // $variables['attributes_array']['class'][] = 'myclass';
    $output = '<span>' . $variables['name'] . $variables['extra'] . '</span>';
  }
  return $output;
}