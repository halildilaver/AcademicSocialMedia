<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\QuestionsRepository")
 */
class Questions
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $askname;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $askphoto;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $answername;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $answerphoto;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $question;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $answer;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $status;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $rid;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $ruid;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $rname;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $askid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAskname(): ?string
    {
        return $this->askname;
    }

    public function setAskname(?string $askname): self
    {
        $this->askname = $askname;

        return $this;
    }

    public function getAskphoto(): ?string
    {
        return $this->askphoto;
    }

    public function setAskphoto(?string $askphoto): self
    {
        $this->askphoto = $askphoto;

        return $this;
    }

    public function getAnswername(): ?string
    {
        return $this->answername;
    }

    public function setAnswername(?string $answername): self
    {
        $this->answername = $answername;

        return $this;
    }

    public function getAnswerphoto(): ?string
    {
        return $this->answerphoto;
    }

    public function setAnswerphoto(?string $answerphoto): self
    {
        $this->answerphoto = $answerphoto;

        return $this;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(?string $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function getAnswer(): ?string
    {
        return $this->answer;
    }

    public function setAnswer(?string $answer): self
    {
        $this->answer = $answer;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getRid(): ?int
    {
        return $this->rid;
    }

    public function setRid(?int $rid): self
    {
        $this->rid = $rid;

        return $this;
    }

    public function getRuid(): ?int
    {
        return $this->ruid;
    }

    public function setRuid(?int $ruid): self
    {
        $this->ruid = $ruid;

        return $this;
    }

    public function getRname(): ?string
    {
        return $this->rname;
    }

    public function setRname(?string $rname): self
    {
        $this->rname = $rname;

        return $this;
    }

    public function getAskid(): ?int
    {
        return $this->askid;
    }

    public function setAskid(?int $askid): self
    {
        $this->askid = $askid;

        return $this;
    }
}
