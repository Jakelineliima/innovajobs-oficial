<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Escolaridades Model
 *
 * @method \App\Model\Entity\Escolaridade newEmptyEntity()
 * @method \App\Model\Entity\Escolaridade newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Escolaridade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Escolaridade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Escolaridade findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Escolaridade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Escolaridade[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Escolaridade|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Escolaridade saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Escolaridade[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Escolaridade[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Escolaridade[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Escolaridade[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EscolaridadesTable extends Table
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

        $this->setTable('escolaridades');
        $this->setDisplayField('escolaridade');
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
            ->scalar('escolaridade')
            ->maxLength('escolaridade', 220)
            ->requirePresence('escolaridade', 'create')
            ->notEmptyString('escolaridade');

        return $validator;
    }
}
