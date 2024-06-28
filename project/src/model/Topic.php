<?php
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity]
#[ORM\Table(name: "topics")]
class Topic {
    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    #[ORM\GeneratedValue]
    private int|null $id = null;
    #[ORM\Column(type: "string")]
    private $name;
    #[ORM\Column(type: "string")]
    private $content;

    #[ORM\ManyToOne(targetEntity: Category::class, inversedBy: "category")]
    private $category;
    #[ORM\ManyToOne(targetEntity: User::class)]
    private ?User $author;
    #[ORM\Column(type: "datetime")]
    private $created_at;
    #[ORM\Column(type: "datetime")]
    private $updated_at;
    #[ORM\PrePersist]
    public function setCreatedAtValue(): void
    {
        $this->created_at = new DateTime();
    }
    #[ORM\PreUpdate]
    public function setUpdatedAtValue(): void
    {
        $this->updated_at = new DateTime();
    }
}