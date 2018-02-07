<?php
namespace App\Service;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
class ContactSessionManager implements IModelManager
{
    const KEY='contacts';
    /**
     * @var SessionInterface
     */
    private $session;
    /**
     * ContactSessionManager constructor.
     * @param SessionInterface $session
     */
    public function __construct(SessionInterface $session)
    {
        $this->session = $session;
    }
    public function getAll()
    {
        return $this->session->get(self::KEY,[]);
    }
    public function insert($object)
    {
        $contacts=$this->getAll();
        $contacts[]=$object;
        $this->updateSession($contacts);
    }
    public function updateSession($value)
    {
        $this->session->set(self::KEY, $value);
    }
    public function delete($index)
    {
        $contacts=$this->getAll();
        $contacts[$index] = null;
        $this->updateSession($contacts);
    }
    public function deleteAll()
    {
        $contacts=$this->getAll();
        $contacts= array();
        $this->updateSession($contacts);
    }
    public function get($index)
    {
        return $this->session->get($index);
    }
    public function filerBy($key, $value)
    {
        // TODO: Implement filerBy() method.
    }
    public function count()
    {
        $contacts=$this->getAll();
        $count = sizeof($contacts);
        return $count;
    }
    public function select($index)
    {
        // TODO: Implement select() method.
    }
}