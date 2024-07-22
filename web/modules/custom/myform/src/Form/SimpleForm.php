<?php

namespace Drupal\myform\Form;

use Drupal\Core\Form\FormBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\node\Entity\Node;

class SimpleForm extends FormBase {

    public function getFormId() {
        return 'rsvplist_email_form';
    }

    public function buildForm(array $form, FormStateInterface $form_state) {
        // Get the node ID if available
        $node = \Drupal::routeMatch()->getParameter('node');
        $nid = 0; // Default to 0 if node is not loaded

        if ($node && $node->id()) {
            $nid = $node->id();
        }

        // Form elements
     

        $form['name'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Name'),
            '#size' => 40,
            '#description' => t("Enter your name"),
            
        ];
        $form['email'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Email Address'),
            '#size' => 25,
            '#description' => $this->t("Provide an email"),
            
        ];
        $form['age'] = [
            '#type' => 'number',
            '#title' => $this->t('Age'),
            '#size' => 25,
            '#description' => $this->t("Enter your age"),
            
        ];
        $form['favorite_animal'] = [
            '#type' => 'textfield',
            '#title' => $this->t('Favorite Animal'),
            '#size' => 55,
            '#description' => $this->t("Enter your favorite animal"),
            
        ];

        $form['submit'] = [
            '#type' => 'submit',
            '#value' => $this->t('Save'),
        ];

        // Hidden field for node ID

        $form['nid'] = [
            '#type' => 'hidden',
            '#value' => $nid, // Use variable directly, not as a string
        ];

        return $form;
    }
    public function validateForm(array &$form, FormStateInterface $form_state)
    {
        $name = $form_state->getValue('name');
        $email = $form_state->getValue('email');
        $age = $form_state->getValue('age');
        $favorite_animal = $form_state->getValue('favorite_animal');

        $validationService = \Drupal::service('myform.validation_service');

        if(!$validationService->isValidName($name)){
            $form_state->setErrorByName('name', $this->t('Name is not valid'));
        }

        if(!$validationService->isValidEmail($email)){
            $form_state->setErrorByName('email', $this->t('Email is not valid'));
        }

        if(!$validationService->isValidAge($age)){
            $form_state->setErrorByName('age', $this->t('Age is not valid'));
        }

        if(!$validationService->isValidAnimalName($favorite_animal)){
            $form_state->setErrorByName('favorite_animal', $this->t('Animal Name is not valid'));
        }
    }

    

    public function submitForm(array &$form, FormStateInterface $form_state) {
        try {

            $newNode = Node::create([
                'type' => 'simple_form',
                'title' => $form_state->getValue('name'),
                'field_name' => $form_state->getValue('name'),
                'field_email' => $form_state->getValue('email'),
                'field_age' => $form_state->getValue('age'),
                'field_favorite_animal' => $form_state->getValue('favorite_animal')
                
            ]);

            $newNode->save();

            // Get current user ID
            $uid = \Drupal::currentUser()->id();

            // Obtain values from the form state
            $nid = $form_state->getValue('nid');
            // $title = $form_state->getValue('title');
            $name = $form_state->getValue('name');
            $email = $form_state->getValue('email');
            $age = $form_state->getValue('age');
            $favorite_animal = $form_state->getValue('favorite_animal');
           
            

            // Success message
            \Drupal::messenger()->addMessage($this->t("Thank you for your response"));
            $form_state->setRedirect('<front>');
        } 
        catch (\Exception $e) {
            // Error message on failure
            \Drupal::messenger()->addError($this->t("Unable to save your info. Please try again."));
        }
    }

}
