<?php

namespace App\Controller\Admin;

use App\Entity\Content;
use App\Entity\Event;
use App\Entity\Home;
use App\Entity\Pillars;
use App\Entity\Quotes;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        // return parent::index();

        // Option 1. You can make your dashboard redirect to some common page of your backend
        //
        // $adminUrlGenerator = $this->container->get(AdminUrlGenerator::class);
        // return $this->redirect($adminUrlGenerator->setController(OneOfYourCrudController::class)->generateUrl());

        // Option 2. You can make your dashboard redirect to different pages depending on the user
        //
        // if ('jane' === $this->getUser()->getUsername()) {
        //     return $this->redirect('...');
        // }

        // Option 3. You can render some custom template to display a proper dashboard with widgets, etc.
        // (tip: it's easier if your template extends from @EasyAdmin/page/content.html.twig)
        //
        // return $this->render('some/path/my-dashboard.html.twig');
        return $this->render('admin/index.html.twig');
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Stage Diocese De Gap');
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');
        // Le crud des évènements
        yield MenuItem::linkToCrud('Event', 'fas fa-home', Event::class);
        // Le crud des citations
        yield MenuItem::linkToCrud('Quotes', 'fas fa-home', Quotes::class);
        // Le crud des piliers
        yield MenuItem::linkToCrud('Pillars', 'fas fa-home', Pillars::class);
        // Le crud des contenues
        yield MenuItem::linkToCrud('Content', 'fas fa-home', Content::class);
        // Pour pouvoir ajouté un crud supplémentaire : yield MenuItem::linkToCrud('The Label', 'fas fa-list', EntityClass::class);
    }
}
