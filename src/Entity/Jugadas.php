<?php
// src/Entity/Jugadas.php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entidad para gestionar las jugadas
 * @ORM\Table(name="jugadas")
 * @ORM\Entity
 */
class Jugadas
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=false)
     */
    private $sessionJuego;

    /**
     * @ORM\Column(type="smallInt", nullable=false)
     */
    private $coordenadaX;

    /**
     * @ORM\Column(type="smallInt", nullable=false)
     */
    private $coordenadaY;

    /**
     * @ORM\Column(type="string", length=1, nullable=false)
     */
    private $symbol;
    /**
     * @ORM\Column(type="datetime", nullable=false)
     */
    private $horaJugada;
 
    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     *
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSessionJuego()
    {
        return $this->sessionJuego;
    }

    /**
     * @param mixed $sessionJuego
     *
     * @return self
     */
    public function setSessionJuego($sessionJuego)
    {
        $this->sessionJuego = $sessionJuego;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCoordenadaX()
    {
        return $this->coordenadaX;
    }

    /**
     * @param mixed $coordenadaX
     *
     * @return self
     */
    public function setCoordenadaX($coordenadaX)
    {
        $this->coordenadaX = $coordenadaX;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCoordenadaY()
    {
        return $this->coordenadaY;
    }

    /**
     * @param mixed $coordenadaY
     *
     * @return self
     */
    public function setCoordenadaY($coordenadaY)
    {
        $this->coordenadaY = $coordenadaY;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSymbol()
    {
        return $this->symbol;
    }

    /**
     * @param mixed $symbol
     *
     * @return self
     */
    public function setSymbol($symbol)
    {
        $this->symbol = $symbol;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getHoraJugada()
    {
        return $this->horaJugada;
    }

    /**
     * @param mixed $horaJugada
     *
     * @return self
     */
    public function setHoraJugada($horaJugada)
    {
        $this->horaJugada = $horaJugada;

        return $this;
    }
}