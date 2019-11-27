<?php

namespace Drupal\form_local\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Provides a 'FormRedirect' block.
 *
 * @Block(
 *  id = "form_redirect",
 *  admin_label = @Translation("Form redirect"),
 * )
 */
class FormRedirect extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {
    return [
    ] + parent::defaultConfiguration();
  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    $form['name'] = [
      '#type' => 'textfield',
      '#title' => $this->t('Name'),
      '#default_value' => $this->configuration['name'],
      '#maxlength' => 64,
      '#size' => 64,
      '#weight' => '0',
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {
    $this->configuration['name'] = $form_state->getValue('name');
  }

  /**
   * {@inheritdoc}
   */
  public function build() {
    // $build = [];
    $form = \Drupal::formBuilder()->getForm('Drupal\form_local\Form\LocalsForm');
    return $form;
  }

}
