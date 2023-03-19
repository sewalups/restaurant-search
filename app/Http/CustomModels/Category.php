<?php

namespace App\Http\CustomModels;

class Category
{
    private string $title;
    private string $alias;

    /**
     * @param string $title
     * @param string $alias
     */
    public function __construct(string $title, string $alias)
    {
        $this->title = $title;
        $this->alias = $alias;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getAlias(): string
    {
        return $this->alias;
    }


    public function toObject(): array
    {
        return get_object_vars($this);
    }


}
