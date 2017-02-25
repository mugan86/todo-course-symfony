<?php

namespace AML\ServiraceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Town
 *
 * @ORM\Table(name="town")
 * @ORM\Entity(repositoryClass="AML\ServiraceBundle\Repository\TownRepository")
 */
class Town
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="herri_kodea", type="string", length=50, unique=true)
     */
    private $herriKodea;

    /**
     * @var string
     *
     * @ORM\Column(name="izena", type="string", length=50)
     */
    private $izena;

    /**
     * @var string
     *
     * @ORM\Column(name="probintzia", type="string", length=50)
     */
    private $probintzia;

    /**
     * @var string
     *
     * @ORM\Column(name="autonomi_erkidegoa", type="string", length=100)
     */
    private $autonomiErkidegoa;

    /**
     * @var string
     *
     * @ORM\Column(name="autonomi_erkidegoa_eus", type="string", length=100)
     */
    private $autonomiErkidegoaEus;

    /**
     * @var float
     *
     * @ORM\Column(name="longitudea", type="float")
     */
    private $longitudea;

    /**
     * @var float
     *
     * @ORM\Column(name="latitudea", type="float")
     */
    private $latitudea;

    /**
     * @var string
     *
     * @ORM\Column(name="autonomi_erkidegoa_ca", type="string", length=100)
     */
    private $autonomiErkidegoaCa;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set herriKodea
     *
     * @param string $herriKodea
     * @return Town
     */
    public function setHerriKodea($herriKodea)
    {
        $this->herriKodea = $herriKodea;

        return $this;
    }

    /**
     * Get herriKodea
     *
     * @return string 
     */
    public function getHerriKodea()
    {
        return $this->herriKodea;
    }

    /**
     * Set izena
     *
     * @param string $izena
     * @return Town
     */
    public function setIzena($izena)
    {
        $this->izena = $izena;

        return $this;
    }

    /**
     * Get izena
     *
     * @return string 
     */
    public function getIzena()
    {
        return $this->izena;
    }

    /**
     * Set probintzia
     *
     * @param string $probintzia
     * @return Town
     */
    public function setProbintzia($probintzia)
    {
        $this->probintzia = $probintzia;

        return $this;
    }

    /**
     * Get probintzia
     *
     * @return string 
     */
    public function getProbintzia()
    {
        return $this->probintzia;
    }

    /**
     * Set autonomiErkidegoa
     *
     * @param string $autonomiErkidegoa
     * @return Town
     */
    public function setAutonomiErkidegoa($autonomiErkidegoa)
    {
        $this->autonomiErkidegoa = $autonomiErkidegoa;

        return $this;
    }

    /**
     * Get autonomiErkidegoa
     *
     * @return string 
     */
    public function getAutonomiErkidegoa()
    {
        return $this->autonomiErkidegoa;
    }

    /**
     * Set autonomiErkidegoaEus
     *
     * @param string $autonomiErkidegoaEus
     * @return Town
     */
    public function setAutonomiErkidegoaEus($autonomiErkidegoaEus)
    {
        $this->autonomiErkidegoaEus = $autonomiErkidegoaEus;

        return $this;
    }

    /**
     * Get autonomiErkidegoaEus
     *
     * @return string 
     */
    public function getAutonomiErkidegoaEus()
    {
        return $this->autonomiErkidegoaEus;
    }

    /**
     * Set longitudea
     *
     * @param float $longitudea
     * @return Town
     */
    public function setLongitudea($longitudea)
    {
        $this->longitudea = $longitudea;

        return $this;
    }

    /**
     * Get longitudea
     *
     * @return float 
     */
    public function getLongitudea()
    {
        return $this->longitudea;
    }

    /**
     * Set latitudea
     *
     * @param float $latitudea
     * @return Town
     */
    public function setLatitudea($latitudea)
    {
        $this->latitudea = $latitudea;

        return $this;
    }

    /**
     * Get latitudea
     *
     * @return float 
     */
    public function getLatitudea()
    {
        return $this->latitudea;
    }

    /**
     * Set autonomiErkidegoaCa
     *
     * @param string $autonomiErkidegoaCa
     * @return Town
     */
    public function setAutonomiErkidegoaCa($autonomiErkidegoaCa)
    {
        $this->autonomiErkidegoaCa = $autonomiErkidegoaCa;

        return $this;
    }

    /**
     * Get autonomiErkidegoaCa
     *
     * @return string 
     */
    public function getAutonomiErkidegoaCa()
    {
        return $this->autonomiErkidegoaCa;
    }
}
