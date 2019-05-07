<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TaskRepository")
 */
class Task
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $deadline;

    /**
     * @ORM\Column(type="dateinterval", nullable=true)
     */
    private $duration;

    /**
     * @ORM\Column(type="dateinterval", nullable=true)
     */
    private $repetition;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $startDate;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $checked;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Ponderator", inversedBy="tasks", cascade={"persist"})
     */
    private $ponderators;

    public function __construct()
    {
        $this->ponderators = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getDeadline(): ?\DateTimeInterface
    {
        return $this->deadline;
    }

    public function setDeadline(?\DateTimeInterface $deadline): self
    {
        $this->deadline = $deadline;

        return $this;
    }

    public function getDuration(): ?\DateInterval
    {
        return $this->duration;
    }

    public function setDuration(?\DateInterval $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getRepetition(): ?\DateInterval
    {
        return $this->repetition;
    }

    public function setRepetition(?\DateInterval $repetition): self
    {
        $this->repetition = $repetition;

        return $this;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(?\DateTimeInterface $startDate): self
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getChecked(): ?bool
    {
        return $this->checked;
    }

    public function setChecked(bool $checked): self
    {
        $this->checked = $checked;

        return $this;
    }

    /**
     * @return Collection|Ponderator[]
     */
    public function getPonderators(): Collection
    {
        return $this->ponderators;
    }

    public function addPonderator(Ponderator $ponderator): self
    {
        if (!$this->ponderators->contains($ponderator)) {
            $this->ponderators[] = $ponderator;
            $ponderator->addTask($this);
        }

        return $this;
    }

    public function removePonderator(Ponderator $ponderator): self
    {
        if ($this->ponderators->contains($ponderator)) {
            $this->ponderators->removeElement($ponderator);
            $ponderator->removeTask($this);
        }

        return $this;
    }
}
