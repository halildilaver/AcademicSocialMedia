<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\UserRepository")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $roles;

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Location;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $School;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Department;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $website;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $info;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $skills;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $phone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fax;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $email2;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $workarea;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $titleandtasks;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $edulis;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $edumaster;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $edudoc;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $thesismaster;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $thesisdoc;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $roomno;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $notification;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles= explode(',',$this->roles);
        return array_unique($roles);
    }

    public function setRoles(string $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getPassword(): string
    {
        return (string) $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = password_hash($password,PASSWORD_BCRYPT);

        return $this;
    }

    /**
     * @see UserInterface
     */
    public function getSalt()
    {
        // not needed when using the "bcrypt" algorithm in security.yaml
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->Location;
    }

    public function setLocation(?string $Location): self
    {
        $this->Location = $Location;

        return $this;
    }

    public function getSchool(): ?string
    {
        return $this->School;
    }

    public function setSchool(?string $School): self
    {
        $this->School = $School;

        return $this;
    }

    public function getDepartment(): ?string
    {
        return $this->Department;
    }

    public function setDepartment(?string $Department): self
    {
        $this->Department = $Department;

        return $this;
    }

    public function getWebsite(): ?string
    {
        return $this->website;
    }

    public function setWebsite(?string $website): self
    {
        $this->website = $website;

        return $this;
    }

    public function getInfo(): ?string
    {
        return $this->info;
    }

    public function setInfo(?string $info): self
    {
        $this->info = $info;

        return $this;
    }

    public function getSkills(): ?string
    {
        return $this->skills;
    }

    public function setSkills(?string $skills): self
    {
        $this->skills = $skills;

        return $this;
    }

    public function getPhone(): ?string
    {
        return $this->phone;
    }

    public function setPhone(?string $phone): self
    {
        $this->phone = $phone;

        return $this;
    }

    public function getFax(): ?string
    {
        return $this->fax;
    }

    public function setFax(?string $fax): self
    {
        $this->fax = $fax;

        return $this;
    }

    public function getEmail2(): ?string
    {
        return $this->email2;
    }

    public function setEmail2(?string $email2): self
    {
        $this->email2 = $email2;

        return $this;
    }

    public function getWorkarea(): ?string
    {
        return $this->workarea;
    }

    public function setWorkarea(?string $workarea): self
    {
        $this->workarea = $workarea;

        return $this;
    }

    public function getTitleandtasks(): ?string
    {
        return $this->titleandtasks;
    }

    public function setTitleandtasks(?string $titleandtasks): self
    {
        $this->titleandtasks = $titleandtasks;

        return $this;
    }

    public function getEdulis(): ?string
    {
        return $this->edulis;
    }

    public function setEdulis(?string $edulis): self
    {
        $this->edulis = $edulis;

        return $this;
    }

    public function getEdumaster(): ?string
    {
        return $this->edumaster;
    }

    public function setEdumaster(?string $edumaster): self
    {
        $this->edumaster = $edumaster;

        return $this;
    }

    public function getEdudoc(): ?string
    {
        return $this->edudoc;
    }

    public function setEdudoc(?string $edudoc): self
    {
        $this->edudoc = $edudoc;

        return $this;
    }

    public function getThesismaster(): ?string
    {
        return $this->thesismaster;
    }

    public function setThesismaster(?string $thesismaster): self
    {
        $this->thesismaster = $thesismaster;

        return $this;
    }

    public function getThesisdoc(): ?string
    {
        return $this->thesisdoc;
    }

    public function setThesisdoc(?string $thesisdoc): self
    {
        $this->thesisdoc = $thesisdoc;

        return $this;
    }

    public function getRoomno(): ?string
    {
        return $this->roomno;
    }

    public function setRoomno(?string $roomno): self
    {
        $this->roomno = $roomno;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getNotification(): ?int
    {
        return $this->notification;
    }

    public function setNotification(?int $notification): self
    {
        $this->notification = $notification;

        return $this;
    }
}
