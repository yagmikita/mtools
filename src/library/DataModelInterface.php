<?php

namespace library;

interface DataModelInterface
{
    /**
     * @param array $data
     * @return bool
     */
    public function create(array $data);
    
    /**
     * @param array $conditions
     * @return array
     */
    public function read(array $conditions);
    
    /**
     * @param array $conditions
     * @param array $data
     * @return bool
     */
    public function update(array $conditions, array $data);
    
    /**
     * @param array $conditions
     * @return bool
     */
    public function delete(array $conditions);
}