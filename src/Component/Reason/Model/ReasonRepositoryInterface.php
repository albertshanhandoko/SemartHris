<?php

namespace KejawenLab\Application\SemartHris\Component\Reason\Model;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@kejawenlab.com>
 */
interface ReasonRepositoryInterface
{
    /**
     * @param string $id
     *
     * @return ReasonInterface|null
     */
    public function find(string $id): ? ReasonInterface;

    /**
     * @param string $type
     *
     * @return ReasonInterface[]
     */
    public function findByType(string $type): array;
}
