<?php

namespace Drupal\myform\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Drupal\node\Entity\Node;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Drupal\Core\Entity\EntityTypeManagerInterface;
use Symfony\Component\HttpFoundation\Response;

class PostNodeController extends ControllerBase {
  protected $entityTypeManager;
  protected $currentUser;
  protected $validationService;

  public function __construct(EntityTypeManagerInterface $entityTypeManager, $currentUser, $validationService) {
    $this->entityTypeManager = $entityTypeManager;
    $this->currentUser = $currentUser;
    $this->validationService = $validationService;
  }

  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity_type.manager'),
      $container->get('current_user'),
      $container->get('myform.validation_service')
    );
  }

  public function createNode(Request $request) {
    $data = json_decode($request->getContent(), TRUE);
    if (empty($data)) {
      return new JsonResponse(['status' => 'error', 'message' => 'No data found.'], 400);
    }

    $dataValidationService = \Drupal::service('myform.validation_service');
    $requiredFields = ['name', 'email', 'age', 'favorite_animal'];
    foreach ($requiredFields as $field) {
      if (empty($data[$field])) {
        return new JsonResponse(['status' => '400', 'message' => 'All fields are not present here'], 400);
      }
      if ($field == 'name' && !$dataValidationService->isValidName($data[$field])) {
        return new JsonResponse(['status' => '400', 'message' => 'Please enter a valid name.'], 400);
      }
      elseif ($field == 'email' && !$dataValidationService->isValidEmail($data[$field])) {
        return new JsonResponse(['status' => '400', 'message' => 'Please enter a valid email.'], 400);
      }
      elseif ($field == 'age' && !$dataValidationService->isValidAge($data[$field])) {
        return new JsonResponse(['status' => '400', 'message' => 'Please enter a valid age.'], 400);
      }
      elseif ($field == 'favorite_animal' && !$dataValidationService->isValidAnimalName($data[$field])) {
        return new JsonResponse(['status' => '400', 'message' => 'Please enter a valid animal name.'], 400);
      }
    }

    try {
      $node = Node::create([
        'type' => 'simple_form',
        'title' => 'Simple Form Submission',
        'field_name' => $data['name'],
        'field_email' => $data['email'],
        'field_age' => $data['age'],
        'field_favorite_animal' => $data['favorite_animal'],
      ]);
      $node->save();

      return new JsonResponse([
        'status' => '200',
        'message' => 'Your data has been saved successfully.',
        'node_id' => $node->id(),
      ], 200);
    } catch (\Exception $e) {
      \Drupal::logger('myform')->error($e->getMessage());
      return new JsonResponse(['status' => 'error', 'message' => 'Unable to create node'], 500);
    }
  }
}
