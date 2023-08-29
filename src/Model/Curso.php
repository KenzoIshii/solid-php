<?php

namespace Alura\Solid\Model;

class Curso implements Pontuavel, Assistivel
{
    private string $nome;
    private $videos;
    private $feedbacks;

    public function __construct(string $nome)
    {
        $this->nome = $nome;
        $this->videos = [];
        $this->feedbacks = [];
    }

    public function setFeedback(Feedback $feedback): void
    {
        $this->feedbacks[] = $feedback;
    }

    public function adicionarVideo(Video $video)
    {
        if ($video->minutosDeDuracao() < 3) {
            throw new \DomainException('Video muito curto');
        }

        $this->videos[] = $video;
    }

    /** @return Video[] */
    public function getVideos(): array
    {
        return $this->videos;
    }

    public function getPontuacao(): int
    {
        return 100;
    }

    public function assistir() : void
    {
        foreach ($this->getVideos() as $video){
            $video->assistir();
        }
    }
}
