<?php

namespace Oneup\AclBundle\Annotation;

/**
 * @Annotation
 * @Target({"ANNOTATION"})
 */
class ClassPermissions
{
    protected $roles;

    public function __construct($roles)
    {
        $roles = array_key_exists('value', $roles) ? $roles['value'] : $roles;
        $this->setRoles($roles);
    }

    public function setRoles($roles)
    {
        $this->roles = is_array($roles) ? $roles : array($roles);
    }

    public function getRoles()
    {
        return $this->roles;
    }
}
