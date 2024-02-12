<?php

namespace App\Controller\Admin;

use App\Entity\Quotes;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class QuotesCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Quotes::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('nameOfTheEvent'),
            TextField::new('title'),
            TextareaField::new('text'),
            TextField::new('author'),
        ];
    }
    
}
