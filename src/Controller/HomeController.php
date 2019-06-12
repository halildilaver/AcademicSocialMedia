<?php

namespace App\Controller;

use App\Repository\FollowRepository;
use App\Repository\QuestionsRepository;
use App\Repository\ResearchRepository;
use App\Repository\UserinfoRepository;
use App\Entity\User;
use App\Form\UserType;
use App\Repository\UserRepository;
use phpDocumentor\Reflection\Types\Integer;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;


class HomeController extends AbstractController
{
    /**
     * @Route("/", name="firstpage")
     */
    public function firstpage(AuthenticationUtils $authenticationUtils)
    {
        if($authenticationUtils->getLastUsername()){
            return $this->redirectToRoute('home');
        }
        else
        {
            return $this->render('firstpage.html.twig');
        }
    }

    /**
     * @Route("/home", name="home")
     */
    public function index(AuthenticationUtils $authenticationUtils,FollowRepository $followRepository,UserRepository $userRepository)
    {

        $research = array();
        $emm = $this->getDoctrine()->getManager();
        $sqll = 'SELECT * FROM user ORDER BY RAND() DESC LIMIT 4';
        $statementt = $emm->getConnection()->prepare($sqll);
        $statementt->execute();
        $suggestion = $statementt->fetchAll();


        $followidlist = array();

        $user=$this->getUser();
        $userid=$this->getUser()->getID();

        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();
        $followc=$followRepository-> findBy( array('followid' => $userid) ); // TAKIPCI SAYISI
        $followd=$followRepository-> findBy( array('userid' => $userid) ); // TAKIP ETTIGI SAYISI

        for ($i = 0; $i < count($followd); $i++) {
            $followidlist[$i]=$followd[$i]->getFollowid();

            $questionem= $this->getDoctrine()->getManager();
            $sqlconnect = 'SELECT * FROM research WHERE userid = :userid ORDER BY ID';
            $statementqu = $questionem->getConnection()->prepare($sqlconnect);
            $statementqu-> bindValue('userid', $followidlist[$i]);
            $statementqu->execute();
            $research[$i] = $statementqu->fetchAll();

        }

        $em = $this->getDoctrine()->getManager();
        $sql = "SELECT * FROM questions WHERE status='New' and ruid=:ruid ";
        $statement = $em->getConnection()->prepare($sql);
        $statement-> bindValue('ruid', $userid);
        $statement->execute();
        $notification = $statement->fetchAll();

        $em2=$this->getDoctrine()->getManager();
        $sql2="UPDATE user SET notification=:notification WHERE id=:id";
        $statement2=$em2->getConnection()->prepare($sql2);
        $statement2->bindValue('notification', count($notification));
        $statement2->bindValue('id', $userid);
        $statement2->execute();



        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'followc' => count($followc),
            'followd' => count($followd),
            'research' => $research,
            'notification' => count($notification),
            'user' => $user,
            'suggestion' => $suggestion,
            'last_username' => $lastUsername,
            'error' => $error,
        ]);
    }


    /**
     * @Route("/newuser", name="new_user", methods={"GET","POST"})
     */
    public function newuser(Request $request, UserRepository $userRepository): Response
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user);
        $form->handleRequest($request);

        $submittedToken = $request->request->get('token');
        if($form->isSubmitted()) {
            if ($this->isCsrfTokenValid('user-form', $submittedToken)) {


                $entityManager = $this->getDoctrine()->getManager();
                $user->setRoles("ROLE_USER");
                $entityManager->persist($user);
                $entityManager->flush();

                return $this->redirectToRoute('app_login');
            }
        }

        return $this->render('home/newuser.html.twig', [
            'user' => $user,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/search/", name="search", methods={"GET","POST"})
     */
    public function search(Request $request):Response
    {
        $search=$request->request->get('search');

        $key='%'. $search.'%';

        $em = $this->getDoctrine()->getManager();
        $sql = "SELECT * FROM user WHERE name like :sea ";
        $statement = $em->getConnection()->prepare($sql);
        $statement-> bindValue('sea', $key);
        $statement->execute();
        $searchuser = $statement->fetchAll();

        $em2 = $this->getDoctrine()->getManager();
        $sql2 = "SELECT * FROM research WHERE title like :rsea ";
        $statement2 = $em2->getConnection()->prepare($sql2);
        $statement2-> bindValue('rsea', $key);
        $statement2->execute();
        $searchre = $statement2->fetchAll();


        return $this->render('home/search.html.twig', [
            'search' => $searchuser,
            'searchre' => $searchre,
        ]);
    }


}
