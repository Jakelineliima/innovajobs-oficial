<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Gêneros Model
 *
 * @method \App\Model\Entity\Gênero newEmptyEntity()
 * @method \App\Model\Entity\Gênero newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Gênero[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Gênero get($primaryKey, $options = [])
 * @method \App\Model\Entity\Gênero findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Gênero patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Gênero[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Gênero|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Gênero saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Gênero[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Gênero[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Gênero[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Gênero[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class GênerosTable extends Table
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

        $this->setTable('gêneros');
        $this->setDisplayField('genero');
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
            ->scalar('genero')
            ->maxLength('genero', 220)
            ->requirePresence('genero', 'create')
            ->notEmptyString('genero');

        return $validator;
    }
}
