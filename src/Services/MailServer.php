<?php

namespace Balgor\MailServerAutodiscovery\Services;
use Balgor\MailServerAutodiscovery\Services\MailServerInterface;
/**
 * Description of MailServer
 *
 * @author matej.smisek
 */
abstract class MailServer implements MailServerInterface
{

    /**
     * Name of E-mail server
     * 
     * @var string
     */
    protected $type;
    protected $host;
    protected $port;
    protected $encryption;
    protected $authentication;
    protected $username;
    
    protected $validServer = null;
    protected $validLogin = null;

    public function getType(): string
    {
        return $this->type;
    }

    public function getHost(): string
    {
        return $this->host;
    }

    public function getPort(): int
    {
        return $this->port;
    }

    public function getEncryption(): string
    {
        return $this->encryption;
    }

    public function getAuthentication(): string
    {
        return $this->authentication;
    }

    public function getUsername(): string
    {
        return $this->username;
    }

    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    public function setHost($host)
    {
        $this->host = $host;
        return $this;
    }

    public function setPort($port)
    {
        $this->port = $port;
        return $this;
    }

    public function setEncryption($encryption)
    {
        $this->encryption = $encryption;
        return $this;
    }

    public function setAuthentication($authentication)
    {
        $this->authentication = $authentication;
        return $this;
    }

    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    public function getPHPImapString(): string
    {
        return '{}';
    }
    
    
    public function isValidServer(): ?bool
    {
        return $this->validServer;
    }
    
    public function setValidServer($validity): MailServerInterface
    {
        $this->validServer = $validity;
        return $this;
    }
    
    public function isValidLogin(): ?bool
    {
        return $this->validLogin;
    }
    
    public function setValidLogin($validity): MailServerInterface
    {
        $this->validLogin = $validity;
        return $this;
    }
    
}
