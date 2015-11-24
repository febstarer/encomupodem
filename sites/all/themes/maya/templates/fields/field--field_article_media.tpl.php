<?php
/**
* @file field.tpl.php
* Default template implementation to display the value of a field.
*
* This file is not used and is here as a starting point for customization only.
* @see theme_field()
*
* Available variables:
* - $items: An array of field values. Use render() to output them.
* - $label: The item label.
* - $label_hidden: Whether the label display is set to 'hidden'.
* - $classes: String of classes that can be used to style contextually through
* CSS. It can be manipulated through the variable $classes_array from
* preprocess functions. The default values can be one or more of the
* following:
* - field: The current template type, i.e., "theming hook".
* - field-name-[field_name]: The current field name. For example, if the
* field name is "field_description" it would result in
* "field-name-field-description".
* - field-type-[field_type]: The current field type. For example, if the
* field type is "text" it would result in "field-type-text".
* - field-label-[label_display]: The current label position. For example, if
* the label position is "above" it would result in "field-label-above".
*
* Other variables:
* - $element['#object']: The entity to which the field is attached.
* - $element['#view_mode']: View mode, e.g. 'full', 'teaser'...
* - $element['#field_name']: The field name.
* - $element['#field_type']: The field type.
* - $element['#field_language']: The field language.
* - $element['#field_translatable']: Whether the field is translatable or not.
* - $element['#label_display']: Position of label display, inline, above, or
* hidden.
* - $field_name_css: The css-compatible field name.
* - $field_type_css: The css-compatible field type.
* - $classes_array: Array of html class attribute values. It is flattened
* into a string within the variable $classes.
*
* @see template_preprocess_field()
* @see theme_field()
*
* @ingroup themeable
*/
?>
<?php
//get type for display images
$type = $element['#object']->field_type['und'][0]['value'];
//$type: [normal, slider, gallery, audio, video]
$count = count($items);

if( $type == "slider" || ( $type == "normal" && $count > 1 ) ) :
	$carousel = drupal_html_id('sh-blog-carousel');
?>
<div class="sh-portfolio-slider <?php print $classes; ?>"<?php print $attributes; ?>>

	<div id="<?php print $carousel; ?>" class="carousel slide" data-ride="carousel">
	  
	  <!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
		<?php foreach ($items as $delta => $item): ?>
			<div class="item <?php if( $delta == 0 ) print 'active'; ?>">
				<?php print render($item); ?>
				<div id="intro-message" class="carousel-caption">
					  
				</div>
			</div>
		<?php endforeach; ?> 
		</div>

		<!-- Indicators -->
		<ol class="carousel-indicators">
		<?php foreach ($items as $delta => $item): ?>
			<li data-target="#<?php print $carousel; ?>" data-slide-to="<?php print $delta; ?>" class="<?php if( $delta == 0 ) print 'active'; ?>"></li>
		<?php endforeach; ?>
		</ol>

	</div>
</div>
<?php elseif ( $type == "gallery" ) : ?>
<?php $image_id = drupal_html_id('sh-blog-gallery'); ?>

<div class="gallery-box article-gallery-box <?php print $classes; ?>"<?php print $attributes; ?>>
	<?php foreach ($items as $delta => $item): ?>
		<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
			<div class="gallery-wrap clearfix">
				<div class="gallery-item">
					<?php print render($item); ?>
					<div class="gallery-caption">
						<?php $path = file_create_url($item['#file']->uri); ?>
						
						<div class="gallery-title">
							<a href="<?php print $path; ?>" rel="lightbox[<?php print $image_id; ?>]"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php endforeach; ?>
</div>
<?php else : ?>
	<?php foreach ($items as $delta => $item): ?>
		<div class="field-image <?php print $delta % 2 ? 'odd' : 'even'; ?>"<?php print $item_attributes[$delta]; ?>><?php print render($item); ?></div>
	<?php endforeach; ?> 
<?php endif; ?>