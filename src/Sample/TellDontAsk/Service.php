<?php

namespace App\Sample\TellDontAsk;

use Doctrine\ORM\EntityManagerInterface;

class Service
{
    private EntityManagerInterface $entityManager;

    private UserRepository $userRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        UserRepository $userRepository
    ) {
        $this->entityManager = $entityManager;
        $this->userRepository = $userRepository;
    }

    public function doSomething()
    {
        // ...

        $user = $this->userRepository->find(1);


        $walletCredit = $user->getWalletCredit();

        $walletCredit += 100;

        $user->setWalletCredit($walletCredit);


        $this->entityManager->persist($user);
    }
}