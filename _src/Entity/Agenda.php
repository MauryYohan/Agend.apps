<?php

namespace App\Entity;

class Agenda {
    private ?int $id;
    private ?string $title;
    private ?string $details;
    private ?string $date;
    private ?bool $important;

    /**
     * @return int|null
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @param int|null $id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * @return string|null
     */
    public function getTitle(): ?string
    {
        return $this->title;
    }

    /**
     * @param string|null $title
     */
    public function setTitle(?string $title): void
    {
        $this->title = $title;
    }

    /**
     * @return string|null
     */
    public function getDetails(): ?string
    {
        return $this->details;
    }

    /**
     * @param string|null $details
     */
    public function setDetails(?string $details): void
    {
        $this->details = $details;
    }

    /**
     * @return string|null
     */
    public function getDate(): ?string
    {
        return $this->date;
    }

    /**
     * @param string|null
     */
    public function setDate(?string $date): void
    {
        # $d = date_format($date, "Y/m/d H:i:s");
        $this->date = $date;
    }

    /**
     * @return bool|null
     */
    public function getImportant(): ?bool
    {
        return $this->important;
    }

    /**
     * @param bool|null $important
     */
    public function setImportant(?bool $important): void
    {
        $this->important = $important;
    }


}