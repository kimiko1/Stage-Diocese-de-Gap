<?php

namespace App\Entity;

use App\Repository\ContentRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ContentRepository::class)]
class Content
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\OneToOne(inversedBy: 'content', cascade: ['persist', 'remove'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?Pillars $name = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $linkVideo = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $presentationTitle = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $presentationText = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cardImg = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cardQuote = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $cardQuoteAuthor = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?Pillars
    {
        return $this->name;
    }

    public function setName(Pillars $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function __toString()
    {
        return $this->name; 
    }

    public function getLinkVideo(): ?string
    {
        return $this->linkVideo;
    }

    public function setLinkVideo(?string $linkVideo): static
    {
        $this->linkVideo = $linkVideo;

        return $this;
    }

    public function getPresentationTitle(): ?string
    {
        return $this->presentationTitle;
    }

    public function setPresentationTitle(?string $presentationTitle): static
    {
        $this->presentationTitle = $presentationTitle;

        return $this;
    }

    public function getPresentationText(): ?string
    {
        return $this->presentationText;
    }

    public function setPresentationText(?string $presentationText): static
    {
        $this->presentationText = $presentationText;

        return $this;
    }

    public function getCardImg(): ?string
    {
        return $this->cardImg;
    }

    public function setCardImg(?string $cardImg): static
    {
        $this->cardImg = $cardImg;

        return $this;
    }

    public function getCardQuote(): ?string
    {
        return $this->cardQuote;
    }

    public function setCardQuote(?string $cardQuote): static
    {
        $this->cardQuote = $cardQuote;

        return $this;
    }

    public function getCardQuoteAuthor(): ?string
    {
        return $this->cardQuoteAuthor;
    }

    public function setCardQuoteAuthor(?string $cardQuoteAuthor): static
    {
        $this->cardQuoteAuthor = $cardQuoteAuthor;

        return $this;
    }
}
