<?php
/**
 * Created by PhpStorm.
 * User: Arturas
 * Date: 2018-01-21
 * Time: 15:34
 */

namespace Drupal\property_list\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class PropertyListSettingsForm extends ConfigFormBase
{
  /**
   * {@inheritdoc}
   */
  public function getFormId()
  {
    return 'property_list_settings';
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames()
  {
    return ['property_list.settings'];
  }

  /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state)
  {
    $config = $this->config('property_list.settings');
    $form['properties_per_page'] = [
      '#type'           => 'number',
      '#title'          => $this->t('Properties per page'),
      '#default_value'  => $config->get('properties_per_page')
    ];

    return parent::buildForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state)
  {
    if(empty($form_state->getValue('properties_per_page'))){
      $form_state->setErrorByName('properties_per_page', $this->t('Field is empty'));
    } elseif($form_state->getValue('properties_per_page') < 10){
      $form_state->setErrorByName('properties_per_page', $this->t('Minimum properties per page is 10'));
    }
  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state)
  {
    $values = $form_state->getValues();
    $this->config('property_list.settings')
      ->set('properties_per_page', $values['properties_per_page'])
      ->save();
  }

}
