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
use Symfony\Component\Form\Extension\Core\DataTransformer\DateTimeToArrayTransformer;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class EventController extends AbstractController
{
    #[Route('/', name: 'app_event')]
    public function index(ManagerRegistry $doctrine): Response
    {
        $allEvents = $doctrine->getRepository(Event::class)->findAll();
        $allQuotes = $doctrine->getRepository(Quotes::class)->findAll();
        $allPillars = $doctrine->getRepository(Pillars::class)->findAll();
        $allContent = $doctrine->getRepository(Content::class)->findAll();

    
        $event = new Event();
        $contents = [];
        $quotes = [];
        foreach ($allEvents as $Event) {
            if ($Event->getStartDate()->format("Y-m-d") <= date("Y-m-d") && date("Y-m-d") <= $Event->getEndDate()->format("Y-m-d")) {
                $event = $Event;
                foreach ($allPillars as $pillar){
                    foreach ($allContent as $content) {
                        if($content->getName() == $pillar->getName()){
                            $contents[] = $content;
                        }
                    }
                }
                break;
            }
        }
        foreach ($allQuotes as $Quotes) {
            foreach ($event->getQuotes() as $quote){
                if($quote == $Quotes){
                    $quotes[] = $Quotes;
                }
            }
        }
        return $this->render('event/index.html.twig', [
            'controller_name' => 'EventController',
            'event' => $event,
            'quotes' => $quotes,
            'content' => $contents,
            'pillars' => $allPillars
        ]);
    }
}
