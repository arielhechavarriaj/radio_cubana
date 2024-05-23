<?php

namespace App\Entity;

use App\Repository\RadioRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RadioRepository::class)]
class Radio
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $audioUrl = null;

    #[ORM\Column(length: 255)]
    private ?string $category = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $lastDatePlaying = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $urlWebSite = null;

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAudioUrl(): ?string
    {
        return $this->audioUrl;
    }

    public function setAudioUrl(?string $audioUrl): void
    {
        $this->audioUrl = $audioUrl;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(?string $category): void
    {
        $this->category = $category;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    public function getLastDatePlaying(): ?string
    {
        return $this->lastDatePlaying;
    }

    public function setLastDatePlaying(?string $lastDatePlaying): void
    {
        $this->lastDatePlaying = $lastDatePlaying;
    }

    public function getUrlWebSite(): ?string
    {
        return $this->urlWebSite;
    }

    public function setUrlWebSite(?string $urlWebSite): void
    {
        $this->urlWebSite = $urlWebSite;
    }


}
