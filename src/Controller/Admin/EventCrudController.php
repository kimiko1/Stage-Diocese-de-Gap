<?php

namespace App\Controller\Admin;

use App\Entity\Event;
use DateTimeImmutable;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;

class EventCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Event::class;
    }


    public function configureFields(string $pageName): iterable
    {
        // Il on essaye de modifier un évènement déjà existant
        if ($pageName == 'edit') {
            // On retourne
            return [
                // Le nom de l'évènement
                TextField::new('name'),
                // L'image de l'évènement
                TextField::new('img'),
                // Les citations associées sans pouvoir les modifiers
                AssociationField::new('quotes')
                    ->setDisabled(),
                // Les piliers associés sans pouvoir les modifiers
                AssociationField::new('pillars')
                    ->setDisabled(),
                // La date de début de l'évènement
                DateField::new('startDate'),
                // La date de fin de l'évènement
                DateField::new('endDate'),
            ];
            // Sinon si on créer un nouvel évènement
        }elseif ($pageName == 'new'){
            // On retourne
            return [
                // Le nom de l'évènement
                TextField::new('name'),
                // L'image de l'évènement 
                TextField::new('img'),
                // La date de début de l'évènement
                DateField::new('startDate'),
                // La date de fin de l'évènement
                DateField::new('endDate'),
            ];
            // Sinon on n'est pas entrain de modifier un évènement déjà existant ou que l'on en créer pas de nouveau
        }else
        // On retourne
        return [
            // Le nom de l'évènement
            TextField::new('name'),
            // L'image de l'évènement
            TextField::new('img'),
            // Les citations associées à l'évènement
            AssociationField::new('quotes'),
            // Les piliers associés à l'évènement
            AssociationField::new('pillars'),
            // La date de début de l'évènement
            DateField::new('startDate'),
            // La date de fin de l'évènement
            DateField::new('endDate'),
        ];
    }
}
