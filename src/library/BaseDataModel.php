<?php

namespace library;

class BaseDataModel implements DataModelInterface
{
    public function create(array $data)
    {
        return false;
    }
    
    public function read(array $conditions)
    {
        return [];
    }
    
    public function update(array $conditions, array $data)
    {
        return false;
    }
    
    public function delete(array $conditions)
    {
        return false;
    }
}
