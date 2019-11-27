<?php

namespace Drupal\slick_views_breakpoints\Plugin\views\style;

use Drupal\Core\Form\FormStateInterface;

/**
 * Slick style plugin.
 *
 * @ingroup views_style_plugins
 *
 * @ViewsStyle(
 *   id = "slick_breakpoints",
 *   title = @Translation("Slick Carousel Breakpoints"),
 *   help = @Translation("Display the results in a Slick Carousel."),
 *   theme = "slick_wrapper",
 *   register_theme = FALSE,
 *   display_types = {"normal"}
 * )
 */
class SlickViews extends SlickViewsBase {

  /**
   * Overrides parent::buildOptionsForm().
   */
  public function buildOptionsForm(&$form, FormStateInterface $form_state) {
    $definition = $this->getDefinedFormScopes();  
    $form['breakpoint'] = [
      '#type'        => 'checkbox',
      '#title'       => $this->t('Breakpoints use'),
      '#weight'      => 113,
      '#enforced'    => TRUE,      
    ];    
    
    $form['breakpoints'] = [
      '#type'        => 'checkboxes',
      '#title'       => $this->t('Breakpoints options'),
      '#description' => $this->t("Override the main optionset to re-use one. Anything dictated here will override the current main optionset. Unchecked means FALSE"),
      '#options'     => $this->getBreakpoints(),
      '#weight'      => 113,
      '#enforced'    => TRUE,
      '#default_value' => $definition['breakpoints'],
      '#states' => [
        'visible' => [
          ':input[name$="[breakpoint]"]' => ['checked' => TRUE],
        ],
      ],
    ];
    
    foreach ($this->getBreakpoints() as $key => $value) {
      $form['breakpoints_container_'.$key] = [
        '#type'        => 'fieldset',
        '#title' => $value,
        '#weight'      => 113,
        '#enforced'    => TRUE,
        '#states' => [
          'visible' => [
            ':input[name$="[breakpoint]"]' => ['checked' => TRUE],
            ':input[name$="['.$key.']"]' => ['checked' => TRUE],
          ],
        ],
      ]; 
      $form['breakpoints_container_'.$key]['slidesToShow'] = [
        '#type'        => 'select',
        '#title' => 'Select the slidesToShow',
        '#options'     => $this->getNumberItems(),
        '#weight'      => 0,
        '#default_value' => [$definition['settings']['breakpoints_container_'.$key]['slidesToShow']],
      ];
      $form['breakpoints_container_'.$key]['slidesToScroll'] = [
        '#type'        => 'select',
        '#title' => 'Select the slidesToScroll',
        '#options'     => $this->getNumberItems(),
        '#weight'      => 1,
        '#default_value' => $definition['settings']['breakpoints_container_'.$key]['slidesToScroll'],
      ];
    }
    $this->buildSettingsForm($form, $definition);
  }

  /**
   * Overrides StylePluginBase::render().
   */
  public function render() {
    $settings = $this->buildSettings();

    $elements = [];
    foreach ($this->renderGrouping($this->view->result, $settings['grouping']) as $rows) {
      $build = $this->buildElements($settings, $rows);

      // Extracts Blazy formatter settings if available.
      if (empty($settings['vanilla']) && isset($build['items'][0])) {
        $this->blazyManager()->isBlazy($settings, $build['items'][0]);
      }

      // Supports Blazy multi-breakpoint images if using Blazy formatter.
      $settings['first_image'] = isset($rows[0]) ? $this->getFirstImage($rows[0]) : [];

      $build['settings'] = $settings;

      $elements = $this->manager->build($build);
      unset($build);
    }
    return $elements;
  }
  public function getBreakpoints(){
    return array(
      'xsm' => '<576px',
      'sm' => '≥576px',
      'md' => '≥768px',
      'xl' => '≥1200px',
    );
  }
  public function getNumberItems(){
    foreach (range(1,10) as $value) {
      $items[$value]= $value;
    }
    return $items;
  }
}
