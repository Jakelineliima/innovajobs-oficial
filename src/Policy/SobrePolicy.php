<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Sobre;
use Authorization\IdentityInterface;

/**
 * Sobre policy
 */
class SobrePolicy
{
    /**
     * Check if $user can add Sobre
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Sobre $sobre
     * @return bool
     */
    public function canAdd(IdentityInterface $user, Sobre $sobre)
    {
    }
    public function canIndex(IdentityInterface $user, Sobre $sobre)
    {
        return true;
    }
    /**
     * Check if $user can edit Sobre
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Sobre $sobre
     * @return bool
     */
    public function canEdit(IdentityInterface $user, Sobre $sobre)
    {
    }

    /**
     * Check if $user can delete Sobre
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Sobre $sobre
     * @return bool
     */
    public function canDelete(IdentityInterface $user, Sobre $sobre)
    {
    }

    /**
     * Check if $user can view Sobre
     *
     * @param \Authorization\IdentityInterface $user The user.
     * @param \App\Model\Entity\Sobre $sobre
     * @return bool
     */
    public function canView(IdentityInterface $user, Sobre $sobre)
    {
    }
}
