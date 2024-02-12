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
        return [
            TextField::new('name'),
            TextField::new('icon'),
            TextField::new('text'),
            DateField::new('startDate'),
            AssociationField::new('content'),
            AssociationField::new('event'),
        ];

    }
    
}
