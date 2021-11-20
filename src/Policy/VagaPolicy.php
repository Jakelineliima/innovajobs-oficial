<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Vaga;
use Authorization\IdentityInterface;
use Authorization\Policy\Result;

/**
 * Vaga policy
 */
class VagaPolicy
{
    public function canIndex(IdentityInterface $user, Vaga $vaga)
    {
        return true;
    }
    /**
     * Check if $user can add Vaga
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Vaga $vaga
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Vaga $vaga)
    {
        return true;
    }

    /**
     * Check if $user can edit Vaga
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Vaga $vaga
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Vaga $vaga)
    {
        
        return true;
    }

    /**
     * Check if $user can delete Vaga
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Vaga $vaga
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Vaga $vaga)
    {
        return true;
    }

    /**
     * Check if $user can view Vaga
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Vaga $vaga
     * @return bool
     */
    public function canView(IdentityInterface $user, Vaga $vaga)
    {
        return true;
    }
    
    /**
     * Check if $user can view Vaga
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Vaga $vaga
     * @return bool
     */
    public function canVagaexibir(IdentityInterface $user, Vaga $vaga)
    {
        return true;
        
    }
    public function canVermais(IdentityInterface $user, Vaga $vaga)
    {
        return true;
    }
    
    
    public function isAuthor(IdentityInterface $user, Vaga $vaga)
    {
        return $vaga->user_id === $user->getIdentifier();
    }
}
