<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Table;


/**
 * Users Model
 *

 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ArticlesTable extends Table
{
  /**
   * Initialize method
   *
   * @param array $config The configuration for the Table.
   * @return void
   */
  public function initialize(array $config): void
  {
    parent::initialize($config);
  }
  public function isOwnedBy($articleId, $userId)
  {
    return $this->exists(['id' => $articleId, 'user_id' => $userId]);
  }
}
