<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Sobretextos Model
 *
 * @method \App\Model\Entity\Sobretexto newEmptyEntity()
 * @method \App\Model\Entity\Sobretexto newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Sobretexto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Sobretexto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Sobretexto findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Sobretexto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Sobretexto[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Sobretexto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sobretexto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Sobretexto[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sobretexto[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sobretexto[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Sobretexto[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SobretextosTable extends Table
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

    $this->setTable('sobretextos');
    $this->setDisplayField('id');
    $this->setPrimaryKey('id');
  }

  /**
   * Default validation rules.
   *
   * @param \Cake\Validation\Validator $validator Validator instance.
   * @return \Cake\Validation\Validator
   */
  public function validationDefault(Validator $validator): Validator
  {
    $validator
      ->integer('id')
      ->allowEmptyString('id', null, 'create');

    $validator
      ->scalar('texto')
      ->maxLength('texto', 220)
      ->requirePresence('texto', 'create')
      ->notEmptyString('texto');

    $validator
      ->allowEmptyFile('image')
      ->add('image', [
        'mimetype' => [
          'rule' => [
            'mimeType', ['image/jpg', 'image/png', 'image/jpeg'],
            'message' => 'Por favor inserir imagem com extensão png, jpg ou jpeg.',
          ],
          'fileSize' => [
            'rule' => ['fileSize', '<=', '1MB'],
            'message' => 'A imagem é muito pesada, permitido ate 1MB'
          ],
        ]
      ])
      ->scalar('image')
      ->maxLength('image', 220)
      ->allowEmptyFile('image');

    return $validator;
  }
}
