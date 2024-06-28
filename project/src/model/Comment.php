<?php
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity]
#[ORM\Table(name: "comments")]
class Comment {
    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    #[ORM\GeneratedValue]
    private int|null $id = null;
    #[ORM\Column(type: "string")]
    private $content;
    #[ORM\ManyToOne(targetEntity: Topic::class)]
    private ?Topic $topic;
    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: "user")]
    private $user;
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