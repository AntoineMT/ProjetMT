<?php


namespace AppBundle\Entity;

use AppBundle\Entity\Traits\NamingTrait;
use AppBundle\Entity\Traits\TimestampableTrait;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Table(name="user")
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer $idUser
     *
     * @ORM\Column(name="idUser", type="bigint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUser;

    /**
     * @var string $Userfirstname
     *
     * @ORM\Column(name="USERFIRSTNAME", type="string", length=45, nullable=true)
     */
    private $Userfirstname;
    
    /**
     * @var string $Usersecondename
     *
     * @ORM\Column(name="USERSECONDENAME", type="string", length=45, nullable=true)
     */
    private $Usersecondename;
    
        
    /**
     * @var string $Usemail
     *
     * @ORM\Column(name="USERMAIL", type="string", length=45, nullable=true)
     */
    private $Usermail;
    

    /**
     * @var string $Userlogin
     *
     * @ORM\Column(name="USERLOGIN", type="string", length=45, nullable=true)
     */
    private $Userlogin;


    /**
     * @var string $Userpassword
     *
     * @ORM\Column(name="USERPASSWORD", type="string", length=45, nullable=true)
     */
    private $Userpassword;
    
    
    public function getIdUser(){
            return $this->idUser;
    }

    public function setIdUser($idUser){
            $this->idUser = $idUser;
    }

    public function getUserfirstname(){
            return $this->Userfirstname;
    }

    public function setUserfirstname($Userfirstname){
            $this->Userfirstname = $Userfirstname;
    }

    public function getUsersecondename(){
            return $this->Usersecondename;
    }

    public function setUsersecondename($Usersecondename){
            $this->Usersecondename = $Usersecondename;
    }

    public function getUsermail(){
            return $this->Usermail;
    }

    public function setUsermail($Usermail){
            $this->Usermail = $Usermail;
    }

    public function getUserlogin(){
            return $this->Userlogin;
    }

    public function setUserlogin($Userlogin){
            $this->Userlogin = $Userlogin;
    }

    public function getUserpassword(){
            return $this->Userpassword;
    }

    public function setUserpassword($Userpassword){
            $this->Userpassword = $Userpassword;
    }


}
