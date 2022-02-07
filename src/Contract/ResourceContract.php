<?php

namespace Bildvitta\IssCredito\Contract;

use Illuminate\Http\Client\RequestException;

interface ResourceContract
{
    /**
     * @param array $query
     * @return mixed
     *
     * @throws RequestException
     */
    public function search(array $query = []);

    /**
     * @param string $uuid
     * @return mixed
     *
     * @throws RequestException
     */
    public function find(string $uuid);

    /**
     * @param array $data
     * @return mixed
     *
     * @throws RequestException
     */
    public function create(array $data = []);

    /**
     * @param string $uuid
     * @param array $data
     * @return mixed
     *
     * @throws RequestException
     */
    public function update(string $uuid, array $data = []);

    /**
     * @param string $uuid
     * @return mixed
     *
     * @throws RequestException
     */
    public function delete(string $uuid);
}
