<?php
declare(strict_types=1);

namespace App\Policy;

use App\Model\Entity\Articles;
use Authorization\IdentityInterface;

/**
 * Articles policy
 */
class ArticlePolicy
{
   
    public function canAdd(IdentityInterface $user, Article $article)
    {
        // All logged in users can create articles.
        return true;
        
    }

    public function canEdit(IdentityInterface $user, Article $article)
    {
        // logged in users can edit their own articles.
        return true;
    }

    public function canDelete(IdentityInterface $user, Article $article)
    {
        // logged in users can delete their own articles.
        return true;
    }

    protected function isAuthor(IdentityInterface $user, Article $article)
    {
        return true;
    }
   
}
