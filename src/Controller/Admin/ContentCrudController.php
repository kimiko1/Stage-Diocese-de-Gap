<?php

namespace App\Controller\Admin;

use App\Entity\Content;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ContentCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Content::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
        return [
            // Les piliers associés
            AssociationField::new('name','Pillar Name'),
            // La vidéo du contenu
            TextField::new('linkVideo'),
            // Le titre de présentation du contenu 
            TextField::new('presentationTitle'),
            // Le texte de présentation du contenu 
            TextField::new('presentationText'),
            // L'image de la carte du contenu
            TextField::new('cardImg'),
            // La citation de la carte du contenu
            TextField::new('cardQuote'),
            // L'auteur de la carte du contenu
            TextField::new('cardQuoteAuthor'),
        ];
    }
    
}
