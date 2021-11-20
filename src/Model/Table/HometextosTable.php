<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Hometextos Model
 *
 * @method \App\Model\Entity\Hometexto newEmptyEntity()
 * @method \App\Model\Entity\Hometexto newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Hometexto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Hometexto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Hometexto findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Hometexto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Hometexto[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Hometexto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Hometexto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Hometexto[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Hometexto[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Hometexto[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Hometexto[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class HometextosTable extends Table
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

        $this->setTable('hometextos');
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
            ->allowEmptyString('texto');

        $validator
        ->allowEmptyFile('image')
        ->add('image', [
          'mimetype' => [
            'rule' => ['mimeType', ['image/jpg', 'image/png', 'image/jpeg'],
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
