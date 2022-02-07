<?php

namespace Bildvitta\IssCredito\Resources\Programmatic;

use Bildvitta\IssCredito\Contract\ResourceContract;

class Process extends ProgrammaticResource implements ResourceContract
{
    public const ENDPOINT_PREFIX = '/programmatic/registration-analysis';

    /**
     * @inheritDoc
     */
    public function search(array $query = [])
    {
        // TODO: Implement search() method.
    }

    /**
     * @inheritDoc
     */
    public function find(string $uuid)
    {
        return $this->issCredito->request->get(vsprintf(self::ENDPOINT_FIND_BY_UUID, [$uuid]))->throw()->object();
    }

    /**
     * @inheritDoc
     */
    public function create(array $data = [])
    {
        return $this->issCredito->request->post(self::ENDPOINT_PREFIX, $data)->throw()->object();
    }

    /**
     * @inheritDoc
     */
    public function update(string $uuid, array $data = [])
    {
        // TODO: Implement update() method.
    }

    /**
     * @inheritDoc
     */
    public function delete(string $uuid)
    {
        // TODO: Implement delete() method.
    }
}
