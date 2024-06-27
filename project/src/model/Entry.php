<?php
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "wpisy")]
#[ORM\HasLifecycleCallbacks]
    class Entry {
        #[ORM\Id]
        #[ORM\Column(type: 'integer')]
        #[ORM\GeneratedValue]
        private int|null $id = null;
        #[ORM\Column(type: 'string')]
        private $tresc = "";
        #[ORM\Column(type: 'datetime')]
        private $data;
        #[ORM\ManyToOne(targetEntity: User::class)]
        private ?User $autor;
        #[ORM\PrePersist]
        public function setCreatedAtValue(): void
        {
            $this->data = new DateTime();
        }

}