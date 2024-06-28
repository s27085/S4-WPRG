<?php
    use Doctrine\ORM\Mapping as ORM;

    #[ORM\Entity]
    #[ORM\Table(name: "users")]
    class User{
        #[ORM\Id]
        #[ORM\Column(type: 'integer')]
        #[ORM\GeneratedValue]
        private int|null $id = null;
        #[ORM\Column(type: 'string')]
        private $login = "";
        #[ORM\Column(type: 'string')]
        private $password = "";

        #[ORM\OneToMany(targetEntity: Comment::class, mappedBy: "comments")]
        private $comments;
    }