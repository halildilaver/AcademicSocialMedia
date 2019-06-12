<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MessagesRepository")
 */
class Messages
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $senderid;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $receiverid;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $message;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $time;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sendername;


    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSenderid(): ?int
    {
        return $this->senderid;
    }

    public function setSenderid(?int $senderid): self
    {
        $this->senderid = $senderid;

        return $this;
    }

    public function getReceiverid(): ?int
    {
        return $this->receiverid;
    }

    public function setReceiverid(?int $receiverid): self
    {
        $this->receiverid = $receiverid;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }

    public function getTime(): ?\DateTimeInterface
    {
        return $this->time;
    }

    public function setTime(?\DateTimeInterface $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getSendername(): ?string
    {
        return $this->sendername;
    }

    public function setSendername(?string $sendername): self
    {
        $this->sendername = $sendername;

        return $this;
    }

}
