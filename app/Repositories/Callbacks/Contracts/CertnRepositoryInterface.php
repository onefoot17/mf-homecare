<?php

namespace App\Repositories\Callbacks\Contracts;

interface CertnRepositoryInterface
{
    public function store($request);
    public function show($id);
    public function update($request, $id);
    public function destroy($id);
    public function getAll();
}