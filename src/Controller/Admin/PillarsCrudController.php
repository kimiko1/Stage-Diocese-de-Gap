<?php

namespace App\Controller\Admin;

use App\Entity\Pillars;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class PillarsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Pillars::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        // On retourne
        return [
            // Le nom du pilier
            TextField::new('name'),
            // L'icon du pilier
            TextField::new('icon'),
            // Le texte du pilier
            TextField::new('text'),
            // La date de commencement du pilier
            DateField::new('startDate'),
            // Le contenu associé au pilier
            AssociationField::new('content'),
            // L'évènement associé au pilier
            AssociationField::new('event'),
        ];

    }
    
}
