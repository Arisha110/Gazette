<?php

namespace Drupal\myform\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Drupal\Core\Entity\EntityTypeManagerInterface;

class GetNodesController extends ControllerBase {
  protected $entityTypeManager;

  public function __construct(EntityTypeManagerInterface $entityTypeManager) {
    $this->entityTypeManager = $entityTypeManager;
  }

  //dependency injection
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('entity_type.manager')
    );
  }

  public function getNodes() {
    $storage = $this->entityTypeManager->getStorage('node');
    $query = $storage->getQuery()
      ->condition('type', 'simple_form')
      ->accessCheck(FALSE);
    
    $nids = $query->execute();

    $nodes = $storage->loadMultiple($nids);
    $data = [];
    
    foreach ($nodes as $node) {
      $data[] = [
        'id' => $node->id(),
        'name' => $node->get('field_name')->value,
        'email' => $node->get('field_email')->value,
        'favorite_animal' => $node->get('field_favorite_animal')->value,
        'age' => $node->get('field_age')->value,
      ];
    }

    return new JsonResponse($data);
  }
}
