<?php

class Content {
    protected $title;
    protected $text;

    public function __construct($title, $text) {
        $this->title = $title;
        $this->text = $text;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getText() {
        return $this->text;
    }
}

class Article extends Content {
    protected $isBreakingNews;

    public function __construct($title, $text, $isBreakingNews = false) {
        parent::__construct($title, $text);
        $this->isBreakingNews = $isBreakingNews;
    }

    public function getTitle() {
        $modifiedTitle = $this->title;
        if ($this->isBreakingNews) {
            $modifiedTitle = "BREAKING: " . $modifiedTitle;
        }
        return $modifiedTitle;
    }
}

class Ad extends Content {
    public function getTitle() {
        return strtoupper($this->title);
    }
}

class Vacancy extends Content {
    public function getTitle() {
        return $this->title . " - apply now!";
    }
}

$contents = [
    new Article("Article 1", "Text for Article 1"),
    new Article("Article 2", "Text for Article 2", true),
    new Ad("Ad 1", "Text for Ad 1"),
    new Vacancy("Vacancy 1", "Text for Vacancy 1")
];

foreach ($contents as $content) {
    echo "<h2>" . $content->getTitle() . "</h2>";
    echo "<p>" . $content->getText() . "</p>";
    echo "<br>";
}
?>