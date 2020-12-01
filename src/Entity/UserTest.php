<?php

namespace App\Entity;

use App\Repository\UserTestRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=UserTestRepository::class)
 */
class UserTest
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Test::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $test_id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $user_id;

    /**
     * @ORM\ManyToOne(targetEntity=Question::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $question_id;

    /**
     * @ORM\ManyToOne(targetEntity=Answer::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $answer_id;

    /**
     * @ORM\Column(type="date")
     */
    private $date_solved;

    /**
     * @ORM\Column(type="time")
     */
    private $time_spent;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTestId(): ?Test
    {
        return $this->test_id;
    }

    public function setTestId(?Test $test_id): self
    {
        $this->test_id = $test_id;

        return $this;
    }

    public function getUserId(): ?User
    {
        return $this->user_id;
    }

    public function setUserId(?User $user_id): self
    {
        $this->user_id = $user_id;

        return $this;
    }

    public function getQuestionId(): ?Question
    {
        return $this->question_id;
    }

    public function setQuestionId(?Question $question_id): self
    {
        $this->question_id = $question_id;

        return $this;
    }

    public function getAnswerId(): ?Answer
    {
        return $this->answer_id;
    }

    public function setAnswerId(?Answer $answer_id): self
    {
        $this->answer_id = $answer_id;

        return $this;
    }

    public function getDateSolved(): ?\DateTimeInterface
    {
        return $this->date_solved;
    }

    public function setDateSolved(\DateTimeInterface $date_solved): self
    {
        $this->date_solved = $date_solved;

        return $this;
    }

    public function getTimeSpent(): ?\DateTimeInterface
    {
        return $this->time_spent;
    }

    public function setTimeSpent(\DateTimeInterface $time_spent): self
    {
        $this->time_spent = $time_spent;

        return $this;
    }
}
