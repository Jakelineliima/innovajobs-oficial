<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Authorization\AuthorizationServiceInterface;
use Authorization\IdentityInterface;
use Authorization\Policy\ResultInterface;
use Authorization\IdentityInterface as AuthorizationIdentity;
use Authentication\IdentityInterface as AuthenticationIdentity;
/**
 * Vaga Entity
 *
 * @property int $id
 * @property string $horário
 * @property string $telefone
 * @property string $email
 * @property string $vaga
 * @property string $empresa
 * @property int $gêneros_id
 * @property int $especiais_id
 * @property int $escolaridades_id
 * @property string $mensagem
 * @property int $user_id
 *
 * @property \App\Model\Entity\Gênero $gênero
 * @property \App\Model\Entity\Especiai $especiai
 * @property \App\Model\Entity\Escolaridade $escolaridade
 * @property \App\Model\Entity\User $user
 */
class Vaga extends Entity implements AuthorizationIdentity, AuthenticationIdentity
{
    public function can($action, $resource): bool
    {
        return $this->authorization->can($this, $action, $resource);
    }

    
    /**
     * Authorization\IdentityInterface method
     */
    public function canResult($action, $resource): ResultInterface
    {
        return $this->authorization->canResult($this, $action, $resource);
    }

    /**
     * Authorization\IdentityInterface method
     */
    public function applyScope($action, $resource)
    {
        return $this->authorization->applyScope($this, $action, $resource);
    }

    /**
     * Authorization\IdentityInterface method
     */
    public function getOriginalData()
    {
        return $this;
    }

    /**
     * Setter to be used by the middleware.
     */
    public function setAuthorization(AuthorizationServiceInterface $service)
    {
        $this->authorization = $service;

        return $this;
    }

     /**
     * Authentication\IdentityInterface method
     *
     * @return string
     */
    public function getIdentifier()
    {
        return $this->id;
    }

    public function setVagaexibir()
    {
        return $this;
    }

   
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        //linha add dps da exibição de dados unico do usuario 
        'id' => true,

        'horário' => true,
        'telefone' => true,
        'email' => true,
        'vaga' => true,
        'empresa' => true,
        'gêneros_id' => true,
        'especiais_id' => true,
        'escolaridades_id' => true,
        'mensagem' => true,
        'user_id' => true,
        'gênero' => true,
        'especiai' => true,
        'escolaridade' => true,
        'user' => true,
    ];
}
