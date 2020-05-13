<?php

namespace App\Entity;

use App\Repository\PostRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PostRepository::class)
 */
class Post
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=1024, nullable=true)
     */
    private $texto;

    /**
     * @ORM\Column(type="blob", nullable=true)
     */
    private $imagenbase64;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getTexto(): ?string
    {
        return $this->texto;
    }

    public function setTexto(?string $texto): self
    {
        $this->texto = $texto;

        return $this;
    }

    public function getImagenbase64()
    {
        return $this->imagenbase64;
    }

    public function setImagenbase64($imagenbase64): self
    {
        $this->imagenbase64 = $imagenbase64;

        return $this;
    }
}
