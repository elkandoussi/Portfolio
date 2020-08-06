<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\File;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ProjectRepository")
 * @Vich\Uploadable
 */
class Project
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
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     * @var string
     */
    private $image;
    
    /**
     * @Vich\UploadableField(mapping="project_images", fileNameProperty="image")
     * @var File
     */
    private $imageFile;
    
    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime
     */
    private $updatedAt;


    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adressURL;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $createdAt;

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

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getAdressURL(): ?string
    {
        return $this->adressURL;
    }

    public function setAdressURL(?string $adressURL): self
    {
        $this->adressURL = $adressURL;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function setImageFile(File $image = null){
        $this->imageFile = $image;

        //Il est nécessaire qu’au moins un champ change si vous utilisez Doctrine.
        //sinon, les écouteurs d'événements ne seront pas appelés et le fichier sera perdu.
        if($image){
            $this->updatedAt = new \DateTime('now');
        }
    }

    public function getImageFile(): ?File 
    {
        return $this->imageFile;
    }

    public function setImage($image){
        $this->image = $image;
    }

    public function getImage(): ?string 
    {
        return $this->image;
    }

   
}
