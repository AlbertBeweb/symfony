<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Cocur\Slugify\Slugify;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AboutRepository")
 */
class About
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
     * @ORM\Column(type="string", length=255)
     */
    private $subtitle;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $signature;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $creat_at;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $about_heading;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mt_about;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $mk_about;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $md_about;

    public function __construct()
    {
        $this->creat_at = new \DateTime();
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

    public function getSlug()
    {
        return (new Slugify())->slugify($this->title);
    }

    public function getSubTitle(): ?string
    {
        return $this->subtitle;
    }

    public function setSubTitle(string $subtitle): self
    {
        $this->subtitle = $subtitle;

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

    public function getSignature(): ?string
    {
        return $this->signature;
    }

    public function setSignature(string $signature): self
    {
        $this->signature = $signature;

        return $this;
    }

    public function getCreatAt(): ?\DateTimeInterface
    {
        return $this->creat_at;
    }

    public function setCreatAt(?\DateTimeInterface $creat_at): self
    {
        $this->creat_at = $creat_at;

        return $this;
    }

    public function getAboutHeading(): ?string
    {
        return $this->about_heading;
    }

    public function setAboutHeading(string $about_heading): self
    {
        $this->about_heading = $about_heading;

        return $this;
    }

    public function getMtAbout(): ?string
    {
        return $this->mt_about;
    }

    public function setMtAbout(string $mt_about): self
    {
        $this->mt_about = $mt_about;

        return $this;
    }

    public function getMkAbout(): ?string
    {
        return $this->mk_about;
    }

    public function setMkAbout(string $mk_about): self
    {
        $this->mk_about = $mk_about;

        return $this;
    }

    public function getMdAbout(): ?string
    {
        return $this->md_about;
    }

    public function setMdAbout(string $md_about): self
    {
        $this->md_about = $md_about;

        return $this;
    }
}
