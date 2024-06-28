<?php
use Doctrine\ORM\Mapping as ORM;


#[ORM\Entity]
#[ORM\Table(name: "categories")]
class Category {
    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    #[ORM\GeneratedValue]
    private int|null $id = null;
    #[ORM\Column(type: "string")]
    private $name;
    #[ORM\OneToMany(targetEntity: Topic::class, mappedBy: "topics")]
    private $topics;

    public function __construct(string $name, int $topic_id)
    {
        $this->name = $name;
        $this->id = $topic_id;
    }

    public function getId(): ?int
    {
        return $this->id;
    }
    public function getName(): string
    {
        return $this->name;
    }
}
