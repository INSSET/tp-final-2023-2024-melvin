<?php

namespace UPJV\Validator;

class Password extends AbstractValidator
{
    protected $minLength;

    public function __construct()
    {
        parent::__construct();
        $this->minLength = 8; // Modifier la longueur minimale à 8 caractères
    }

    public function verifie($value)
    {
        // On vérifie que la valeur est une chaîne de caractères et qu'elle a au moins 8 caractères
        return is_string($value) && strlen($value) >= $this->minLength;
    }

    public function getMsgInfo()
    {
        return $this->verifie($this->getData()) ? "" : "Le mot de passe doit contenir au moins 8 caractères.";
    }

    public function ifNoOk($className)
    {
        return $this->verifie($this->getData()) ? '' : $className;
    }
}
