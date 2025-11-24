<?php

namespace App\Service;

use Symfony\Component\Console\Style\SymfonyStyle;

class FizzbuzzManager
{
    /**
     * Manage numbers from 1 to N
     */
    public function manageNumbers(SymfonyStyle $io, int $argN): void
    {
        for ($i = 1; $i <= $argN; $i++) {
            if ($i % 3 === 0 && $i % 5 === 0) {
                $io->success('FizzBuzz');
            } elseif ($i % 3 === 0) {
                $io->success('Fizz');
            } elseif ($i % 5 === 0) {
                $io->success('Buzz');
            } else {
                $io->note($i);
            }
        }
    }
}