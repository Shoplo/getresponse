<?php

namespace Shoplo\GetResponse\Model;

class BaseCollectionResponse implements \IteratorAggregate
{
    /**
     * @var string
     */
    public $href;

    /**
     * @var integer
     */
    public $count;

    /**
     * @var integer
     */
    public $page;

    /**
     * @var integer
     */
    public $perPage;

    /**
     * @var BaseModelResponse[]
     */
    public $items;

    public function addItem($obj, $key = null)
    {
        if ($key === null) {
            $this->items[] = $obj;
        } else {
            if (isset($this->items[$key])) {
                throw new \Exception("Key $key already in use.");
            }
            $this->items[$key] = $obj;
        }
    }

    public function deleteItem($key)
    {
        if (isset($this->items[$key])) {
            unset($this->items[$key]);
        }
        throw new \Exception("Invalid key $key.");
    }

    public function getItem($key)
    {
        if (isset($this->items[$key])) {
            return $this->items[$key];
        }
        throw new \Exception("Invalid key $key.");
    }

    public function keys()
    {
        return array_keys($this->items);
    }

    public function length()
    {
        return count($this->items);
    }

    public function keyExists($key)
    {
        return isset($this->items[$key]);
    }

    public function getIterator()
    {
        return $this->items;
    }
}
