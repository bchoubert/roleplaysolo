<?php

namespace RolePlaySolo\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class PanierType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
    }

    public function getName()
    {
        return 'panier';
    }
}