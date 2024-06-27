<?php
    class User{
        #[ORM\Id]
        #[ORM\Column(type: 'integer')]
        #[ORM\GeneratedValue]
        private int|null $id = null;
        #[ORM\Column(type: 'string')]
        private $login = "";
        #[ORM\Column(type: 'string')]
        private $password = "";
    }