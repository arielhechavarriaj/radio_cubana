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


    public function getName(): ?string
    {
        return $this->name;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
}
