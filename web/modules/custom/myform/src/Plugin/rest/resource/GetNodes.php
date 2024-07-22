<?php

namespace Drupal\myform\Plugin\rest\resource;

use Drupal\Core\Entity\EntityStorageException;
use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;
use Drupal\node\Entity\Node;
use Drupal\Core\Entity\EntityStorageInterface;
use Drupal\media\OEmbed\Resource;
use Symfony\Component\DependencyInjection\ContainerInterface;


/**
 * Provides a Demo Resource
 *
 * @RestResource(
 *   id = "nodes",
 *   label = @Translation("Nodes List"),
 *   uri_paths = {
 *     "canonical" = "/get/nodes",
 *     "create" = "/get/nodes"
 *   }
 * )
 */
class GetNodes extends ResourceBase {

  /**
   * Responds to entity GET requests.
   *
   * @return \Drupal\rest\ResourceResponse
   */
  public function get() {
    
    
    $nids = \Drupal::entityQuery('node')
      ->condition('type', 'simple_form')
      ->execute();

   
    $nodes = Node::loadMultiple($nids);

    $processed_nodes = $this->processNodes($nodes);

    return new ResourceResponse($processed_nodes);
  }
  public function permissions() {
    return [];
  }


  /**
   * Processes the nodes to extract the desired information.
   *
   * @param array $nodes
   *   An array of node entities.
   *
   * @return array
   *   An array of processed node data.
   */
  private function processNodes(array $nodes) {
    $answer = [];

    foreach ($nodes as $node) {
      $answer[] = [
        'id' => $node->id(),
        'title' => $node->get('title')->value,
        'name' => $node->get('field_name')->value,
        'email' => $node->get('field_email')->value,
        'favorite_animal' => $node->get('field_favorite_animal')->value,
        'age' => $node->get('field_age')->value,
      ];
    }

    return $answer;
  }

  public function post($data){
    try{
      //  dump($data); exit;
 

 

// Create node object with attached file.
$node = Node::create([
  'type'        => $data['type'],
  'title'       => $data['title'],
 'field_name'  => $data['name'],
 'status' => 1,
]);
$node->save();

return new ResourceResponse("Node created successfully");
    }
    catch(EntityStorageException $e){
       \Drupal::logger('custom-rest')->error($e->getMessage());
    }

  }
}
