<?php

namespace App\Controller\Admin;

use App\Entity\Chamber;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ChamberCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Chamber::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new(propertyName: 'name'),
            TextEditorField::new('description'),
            MoneyField::new(propertyName: 'price')->setCurrency(currencyCode: 'EUR')

        ];
    }

}