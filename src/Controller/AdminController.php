<?php

namespace App\Controller;

use Doctrine\ORM\EntityManagerInterface;
use App\Repository\DistributedTicketsRepository;
use App\Repository\TicketsRepository;
use App\Repository\GameRepository;
use App\Repository\WinnersRepository;
use App\Repository\UserRepository;
use App\Entity\Winners;
use Symfony\Component\Validator\Constraints\DateTime;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Dompdf\Dompdf;
use Dompdf\Options;

class AdminController extends AbstractController
{

    protected $em;
    protected $distributedTicketsRepository;
    protected $ticketsRepository;
    protected $gameRepository;
    protected $winnersRepository;
    protected $userRepository;

    public function __construct(EntityManagerInterface $em,UserRepository $userRepository, WinnersRepository $winnersRepository, DistributedTicketsRepository $distributedTicketsRepository, TicketsRepository $ticketsRepository, GameRepository $gameRepository){
        $this->em = $em;
        $this->distributedTicketsRepository = $distributedTicketsRepository;
        $this->ticketsRepository = $ticketsRepository;
        $this->gameRepository = $gameRepository;
        $this->winnersRepository = $winnersRepository;
        $this->userRepository = $userRepository;
    }


    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/admin", name="app_admin")
     */
    public function admin(Request $request): Response
    {
        $user = $this->getUser();
        if(!$user){
            return $this->redirectToRoute('app_login', []);  
        }
        $baseUrl = $_ENV['BASE_URL'];
        $tickets = $this->ticketsRepository->findAll();
        $aboutUs = $this->userRepository->findByAboutUs();
        $city = $this->userRepository->findByCity();
        $newsLetterCustomer = $this->userRepository->findBy(['newsletter' => 1]);
        return $this->render('admin/index.html.twig', [
            'baseUrl' => $baseUrl,
            'tickets' => $tickets,
            'aboutUs' =>$aboutUs,
            'cities' =>$city,
            'newsLetterCustomerNB' =>count($newsLetterCustomer),
            'newsLetterCustomers' =>$newsLetterCustomer,
        ]);
    }

    /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/admin/sendNewsletter", name="app_admin_send_newsletter")
     */
    public function sendNewsletter(Request $request): Response
    {
        $newsletterTitle = $request->request->get('newsletterTitle');
        $newsletter = $request->request->get('newsletter');

        return $this->redirectToRoute('app_login');
    }

        /**
     * @IsGranted("ROLE_ADMIN")
     * @Route("/admin/dowloadMails", name="Mails")
     */
    public function dowloadletter()
    {
        
        $users = $this->userRepository->findAll();
        
       
        $html = $this->renderView('admin/list.html.twig', [
            'users' =>$users, ]);
     
            $dompdf = new Dompdf();
            $dompdf->loadHtml($html);
            $dompdf->render();
             
            return new Response (
                $dompdf->stream('resume', ["Attachment" => false]),
                Response::HTTP_OK,
                ['Content-Type' => 'application/pdf']
            );
        
    }



    
}