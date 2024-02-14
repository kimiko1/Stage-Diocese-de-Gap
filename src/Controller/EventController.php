<?php

namespace App\Controller;

use App\Entity\Content;
use App\Entity\Event;
use App\Entity\Pillars;
use App\Entity\Quotes;
use DateTime;
use Doctrine\Persistence\ManagerRegistry;
use SebastianBergmann\Environment\Console;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Bundle\TwigBundle\DependencyInjection\TwigExtension;
use Symfony\Component\Form\Extension\Core\DataTransformer\DateTimeToArrayTransformer;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class EventController extends AbstractController
{
    #[Route('/', name: 'app_event')]
    public function index(ManagerRegistry $doctrine): Response
    {
        // On récupère tous les évènements
        $allEvents = $doctrine->getRepository(Event::class)->findAll();

        // On récupère toute les citations
        $allQuotes = $doctrine->getRepository(Quotes::class)->findAll();

        // On récupère tous les piliers
        $allPillars = $doctrine->getRepository(Pillars::class)->findAll();

        // On récupère tous les contenues
        $allContent = $doctrine->getRepository(Content::class)->findAll();


        // Nouvelle instance d'Event
        $event = new Event();
        // On crée un tableau des contenues vide
        $contents = [];
        // On crée un tableau des citations vide
        $quotes = [];
        // Pour chaque évènement dans la varibles contenant tous les évènements
        foreach ($allEvents as $Event) {
            // Si la date de départ de l'évènement est inférieur ou égale à la date actuelle et que la date actuelle est inférieur ou égale à la date de fin de l'évènement
            if ($Event->getStartDate()->format("Y-m-d") <= date("Y-m-d") && date("Y-m-d") <= $Event->getEndDate()->format("Y-m-d")) {
                // On récupère l'évènement et on la stocke dans $event
                $event = $Event;
                // Pour chaque piliers dans la variable contenant tous les piliers
                foreach ($allPillars as $pillar){
                    // Pour chaque contenu dans la variable contenant tous les contenues
                    foreach ($allContent as $content) {
                        // Si le nom du pilier stocker dans le contenu est égale au nom du pilier
                        if($content->getName() == $pillar->getName()){
                            // On ajoute le contenu dans le tableaux $contents
                            $contents[] = $content;
                        }
                    }
                }
                break;
            }
        }

        // Pour chaque citation dans la variable contenant toute les citations
        foreach ($allQuotes as $Quotes) {
            // Pour chaque citations présents dans l'évènement
            foreach ($event->getQuotes() as $quote){
                // Si la citation présente dans l'évènement est égale à la citation trouvée
                if($quote == $Quotes){
                    // On ajoute la citation dans le tableau des citations
                    $quotes[] = $Quotes;
                }
            }
        }

        // On retourne à la vue
        return $this->render('event/index.html.twig', [
            // Le nom du controlleur
            'controller_name' => 'EventController',
            // L'évènement actuelle
            'event' => $event,
            // Les citations trouvées
            'quotes' => $quotes,
            // Les contenues trouvés
            'content' => $contents,
            // Les piliers trouvés
            'pillars' => $allPillars
        ]);
    }
}
