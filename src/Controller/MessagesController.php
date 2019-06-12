<?php

namespace App\Controller;

use App\Entity\Messages;
use App\Form\MessagesType;
use App\Repository\FollowRepository;
use App\Repository\MessagesRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/messages")
 */
class MessagesController extends AbstractController
{
    /**
     * @Route("/", name="messages_index", methods={"GET"})
     */
    public function index(MessagesRepository $messagesRepository,FollowRepository $followRepository,UserRepository $userRepository): Response
    {
        $userid=$this->getUser()->getID();
        $userlist=$followRepository-> findBy( array('userid' => $userid) ); // TAKIP ETTIGI SAYISI

        $userl = array();

        for ($i = 0; $i < count($userlist); $i++) {
            $followidlist[$i]=$userlist[$i]->getFollowid();

            $emm = $this->getDoctrine()->getManager();
            $sqll = 'SELECT * FROM user WHERE id = :id ORDER BY ID DESC LIMIT 3';
            $statementt = $emm->getConnection()->prepare($sqll);
            $statementt-> bindValue('id', $followidlist[$i]);
            $statementt->execute();
            $userl[$i] = $statementt->fetchAll();
            //$messagelist[$i]= $messagesRepository->findBy( array('senderid' => $userid, 'receiverid' => $followidlist[$i]));

        }

        return $this->render('messages/index.html.twig', [
            'muser' => $userl,
        ]);
    }

    /**
     * @Route("/{id}", name="messages_user", methods={"GET"})
     */
    public function messagesend($id,MessagesRepository $messagesRepository,FollowRepository $followRepository): Response
    {
        $userid=$this->getUser()->getID();
        $userlist=$followRepository-> findBy( array('userid' => $userid) ); // TAKIP ETTIGI SAYISI


        for ($i = 0; $i < count($userlist); $i++) {
            $followidlist[$i]=$userlist[$i]->getFollowid();

            $emm = $this->getDoctrine()->getManager();
            $sqll = 'SELECT * FROM user WHERE id = :id ORDER BY ID';
            $statementt = $emm->getConnection()->prepare($sqll);
            $statementt-> bindValue('id', $followidlist[$i]);
            $statementt->execute();
            $userl[$i] = $statementt->fetchAll();
            //$messagelist[$i]= $messagesRepository->findBy( array('senderid' => $userid, 'receiverid' => $followidlist[$i]));

        }

        $sended= $messagesRepository->findBy( array('senderid' => $userid, 'receiverid' => $id));
        $received= $messagesRepository->findBy( array('receiverid' => $userid, 'senderid' => $id));

        for ($i = 0; $i < count($received); $i++) {
            $sended[count($sended)+$i]= $received[$i];
        }

        sort($sended);


        return $this->render('messages/show.html.twig', [
            'message' => $sended,
            'muser' => $userl,
            'receiverid' => $id,
        ]);
    }

    /**
     * @Route("/new", name="messages_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $message = new Messages();
        $form = $this->createForm(MessagesType::class, $message);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($message);
            $id=$message->getReceiverid();
            $entityManager->flush();

            return $this->redirectToRoute('messages_user', [
                'id' => $id,
            ]);
        }

        return $this->render('messages/new.html.twig', [
            'message' => $message,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/{id}/edit", name="messages_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Messages $message): Response
    {
        $form = $this->createForm(MessagesType::class, $message);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('messages_index', [
                'id' => $message->getId(),
            ]);
        }

        return $this->render('messages/edit.html.twig', [
            'message' => $message,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="messages_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Messages $message): Response
    {
        if ($this->isCsrfTokenValid('delete'.$message->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($message);
            $entityManager->flush();
        }

        return $this->redirectToRoute('messages_index');
    }
}
