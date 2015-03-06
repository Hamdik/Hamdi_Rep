<?php

// src/Blog/UserBundle/Entity/User.php

namespace Blog\UserBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="users")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    // Note : En cas de declaration d'un utilisateur avec des parametres par defaut

    //public function __construct()
    //{
    //    parent::__construct();
    //    // your own logic
    //}
}
