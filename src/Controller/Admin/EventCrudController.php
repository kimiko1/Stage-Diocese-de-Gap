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
        if ($pageName == 'edit') {
            return [
                TextField::new('name'),
                TextField::new('img'),
                AssociationField::new('quotes')
                    ->setDisabled(),
                AssociationField::new('pillars')
                    ->setDisabled(),
                DateField::new('startDate'),
                DateField::new('endDate'),
            ];
        }elseif ($pageName == 'new'){
            return [
                TextField::new('name'),
                TextField::new('img'),
                DateField::new('startDate'),
                DateField::new('endDate'),
            ];
        }else
        return [
            TextField::new('name'),
            TextField::new('img'),
            AssociationField::new('quotes'),
            AssociationField::new('pillars'),
            DateField::new('startDate'),
            DateField::new('endDate'),
        ];
    }
}
