<?php

declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\Database\Connection;
use Cake\ORM\TableRegistry;
/**
 * Vagas Model
 *
 * @property \App\Model\Table\GênerosTable&\Cake\ORM\Association\BelongsTo $Gêneros
 * @property \App\Model\Table\EspeciaisTable&\Cake\ORM\Association\BelongsTo $Especiais
 * @property \App\Model\Table\EscolaridadesTable&\Cake\ORM\Association\BelongsTo $Escolaridades
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Vaga newEmptyEntity()
 * @method \App\Model\Entity\Vaga newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Vaga[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vaga get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vaga findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Vaga patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vaga[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vaga|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vaga saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vaga[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vaga[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vaga[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vaga[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class VagasTable extends Table
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

        $this->setTable('vagas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Gêneros', [
            'foreignKey' => 'gêneros_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Especiais', [
            'foreignKey' => 'especiais_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Escolaridades', [
            'foreignKey' => 'escolaridades_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER',


        ]);
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
            ->scalar('horário')
            ->maxLength('horário', 220)
            ->requirePresence('horário', 'create')
            ->notEmptyString('horário');

        $validator
            ->scalar('telefone')
            ->maxLength('telefone', 220)
            ->requirePresence('telefone', 'create')
            ->notEmptyString('telefone');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('vaga')
            ->maxLength('vaga', 220)
            ->requirePresence('vaga', 'create')
            ->notEmptyString('vaga');

        $validator
            ->scalar('empresa')
            ->maxLength('empresa', 220)
            ->requirePresence('empresa', 'create')
            ->notEmptyString('empresa');

        $validator
            ->scalar('mensagem')
            ->maxLength('mensagem', 220)
            ->requirePresence('mensagem', 'create')
            ->notEmptyString('mensagem');


        return $validator;
    }
    // public function findOwnedBy(Query $query, array $options)
    // {
    //     $user = $options['user'];
    //     return $query->where(['user_id' => $user->id]);
    // }
    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['gêneros_id'], 'Gêneros'), ['errorField' => 'gêneros_id']);
        $rules->add($rules->existsIn(['especiais_id'], 'Especiais'), ['errorField' => 'especiais_id']);
        $rules->add($rules->existsIn(['escolaridades_id'], 'Escolaridades'), ['errorField' => 'escolaridades_id']);
        $rules->add($rules->existsIn(['user_id'], 'Users'), ['errorField' => 'user_id']);

        return $rules;
    }

    public function index()
    {
        return false;
      
    }
    
    public function isOwnedBy($vagaId, $userId)
    {
        return $this->exists(['id' => $vagaId, 'user_id' => $userId]);
    }
    public function findOwnedBy(Query $query, array $options)
    {
        $user = $options['user'];
        return $query->where(['user_id' => $user->id]);
    }
}
