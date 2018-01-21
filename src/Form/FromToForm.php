<?php
/**
 * Created by PhpStorm.
 * User: Arturas
 * Date: 2018-01-20
 * Time: 16:26
 */

namespace Drupal\property_list\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Url;

class FromToForm extends FormBase
{
  /**
   * @inheritdoc
   * @return string
   */
  public function getFormId()
  {
    return 'property_list_form';
  }

  /**
   * @param array $form
   * @param FormStateInterface $form_state
   * @return array
   */
  public function buildForm(array $form, FormStateInterface $form_state)
  {
    $form['from'] = [
      '#type'             => 'date',
      '#title'            => $this->t('From'),
      '#description'       => $this->t('Check in')
    ];

    $form['to'] = [
      '#type'             => 'date',
      '#title'            => $this->t('To'),
      '#description'       => $this->t('Check out')
    ];

    $form['submit'] = array(
      '#type' => 'submit',
      '#value' => $this->t('Search')
    );

    return $form;
  }

  /**
   * @param array $form
   * @param FormStateInterface $form_state
   */
  public function validateForm(array &$form, FormStateInterface $form_state)
  {
    if(empty($form_state->getValue('from'))){
      $form_state->setErrorByName('from', $this->t('From date is empty'));
    }
    if(empty($form_state->getValue('to'))){
      $form_state->setErrorByName('to', $this->t('To date is empty'));
    }
  }

  /**
   * @param array $form
   * @param FormStateInterface $form_state
   */
  public function submitForm(array &$form, FormStateInterface $form_state)
  {
    $from = date('Ymd', strtotime($form_state->getValue('from')));
    $to = date('Ymd', strtotime($form_state->getValue('to')));

    $url = Url::fromRoute(
      'property_list.content',
      [],
      [
        'query' => [
          'from' => $from,
          'to' => $to
        ]
      ]);

    $form_state->setRedirectUrl($url);
  }

}
