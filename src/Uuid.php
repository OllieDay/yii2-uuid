<?php
namespace ollieday\uuid;

use Yii;
use yii\base\Component;

/**
* Component for generating UUIDs with ramsey/uuid.
*
* @link https://github.com/ramsey/uuid
* @see \Ramsey\Uuid\Uuid
*/
class Uuid extends Component
{
    /**
     * @see \Ramsey\Uuid\Uuid::uuid1()
     *
     * @param int|string $node
     * @param int $clockSeq
     * @return \Ramsey\Uuid\UuidInterface
     */
    public function uuid1($node = null, $clockSeq = null)
    {
        return \Ramsey\Uuid\Uuid::uuid1($node, $clockSeq);
    }

    /**
    * @see \Ramsey\Uuid\Uuid::uuid3()
    *
    * @param string $ns
    * @param string $name
    * @return \Ramsey\Uuid\UuidInterface
    */
    public function uuid3($ns, $name)
    {
        return \Ramsey\Uuid\Uuid::uuid3($ns, $name);
    }

    /**
    * @see \Ramsey\Uuid\Uuid::uuid4()
    *
    * @return \Ramsey\Uuid\UuidInterface
    */
    public function uuid4()
    {
        return \Ramsey\Uuid\Uuid::uuid4();
    }

    /**
    * @see \Ramsey\Uuid\Uuid::uuid5()
    *
    * @param string $ns
    * @param string $name
    * @return \Ramsey\Uuid\UuidInterface
    */
    public function uuid5($ns, $name)
    {
        return \Ramsey\Uuid\Uuid::uuid5($ns, $name);
    }
}
