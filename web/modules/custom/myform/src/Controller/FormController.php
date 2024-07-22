<?php


namespace Drupal\myform\Controller;
use Drupal\Core\Controller\ControllerBase;


class FormController extends ControllerBase{
    public function createForm(){
        $form = \Drupal::formBuilder()->getForm('\Drupal\myform\Form\SimpleForm');
        $renderFrom = \Drupal::service('renderer')->render($form);

        return [
            '#type' => 'markup',
            '#markup' => $renderFrom,
        ];
    }
}
