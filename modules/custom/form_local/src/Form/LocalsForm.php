<?php

namespace Drupal\form_local\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;

/**
 * Class LocalsForm.
 */
class LocalsForm extends FormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'locals_form';
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    $form['#prefix'] = '<div class="header-input">Encuentra en La Terminal Salitre</div>';
    $form['name_service'] = [
      '#type' => 'textfield',
      // '#title' => $this->t('Name Service'),
      '#maxlength' => 255,
      '#size' => 64,
      '#weight' => '0',
    ];
    $data = ['' => '- Any -'];

    $form['categories'] = [
      '#type' => 'select',
      // '#title' => $this->t('Categories'),
      '#options' => $this->loadTaxonomy('services'),
      '#weight' => '0',
      '#empty_value' => '',
    ];
    $form['submit'] = [
      '#type' => 'submit',
      '#value' => $this->t('Submit'),
    ];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {
    foreach ($form_state->getValues() as $key => $value) {
      // @TODO: Validate fields.
    }
    parent::validateForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $yaml_form_submission_id = 10;
    $current_path = \Drupal::service('path.current')->getPath();
    $current_path = \Drupal::service('path.alias_manager')->getAliasByPath($current_path);
    $current_path = explode('/',$current_path);
    unset($current_path[0]);
    $params = [
      // 'arg_0' => $current_path[2],
      'arg_0' => $this->t('services'),    
    ];
    if($form_state->getValue('name_service')){
      $params['title'] = $form_state->getValue('name_service');
    }
    if($form_state->getValue('categories')){
      $params['type_service'] = $form_state->getValue('categories');  
    }       
    $node = \Drupal::routeMatch()->getParameter('node');
    if ($node instanceof \Drupal\node\NodeInterface) {
      // You can get nid and anything else you need from the node object.
      $nid = $node->id();
      $params['node'] = $nid;
    }
    $curr_langcode = \Drupal::languageManager()->getCurrentLanguage(\Drupal\Core\Language\LanguageInterface::TYPE_CONTENT)->getId();       
    if($curr_langcode == 'es'){
      $form_state->setRedirect('view.locals.locales',$params);          
    }else{
      $form_state->setRedirect('view.locals.locals',$params);        
    }
    
  }

  public function loadTaxonomy($vid){
    $curr_langcode = \Drupal::languageManager()->getCurrentLanguage(\Drupal\Core\Language\LanguageInterface::TYPE_CONTENT)->getId();
    $terms =\Drupal::entityTypeManager()->getStorage('taxonomy_term')->loadTree($vid);
    foreach ($terms as $term) {
      $taxonomy_term = \Drupal\taxonomy\Entity\Term::load($term->tid);
      $translation = \Drupal::service('entity.repository')->getTranslationFromContext($taxonomy_term,$curr_langcode);
      $term_data[$term->tid] = $translation->name->value;  
    }
    return $term_data;
  }

}
